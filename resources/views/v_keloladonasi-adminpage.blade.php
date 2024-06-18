<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin Masjid Mujahidin | Yayasan Masjid Mujahidin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{{ asset('template') }}/css/adminstyle.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="/dashboard"><img src="{{'img'}}/logo_masjid_mujahidin_1_png.png" alt="" width="170" /></a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="/dashboard">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="/kelolaberita">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Kelola Berita
                            </a>
                            <a class="nav-link" href="/keloladonasi">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Kelola Donasi Masuk
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Login Sebagai:</div>
                        Admin
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Donasi</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active">Data Donasi</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <button class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                              <th scope="col">#</th>
                                              <th scope="col">Nama Donatur</th>
                                              <th scope="col">Email</th>
                                              <th scope="col">Telepon</th>
                                              <th scope="col">Nominal</th>
                                              <th scope="col">Tanggal</th>
                                              <th scope="col">Pesan</th>
                                              <th scope="col">Tindakan</th>
                                            </tr>
                                          </thead>
                                          <tbody class="table-group-divider">
                                            <tr>
                                              <th scope="row">1</th>
                                              <td>Anonim</td>
                                              <td>anonim@gmail.com</td>
                                              <td>081125647890</td>
                                              <td>Rp 1.000.000</td>
                                              <td>10 Juni 2024</td>
                                              <td>-</td>
                                              <td><button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                                  <button class="btn btn-success"><i class="fa fa-eye"></i></button>
                                              </td>
                                            </tr>
                                    </table>
                                  </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">© Copyright by Yayasan Mujahidin Surabaya</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('template') }}/js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="{{ asset('template') }}/js/datatables.js"></script>
    </body>
</html>
