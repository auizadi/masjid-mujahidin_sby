<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Masjid Mujahidin | Yayasan Masjid Mujahidin</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('template') }}/css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="{{ asset('template') }}/css/style.css" rel="stylesheet">
    <link href="{{ asset('template') }}/css/headers.css" rel="stylesheet">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

     <!--Favicon-->
     <link rel="shortcut icon" href="{{ asset('img') }}/logo_masjid_mujahidin_png.png" type="image/x-icon">
     <link rel="icon" href="{{ asset('img') }}/logo_masjid_mujahidin_png.png" type="image/x-icon">
     <link rel="stylesheet" href="">

     
  </head>
  <body>

    <main>
    <div class="container-fluid">
        
        @include('layout.v_navbar')

    </div>

    @yield('content')
        
    </main>

    <section style="position: relative; margin-top:100px;">
        <img src="{{ asset('img') }}/overlay_background.png" class="img-fluid" alt="Footer Image" style="width: 100%; height: auto;">

        <!-- Overlay -->
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="p-2">
                            <h1 class="text-dark fw-bold">Beri Saran Untuk Kami</h1>
                            <div class="col-md-8">
                            <h5 class="text-dark fw-semibold">Bantu kami untuk lebih baik lagi kedepannya dengan mengirimkan kritik dan saran yang membangun, melalui email kami pada 
                                <a href="kontak@masjidmujahidin-sby.or.id" class="text-primary">admin@masjidmujahidin-sby.or.id</a> atau melalui nomor telepon 
                                <a href="https://www.google.com/search?q=masjid+yayasan+mujahidin&oq=masjid+yayasan+mujahidin&gs_lcrp=EgZjaHJvbWUyBggAEEUYOTIGCAEQRRg8MgYIAhBFGDwyBggDEEUYPDIGCAQQLhhA0gEJMTIwMDlqMGoxqAIAsAIA&sourceid=chrome&ie=UTF-8#" class="text-primary">(031) 3291823</a></h5>
                            </div>
                            <div class="button-effect">
                            <a href="/kontak" class="btn btn-primary effect effect-1 fw-bold">Kontak Kami</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  <!-- Footer -->
  <footer class="text-lg-start text-white" style="background-color: #018947">
    <!-- Grid container -->
    <div class="container">
        <!--Grid row-->
        <div class="row row-section mt-5">
            <!-- Grid column -->
            <div class="col-lg-4 col-md-6 f-section">
                <img src="{{'img'}}/logo_masjid_mujahidin_1_png.png" alt="" width="100%" height="auto">
                <p class="text-justify">
                    <span style="display: inline-block; text-align: justify; font-size: 14px;">
                        Yayasan Masjid Mujahidin Surabaya merupakan lembaga yang mendukung & mengelola berbagai kegiatan keagamaan, sosial, dan pendidikan di wilayah Surabaya. Kami berperan penting sebagai agen positif dalam membangun kebersamaan & kerukunan di masyarakat.
                    </span>
                </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-4 col-md-6 f-section">
                <h5 class="mb-4 fw-bold">Kunjungi Kami:</h5>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7916.4741121683055!2d112.733774!3d-7.213777!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f8c477e1c719%3A0x8a265944e3b20099!2sMasjid%20Mujahidin!5e0!3m2!1sid!2sid!4v1716721787227!5m2!1sid!2sid" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-4 col-md-12 f-section">
                <h5 class="mb-2 fw-bold">Ikuti Kami di:</h5>
                <p class="d-flex align-items-center icon-text"><i class="fa-solid fa-earth-asia fa-2x"></i><span class="">masjidmujahidin-sby.or.id</span></p>
                <p class="d-flex align-items-center icon-text"><i class="fa-solid fa-square-phone fa-2x"></i><span class="">031 329 1823</span></p>
                <p class="d-flex align-items-center icon-text"><i class="fa-brands fa-square-facebook fa-2x"></i><span class="">Yayasan Mujahidin Surabaya</span></p>
                <p class="d-flex align-items-center icon-text"><i class="fa-brands fa-youtube fa-2x"></i><span class="">Yayasan Mujahidin Surabaya</span></p>
            </div>
            <!-- Grid column -->
        </div>
        <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-white f-row" style="background-color: #017232">
        <p class="mx-auto">
            © Copyright by Yayasan Mujahidin Surabaya
        </p>
    </div>
    <!-- Copyright -->
  </footer>

  <!-- Footer -->

    <script src="{{ asset('template') }}/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>