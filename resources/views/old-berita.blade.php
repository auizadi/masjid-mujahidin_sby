@extends('layout.v_template')
@section('title', 'Berita | Masjid Mujahidin')
@section('css')
<link rel="stylesheet" href="{{asset('styleCSS/berita.css')}}">
@endsection

@section('content')



    <!-- topik -->

<div class="container-fluid ">
  <div class="row align-self-center justify-content-center">
    <div class="col-lg-6 col-md-12 col-12 order-md-2 order-lg-1 order-2 p-5" >
      <h1>Berita Terkini</h1>
      <p id="sub">Beragam informasi terkini terkait Yayasan Masjid Mujahidin Surabaya</p>
    </div>
    <div class="col-lg-6 col-md-12 col-12 order-md-1 order-lg-2 order-1">
      <img src="{{ asset('img/bahan2.png') }}" alt="" class="img-responsive">
    </div>
  </div>
</div>

<!-- akhir topik -->

{{-- carousel --}}

<div class="container">
    <div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active ">
        <img src="{{ asset('img/berita1.jpg') }}" class="d-block w-100 c-img" alt="...">
            <div class="carousel-caption top-0 d-none d-md-block">
                <a href="#"><h5 class="bg-success text-light fw-bold fs-1">Kajian Ahad Pagi</h5></a>
                <div class="btn btn-success">Read More</div>
            </div>
      </div>
      <div class="carousel-item ">
        <img src="{{ asset('img/berita2.jpeg') }}" class="d-block w-100 c-img" alt="...">
        <div class="carousel-caption top-1 d-none d-md-block">
            <a href="#"><h5 class="bg-success text-light fw-bold fs-1">Liputan Acara Akhirussanah SMA MUJAHIDIN Surabaya Tahun Pelajaran 2023-2024 <br><p style="line-height: 1em; font-size: 9pt;  font-weight:100;">Liputaan Acara Akhirussanah SMA MUJAHIDIN Surabaya Tahun Pelajaran 2023-2024 Surabaya, 26 Mei 2024 - SMA Mujahidin Surabaya menggelar acara akhirussanah bagi para siswanya pada hari ini ahad, 26 Mei 2024. Acara yang berlangsung di Hotel Arcadia Suraby ini diawali...</p></h5></a>
            <div class="btn btn-success" >Read More</div>
        </div>
      </div>
      <div class="carousel-item ">
        <img src="{{ asset('img/berita3.jpg') }}" class="d-block w-100 c-img" alt="...">
        <div class="carousel-caption top-1 d-none d-md-block">
            <a href="#"><h5 class="bg-success text-light fw-bold fs-1">Prestasi Gemilang Siswa Yayasan Mujahidin Surabaya <br> <p style="line-height: 1em; font-size: 9pt;  font-weight:100;">Prestasi Gemilang Siswa Yayasan Masjid Mujahidin Surabaya kembali menorehkan prestasi membanggakan melalui prestasi yang diraih para siswanya diberbagai bidang. Prestasi ini merupakan bukti nyata komitmen Yayasan Mujahidin...</p></h5></a>
            <div class="btn btn-success">Read More</div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>


<!-- berita -->
<div class="container">

  <h4 class="text-center my-3">KUMPULAN INFORMASI TERKINI</h4>
  <h2 class="text-center my-3">Yayasan Masjid Mujahidin Surabaya</h2>

  <div class="img-berita row mt-2 g-5">
    <div class="col-12 col-md-6 col-lg-4 col-xl-4">
        <a href="#" class="my-3"><img src="{{ asset('img/berita1.jpg') }}" width="300px" alt="" class="mb-4"> </a>
        <br>
        <a class="judul">Kajian Ahad Pagi</a>
        <br>
        <p class="tgl">JUN 1, 2024 | <a href="#">UNCATEGORIZED</a></p>
        

        <a href="#" class="more">READ MORE</a>
    </div>
    <div class="col-12 col-md-6 col-lg-4 col-xl-4">
        <a href="#" class="my-3"><img src="{{ asset('img/berita2.jpeg') }}" width="300px"  alt="" class="mb-4"> </a>
        <br>
        <a class="judul">Liputan Acara Akhirussanah SMA MUJAHIDIN Surabaya Tahun Pelajaran 2023-2024</a>
        <br>
        <p class="tgl">MAY 27, 2024 | <a href="#">UNCATEGORIZED</a></p>
        <p class="isi">Liputan Acara Akhirussanah SMA MUJAHIDIN Surabaya Tahun Pelajaran 2023-2024 Surabaya, 26 Mei 2024 - SMA Mujahidin Surabaya menggelar acara akhirussanah bagi para siswanya pada hari ini Ahad, 26 Mei 2024. Acara yang berlangsung di Hotel Arcadia Surabaya ini diawali...</p>

        <a href="/detailberita" class="more">READ MORE</a>
    </div>
    <div class="col-12 col-md-6 col-lg-4 col-xl-4">
        <a href="#" class="my-3"><img src="{{ asset('img/berita3.jpg') }}" width="300px"  alt="" class="mb-4"> </a>
        <br>
        <a class="judul">Prestasi Gemilang Siswa Yayasan Masjid Mujahidin Surabaya</a>
        <br>
        <p class="tgl">MAY 8, 2024 | <a href="#">UNCATEGORIZED</a></p>
        <p class="isi">Prestasi Gemilang Siswa Yayasan Masjid Mujahidin Surabaya Yayasan Masjid Mujahidin Surabaya kembali menorehkan prestasi membanggakan melalui gemilangnya prestasi yang diraih para siswanya di berbagai bidang. Prestasi ini merupakan bukti nyata komitmen Yayasan Masjid...</p>

        <a href="#" class="more">READ MORE</a>
    </div>
    <div class="col-12 col-md-6 col-lg-4 col-xl-4">
        <a href="#" class="my-3"><img src="{{ asset('img/berita4.jpg') }}" width="300px"  alt="" class="mb-4"> </a>
        <br>
        <a class="judul">Kajian Safari Dakwah Bunda Astrie Ivo Semarak di Masjid Mujahidin Surabaya</a>
        <br>
        <p class="tgl">MAY 7, 2024 | <a href="#">UNCATEGORIZED</a></p>
        <p class="isi">Surabaya, 7 Mei 2024 – Senin pagi di cuaca yag cerah, Masjid Mujahidin Surabaya diramaikan dengan Kajian Safari Dakwah bersama Bunda Astrie Ivo dengan tema “Baiti Jannati” yang diselenggarakan oleh Jamaah Wanita Masjid Mujahidin bersama Bidang Pendidikan Yayasan...</p>

        <a href="#" class="more">READ MORE</a>
    </div>
    



  </div>
    <div class="next1 position-relative">
        <a href="/berita" class="position-absolute top-50 end-0 translate-middle-y">Next Entries<i class="fa-solid fa-angles-right" style="color: #4449E0;"></i></a>
    </div>
</div>

<!-- akhir berita -->



@endsection