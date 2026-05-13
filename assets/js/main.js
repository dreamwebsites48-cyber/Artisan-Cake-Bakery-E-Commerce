/**
 * Artisan Cake Bakery - Dynamic Frontend Script
 * Simulates Full E-Commerce Functionality via localStorage
 */

// 1. Product Database (Static Source of Truth)
const APP_PRODUCTS = [
  {
    id: 1,
    name: "Golden Truffle Delight",
    price: 39.99,
    oldPrice: 45.00,
    img: "https://images.unsplash.com/photo-1621303837174-89787a7d4729?ixlib=rb-4.0.3&w=500&q=80",
    category: "Chocolate Cakes",
    badge: "-15%",
    rating: 4.8,
    reviews: 124,
    sku: "CAKE-TRUF-001",
    tags: ["Premium", "Truffle", "Gold"],
    desc: "A masterpiece of chocolate craftsmanship. This rich chocolate truffle cake is layered with premium dark ganache and finished with edible golden flakes. Perfect for any celebration where you want to impress.",
    dietary: ["Regular", "Eggless"]
  },
  {
    id: 2,
    name: "Vanilla Rose Elegance",
    price: 45.00,
    oldPrice: null,
    img: "https://images.unsplash.com/photo-1563729784474-d77dbb933a9e?ixlib=rb-4.0.3&w=500&q=80",
    category: "Wedding Cakes",
    badge: null,
    rating: 5.0,
    reviews: 89,
    sku: "CAKE-ROSE-002",
    tags: ["Elegant", "Rose", "Vanilla"],
    desc: "Sleek and sophisticated. Fine Madagascar vanilla cream meets delicate rose essence in layered sponge perfection. The ideal centerpiece for high-class tea time or intimate weddings.",
    dietary: ["Regular"]
  },
  {
    id: 3,
    name: "Dark Chocolate Mud",
    price: 35.00,
    oldPrice: null,
    img: "https://images.unsplash.com/photo-1614707267537-b85aaf00c4b7?ixlib=rb-4.0.3&w=500&q=80",
    category: "Chocolate Cakes",
    badge: "Hot",
    rating: 4.2,
    reviews: 45,
    sku: "CAKE-MUD-003",
    tags: ["Rich", "Decadent", "Mud"],
    desc: "Deep, dark, and devastatingly delicious. A heavy mud base topped with glossy cocoa sauce that packs an intense flavor profile for the ultimate chocoholic.",
    dietary: ["Regular", "Eggless", "Vegan"]
  },
  {
    id: 4,
    name: "Strawberry Blossom",
    price: 40.00,
    oldPrice: null,
    img: "https://images.unsplash.com/photo-1464349095431-e9a21285b5f3?ixlib=rb-4.0.3&w=500&q=80",
    category: "Birthday Cakes",
    badge: null,
    rating: 4.6,
    reviews: 210,
    sku: "CAKE-STRAW-004",
    tags: ["Fruit", "Berries", "Strawberry"],
    desc: "Bursting with freshness! Fluffy sponge cake packed with a pureed sweet strawberry center and enrobed in natural berry pink cream. Finished with hand-picked sliced fresh berries.",
    dietary: ["Regular"]
  },
  {
    id: 5,
    name: "Red Velvet Supreme",
    price: 38.00,
    oldPrice: 42.00,
    img: "https://images.unsplash.com/photo-1586985289688-ca3cf47d3e6e?ixlib=rb-4.0.3&w=500&q=80",
    category: "Birthday Cakes",
    badge: "-10%",
    rating: 4.7,
    reviews: 135,
    sku: "CAKE-VEL-005",
    tags: ["Velvet", "Classic"],
    desc: "The timeless classic refined. A deep, rich crimson red velvet sponge accented with a whisper of cocoa, flawlessly balanced by light, whipped vanilla cream-cheese frosting.",
    dietary: ["Regular", "Eggless"]
  },
  {
    id: 6,
    name: "Mango Tango Fusion",
    price: 32.00,
    oldPrice: null,
    img: "https://images.unsplash.com/photo-1551404973-7bb6afce3698?ixlib=rb-4.0.3&w=500&q=80",
    category: "Birthday Cakes",
    badge: "New",
    rating: 4.9,
    reviews: 62,
    sku: "CAKE-MAN-006",
    tags: ["Summer", "Mango", "Tropical"],
    desc: "A tropical burst of flavor! Made from ripe Alphonsos, this light yogurt mousse cake captures the essence of golden summer. Exceptionally light, perfect for daytime celebrations.",
    dietary: ["Regular", "Eggless"]
  }
];

// 2. Cart State Manager
const Cart = {
  getItems() {
    const cart = localStorage.getItem('artisan_cart');
    return cart ? JSON.parse(cart) : [];
  },
  
  saveItems(items) {
    localStorage.setItem('artisan_cart', JSON.stringify(items));
    this.updateNavbarBadge();
  },
  
  addItem(productId, qty = 1, options = {}) {
    const items = this.getItems();
    const product = APP_PRODUCTS.find(p => p.id === productId);
    
    if (!product) return;
    
    // Unique key per combination of product + selections (e.g. weight, base, eggless)
    const optionKey = JSON.stringify(options);
    const existingItem = items.find(item => item.id === productId && JSON.stringify(item.options) === optionKey);
    
    if (existingItem) {
      existingItem.qty += qty;
    } else {
      items.push({
        id: productId,
        qty: qty,
        options: options,
        product: {
          name: product.name,
          price: product.price,
          img: product.img
        }
      });
    }
    
    this.saveItems(items);
    this.showToast(`<strong>${product.name}</strong> has been added to your cart.`);
  },
  
  removeItem(index) {
    const items = this.getItems();
    items.splice(index, 1);
    this.saveItems(items);
    
    // Refresh cart view if on cart page
    if (window.location.pathname.includes('cart.html')) {
      renderCartPage();
    }
  },
  
  updateQuantity(index, qty) {
    const items = this.getItems();
    if (qty < 1) return;
    items[index].qty = qty;
    this.saveItems(items);
    
    if (window.location.pathname.includes('cart.html')) {
      renderCartPage();
    }
  },
  
  getCartCount() {
    return this.getItems().reduce((sum, item) => sum + item.qty, 0);
  },
  
  getSubtotal() {
    return this.getItems().reduce((sum, item) => {
      // Handle optional extra pricing
      let extra = 0;
      if (item.options && item.options.weight) {
        if (item.options.weight.includes('1.0 Kg')) extra += 15;
        if (item.options.weight.includes('2.0 Kg')) extra += 40;
      }
      if (item.options && item.options.eggless) {
        extra += 2;
      }
      return sum + ((item.product.price + extra) * item.qty);
    }, 0);
  },
  
  updateNavbarBadge() {
    const countBadge = document.querySelector('.nav-cart-badge');
    if (countBadge) {
      countBadge.innerText = this.getCartCount();
    }
  },
  
  showToast(message) {
    const container = document.getElementById('toast-container') || createToastContainer();
    
    const toastId = 'toast_' + Date.now();
    const toastHTML = `
      <div id="${toastId}" class="toast toast-custom align-items-center border-0 mb-2" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex p-3">
          <div class="toast-body d-flex align-items-center gap-2">
            <span class="fs-4">🎂</span>
            <span>${message}</span>
          </div>
          <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
      </div>
    `;
    
    container.insertAdjacentHTML('beforeend', toastHTML);
    const toastEl = document.getElementById(toastId);
    const bsToast = new bootstrap.Toast(toastEl, { delay: 3000 });
    bsToast.show();
    
    toastEl.addEventListener('hidden.bs.toast', () => {
      toastEl.remove();
    });
  }
};

function createToastContainer() {
  const container = document.createElement('div');
  container.id = 'toast-container';
  container.className = 'toast-container position-fixed bottom-0 end-0 p-3';
  document.body.appendChild(container);
  return container;
}

// 3. Global Execution
document.addEventListener('DOMContentLoaded', function() {
  
  // Initialize Navbar Logic
  Cart.updateNavbarBadge();
  checkAuthStatus();
  
  // Hide Loader
  const loader = document.getElementById('loader');
  if(loader) {
    setTimeout(() => {
      loader.style.opacity = '0';
      setTimeout(() => {
        loader.style.display = 'none';
      }, 600);
    }, 800);
  }

  // Dark Mode Toggle
  const darkModeBtn = document.getElementById('darkModeToggle');
  if (darkModeBtn) {
    darkModeBtn.addEventListener('click', () => {
      document.body.classList.toggle('dark-mode');
      const isDark = document.body.classList.contains('dark-mode');
      localStorage.setItem('darkMode', isDark);
      darkModeBtn.innerHTML = isDark ? '<i class="fas fa-sun"></i>' : '<i class="fas fa-moon"></i>';
    });

    if (localStorage.getItem('darkMode') === 'true') {
      document.body.classList.add('dark-mode');
      darkModeBtn.innerHTML = '<i class="fas fa-sun"></i>';
    }
  }

  // Sticky Navbar shadow
  const navbar = document.querySelector('.navbar-glass');
  if (navbar) {
    window.addEventListener('scroll', () => {
      if (window.scrollY > 30) {
        navbar.style.boxShadow = '0 10px 30px rgba(0, 0, 0, 0.08)';
        navbar.style.padding = '0.5rem 0';
      } else {
        navbar.style.boxShadow = '0 4px 30px rgba(0, 0, 0, 0.03)';
        navbar.style.padding = '1rem 0';
      }
    });
  }

  // Scroll Animation Setup
  const animatedElements = document.querySelectorAll('.animate-on-scroll');
  if (animatedElements.length > 0) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('animate__animated', entry.target.dataset.animation || 'animate__fadeInUp');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.15 });
    
    animatedElements.forEach(el => observer.observe(el));
  }

  // Route Router to execute page specific functions
  const currentPath = window.location.pathname.toLowerCase();
  
  if (currentPath.endsWith('products.html')) {
    initCatalogPage();
  } else if (currentPath.endsWith('product-details.html')) {
    initProductDetailsPage();
  } else if (currentPath.endsWith('cart.html')) {
    renderCartPage();
  } else if (currentPath.endsWith('checkout.html')) {
    initCheckoutPage();
  } else if (currentPath.endsWith('login.html')) {
    initLoginForm();
  } else if (currentPath.endsWith('register.html')) {
    initRegisterForm();
  }
  
  // Wishlist handlers for demo
  document.body.addEventListener('click', function(e) {
    if (e.target.closest('.wishlist-btn')) {
      e.preventDefault();
      const btn = e.target.closest('.wishlist-btn');
      btn.classList.toggle('active');
      const icon = btn.querySelector('i');
      if(btn.classList.contains('active')) {
        icon.classList.replace('far', 'fas');
        icon.style.color = '#e74c3c';
        Cart.showToast("Added to your wishlist ❤️");
      } else {
        icon.classList.replace('fas', 'far');
        icon.style.color = '';
        Cart.showToast("Removed from wishlist.");
      }
    }
    
    // Fast direct cart add from product card
    if (e.target.closest('.direct-add-cart')) {
      const btn = e.target.closest('.direct-add-cart');
      const pid = parseInt(btn.dataset.pid);
      Cart.addItem(pid, 1, { weight: '0.5 Kg', flavor: 'Default' });
    }
  });
});

// 4. Authentication Simulation
function checkAuthStatus() {
  const userArea = document.getElementById('auth-container');
  if (!userArea) return;
  
  const user = localStorage.getItem('artisan_user');
  if (user) {
    const userData = JSON.parse(user);
    userArea.innerHTML = `
      <div class="dropdown">
        <button class="btn btn-outline-brown dropdown-toggle rounded-circle p-2 d-flex align-items-center justify-content-center" type="button" data-bs-toggle="dropdown" style="width: 40px; height: 40px;">
          <i class="fas fa-user"></i>
        </button>
        <ul class="dropdown-menu dropdown-menu-end shadow border-0 p-2 mt-2 rounded-3">
          <li class="dropdown-header border-bottom pb-2 mb-2">Hello, ${userData.name}!</li>
          <li><a class="dropdown-item rounded-2 mb-1 py-2" href="#"><i class="fas fa-columns me-2 small text-muted"></i> Dashboard</a></li>
          <li><a class="dropdown-item rounded-2 py-2 text-danger" href="#" id="logoutBtn"><i class="fas fa-sign-out-alt me-2 small"></i> Logout</a></li>
        </ul>
      </div>
    `;
    
    document.getElementById('logoutBtn').addEventListener('click', (e) => {
      e.preventDefault();
      localStorage.removeItem('artisan_user');
      window.location.reload();
    });
  } else {
    userArea.innerHTML = `<a href="login.html" class="btn btn-outline-brown rounded-pill px-4 shadow-sm">Login</a>`;
  }
}

function initLoginForm() {
  const form = document.querySelector('form');
  if (!form) return;
  
  form.addEventListener('submit', function(e) {
    e.preventDefault();
    const email = form.querySelector('input[type="email"]').value;
    // Save a fake session
    localStorage.setItem('artisan_user', JSON.stringify({
      email: email,
      name: email.split('@')[0].charAt(0).toUpperCase() + email.split('@')[0].slice(1)
    }));
    window.location.href = 'index.html';
  });
}

function initRegisterForm() {
  const form = document.querySelector('form');
  if (!form) return;
  
  form.addEventListener('submit', function(e) {
    e.preventDefault();
    const name = form.querySelector('input[placeholder="John Doe"]').value;
    const email = form.querySelector('input[type="email"]').value;
    // Save user and login directly
    localStorage.setItem('artisan_user', JSON.stringify({
      email: email,
      name: name
    }));
    window.location.href = 'index.html';
  });
}

// 5. Catalog Dynamic Script (products.html)
function initCatalogPage() {
  const grid = document.getElementById('products-grid');
  const searchInp = document.getElementById('search-box');
  const catCheckboxes = document.querySelectorAll('.cat-filter');
  const dietaryCheckboxes = document.querySelectorAll('.diet-filter');
  const priceRange = document.getElementById('price-range');
  const priceVal = document.getElementById('price-range-val');
  const sortBy = document.getElementById('sort-by');
  
  function render(filteredList) {
    if (!grid) return;
    
    if (filteredList.length === 0) {
      grid.innerHTML = `
        <div class="col-12 text-center py-5">
          <i class="fas fa-search text-muted display-3 mb-3"></i>
          <h3>No Cakes Found</h3>
          <p class="text-muted">Try widening your filter options or search criteria.</p>
        </div>
      `;
      return;
    }
    
    grid.innerHTML = filteredList.map(p => `
      <div class="col-md-4 col-sm-6 mb-4 animate__animated animate__fadeIn">
        <div class="product-card">
          ${p.badge ? `<span class="badge-discount ${p.badge.toLowerCase().includes('hot') ? 'bg-danger' : ''}">${p.badge}</span>` : ''}
          <a href="#" class="wishlist-btn"><i class="far fa-heart"></i></a>
          <div class="product-img-wrapper" onclick="window.location='product-details.html?id=${p.id}'" style="cursor:pointer;">
            <img src="${p.img}" alt="${p.name}" class="product-img">
          </div>
          <div class="product-info">
            <div class="rating">
              ${'<i class="fas fa-star"></i>'.repeat(Math.floor(p.rating))}
              ${p.rating % 1 !== 0 ? '<i class="fas fa-star-half-alt"></i>' : ''}
              <span class="text-muted ms-1 small">(${p.reviews})</span>
            </div>
            <h3 class="product-title">
              <a href="product-details.html?id=${p.id}" class="text-decoration-none text-dark">${p.name}</a>
            </h3>
            <div class="d-flex justify-content-between align-items-center mt-3">
              <div class="product-price">
                $${p.price.toFixed(2)}
                ${p.oldPrice ? `<del>$${p.oldPrice.toFixed(2)}</del>` : ''}
              </div>
              <button class="btn btn-gold rounded-circle p-0 direct-add-cart" data-pid="${p.id}" style="width: 40px; height: 40px; display:flex; align-items:center; justify-content:center;">
                <i class="fas fa-cart-plus"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    `).join('');
    
    const showingText = document.getElementById('showing-results-text');
    if (showingText) {
      showingText.innerText = `Showing ${filteredList.length} of ${APP_PRODUCTS.length} results`;
    }
  }
  
  function applyFilters() {
    let list = [...APP_PRODUCTS];
    
    // 1. Search query
    const q = searchInp ? searchInp.value.trim().toLowerCase() : "";
    if (q) {
      list = list.filter(p => p.name.toLowerCase().includes(q) || p.tags.some(t => t.toLowerCase().includes(q)));
    }
    
    // 2. Categories
    const activeCats = Array.from(catCheckboxes).filter(c => c.checked).map(c => c.value);
    if (activeCats.length > 0 && !activeCats.includes('All')) {
      list = list.filter(p => activeCats.includes(p.category));
    }
    
    // 3. Dietary
    const activeDiets = Array.from(dietaryCheckboxes).filter(c => c.checked).map(c => c.value);
    if (activeDiets.length > 0) {
      list = list.filter(p => activeDiets.every(d => p.dietary.includes(d)));
    }
    
    // 4. Price Range
    if (priceRange) {
      const maxP = parseFloat(priceRange.value);
      list = list.filter(p => p.price <= maxP);
    }
    
    // 5. Sort
    if (sortBy) {
      const val = sortBy.value;
      if (val === 'Price: Low to High') {
        list.sort((a,b) => a.price - b.price);
      } else if (val === 'Price: High to Low') {
        list.sort((a,b) => b.price - a.price);
      } else if (val === 'Popularity') {
        list.sort((a,b) => b.reviews - a.reviews);
      }
    }
    
    render(list);
  }
  
  // Listeners
  if (searchInp) searchInp.addEventListener('input', applyFilters);
  catCheckboxes.forEach(c => c.addEventListener('change', applyFilters));
  dietaryCheckboxes.forEach(c => c.addEventListener('change', applyFilters));
  if (sortBy) sortBy.addEventListener('change', applyFilters);
  
  if (priceRange && priceVal) {
    priceRange.addEventListener('input', (e) => {
      priceVal.innerText = '$' + e.target.value;
      applyFilters();
    });
  }
  
  // Initial render
  render(APP_PRODUCTS);
}

// 6. Product Details Logic (product-details.html)
function initProductDetailsPage() {
  const params = new URLSearchParams(window.location.search);
  const productId = parseInt(params.get('id')) || 1;
  const product = APP_PRODUCTS.find(p => p.id === productId);
  
  if (!product) return;
  
  // Render Data to Page Nodes
  document.title = `${product.name} | Artisan Cake Bakery`;
  const bName = document.getElementById('det-breadcrumb-name');
  if (bName) bName.innerText = product.name;
  
  const bCat = document.getElementById('det-breadcrumb-cat');
  if (bCat) bCat.innerText = product.category;
  
  const mainImg = document.getElementById('mainImage');
  if (mainImg) mainImg.src = product.img;
  
  const pName = document.getElementById('det-title');
  if (pName) pName.innerText = product.name;
  
  const pDesc = document.getElementById('det-desc');
  if (pDesc) pDesc.innerText = product.desc;
  
  const pPrice = document.getElementById('det-price');
  if (pPrice) {
    pPrice.innerHTML = `$${product.price.toFixed(2)} ${product.oldPrice ? `<del class="text-muted fs-5 ms-2">$${product.oldPrice.toFixed(2)}</del>` : ''}`;
  }
  
  const pRating = document.getElementById('det-rating');
  if (pRating) {
    pRating.innerHTML = `
      ${'<i class="fas fa-star text-warning"></i>'.repeat(Math.floor(product.rating))}
      ${product.rating % 1 !== 0 ? '<i class="fas fa-star-half-alt text-warning"></i>' : ''}
    `;
  }
  
  const pReviews = document.getElementById('det-reviews-count');
  if (pReviews) pReviews.innerText = `(${product.reviews} Customer Reviews)`;
  
  const pSku = document.getElementById('det-sku');
  if (pSku) pSku.innerText = product.sku;
  
  const pCatLabel = document.getElementById('det-cat-label');
  if (pCatLabel) pCatLabel.innerText = product.category;
  
  const pTags = document.getElementById('det-tags');
  if (pTags) pTags.innerText = product.tags.join(', ');
  
  // Custom Options logic in Product Details page
  const qtyInp = document.getElementById('det-qty-input');
  const plusBtn = document.getElementById('det-qty-plus');
  const minusBtn = document.getElementById('det-qty-minus');
  
  if (plusBtn && minusBtn && qtyInp) {
    plusBtn.addEventListener('click', () => {
      qtyInp.value = parseInt(qtyInp.value) + 1;
    });
    minusBtn.addEventListener('click', () => {
      if (parseInt(qtyInp.value) > 1) {
        qtyInp.value = parseInt(qtyInp.value) - 1;
      }
    });
  }
  
  // Add To Cart Handler
  const addToCartBtn = document.getElementById('det-add-btn');
  if (addToCartBtn) {
    addToCartBtn.addEventListener('click', () => {
      const qty = parseInt(qtyInp.value) || 1;
      const weight = document.getElementById('det-weight-sel')?.value || '0.5 Kg';
      const flavor = document.getElementById('det-flavor-sel')?.value || 'Default';
      const isEggless = document.getElementById('egglessSwitch')?.checked || false;
      
      Cart.addItem(product.id, qty, {
        weight: weight,
        flavor: flavor,
        eggless: isEggless
      });
    });
  }
  
  // Render alternate/gallery thumbnails using product images dynamically
  const thumbsContainer = document.getElementById('thumbs-row');
  if (thumbsContainer) {
    // Simple mock related pics or stock ones
    const relatedImages = [
      product.img,
      "https://images.unsplash.com/photo-1578985545062-69928b1d9587?ixlib=rb-4.0.3&w=200&q=80",
      "https://images.unsplash.com/photo-1558961363-fa8fdf82db35?ixlib=rb-4.0.3&w=200&q=80"
    ];
    
    thumbsContainer.innerHTML = relatedImages.map((url, index) => `
      <div class="col-3">
        <img src="${url}" alt="Thumb" class="img-fluid rounded-3 cursor-pointer border ${index===0 ? 'border-2 border-warning' : 'opacity-75 hover-opacity-100'}" onclick="document.getElementById('mainImage').src=this.src; document.querySelectorAll('#thumbs-row img').forEach(img=>img.className='img-fluid rounded-3 cursor-pointer opacity-75 hover-opacity-100'); this.className='img-fluid rounded-3 cursor-pointer border border-2 border-warning';">
      </div>
    `).join('');
  }
}

// 7. Cart Page Logic (cart.html)
function renderCartPage() {
  const items = Cart.getItems();
  const tbody = document.getElementById('cart-table-body');
  const cartWrapper = document.getElementById('cart-wrapper');
  const subtotalEl = document.getElementById('cart-subtotal');
  const totalEl = document.getElementById('cart-total');
  const taxEl = document.getElementById('cart-tax');
  const shipEl = document.getElementById('cart-ship');
  
  if (!tbody || !cartWrapper) return;
  
  if (items.length === 0) {
    cartWrapper.innerHTML = `
      <div class="col-12 text-center py-5">
        <div class="display-1 mb-3">🛒</div>
        <h2 class="fw-bold mb-3">Your Cart is Empty</h2>
        <p class="text-muted mb-4">Explore our collections and add some deliciousness to your cart!</p>
        <a href="products.html" class="btn btn-gold px-5 py-3 fw-bold shadow-sm rounded-pill">Shop Now</a>
      </div>
    `;
    return;
  }
  
  let totalCost = 0;
  
  tbody.innerHTML = items.map((item, index) => {
    let basePrice = item.product.price;
    let extraDetails = [];
    
    if (item.options.weight) {
      extraDetails.push(item.options.weight);
      if (item.options.weight.includes('1.0 Kg')) basePrice += 15;
      if (item.options.weight.includes('2.0 Kg')) basePrice += 40;
    }
    if (item.options.flavor) {
      extraDetails.push(item.options.flavor);
    }
    if (item.options.eggless) {
      extraDetails.push("<i class='fas fa-check-circle text-success me-1'></i> Eggless");
      basePrice += 2;
    }
    
    const rowTotal = basePrice * item.qty;
    totalCost += rowTotal;
    
    return `
      <tr class="border-bottom">
        <td class="ps-4 py-4">
          <div class="d-flex align-items-center gap-3">
            <img src="${item.product.img}" alt="${item.product.name}" class="rounded-3" style="width: 80px; height: 80px; object-fit: cover;">
            <div>
              <h6 class="fw-bold mb-1">${item.product.name}</h6>
              <span class="text-muted small d-flex align-items-center gap-2 flex-wrap">${extraDetails.join(' | ')}</span>
            </div>
          </div>
        </td>
        <td class="fw-bold text-muted">$${basePrice.toFixed(2)}</td>
        <td>
          <div class="input-group input-group-sm" style="width: 100px;">
            <button class="btn btn-outline-secondary" type="button" onclick="Cart.updateQuantity(${index}, ${item.qty - 1})">-</button>
            <input type="text" class="form-control text-center border" value="${item.qty}" readonly>
            <button class="btn btn-outline-secondary" type="button" onclick="Cart.updateQuantity(${index}, ${item.qty + 1})">+</button>
          </div>
        </td>
        <td class="fw-bold text-dark">$${rowTotal.toFixed(2)}</td>
        <td class="pe-4 text-end">
          <button class="btn btn-light text-danger rounded-circle p-2 border" onclick="Cart.removeItem(${index})">
            <i class="fas fa-trash-alt"></i>
          </button>
        </td>
      </tr>
    `;
  }).join('');
  
  // Update Summary
  const tax = totalCost * 0.05;
  const shipping = 5.00;
  const grandTotal = totalCost + tax + shipping;
  
  if(subtotalEl) subtotalEl.innerText = `$${totalCost.toFixed(2)}`;
  if(taxEl) taxEl.innerText = `$${tax.toFixed(2)}`;
  if(shipEl) shipEl.innerText = `$${shipping.toFixed(2)}`;
  if(totalEl) totalEl.innerText = `$${grandTotal.toFixed(2)}`;
}

// 8. Checkout Page Logic (checkout.html)
function initCheckoutPage() {
  const items = Cart.getItems();
  const summaryContainer = document.getElementById('checkout-items-summary');
  const checkoutSubtotal = document.getElementById('checkout-subtotal');
  const checkoutTax = document.getElementById('checkout-tax');
  const checkoutShip = document.getElementById('checkout-ship');
  const checkoutTotal = document.getElementById('checkout-total');
  const checkoutForm = document.getElementById('checkout-form');
  
  if (items.length === 0) {
    window.location.href = 'products.html';
    return;
  }
  
  let totalCost = 0;
  
  if (summaryContainer) {
    summaryContainer.innerHTML = items.map(item => {
      let price = item.product.price;
      let opts = [];
      if (item.options.weight) {
        opts.push(item.options.weight);
        if (item.options.weight.includes('1.0 Kg')) price += 15;
        if (item.options.weight.includes('2.0 Kg')) price += 40;
      }
      if (item.options.eggless) {
        opts.push('Eggless');
        price += 2;
      }
      
      const lineTotal = price * item.qty;
      totalCost += lineTotal;
      
      return `
        <div class="d-flex align-items-center gap-3 mb-3 pb-3 border-bottom">
          <div class="position-relative">
            <img src="${item.product.img}" alt="Cake" class="rounded-3" style="width: 60px; height: 60px; object-fit: cover;">
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-dark">${item.qty}</span>
          </div>
          <div class="flex-grow-1">
            <h6 class="mb-0 fw-bold">${item.product.name}</h6>
            <small class="text-muted">${opts.join(', ')}</small>
          </div>
          <div class="fw-bold text-muted">$${lineTotal.toFixed(2)}</div>
        </div>
      `;
    }).join('');
  }
  
  const tax = totalCost * 0.05;
  const shipping = 5.00;
  const grandTotal = totalCost + tax + shipping;
  
  if (checkoutSubtotal) checkoutSubtotal.innerText = `$${totalCost.toFixed(2)}`;
  if (checkoutTax) checkoutTax.innerText = `$${tax.toFixed(2)}`;
  if (checkoutShip) checkoutShip.innerText = `$${shipping.toFixed(2)}`;
  if (checkoutTotal) checkoutTotal.innerText = `$${grandTotal.toFixed(2)}`;
  
  // Submit simulation
  if (checkoutForm) {
    checkoutForm.addEventListener('submit', (e) => {
      e.preventDefault();
      
      // Open success state
      const modalHTML = `
        <div class="modal fade" id="orderSuccessModal" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-4 border-0 shadow-heavy p-4">
              <div class="modal-body text-center">
                <div class="mb-4 animate__animated animate__bounceIn">
                  <i class="fas fa-check-circle text-success" style="font-size: 5rem;"></i>
                </div>
                <h2 class="fw-bold brand-text">Order Placed Successfully!</h2>
                <p class="text-muted mb-4">Thank you for ordering from Artisan Cake Bakery. Your order has been placed and will arrive fresh in a few hours.</p>
                <button class="btn btn-gold px-5 py-2 rounded-pill fw-bold shadow-sm" onclick="Cart.saveItems([]); window.location.href='index.html'">Continue Shopping</button>
              </div>
            </div>
          </div>
        </div>
      `;
      
      document.body.insertAdjacentHTML('beforeend', modalHTML);
      const modalEl = document.getElementById('orderSuccessModal');
      const bsModal = new bootstrap.Modal(modalEl);
      bsModal.show();
    });
  }
}
