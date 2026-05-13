<?php include 'includes/header.php'; ?>

<!-- Page Header -->
<div class="bg-light py-4 border-bottom">
    <div class="container text-center">
        <h1 class="fw-bold brand-text mb-0">Shopping Cart</h1>
    </div>
</div>

<section class="py-5">
    <div class="container">
        <div class="row g-5">
            <!-- Cart Items -->
            <div class="col-lg-8">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden mb-4">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-borderless align-middle mb-0">
                                <thead class="bg-light text-muted small text-uppercase">
                                    <tr>
                                        <th class="ps-4 py-3">Product</th>
                                        <th class="py-3">Price</th>
                                        <th class="py-3">Quantity</th>
                                        <th class="py-3">Subtotal</th>
                                        <th class="py-3 pe-4"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Item 1 -->
                                    <tr class="border-bottom">
                                        <td class="ps-4 py-4">
                                            <div class="d-flex align-items-center gap-3">
                                                <img src="https://images.unsplash.com/photo-1621303837174-89787a7d4729?ixlib=rb-4.0.3&w=100&q=80" alt="Cake" class="rounded-3" style="width: 80px; height: 80px; object-fit: cover;">
                                                <div>
                                                    <h6 class="fw-bold mb-1">Golden Truffle Delight</h6>
                                                    <span class="text-muted small">0.5 Kg, Dark Chocolate</span>
                                                    <div class="text-success small mt-1"><i class="fas fa-check-circle me-1"></i> Eggless</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="fw-bold text-muted">$41.99</td>
                                        <td>
                                            <div class="input-group input-group-sm" style="width: 100px;">
                                                <button class="btn btn-outline-secondary" type="button">-</button>
                                                <input type="text" class="form-control text-center" value="1" readonly>
                                                <button class="btn btn-outline-secondary" type="button">+</button>
                                            </div>
                                        </td>
                                        <td class="fw-bold text-dark">$41.99</td>
                                        <td class="pe-4 text-end">
                                            <button class="btn btn-light text-danger rounded-circle p-2"><i class="fas fa-trash-alt"></i></button>
                                        </td>
                                    </tr>
                                    <!-- Item 2 -->
                                    <tr>
                                        <td class="ps-4 py-4">
                                            <div class="d-flex align-items-center gap-3">
                                                <img src="https://images.unsplash.com/photo-1563729784474-d77dbb933a9e?ixlib=rb-4.0.3&w=100&q=80" alt="Cake" class="rounded-3" style="width: 80px; height: 80px; object-fit: cover;">
                                                <div>
                                                    <h6 class="fw-bold mb-1">Vanilla Rose Elegance</h6>
                                                    <span class="text-muted small">1.0 Kg, Regular</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="fw-bold text-muted">$60.00</td>
                                        <td>
                                            <div class="input-group input-group-sm" style="width: 100px;">
                                                <button class="btn btn-outline-secondary" type="button">-</button>
                                                <input type="text" class="form-control text-center" value="2" readonly>
                                                <button class="btn btn-outline-secondary" type="button">+</button>
                                            </div>
                                        </td>
                                        <td class="fw-bold text-dark">$120.00</td>
                                        <td class="pe-4 text-end">
                                            <button class="btn btn-light text-danger rounded-circle p-2"><i class="fas fa-trash-alt"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-between align-items-center">
                    <a href="products.php" class="btn btn-outline-brown px-4 rounded-pill"><i class="fas fa-arrow-left me-2"></i> Continue Shopping</a>
                    <button class="btn btn-light text-muted px-4 rounded-pill border"><i class="fas fa-sync-alt me-2"></i> Update Cart</button>
                </div>
            </div>

            <!-- Cart Summary -->
            <div class="col-lg-4">
                <div class="card border-0 shadow-sm rounded-4 bg-light">
                    <div class="card-body p-4">
                        <h5 class="fw-bold mb-4 brand-text">Order Summary</h5>
                        
                        <div class="d-flex justify-content-between mb-3 text-muted">
                            <span>Subtotal</span>
                            <span class="fw-bold text-dark">$161.99</span>
                        </div>
                        
                        <div class="d-flex justify-content-between mb-3 text-muted">
                            <span>Tax (5%)</span>
                            <span class="fw-bold text-dark">$8.10</span>
                        </div>

                        <div class="d-flex justify-content-between mb-4 text-muted">
                            <span>Shipping</span>
                            <span class="fw-bold text-dark">$5.00</span>
                        </div>

                        <!-- Coupon -->
                        <div class="mb-4 pb-4 border-bottom">
                            <label class="form-label small text-muted text-uppercase fw-bold">Coupon Code</label>
                            <div class="input-group">
                                <input type="text" class="form-control border-0 shadow-sm" placeholder="Enter code">
                                <button class="btn btn-dark shadow-sm">Apply</button>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between mb-4">
                            <span class="fw-bold fs-5">Total</span>
                            <span class="fw-bold fs-4" style="color: var(--color-gold);">$175.09</span>
                        </div>

                        <a href="checkout.php" class="btn btn-gold w-100 py-3 fw-bold rounded-pill shadow-sm">Proceed to Checkout <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
