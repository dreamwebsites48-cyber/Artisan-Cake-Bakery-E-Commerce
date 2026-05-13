<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 hero-text animate__animated animate__fadeInLeft">
                <span class="badge bg-white text-dark mb-3 px-3 py-2 rounded-pill shadow-sm">Premium Bakery 🍰</span>
                <h1>Crafting <br><span>Sweet Memories</span> <br>Every Day</h1>
                <p class="lead mt-3 mb-5">Experience luxury in every bite. Handcrafted premium cakes for your special moments.</p>
                <div class="d-flex gap-3">
                    <a href="products.php" class="btn btn-gold btn-lg px-4 shadow">Order Now <i class="fas fa-arrow-right ms-2"></i></a>
                    <a href="#categories" class="btn btn-outline-brown btn-lg px-4">Explore</a>
                </div>
            </div>
            <div class="col-lg-6 mt-5 mt-lg-0 animate__animated animate__fadeInRight text-center">
                <img src="https://images.unsplash.com/photo-1578985545062-69928b1d9587?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Luxury Cake" class="img-fluid rounded-circle shadow-lg hero-image" style="width: 500px; height: 500px; object-fit: cover; border: 15px solid rgba(255,255,255,0.5);">
            </div>
        </div>
    </div>
</section>

<!-- Categories Section -->
<section id="categories" class="py-5 my-5">
    <div class="container">
        <div class="text-center mb-5 animate-on-scroll">
            <h2 class="fw-bold">Shop by Category</h2>
            <p class="text-muted">Find the perfect cake for your occasion</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4 animate-on-scroll" data-animation="animate__fadeInUp">
                <div class="category-card shadow-sm">
                    <img src="https://images.unsplash.com/photo-1558961363-fa8fdf82db35?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Birthday Cakes">
                    <div class="category-overlay">
                        <h3>Birthday Cakes</h3>
                        <p class="mb-0">Make wishes come true</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 animate-on-scroll" data-animation="animate__fadeInUp" style="animation-delay: 0.2s;">
                <div class="category-card shadow-sm">
                    <img src="https://images.unsplash.com/photo-1535254973040-607b474cb50d?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Wedding Cakes">
                    <div class="category-overlay">
                        <h3>Wedding Cakes</h3>
                        <p class="mb-0">Elegant & Multi-tier</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 animate-on-scroll" data-animation="animate__fadeInUp" style="animation-delay: 0.4s;">
                <div class="category-card shadow-sm">
                    <img src="https://images.unsplash.com/photo-1606890737304-57a1ca8a5b62?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Chocolate Cakes">
                    <div class="category-overlay">
                        <h3>Chocolate Cakes</h3>
                        <p class="mb-0">Rich & Decadent</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Products Section -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="d-flex justify-content-between align-items-end mb-5 animate-on-scroll">
            <div>
                <h2 class="fw-bold">Trending Cakes</h2>
                <p class="text-muted mb-0">Our most loved creations</p>
            </div>
            <a href="products.php" class="btn btn-outline-brown rounded-pill px-4">View All</a>
        </div>
        
        <div class="row g-4">
            <!-- Product 1 -->
            <div class="col-lg-3 col-md-6 animate-on-scroll">
                <div class="product-card">
                    <span class="badge-discount">-15%</span>
                    <a href="#" class="wishlist-btn"><i class="far fa-heart"></i></a>
                    <div class="product-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1621303837174-89787a7d4729?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Golden Truffle" class="product-img">
                    </div>
                    <div class="product-info">
                        <div class="rating">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                            <span class="text-muted ms-1">(124)</span>
                        </div>
                        <h3 class="product-title">Golden Truffle Delight</h3>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div class="product-price">$39.99 <del>$45.00</del></div>
                            <button class="btn btn-gold rounded-circle p-2" style="width: 40px; height: 40px; padding: 0;"><i class="fas fa-plus"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product 2 -->
            <div class="col-lg-3 col-md-6 animate-on-scroll" style="animation-delay: 0.1s;">
                <div class="product-card">
                    <a href="#" class="wishlist-btn"><i class="far fa-heart"></i></a>
                    <div class="product-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1563729784474-d77dbb933a9e?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Vanilla Rose" class="product-img">
                    </div>
                    <div class="product-info">
                        <div class="rating">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            <span class="text-muted ms-1">(89)</span>
                        </div>
                        <h3 class="product-title">Vanilla Rose Elegance</h3>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div class="product-price">$45.00</div>
                            <button class="btn btn-gold rounded-circle p-2" style="width: 40px; height: 40px; padding: 0;"><i class="fas fa-plus"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product 3 -->
            <div class="col-lg-3 col-md-6 animate-on-scroll" style="animation-delay: 0.2s;">
                <div class="product-card">
                    <span class="badge-discount bg-danger">Hot</span>
                    <a href="#" class="wishlist-btn"><i class="far fa-heart"></i></a>
                    <div class="product-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1614707267537-b85aaf00c4b7?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Dark Chocolate" class="product-img">
                    </div>
                    <div class="product-info">
                        <div class="rating">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                            <span class="text-muted ms-1">(45)</span>
                        </div>
                        <h3 class="product-title">Dark Chocolate Mud</h3>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div class="product-price">$35.00</div>
                            <button class="btn btn-gold rounded-circle p-2" style="width: 40px; height: 40px; padding: 0;"><i class="fas fa-plus"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product 4 -->
            <div class="col-lg-3 col-md-6 animate-on-scroll" style="animation-delay: 0.3s;">
                <div class="product-card">
                    <a href="#" class="wishlist-btn"><i class="far fa-heart"></i></a>
                    <div class="product-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1464349095431-e9a21285b5f3?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Strawberry Blossom" class="product-img">
                    </div>
                    <div class="product-info">
                        <div class="rating">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                            <span class="text-muted ms-1">(210)</span>
                        </div>
                        <h3 class="product-title">Strawberry Blossom</h3>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div class="product-price">$40.00</div>
                            <button class="btn btn-gold rounded-circle p-2" style="width: 40px; height: 40px; padding: 0;"><i class="fas fa-plus"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Special Offer Banner -->
<section class="py-5 my-5">
    <div class="container">
        <div class="row align-items-center bg-brown text-white rounded-5 p-5 shadow-lg position-relative overflow-hidden animate-on-scroll" style="background-color: var(--color-brown);">
            <!-- decorative circles -->
            <div class="position-absolute top-0 end-0 rounded-circle" style="width: 300px; height: 300px; background: rgba(255,255,255,0.05); transform: translate(30%, -30%);"></div>
            <div class="position-absolute bottom-0 start-0 rounded-circle" style="width: 200px; height: 200px; background: rgba(255,215,0,0.1); transform: translate(-30%, 30%);"></div>
            
            <div class="col-lg-6 position-relative z-1">
                <span class="text-warning fw-bold text-uppercase tracking-wider">Special Offer</span>
                <h2 class="display-4 fw-bold mt-2 mb-4">Get 20% Off Your First Custom Order</h2>
                <p class="lead text-white-50 mb-4">Use coupon code <strong class="text-warning">WELCOME20</strong> at checkout. Valid for all premium and custom designer cakes.</p>
                <div class="d-flex gap-3 align-items-center">
                    <a href="products.php" class="btn btn-gold btn-lg px-4">Claim Offer</a>
                    <span class="text-white-50"><i class="far fa-clock me-2"></i>Ends in 2 days</span>
                </div>
            </div>
            <div class="col-lg-6 text-center mt-5 mt-lg-0 position-relative z-1">
                <img src="https://images.unsplash.com/photo-1535141192574-5d4897c12636?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Special Offer" class="img-fluid rounded-4 shadow-lg" style="transform: rotate(5deg); border: 10px solid white;">
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
