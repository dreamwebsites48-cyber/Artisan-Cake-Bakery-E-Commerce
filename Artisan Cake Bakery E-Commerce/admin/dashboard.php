<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Artisan Cake Bakery</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f4f6f9; }
        .sidebar { height: 100vh; background-color: #343a40; position: fixed; width: 250px; z-index: 1000; padding-top: 20px; transition: 0.3s; }
        .sidebar a { padding: 15px 25px; text-decoration: none; font-size: 1rem; color: #c2c7d0; display: block; transition: 0.3s; border-left: 3px solid transparent; }
        .sidebar a:hover, .sidebar a.active { color: #fff; background-color: rgba(255,255,255,0.05); border-left: 3px solid #d4af37; }
        .main-content { margin-left: 250px; padding: 30px; }
        .stat-card { border-radius: 15px; border: none; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: 0.3s; }
        .stat-card:hover { transform: translateY(-5px); }
        .icon-box { width: 60px; height: 60px; border-radius: 15px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; }
    </style>
</head>
<body>

<!-- Sidebar -->
<div class="sidebar shadow">
    <div class="text-center mb-4 px-3">
        <h4 class="text-white fw-bold"><i class="fas fa-crown text-warning me-2"></i> Artisan Admin</h4>
    </div>
    <div class="px-3 mb-3 text-uppercase text-secondary small fw-bold">Menu</div>
    <a href="dashboard.php" class="active"><i class="fas fa-tachometer-alt me-3"></i> Dashboard</a>
    <a href="#"><i class="fas fa-shopping-cart me-3"></i> Orders <span class="badge bg-danger ms-2">14</span></a>
    <a href="#"><i class="fas fa-birthday-cake me-3"></i> Products</a>
    <a href="#"><i class="fas fa-list me-3"></i> Categories</a>
    <a href="#"><i class="fas fa-users me-3"></i> Customers</a>
    <a href="#"><i class="fas fa-ticket-alt me-3"></i> Coupons</a>
    <a href="#"><i class="fas fa-cog me-3"></i> Settings</a>
    <a href="index.php" class="text-danger mt-5"><i class="fas fa-sign-out-alt me-3"></i> Logout</a>
</div>

<!-- Main Content -->
<div class="main-content">
    <div class="d-flex justify-content-between align-items-center mb-4 pb-3 border-bottom">
        <div>
            <h2 class="fw-bold mb-0 text-dark">Dashboard Overview</h2>
            <p class="text-muted mb-0">Welcome back, Admin. Here's what's happening today.</p>
        </div>
        <div class="d-flex gap-3">
            <button class="btn btn-white bg-white shadow-sm rounded-circle p-2" style="width: 40px; height: 40px;"><i class="far fa-bell text-dark"></i></button>
            <img src="https://ui-avatars.com/api/?name=Admin&background=d4af37&color=fff" alt="Admin" class="rounded-circle shadow-sm" style="width: 40px; height: 40px;">
        </div>
    </div>

    <!-- Stats -->
    <div class="row g-4 mb-4">
        <div class="col-md-3">
            <div class="card stat-card bg-white">
                <div class="card-body p-4 d-flex align-items-center justify-content-between">
                    <div>
                        <p class="text-muted fw-bold small text-uppercase mb-1">Total Revenue</p>
                        <h3 class="fw-bold mb-0 text-dark">$24,500</h3>
                        <span class="text-success small fw-bold"><i class="fas fa-arrow-up me-1"></i> 12%</span>
                    </div>
                    <div class="icon-box bg-success bg-opacity-10 text-success">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card stat-card bg-white">
                <div class="card-body p-4 d-flex align-items-center justify-content-between">
                    <div>
                        <p class="text-muted fw-bold small text-uppercase mb-1">Total Orders</p>
                        <h3 class="fw-bold mb-0 text-dark">1,245</h3>
                        <span class="text-success small fw-bold"><i class="fas fa-arrow-up me-1"></i> 5%</span>
                    </div>
                    <div class="icon-box bg-primary bg-opacity-10 text-primary">
                        <i class="fas fa-shopping-bag"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card stat-card bg-white">
                <div class="card-body p-4 d-flex align-items-center justify-content-between">
                    <div>
                        <p class="text-muted fw-bold small text-uppercase mb-1">Total Customers</p>
                        <h3 class="fw-bold mb-0 text-dark">854</h3>
                        <span class="text-success small fw-bold"><i class="fas fa-arrow-up me-1"></i> 18%</span>
                    </div>
                    <div class="icon-box bg-warning bg-opacity-10 text-warning">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card stat-card bg-white">
                <div class="card-body p-4 d-flex align-items-center justify-content-between">
                    <div>
                        <p class="text-muted fw-bold small text-uppercase mb-1">Pending Orders</p>
                        <h3 class="fw-bold mb-0 text-dark">14</h3>
                        <span class="text-danger small fw-bold">Requires Attention</span>
                    </div>
                    <div class="icon-box bg-danger bg-opacity-10 text-danger">
                        <i class="fas fa-clock"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <!-- Recent Orders -->
        <div class="col-lg-8">
            <div class="card stat-card bg-white h-100">
                <div class="card-header bg-white border-bottom p-4 d-flex justify-content-between align-items-center">
                    <h5 class="fw-bold mb-0 text-dark">Recent Orders</h5>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill">View All</button>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="bg-light text-muted small text-uppercase">
                                <tr>
                                    <th class="ps-4 py-3">Order ID</th>
                                    <th class="py-3">Customer</th>
                                    <th class="py-3">Date</th>
                                    <th class="py-3">Status</th>
                                    <th class="py-3">Amount</th>
                                    <th class="pe-4 py-3 text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="ps-4 py-3 fw-bold">#ORD-0125</td>
                                    <td>John Doe</td>
                                    <td class="text-muted">Today, 10:30 AM</td>
                                    <td><span class="badge bg-warning text-dark rounded-pill">Pending</span></td>
                                    <td class="fw-bold">$45.00</td>
                                    <td class="pe-4 text-end"><button class="btn btn-sm btn-light border"><i class="fas fa-eye text-primary"></i></button></td>
                                </tr>
                                <tr>
                                    <td class="ps-4 py-3 fw-bold">#ORD-0124</td>
                                    <td>Jane Smith</td>
                                    <td class="text-muted">Yesterday</td>
                                    <td><span class="badge bg-info text-white rounded-pill">Processing</span></td>
                                    <td class="fw-bold">$120.00</td>
                                    <td class="pe-4 text-end"><button class="btn btn-sm btn-light border"><i class="fas fa-eye text-primary"></i></button></td>
                                </tr>
                                <tr>
                                    <td class="ps-4 py-3 fw-bold">#ORD-0123</td>
                                    <td>Mike Johnson</td>
                                    <td class="text-muted">Oct 24, 2025</td>
                                    <td><span class="badge bg-success rounded-pill">Delivered</span></td>
                                    <td class="fw-bold">$38.50</td>
                                    <td class="pe-4 text-end"><button class="btn btn-sm btn-light border"><i class="fas fa-eye text-primary"></i></button></td>
                                </tr>
                                <tr>
                                    <td class="ps-4 py-3 fw-bold">#ORD-0122</td>
                                    <td>Sarah Wilson</td>
                                    <td class="text-muted">Oct 23, 2025</td>
                                    <td><span class="badge bg-danger rounded-pill">Cancelled</span></td>
                                    <td class="fw-bold">$65.00</td>
                                    <td class="pe-4 text-end"><button class="btn btn-sm btn-light border"><i class="fas fa-eye text-primary"></i></button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Top Products -->
        <div class="col-lg-4">
            <div class="card stat-card bg-white h-100">
                <div class="card-header bg-white border-bottom p-4">
                    <h5 class="fw-bold mb-0 text-dark">Top Selling Cakes</h5>
                </div>
                <div class="card-body p-0">
                    <div class="list-group list-group-flush">
                        <div class="list-group-item p-4 d-flex align-items-center gap-3 border-bottom">
                            <img src="https://images.unsplash.com/photo-1621303837174-89787a7d4729?ixlib=rb-4.0.3&w=100&q=80" alt="Cake" class="rounded-3" style="width: 50px; height: 50px; object-fit: cover;">
                            <div class="flex-grow-1">
                                <h6 class="mb-0 fw-bold">Golden Truffle</h6>
                                <small class="text-muted">Chocolate Category</small>
                            </div>
                            <div class="text-end">
                                <div class="fw-bold">145 Sales</div>
                                <small class="text-success"><i class="fas fa-arrow-up"></i></small>
                            </div>
                        </div>
                        <div class="list-group-item p-4 d-flex align-items-center gap-3 border-bottom">
                            <img src="https://images.unsplash.com/photo-1563729784474-d77dbb933a9e?ixlib=rb-4.0.3&w=100&q=80" alt="Cake" class="rounded-3" style="width: 50px; height: 50px; object-fit: cover;">
                            <div class="flex-grow-1">
                                <h6 class="mb-0 fw-bold">Vanilla Rose</h6>
                                <small class="text-muted">Wedding Category</small>
                            </div>
                            <div class="text-end">
                                <div class="fw-bold">98 Sales</div>
                                <small class="text-success"><i class="fas fa-arrow-up"></i></small>
                            </div>
                        </div>
                        <div class="list-group-item p-4 d-flex align-items-center gap-3">
                            <img src="https://images.unsplash.com/photo-1614707267537-b85aaf00c4b7?ixlib=rb-4.0.3&w=100&q=80" alt="Cake" class="rounded-3" style="width: 50px; height: 50px; object-fit: cover;">
                            <div class="flex-grow-1">
                                <h6 class="mb-0 fw-bold">Dark Choco Mud</h6>
                                <small class="text-muted">Birthday Category</small>
                            </div>
                            <div class="text-end">
                                <div class="fw-bold">85 Sales</div>
                                <small class="text-muted">-</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
