<?php include 'includes/header.php'; ?>

<div class="bg-light py-4 border-bottom">
    <div class="container text-center">
        <h1 class="fw-bold brand-text mb-0">Checkout</h1>
    </div>
</div>

<section class="py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-7">
                <!-- Delivery Info -->
                <div class="card border-0 shadow-sm rounded-4 mb-4">
                    <div class="card-body p-4">
                        <h4 class="fw-bold mb-4 border-bottom pb-3">1. Delivery Information</h4>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">First Name *</label>
                                    <input type="text" class="form-control bg-light border-0 py-2" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Last Name *</label>
                                    <input type="text" class="form-control bg-light border-0 py-2" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Email Address *</label>
                                    <input type="email" class="form-control bg-light border-0 py-2" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Phone Number *</label>
                                    <input type="tel" class="form-control bg-light border-0 py-2" required>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Complete Address *</label>
                                    <textarea class="form-control bg-light border-0 py-2" rows="3" required></textarea>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">City *</label>
                                    <input type="text" class="form-control bg-light border-0 py-2" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Zip/Postal Code *</label>
                                    <input type="text" class="form-control bg-light border-0 py-2" required>
                                </div>
                                <div class="col-12 mt-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="saveInfo">
                                        <label class="form-check-label text-muted" for="saveInfo">
                                            Save this information for next time
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Payment Info -->
                <div class="card border-0 shadow-sm rounded-4">
                    <div class="card-body p-4">
                        <h4 class="fw-bold mb-4 border-bottom pb-3">2. Payment Method</h4>
                        
                        <div class="list-group list-group-flush border-0">
                            <!-- Card -->
                            <label class="list-group-item d-flex gap-3 bg-light rounded-3 mb-3 p-3 border-0 cursor-pointer shadow-sm">
                                <input class="form-check-input flex-shrink-0 mt-1" type="radio" name="paymentMethod" value="card" checked>
                                <span class="d-flex flex-column w-100">
                                    <span class="fw-bold mb-1 d-flex justify-content-between">
                                        Credit/Debit Card
                                        <div class="d-flex gap-1 text-muted fs-5">
                                            <i class="fab fa-cc-visa text-primary"></i>
                                            <i class="fab fa-cc-mastercard text-danger"></i>
                                        </div>
                                    </span>
                                    <span class="text-muted small">Pay securely with your card</span>
                                    <div class="mt-3">
                                        <input type="text" class="form-control border-0 shadow-sm mb-2" placeholder="Card Number">
                                        <div class="row g-2">
                                            <div class="col-6">
                                                <input type="text" class="form-control border-0 shadow-sm" placeholder="MM/YY">
                                            </div>
                                            <div class="col-6">
                                                <input type="text" class="form-control border-0 shadow-sm" placeholder="CVC">
                                            </div>
                                        </div>
                                    </div>
                                </span>
                            </label>

                            <!-- UPI -->
                            <label class="list-group-item d-flex gap-3 bg-light rounded-3 mb-3 p-3 border-0 cursor-pointer">
                                <input class="form-check-input flex-shrink-0 mt-1" type="radio" name="paymentMethod" value="upi">
                                <span class="d-flex flex-column w-100">
                                    <span class="fw-bold mb-1 d-flex justify-content-between">
                                        UPI / Net Banking
                                        <i class="fas fa-university text-info fs-5"></i>
                                    </span>
                                    <span class="text-muted small">Pay using any UPI app like GPay, PhonePe</span>
                                </span>
                            </label>

                            <!-- COD -->
                            <label class="list-group-item d-flex gap-3 bg-light rounded-3 p-3 border-0 cursor-pointer">
                                <input class="form-check-input flex-shrink-0 mt-1" type="radio" name="paymentMethod" value="cod">
                                <span class="d-flex flex-column">
                                    <span class="fw-bold mb-1 d-flex justify-content-between w-100">
                                        Cash on Delivery
                                        <i class="fas fa-money-bill-wave text-success fs-5"></i>
                                    </span>
                                    <span class="text-muted small">Pay when you receive the cake</span>
                                </span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Order Summary -->
            <div class="col-lg-5">
                <div class="card border-0 shadow-sm rounded-4 sticky-top" style="top: 100px;">
                    <div class="card-body p-4 bg-light rounded-4">
                        <h5 class="fw-bold mb-4 brand-text">Your Order</h5>
                        
                        <!-- Items -->
                        <div class="d-flex align-items-center gap-3 mb-3 pb-3 border-bottom">
                            <div class="position-relative">
                                <img src="https://images.unsplash.com/photo-1621303837174-89787a7d4729?ixlib=rb-4.0.3&w=100&q=80" alt="Cake" class="rounded-3" style="width: 60px; height: 60px; object-fit: cover;">
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-dark">1</span>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="mb-0 fw-bold">Golden Truffle</h6>
                                <small class="text-muted">0.5 Kg, Eggless</small>
                            </div>
                            <div class="fw-bold text-muted">$41.99</div>
                        </div>

                        <div class="d-flex align-items-center gap-3 mb-4 pb-3 border-bottom">
                            <div class="position-relative">
                                <img src="https://images.unsplash.com/photo-1563729784474-d77dbb933a9e?ixlib=rb-4.0.3&w=100&q=80" alt="Cake" class="rounded-3" style="width: 60px; height: 60px; object-fit: cover;">
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-dark">2</span>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="mb-0 fw-bold">Vanilla Rose</h6>
                                <small class="text-muted">1.0 Kg</small>
                            </div>
                            <div class="fw-bold text-muted">$120.00</div>
                        </div>

                        <!-- Totals -->
                        <div class="d-flex justify-content-between mb-2 text-muted small">
                            <span>Subtotal</span>
                            <span>$161.99</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2 text-muted small">
                            <span>Tax (5%)</span>
                            <span>$8.10</span>
                        </div>
                        <div class="d-flex justify-content-between mb-3 text-muted small pb-3 border-bottom">
                            <span>Shipping</span>
                            <span>$5.00</span>
                        </div>

                        <div class="d-flex justify-content-between mb-4">
                            <span class="fw-bold fs-5">Total</span>
                            <span class="fw-bold fs-4" style="color: var(--color-gold);">$175.09</span>
                        </div>

                        <button class="btn btn-gold w-100 py-3 fw-bold rounded-pill shadow-sm" onclick="window.location='index.php'">Place Order <i class="fas fa-lock ms-2"></i></button>
                        <p class="text-center text-muted small mt-3 mb-0"><i class="fas fa-shield-alt text-success me-1"></i> Secure Encrypted Payment</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
