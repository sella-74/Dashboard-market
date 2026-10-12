<?php
include "koneksi.php";

$query = mysqli_query($koneksi, "SELECT * FROM smk");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smkmart - Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            font-size: .875rem;
        }
        .navbar-brand {
            padding-top: .75rem;
            padding-bottom: .75rem;
            background-color: rgba(0, 0, 0, .25);
            box-shadow: inset -1px 0 0 rgba(0, 0, 0, .25);
        }
        .sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            z-index: 100;
            padding: 48px 0 0; 
            box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
        }
        .sidebar-sticky {
            position: relative;
            height: calc(100vh - 48px);
            padding-top: .5rem;
            overflow-x: hidden;
            overflow-y: auto;
        }
        .sidebar .nav-link {
            font-weight: 500;
            color: #333;
        }
        .sidebar .nav-link.active {
            color: #0d6efd;
        }
        .sidebar .nav-link:hover {
            color: #0d6efd;
        }
        .sidebar .nav-link .bi {
            margin-right: 4px;
        }
    </style>
</head>
<body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="#">Smkmart</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3 sidebar-sticky d-flex flex-column justify-content-between">
                    <ul class="nav flex-column">
                        <li class="nav-item mb-1">
                            <a class="nav-link active" href="#">
                                <i class="bi bi-house-door-fill"></i> Dashboard
                            </a>
                        </li>
                        <li class="nav-item mb-1">
                            <a class="nav-link" href="#">
                                <i class="bi bi-file-earmark-text"></i> Orders
                            </a>
                        </li>
                        <li class="nav-item mb-1">
                            <a class="nav-link" href="#">
                                <i class="bi bi-cart"></i> Products
                            </a>
                        </li>
                        <li class="nav-item mb-1">
                            <a class="nav-link" href="#">
                                <i class="bi bi-people"></i> Customers
                            </a>
                        </li>
                        <li class="nav-item mb-1">
                            <a class="nav-link" href="#">
                                <i class="bi bi-graph-up"></i> Reports
                            </a>
                        </li>
                        <li class="nav-item mb-1">
                            <a class="nav-link" href="#">
                                <i class="bi bi-layers"></i> Integrations
                            </a>
                        </li>
                    </ul>

                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link text-primary" href="#">
                                <i class="bi bi-box-arrow-right"></i> Sign out
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
                <h1 class="h2 mb-4">Dashboard</h1>

                <h3 class="h4 mb-3">Data Produk</h3>

                <div class="mb-3">
                    <a href="#" class="btn btn-secondary btn-sm px-3 py-2">Add Product</a>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 10%;">No</th>
                                <th scope="col" style="width: 30%;">Nama Barang</th>
                                <th scope="col" style="width: 20%;">Harga</th>
                                <th scope="col" style="width: 20%;">Stok</th>
                                <th scope="col" style="width: 20%;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>001</td>
                                <td>Buku</td>
                                <td>data</td>
                                <td>60</td>
                                <td>
                                    <a href="#" class="text-decoration-none">Edit</a> | 
                                    <a href="#" class="text-decoration-none">Hapus</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>