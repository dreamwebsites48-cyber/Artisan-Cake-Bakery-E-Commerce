<?php include 'includes/header.php'; ?>

<div class="container py-5 my-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="card border-0 shadow-lg rounded-4 overflow-hidden animate__animated animate__fadeInUp">
                <div class="card-header bg-white text-center pt-5 pb-3 border-0">
                    <i class="fas fa-user-circle text-gold mb-3" style="font-size: 4rem; color: var(--color-gold);"></i>
                    <h3 class="fw-bold brand-text">Welcome Back</h3>
                    <p class="text-muted">Sign in to your account</p>
                </div>
                <div class="card-body p-5 pt-0">
                    <form action="user/dashboard.php" method="POST">
                        <div class="mb-4">
                            <label class="form-label text-muted small fw-bold">Email Address</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0 text-muted"><i class="fas fa-envelope"></i></span>
                                <input type="email" class="form-control bg-light border-start-0 py-2 ps-0" placeholder="Enter your email" required value="demo@user.com">
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="d-flex justify-content-between">
                                <label class="form-label text-muted small fw-bold">Password</label>
                                <a href="#" class="text-decoration-none small" style="color: var(--color-gold);">Forgot Password?</a>
                            </div>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0 text-muted"><i class="fas fa-lock"></i></span>
                                <input type="password" class="form-control bg-light border-start-0 py-2 ps-0" placeholder="Enter your password" required value="password">
                            </div>
                        </div>
                        <div class="mb-4 form-check">
                            <input type="checkbox" class="form-check-input" id="remember">
                            <label class="form-check-label text-muted small" for="remember">Remember me</label>
                        </div>
                        <button type="submit" class="btn btn-gold w-100 py-3 rounded-pill fw-bold shadow-sm">Sign In</button>
                    </form>
                    
                    <div class="text-center mt-4 pt-3 border-top">
                        <p class="text-muted small mb-0">Don't have an account? <a href="register.php" class="text-decoration-none fw-bold" style="color: var(--color-brown);">Register Now</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
