@extends('layout.v_template')
@section('title', 'Lembaga Amal Mujahidin | Masjid Mujahidin')
@section('css')
<link rel="stylesheet" href="{{asset('styleCSS/berita.css')}}">
@endsection
@section('content')

    <!-- topik -->

<div class="container-fluid ">
  <div class="row align-self-center justify-content-center">
    <div class="col-lg-6 col-md-12 order-md-2 order-lg-1 order-2" >
      <h1>Donasi</h1>
      <p id="sub"></p>
    </div>
    <div class="col-lg-6 col-md-12 order-md-1 order-lg-2 order-1">
      <img src="{{ asset('img/bahan2.png') }}" alt="" class="img-responsive">
    </div>
  </div>
</div>

<!-- akhir topik -->

<!-- Donasi -->
<div class="container">

  <h4 class="text-center my-3">Donasi Online</h4>
  <h2 class="text-center my-3">Lembaga Amal Mujahidin </h2>
  <div class="img-berita row mt-2 g-5 mb-5 justify-content-center">
    <div class="col-12 col-md-6 col-lg-4 col-xl-4 justify-content-lg-center">
        <a href="#" class="my-3"><img src="{{ asset('img')}}/kurban.webp" width="300" alt="" class="mb-4"> </a>
        <br>
        <h5 class="text-dark fw-bold">Sedekah Daging untuk Yatim, Dhuafa dan Lansia</h5>
        <br>
        <div class="col-md-12">
            <div class="progress">
                <div class="progress-bar" style="width:1%; background:#018947;">
                </div>
            </div>
        </div>
        <p class="tgl">Rp 1.000.000</p>
        <p class="isi">terkumpul dari Rp 302.910.000</p>
        <button class="btn btn-success"><a href="/formdonasi" class="text-light text-decoration-none fw-semibold">Donasi</a></button>
    </div>
  </div>

<!-- akhir berita -->



@endsection
