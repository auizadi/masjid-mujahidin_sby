@extends('layout.v_template')
@section('content')



    <link rel="stylesheet" href="{{ asset('styleCSS/kontak.css') }}">
    <!-- font -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,800;1,800&family=Poppins:wght@500;700&display=swap" rel="stylesheet">
    <!-- akhir font -->
    <!-- icon -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"/>
    <!-- akhir icon -->
    
<!-- Kotak Saran -->
  <div class="container-md rounded-4 shadow-lg my-4">
    <div class="row">
      <div class="col-lg-8 col-md-12" >
        <p class=" m-3 fs-4" id="surel">Surel Kami</p>
        <h2 class="m-3 display-6" id="kirim">Kirim Pesan pada Kami</h2>

      <div class="container-md">
        <div class="row">
          <div class="col-md-6 mb-3">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label"></label>
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nama">
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label"></label>
              <input type="email" class="form-control" id="exampleFormControlInput1"  placeholder="Alamat Surel">
            </div>
          </div>
            <div class="col-12 mb-3">
              <div class="my-3">
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="7" placeholder="Pesan"></textarea>
            </div>
          </div>

          <div class="col-12 d-grid gap-2 d-md-flex justify-content-md-end my-3">

            <button class="btn fw-bold display-5 rounded-pill" type="button">KIRIM PESAN</button>
          </div>
        </div>
      </div>

      </div>
      <div class="col-lg-4 col-md-12 rounded-end-4" id="ijo">
        <div class="mx-4">
          <h3 class="pendek text-light fw-bold my-4">Informasi</h3>
          <h2 class="text-light my-4" id="kirim-ijo">Kontak atau <br>Kunjungi Kami di:</h2>
          <h3 class="text-light fw-bold my-4">ALAMAT SUREL</h3>
          <p class="panjang text-light my-4">admin@masjidmujahidin-sby.sch.id</p>
          <h3 class="pendek text-light fw-bold my-4">LOKASI</h3>
          <p class="panjang text-light my-4">Jl.Tanjung Perak Barat No.275,<br>Kec. Pabean Cantikan, Surabaya,<br>Jawa Timur 60165</p>
          <h3 class="pendek text-light fw-bold my-4">TELEPON</h3>
          <p class="panjang text-light my-4">(031) 329 1823 (selama jam kerja)</p>
        </div>
       

      </div>
    </div>
  </div>
<!-- akhir Kotak Saran -->

<!-- FAQ -->
<div class="container my-4">
      <div class="row">

        <div class="col-md-6">
          <img src="../img/FAQ.png" alt="" style="width: 500px;">
          <h2 class="faq display-5 my-3">Frequently Ask Question</h2>
          <p class="text-dani">Berisi beberapa pertanyaan yang sering diajukan beserta jawabannya untuk memberikan pemahaman yang lebih baik kepada Anda. Hal ini merupakan sumber informasi yang komprehensif untuk menjawab pertanyaan umum dan membantu mengatasi kebingungan yang mungkin muncul. Dalam sebuah FAQ ini, Anda dapat menemukan informasi terkait proses, kebijakan, atau layanan, yang mempermudah akses informasi yang dibutuhkan tanpa perlu menghubungi langsung pihak terkait.</p>
        </div>
        

        <div class="col-md-6">
          
        <div class="accordion rounded-4 text-light">
            <div class="question">
                <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, autem.</h4>
                <i class="icon fa-solid fa-caret-down"></i>
            </div>
            <div class="answer text-light">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum qui commodi itaque explicabo blanditiis ipsam molestias consectetur ab et culpa!
            </div>
        </div>
        <div class="accordion rounded-4 text-light">
            <div class="question">
                <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, autem.</h4>
                <i class="icon fa-solid fa-caret-down"></i>
            </div>
            <div class="answer text-light">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum qui commodi itaque explicabo blanditiis ipsam molestias consectetur ab et culpa!
            </div>
        </div>
        <div class="accordion rounded-4 text-light">
            <div class="question">
                <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, autem.</h4>
                <i class="icon fa-solid fa-caret-down"></i>
            </div>
            <div class="answer text-light">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum qui commodi itaque explicabo blanditiis ipsam molestias consectetur ab et culpa!
            </div>
        </div>
        <div class="accordion rounded-4 text-light">
            <div class="question">
                <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, autem.</h4>
                <i class="icon fa-solid fa-caret-down"></i>
            </div>
            <div class="answer text-light">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum qui commodi itaque explicabo blanditiis ipsam molestias consectetur ab et culpa!
            </div>
        </div>

        </div>
  </div>
</div>
<!-- akhir FAQ -->
   

    <!-- JS -->
      <script src="{{ asset('JSAsset/kontak.js') }}"></script>
    <!-- akhir JS -->
  {{-- </body>
</html> --}}

@endsection