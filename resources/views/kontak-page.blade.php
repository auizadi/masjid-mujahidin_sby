@extends('layout.v_template')
@section('title', 'Kontak | Masjid Mujahidin')
@section('css')
<link rel="stylesheet" href="{{asset('styleCSS/kontak.css')}}">
@endsection
@section('content')








    {{-- atas --}}
    <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-md-12 order-md-2 order-lg-1 order-2 p-5">
            <h1 id="h1atas">Kontak Kami</h1>
            <p id="patas">Bantu kami agar selalu menjadi lebih baik</p>
          </div>
          <div class="col-lg-6 col-md-12 order-md-1 order-lg-2 order-1">
            <img src="{{ asset('img/bahan.jpeg') }}" alt="" class="img-fluid ">
          </div>
        </div>
      </div>



<!-- Kotak Saran -->

  <div class="surel container shadow-lg">
    <div class="row">
      <div class="col-lg-8 col-md-12" >
        <p class=" m-3 fs-4" id="surel">Surel Kami</p>
        <h2 class="m-3 display-6" id="kirim">Kirim Pesan pada Kami</h2>

      <div class="container">
        <div class="row">
            <div class="col-md-6">
                <label for="exampleFormControlInput1" class="form-label"></label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nama">
            </div>
            <div class="col">
                <label for="exampleFormControlInput1" class="form-label"></label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Alamat Surel">
            </div>



              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label"></label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="7" placeholder="Pesan"></textarea>
              </div>


          <div class="col-12 d-grid gap-2 d-md-flex justify-content-md-end my-3">

            <button class="button fw-bold display-5 rounded-pill text-center" type="button"><span class="text-center">KIRIM PESAN</span></button>
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
<div class="confaq container-md">
      <div class="row">

        <div class="col-lg-6 col-md-12">
          <img src="{{ asset('img/FAQ.png') }}" alt="" style="width: 500px;" class="img-fluid">
          <h2 class="faq display-5 my-3">Frequently Ask Question</h2>
          <p class="text-dani">Berisi beberapa pertanyaan yang sering diajukan beserta jawabannya untuk memberikan pemahaman yang lebih baik kepada Anda. Hal ini merupakan sumber informasi yang komprehensif untuk menjawab pertanyaan umum dan membantu mengatasi kebingungan yang mungkin muncul. Dalam sebuah FAQ ini, Anda dapat menemukan informasi terkait proses, kebijakan, atau layanan, yang mempermudah akses informasi yang dibutuhkan tanpa perlu menghubungi langsung pihak terkait.</p>
        </div>


        <div class="col-lg-6 col-md-12 my-4">

        <div class="accordion text-light">
            <div class="question">
                <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, autem.</h4>
                <i class="icon fa-solid fa-caret-down"></i>
            </div>
            <div class="answer text-light">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum qui commodi itaque explicabo blanditiis ipsam molestias consectetur ab et culpa!
            </div>
        </div>
        <div class="accordion text-light">
            <div class="question">
                <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, autem.</h4>
                <i class="icon fa-solid fa-caret-down"></i>
            </div>
            <div class="answer text-light">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum qui commodi itaque explicabo blanditiis ipsam molestias consectetur ab et culpa!
            </div>
        </div>
        <div class="accordion text-light">
            <div class="question">
                <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, autem.</h4>
                <i class="icon fa-solid fa-caret-down"></i>
            </div>
            <div class="answer text-light">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum qui commodi itaque explicabo blanditiis ipsam molestias consectetur ab et culpa!
            </div>
        </div>
        <div class="accordion text-light">
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


@endsection
