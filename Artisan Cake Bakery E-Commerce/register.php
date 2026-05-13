<?php include 'includes/header.php'; ?>

<div class="container py-5 my-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card border-0 shadow-lg rounded-4 overflow-hidden animate__animated animate__fadeInUp">
                <div class="card-header bg-white text-center pt-5 pb-3 border-0">
                    <i class="fas fa-user-plus text-gold mb-3" style="font-size: 3rem; color: var(--color-gold);"></i>
                    <h3 class="fw-bold brand-text">Create an Account</h3>
                    <p class="text-muted">Join our bakery family</p>
                </div>
                <div class="card-body p-5 pt-0">
                    <form action="login.php" method="POST">
                        <div class="row g-3">
                            <div class="col-md-6 mb-3">
                                <label class="form-label text-muted small fw-bold">Full Name</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0 text-muted"><i class="fas fa-user"></i></span>
                                    <input type="text" class="form-control bg-light border-start-0 py-2 ps-0" placeholder="John Doe" required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label text-muted small fw-bold">Phone Number</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0 text-muted"><i class="fas fa-phone"></i></span>
                                    <input type="tel" class="form-control bg-light border-start-0 py-2 ps-0" placeholder="+1 234 567 890" required>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <label class="form-label text-muted small fw-bold">Email Address</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0 text-muted"><i class="fas fa-envelope"></i></span>
                                    <input type="email" class="form-control bg-light border-start-0 py-2 ps-0" placeholder="Enter your email" required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <label class="form-label text-muted small fw-bold">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0 text-muted"><i class="fas fa-lock"></i></span>
                                    <input type="password" class="form-control bg-light border-start-0 py-2 ps-0" placeholder="Password" required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <label class="form-label text-muted small fw-bold">Confirm Password</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0 text-muted"><i class="fas fa-lock"></i></span>
                                    <input type="password" class="form-control bg-light border-start-0 py-2 ps-0" placeholder="Confirm" required>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-gold w-100 py-3 rounded-pill fw-bold shadow-sm">Register</button>
                    </form>
                    
                    <div class="text-center mt-4 pt-3 border-top">
                        <p class="text-muted small mb-0">Already have an account? <a href="login.php" class="text-decoration-none fw-bold" style="color: var(--color-brown);">Sign In</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
