<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Artisan Cake Bakery</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f8f9fa; height: 100vh; display: flex; align-items: center; justify-content: center; }
        .card { border-radius: 20px; border: none; box-shadow: 0 15px 35px rgba(0,0,0,0.1); }
        .btn-gold { background-color: #d4af37; color: white; border-radius: 50px; font-weight: 600; }
        .btn-gold:hover { background-color: #b5952f; color: white; }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card overflow-hidden">
                <div class="card-body p-5">
                    <div class="text-center mb-4">
                        <i class="fas fa-crown text-warning mb-3" style="font-size: 3rem;"></i>
                        <h3 class="fw-bold text-dark">Admin Portal</h3>
                        <p class="text-muted">Artisan Cake Bakery</p>
                    </div>
                    
                    <form action="dashboard.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label text-muted small fw-bold text-uppercase">Username</label>
                            <input type="text" class="form-control bg-light border-0 py-2" placeholder="admin" required value="admin">
                        </div>
                        <div class="mb-4">
                            <label class="form-label text-muted small fw-bold text-uppercase">Password</label>
                            <input type="password" class="form-control bg-light border-0 py-2" placeholder="password" required value="password">
                        </div>
                        <button type="submit" class="btn btn-gold w-100 py-3 shadow-sm">Secure Login</button>
                    </form>
                </div>
                <div class="card-footer bg-light border-0 text-center py-3">
                    <a href="../index.php" class="text-muted text-decoration-none small"><i class="fas fa-arrow-left me-1"></i> Back to Website</a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
