<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin Masjid Mujahidin | Yayasan Masjid Mujahidin</title>
    <link href="{{ asset('template') }}/css/adminstyle.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

    <!--Favicon-->
    <link rel="shortcut icon" href="{{ asset('img') }}/logo_masjid_mujahidin_png.png" type="image/x-icon">
    <link rel="icon" href="{{ asset('img') }}/logo_masjid_mujahidin_png.png" type="image/x-icon">
</head>

<body>
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <div class="text-center mt-3">
                                        <img src="{{ asset('img') }}/logo_masjid_mujahidin_png.png" alt=""
                                            class="img-responsive" width="100px;">
                                    </div>
                                    <h3 class="text-center font-weight-light my-2">Login</h3>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputEmail" type="email"
                                                placeholder="Email" />
                                            <label for="inputEmail">Email address</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputPassword" type="password"
                                                placeholder="Password" />
                                            <label for="inputPassword">Password</label>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <a class="btn btn-success" href="index.html">Login</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">© Copyright by Yayasan Mujahidin Surabaya</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="{{ asset('template') }}/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>
