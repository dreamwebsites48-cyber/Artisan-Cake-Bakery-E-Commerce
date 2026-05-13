<?php include '../includes/header.php'; ?>

<div class="bg-brown py-4" style="background-color: var(--color-brown);">
    <div class="container">
        <h2 class="text-white mb-0 fw-bold">My Account</h2>
    </div>
</div>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row g-4">
            <!-- Sidebar -->
            <div class="col-lg-3">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden sticky-top" style="top: 100px;">
                    <div class="p-4 text-center bg-white border-bottom">
                        <div class="rounded-circle bg-light d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                            <i class="fas fa-user text-muted fs-1"></i>
                        </div>
                        <h5 class="fw-bold mb-0">Demo User</h5>
                        <span class="text-muted small">demo@user.com</span>
                    </div>
                    <div class="list-group list-group-flush border-0">
                        <a href="#" class="list-group-item list-group-item-action active bg-light text-dark fw-bold border-0 py-3"><i class="fas fa-tachometer-alt me-3 text-gold" style="color: var(--color-gold);"></i> Dashboard</a>
                        <a href="#" class="list-group-item list-group-item-action border-0 py-3 text-muted"><i class="fas fa-shopping-bag me-3"></i> Orders</a>
                        <a href="#" class="list-group-item list-group-item-action border-0 py-3 text-muted"><i class="fas fa-heart me-3"></i> Wishlist</a>
                        <a href="#" class="list-group-item list-group-item-action border-0 py-3 text-muted"><i class="fas fa-map-marker-alt me-3"></i> Addresses</a>
                        <a href="#" class="list-group-item list-group-item-action border-0 py-3 text-muted"><i class="fas fa-user-edit me-3"></i> Account Details</a>
                        <a href="../index.php" class="list-group-item list-group-item-action border-0 py-3 text-danger"><i class="fas fa-sign-out-alt me-3"></i> Logout</a>
                    </div>
                </div>
            </div>

            <!-- Content -->
            <div class="col-lg-9">
                <div class="row g-4 mb-4">
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm rounded-4 bg-white h-100">
                            <div class="card-body text-center p-4">
                                <div class="rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px; background: rgba(212, 175, 55, 0.1); color: var(--color-gold);">
                                    <i class="fas fa-box-open fs-3"></i>
                                </div>
                                <h3 class="fw-bold mb-1">12</h3>
                                <p class="text-muted mb-0">Total Orders</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm rounded-4 bg-white h-100">
                            <div class="card-body text-center p-4">
                                <div class="rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px; background: rgba(220, 53, 69, 0.1); color: #dc3545;">
                                    <i class="fas fa-heart fs-3"></i>
                                </div>
                                <h3 class="fw-bold mb-1">5</h3>
                                <p class="text-muted mb-0">Wishlist Items</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm rounded-4 bg-white h-100">
                            <div class="card-body text-center p-4">
                                <div class="rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px; background: rgba(25, 135, 84, 0.1); color: #198754;">
                                    <i class="fas fa-wallet fs-3"></i>
                                </div>
                                <h3 class="fw-bold mb-1">$450</h3>
                                <p class="text-muted mb-0">Total Spent</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Orders -->
                <div class="card border-0 shadow-sm rounded-4 bg-white">
                    <div class="card-header bg-white border-bottom p-4">
                        <h5 class="fw-bold mb-0">Recent Orders</h5>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle mb-0">
                                <thead class="bg-light text-muted small text-uppercase">
                                    <tr>
                                        <th class="ps-4 py-3">Order ID</th>
                                        <th class="py-3">Date</th>
                                        <th class="py-3">Status</th>
                                        <th class="py-3">Total</th>
                                        <th class="py-3 pe-4 text-end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="ps-4 py-3 fw-bold text-dark">#ORD-00123</td>
                                        <td class="text-muted">Oct 24, 2025</td>
                                        <td><span class="badge bg-warning text-dark rounded-pill px-3 py-2">Processing</span></td>
                                        <td class="fw-bold">$45.00</td>
                                        <td class="pe-4 text-end"><button class="btn btn-sm btn-outline-brown rounded-pill">View</button></td>
                                    </tr>
                                    <tr>
                                        <td class="ps-4 py-3 fw-bold text-dark">#ORD-00118</td>
                                        <td class="text-muted">Oct 10, 2025</td>
                                        <td><span class="badge bg-success rounded-pill px-3 py-2">Delivered</span></td>
                                        <td class="fw-bold">$120.50</td>
                                        <td class="pe-4 text-end"><button class="btn btn-sm btn-outline-brown rounded-pill">View</button></td>
                                    </tr>
                                    <tr>
                                        <td class="ps-4 py-3 fw-bold text-dark">#ORD-00095</td>
                                        <td class="text-muted">Sep 05, 2025</td>
                                        <td><span class="badge bg-success rounded-pill px-3 py-2">Delivered</span></td>
                                        <td class="fw-bold">$38.00</td>
                                        <td class="pe-4 text-end"><button class="btn btn-sm btn-outline-brown rounded-pill">View</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
