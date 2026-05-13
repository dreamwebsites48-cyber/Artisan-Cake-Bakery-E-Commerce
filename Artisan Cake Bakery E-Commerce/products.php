<?php include 'includes/header.php'; ?>

<!-- Page Header -->
<div class="py-5 bg-light text-center" style="background: linear-gradient(rgba(74, 46, 27, 0.7), rgba(74, 46, 27, 0.7)), url('https://images.unsplash.com/photo-1558961363-fa8fdf82db35?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover;">
    <div class="container py-5 mt-5">
        <h1 class="display-4 text-white fw-bold animate__animated animate__fadeInDown">Our Premium Cakes</h1>
        <nav aria-label="breadcrumb" class="d-flex justify-content-center mt-3 animate__animated animate__fadeInUp">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="index.php" class="text-white-50 text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active text-white" aria-current="page">Shop</li>
            </ol>
        </nav>
    </div>
</div>

<section class="py-5">
    <div class="container">
        <div class="row g-4">
            <!-- Sidebar Filters -->
            <div class="col-lg-3">
                <div class="card border-0 shadow-sm rounded-4 p-4 sticky-top" style="top: 100px; z-index: 1;">
                    <h5 class="fw-bold mb-4 border-bottom pb-3">Filters</h5>
                    
                    <!-- Search -->
                    <div class="mb-4">
                        <label class="form-label fw-bold small text-muted text-uppercase">Search</label>
                        <div class="input-group">
                            <input type="text" class="form-control border-end-0 bg-light" placeholder="Search cakes...">
                            <button class="btn btn-light border border-start-0 text-muted"><i class="fas fa-search"></i></button>
                        </div>
                    </div>

                    <!-- Categories -->
                    <div class="mb-4">
                        <label class="form-label fw-bold small text-muted text-uppercase">Categories</label>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="cat1" checked>
                            <label class="form-check-label" for="cat1">All Cakes <span class="text-muted small">(45)</span></label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="cat2">
                            <label class="form-check-label" for="cat2">Birthday Cakes <span class="text-muted small">(15)</span></label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="cat3">
                            <label class="form-check-label" for="cat3">Wedding Cakes <span class="text-muted small">(8)</span></label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="cat4">
                            <label class="form-check-label" for="cat4">Chocolate Cakes <span class="text-muted small">(12)</span></label>
                        </div>
                    </div>

                    <!-- Price Range -->
                    <div class="mb-4">
                        <label class="form-label fw-bold small text-muted text-uppercase">Price Range</label>
                        <input type="range" class="form-range" min="0" max="200" id="customRange1">
                        <div class="d-flex justify-content-between text-muted small mt-2">
                            <span>$10</span>
                            <span>$200+</span>
                        </div>
                    </div>

                    <!-- Dietary -->
                    <div class="mb-4">
                        <label class="form-label fw-bold small text-muted text-uppercase">Dietary</label>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="diet1">
                            <label class="form-check-label" for="diet1">Eggless</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="diet2">
                            <label class="form-check-label" for="diet2">Vegan</label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Grid -->
            <div class="col-lg-9">
                <div class="d-flex justify-content-between align-items-center mb-4 pb-3 border-bottom">
                    <p class="mb-0 text-muted">Showing 1-9 of 45 results</p>
                    <div class="d-flex align-items-center gap-2">
                        <label class="text-muted text-nowrap mb-0 me-2">Sort by:</label>
                        <select class="form-select border-0 bg-light" style="width: auto;">
                            <option>Default Sorting</option>
                            <option>Price: Low to High</option>
                            <option>Price: High to Low</option>
                            <option>Latest</option>
                            <option>Popularity</option>
                        </select>
                    </div>
                </div>

                <div class="row g-4">
                    <!-- Products -->
                    <?php 
                    $products = [
                        ['id'=>1, 'name'=>'Golden Truffle Delight', 'price'=>39.99, 'old_price'=>45.00, 'img'=>'https://images.unsplash.com/photo-1621303837174-89787a7d4729?ixlib=rb-4.0.3&w=500&q=80', 'discount'=>15],
                        ['id'=>2, 'name'=>'Vanilla Rose Elegance', 'price'=>45.00, 'old_price'=>null, 'img'=>'https://images.unsplash.com/photo-1563729784474-d77dbb933a9e?ixlib=rb-4.0.3&w=500&q=80', 'discount'=>null],
                        ['id'=>3, 'name'=>'Dark Chocolate Mud', 'price'=>35.00, 'old_price'=>null, 'img'=>'https://images.unsplash.com/photo-1614707267537-b85aaf00c4b7?ixlib=rb-4.0.3&w=500&q=80', 'discount'=>'Hot'],
                        ['id'=>4, 'name'=>'Strawberry Blossom', 'price'=>40.00, 'old_price'=>null, 'img'=>'https://images.unsplash.com/photo-1464349095431-e9a21285b5f3?ixlib=rb-4.0.3&w=500&q=80', 'discount'=>null],
                        ['id'=>5, 'name'=>'Red Velvet Supreme', 'price'=>38.00, 'old_price'=>42.00, 'img'=>'https://images.unsplash.com/photo-1586985289688-ca3cf47d3e6e?ixlib=rb-4.0.3&w=500&q=80', 'discount'=>10],
                        ['id'=>6, 'name'=>'Mango Tango', 'price'=>32.00, 'old_price'=>null, 'img'=>'https://images.unsplash.com/photo-1551404973-7bb6afce3698?ixlib=rb-4.0.3&w=500&q=80', 'discount'=>null],
                    ];

                    foreach($products as $p): ?>
                    <div class="col-md-4 animate-on-scroll">
                        <div class="product-card">
                            <?php if($p['discount']): ?>
                                <span class="badge-discount <?php echo $p['discount'] == 'Hot' ? 'bg-danger' : ''; ?>">
                                    <?php echo $p['discount'] == 'Hot' ? 'Hot' : '-'.$p['discount'].'%'; ?>
                                </span>
                            <?php endif; ?>
                            <a href="#" class="wishlist-btn"><i class="far fa-heart"></i></a>
                            <div class="product-img-wrapper" onclick="window.location='product-details.php?id=<?php echo $p['id']; ?>'" style="cursor:pointer;">
                                <img src="<?php echo $p['img']; ?>" alt="<?php echo $p['name']; ?>" class="product-img">
                            </div>
                            <div class="product-info">
                                <h3 class="product-title"><a href="product-details.php?id=<?php echo $p['id']; ?>" class="text-decoration-none text-dark"><?php echo $p['name']; ?></a></h3>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div class="product-price">
                                        $<?php echo number_format($p['price'], 2); ?>
                                        <?php if($p['old_price']): ?>
                                            <del>$<?php echo number_format($p['old_price'], 2); ?></del>
                                        <?php endif; ?>
                                    </div>
                                    <button class="btn btn-gold rounded-circle p-2" style="width: 40px; height: 40px; padding: 0;"><i class="fas fa-cart-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

                <!-- Pagination -->
                <nav class="mt-5">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled"><a class="page-link border-0 text-muted" href="#"><i class="fas fa-chevron-left"></i></a></li>
                        <li class="page-item active"><a class="page-link border-0 bg-brown text-white" href="#" style="background-color: var(--color-brown); border-color: var(--color-brown);">1</a></li>
                        <li class="page-item"><a class="page-link border-0 text-dark" href="#">2</a></li>
                        <li class="page-item"><a class="page-link border-0 text-dark" href="#">3</a></li>
                        <li class="page-item"><a class="page-link border-0 text-dark" href="#"><i class="fas fa-chevron-right"></i></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
