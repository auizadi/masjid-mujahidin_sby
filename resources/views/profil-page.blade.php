@extends('layout.v_template')
@section('title', 'Profil | Masjid Mujahidin')

@section('css')
<link rel="stylesheet" href="{{asset('styleCSS/profil-style.css')}}">
@endsection
@section('content')






  <div class="container-fluid">
    <div class="row align-self-center justify-content-center">
      <div class="col-lg-6 col-md-12 col-12 p-5 order-md-2 order-lg-1 order-2">
        <h1>Profil Yayasan Mujahidin Surabaya</h1>
        <p id="sub">Membangun Harmoni, Menebar Kasih, Menyongsong Kemajuan Bersama Umat.</p>
      </div>
      <div class="col-lg-6 col-md-12 col-12 order-md-1 order-lg-2 order-1" >
        <img src="{{ asset('img/bahan.jpeg') }}" alt="" class="img-responsive">
      </div>
    </div>
  </div>

  <!-- deskripsi -->
  <div class="condes container">
    <div class="row justify-content-center g-5">
      <div class="col-12 col-lg-6 col-md-12">
        <h4 class="ijo my-4" style="letter-spacing: 3px;" id="ijo1">SEJARAH SINGKAT</h4>
        <h2 class="my-3 display-5"  id="story">Yayasan Mujahidin Surabaya</h2>
        <p class="text">
        Yayasan Masjid Mujahidin Surabaya memiliki sejarah yang kaya dan berakar dalam semangat kebersamaan dan keteguhan. Berdiri pada tahun [tahun berdiri], yayasan ini lahir dari tekad masyarakat Surabaya untuk memiliki pusat ibadah dan pusat kegiatan Islami yang berkualitas.
        </p>
        <p class="text">
        Seiring berjalannya waktu, yayasan ini berkembang pesat sebagai landasan bagi Masjid Mujahidin Surabaya, yang menjadi pusat kegiatan keagamaan dan sosial bagi umat Muslim di sekitarnya. Sejak awal, yayasan ini telah mengemban visi untuk memberdayakan masyarakat melalui pendidikan, kesejahteraan sosial, dan pengembangan spiritual.
        </p>
        <p class="text">
        Yayasan Masjid Mujahidin Surabaya telah menjadi tulang punggung berbagai kegiatan, termasuk pendidikan, pelatihan, serta bimbingan spiritual bagi masyarakat sekitar. Program-program sosial yang dijalankan oleh yayasan mencakup bantuan kemanusiaan, pengembangan ekonomi, dan pemberdayaan perempuan.
        </p>
        <p class="text">
        Selama perjalanan panjangnya, yayasan ini telah melibatkan banyak sukarelawan, dermawan, dan pemimpin komunitas yang berkomitmen untuk membangun keberlanjutan dan kesejahteraan bersama. Yayasan Masjid Mujahidin Surabaya juga menjadi tempat berbagai kegiatan keagamaan seperti kajian, tausiyah, dan kegiatan Islami lainnya.
        </p>
        <p class="text">
        Keberhasilan yayasan ini tidak terlepas dari dukungan dan partisipasi aktif masyarakat Surabaya yang turut serta membangun dan mendukung visi yayasan. Melalui perjalanan sejarahnya, Yayasan Masjid Mujahidin Surabaya terus menjadi pusat keberagaman, keberlanjutan, dan kebaikan bagi masyarakat setempat.
        </p>
      </div>
      <div class="col-12 col-lg-6 col-md-12 text-center">
        <img src="{{ asset('img/profile.png') }}" alt="Profile" class="img-fluid">
      </div>
    </div>
  </div>

  <!-- akhir deskripsi -->

  <!-- penjelasan -->
  <div class="kolom-3 container mt-5">
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-10 text-center mb-4 fade-in">
        <img src="{{ asset('img/1.png') }}" alt="" class="my-3 img-fluid">
        <h5 class="fw-bold text-dark">Pendidikan Berkualitas</h5>
        <p class="text-deskripsi">Yayasan ini menawarkan program pendidikan yang berkualitas, baik di tingkat dasar, menengah, maupun tinggi. Program pendidikan yang terintegrasi dengan nilai-nilai keislaman & pengembangan berkarakter.</p>
      </div>

      <div class="col-lg-4 col-md-10 text-center mb-4 fade-in">
        <img src="{{ asset('img/2.png') }}" alt="" class="my-3 img-fluid">
        <h5 class="fw-bold text-dark">Pusat Kegiatan Islami</h5>
        <p class="text-deskripsi">Sebagai landasan bagi Masjid Mujahidin Surabaya, yayasan ini menjadi pusat kegiatan Islami yang menyelenggarakan berbagai kegiatan keagamaan seperti kajian, pengajian, dan pelatihan keIslaman.</p>
      </div>

      <div class="col-lg-4 col-md-10 text-center mb-4 fade-in">
        <img src="{{ asset('img/3.png') }}" alt="" class="my-3 img-fluid">
        <h5 class="fw-bold text-dark">Sinergi Pendidikan & Sosial</h5>
        <p class="text-deskripsi">Selain pendidikan, yayasan juga memperhatikan aspek sosial masyarakat. Program pemberdayaan & bantuan kemanusiaan menjadi bukti nyata komitmen yayasan terhadap keseimbangan pendidikan & kepedulian sosial.</p>
      </div>
    </div>
  </div>


  <!-- akhir penjelasan -->

  <!-- sekilas -->
  <div class="container rounded-3 bg-light my-4 shadow-lg p-4 mb-5">
    <div class="row">
      <div class="col-12 col-lg-6 col-md-12">
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/wtBr_Taex_0?si=LZXDC2HeOQ3Clg63" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      </div>
      <div class="col-12 col-lg-6 col-md-12">
        <h4 class="ijo my-2 fw-bold">SEKILAS TENTANG</h4>
        <p class="display-4" id="story">Cerita Kami</p>
        <p class="text">Yayasan Masjid Mujahidin Surabaya adalah cerminan kepedulian dan dedikasi kami untuk membentuk masyarakat yang berkualitas, berakhlak mulia, dan berdaya saing. Berawal dari tekad kuat dan semangat berbagi, kami memulai perjalanan kami di kota Surabaya.</p>
      </div>
    </div>
    <div class="row ">
      <div class="col-lg-3 col-6 col-md-6 text-center">
        <div class="counter">
          <p class="angka my-3 display-3 fw-semibold"><span data-count="400">0</span>+</p>
          <p class="my-3 text-secondary">SISWA SISWI</p>
        </div>
      </div>
      <div class="col-lg-3 col-6 col-md-6 text-center">
        <div class="counter">
          <p class="angka my-3 display-3 fw-semibold"><span data-count="1000">0</span>+</p>
          <p class="my-3 text-secondary">ALUMNI</p>
        </div>
      </div>
      <div class="col-lg-3 col-6 col-md-6 text-center">
        <div class="counter">
          <p class="angka my-3 display-3 fw-semibold"><span data-count="50">0</span>+</p>
          <p class="my-3 text-secondary">TENAGA PENDIDIK</p>
        </div>
      </div>
      <div class="col-lg-3 col-6 col-md-6 text-center">
        <div class="counter">
        <p class="angka my-3 display-3 fw-semibold"><span data-count="36">0</span>+</p>
        <p class="my-3 text-secondary">MITRA KAMI</p>
        </div>
      </div>
    </div>
  </div>
  <!-- akhir sekilas -->



  <script src="{{ asset('JSAsset/profil.js') }}"></script>

  <!-- akhir JS -->


@endsection
