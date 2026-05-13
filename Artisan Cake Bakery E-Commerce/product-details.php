<?php include 'includes/header.php'; ?>

<!-- Breadcrumb -->
<div class="bg-light py-3 border-bottom">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 small">
                <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none text-muted">Home</a></li>
                <li class="breadcrumb-item"><a href="products.php" class="text-decoration-none text-muted">Shop</a></li>
                <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-muted">Chocolate Cakes</a></li>
                <li class="breadcrumb-item active" aria-current="page">Golden Truffle Delight</li>
            </ol>
        </nav>
    </div>
</div>

<section class="py-5">
    <div class="container">
        <div class="row g-5">
            <!-- Product Images -->
            <div class="col-lg-6">
                <div class="position-relative mb-4">
                    <img src="https://images.unsplash.com/photo-1621303837174-89787a7d4729?ixlib=rb-4.0.3&w=800&q=80" alt="Cake" class="img-fluid rounded-4 shadow-sm w-100 object-fit-cover" style="height: 500px;" id="mainImage">
                    <span class="badge bg-danger position-absolute top-0 start-0 m-3 fs-6 rounded-pill">-15%</span>
                </div>
                <div class="row g-2">
                    <div class="col-3">
                        <img src="https://images.unsplash.com/photo-1621303837174-89787a7d4729?ixlib=rb-4.0.3&w=200&q=80" alt="Thumb" class="img-fluid rounded-3 cursor-pointer border border-2 border-warning" onclick="document.getElementById('mainImage').src=this.src">
                    </div>
                    <div class="col-3">
                        <img src="https://images.unsplash.com/photo-1578985545062-69928b1d9587?ixlib=rb-4.0.3&w=200&q=80" alt="Thumb" class="img-fluid rounded-3 cursor-pointer opacity-75 hover-opacity-100" onclick="document.getElementById('mainImage').src=this.src">
                    </div>
                    <div class="col-3">
                        <img src="https://images.unsplash.com/photo-1558961363-fa8fdf82db35?ixlib=rb-4.0.3&w=200&q=80" alt="Thumb" class="img-fluid rounded-3 cursor-pointer opacity-75 hover-opacity-100" onclick="document.getElementById('mainImage').src=this.src">
                    </div>
                </div>
            </div>

            <!-- Product Details -->
            <div class="col-lg-6">
                <div class="d-flex align-items-center mb-2">
                    <div class="rating text-warning me-2">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                    </div>
                    <span class="text-muted small">(124 Customer Reviews)</span>
                </div>
                <h1 class="fw-bold mb-3 display-5 brand-text">Golden Truffle Delight</h1>
                <div class="fs-2 fw-bold text-gold mb-4" style="color: var(--color-gold);">
                    $39.99 <del class="text-muted fs-5 ms-2">$45.00</del>
                </div>
                
                <p class="text-muted lead mb-4">A masterpiece of chocolate craftsmanship. This rich chocolate truffle cake is layered with premium dark ganache and finished with edible golden flakes. Perfect for any celebration where you want to impress.</p>

                <hr class="my-4">

                <form>
                    <!-- Options -->
                    <div class="row g-4 mb-4">
                        <div class="col-md-6">
                            <label class="fw-bold mb-2">Select Weight</label>
                            <select class="form-select border-0 bg-light p-3 rounded-3 shadow-none">
                                <option>0.5 Kg</option>
                                <option>1.0 Kg (+$15.00)</option>
                                <option>2.0 Kg (+$40.00)</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="fw-bold mb-2">Select Flavor base</label>
                            <select class="form-select border-0 bg-light p-3 rounded-3 shadow-none">
                                <option>Dark Chocolate</option>
                                <option>Milk Chocolate</option>
                            </select>
                        </div>
                    </div>

                    <!-- Dietary -->
                    <div class="mb-4 bg-light p-3 rounded-3">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="egglessSwitch">
                            <label class="form-check-label fw-bold" for="egglessSwitch">Make it Eggless (+$2.00)</label>
                        </div>
                    </div>

                    <!-- Add to cart row -->
                    <div class="d-flex gap-3 align-items-center mb-4">
                        <div class="input-group" style="width: 130px;">
                            <button class="btn btn-outline-secondary" type="button">-</button>
                            <input type="text" class="form-control text-center bg-white" value="1" readonly>
                            <button class="btn btn-outline-secondary" type="button">+</button>
                        </div>
                        <button type="button" class="btn btn-gold flex-grow-1 py-3 fw-bold shadow"><i class="fas fa-shopping-bag me-2"></i> Add to Cart</button>
                        <button type="button" class="btn btn-outline-brown p-3 rounded-circle"><i class="far fa-heart"></i></button>
                    </div>
                </form>

                <!-- Meta -->
                <ul class="list-unstyled text-muted small border-top pt-4">
                    <li class="mb-2"><strong class="text-dark">SKU:</strong> CAKE-TRUF-001</li>
                    <li class="mb-2"><strong class="text-dark">Category:</strong> <a href="#" class="text-decoration-none text-muted">Chocolate Cakes</a></li>
                    <li><strong class="text-dark">Tags:</strong> Premium, Truffle, Gold</li>
                </ul>
            </div>
        </div>

        <!-- Tabs -->
        <div class="row mt-5 pt-5">
            <div class="col-12">
                <ul class="nav nav-tabs justify-content-center border-0 mb-4 fs-5" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active bg-transparent border-0 text-dark fw-bold border-bottom border-3 border-dark" id="desc-tab" data-bs-toggle="tab" data-bs-target="#desc" type="button">Description</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link bg-transparent border-0 text-muted" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button">Reviews (124)</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active text-muted text-center max-w-75 mx-auto" id="desc">
                        <p>Our Golden Truffle Delight is baked fresh to order using only the finest ingredients. We use 70% dark Belgian chocolate for the ganache, ensuring a rich, non-overpowering sweetness. The sponge is incredibly moist, soaked lightly in a secret syrup. Hand-finished with 24k edible gold flakes, it's not just a cake, it's an experience.</p>
                        <ul class="list-unstyled mt-4 d-flex justify-content-center gap-4 flex-wrap">
                            <li><i class="fas fa-check text-success me-2"></i> 100% Fresh Ingredients</li>
                            <li><i class="fas fa-check text-success me-2"></i> No Artificial Preservatives</li>
                            <li><i class="fas fa-check text-success me-2"></i> Handmade with Love</li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="reviews">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <!-- Review Item -->
                                <div class="d-flex gap-3 mb-4 border-bottom pb-4">
                                    <div class="rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; flex-shrink: 0;">JD</div>
                                    <div>
                                        <div class="d-flex justify-content-between align-items-center mb-1">
                                            <h6 class="mb-0 fw-bold">John Doe</h6>
                                            <span class="text-muted small">Oct 15, 2025</span>
                                        </div>
                                        <div class="text-warning small mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                                        <p class="text-muted mb-0">Absolutely delicious! The chocolate was rich but not too sweet, and the gold flakes made it look so premium. Everyone at the party loved it.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
