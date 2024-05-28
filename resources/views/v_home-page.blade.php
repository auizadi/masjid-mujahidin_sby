@extends('layout.v_template')
@section('content')

{{-- hero --}}
<div class="container-fluid">
    <div class="row">
        <section style="position: relative; height: 100vh; overflow: hidden;">
            <div style="background-image: linear-gradient(180deg, rgba(43, 135, 218, 0.6) 0%, #29c4a9 100%), url('{{ asset('img') }}/background.jpeg'); background-size: cover; background-position: center center; width: 100%; height: 100vh; position: absolute; left:0;">
            </div>
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center" style="width: 100vw;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="p-2">
                                <h1 class="text-light fw-bold">Selamat Datang di Website</h1>
                                <h1 class="text-light fw-bold">Yayasan Masjid Mujahidin Surabaya</h1>
                                <div class="col-md-8">
                                    <h4 class="text-light fw-semibold pt-4 pb-4">Merupakan lembaga yang mendukung & mengelola berbagai kegiatan keagamaan, sosial, dan pendidikan di wilayah Surabaya.</h4> 
                                </div>
                                <div class="button-effect">
                                    <a href="" class="btn btn-light effect effect-2 text-dark fw-bold">Take The Tour</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

{{-- sambutan --}}
<div class="container pt-5">
    <div class="row">
        <div class="col-md-8">
            <h5 class="text-success text-uppercase fw-bold">Sambutan singkat</h5>
            <h2 class="text-dark text-uppercase fw-bold pt-3">ketua yayasan mujahidin surabaya</h2>
            <p class="text-secondary pt-2"> Assalamu’alaikum Warahmatullahi Wabarakatuh para jamaah yang dirahmati Allah SWT.</br>
            </br>Alhamdulillah, puji syukur kehadirat Allah SWT atas segala nikmat dan karunia-Nya, 
            sehingga kita dapat bersilaturahmi secara virtual melalui peluncuran website resmi Masjid 
            Mujahidin Surabaya. Website ini hadir sebagai wujud komitmen kami untuk semakin dekat dengan 
            para jamaah dan masyarakat luas.
            </br> Masjid Mujahidin Surabaya tidak hanya berfungsi sebagai tempat ibadah, namun juga sebagai 
            wadah untuk menyebarkan nilai-nilai Islam, serta berkontribusi aktif dalam bidang pendidikan 
            dan sosial kemasyarakatan. Melalui website ini, kami ingin mempermudah akses informasi 
            mengenai berbagai aktivitas dan program yang kami jalankan, baik di masjid, lembaga amal, 
            maupun lembaga pendidikan yang berada di bawah naungan yayasan kami.</br>
            </br> Website ini akan menampilkan berbagai informasi, seperti : </br>
            <ol class="custom-ol">
                <li>Jadwal sholat dan kajian keislaman</li>
                <li>Kegiatan dan program sosial yang dijalankan oleh lembaga amal</li>
                <li>Informasi pendaftaran dan kegiatan lembaga pendidikan (KB-TK, KB-RA, SD1, SD2, SMP dan SMA Mujahidin)</li>
                <li>Artikel dan konten edukatif</li>
                <li>Donasi online</li>
            </ol>
            </br>Kami berharap, kehadiran website ini dapat menjadi:
            <ol class="custom-ol pt-2">
                <li>Sarana untuk meningkatkan keimanan dan ketaqwaan para jamaah</li>
                <li>Media untuk mempererat silaturahmi antar jamaah dan masyarakat</li>
                <li>Platform untuk mempermudah akses informasi mengenai kegiatan yayasan</li>
                <li>Saluran donasi online yang amanah dan transparan</li>
            </ol>
            </p>
        </div>
        <div class="col-md-4 text-center">
            <img src="{{ asset('img')}}/kepala_yayasan_png.png" alt="" style="width: 400px;">
            <h3 class="text-dark fw-bold pt-3">H. Idris Jahja</h3>
            <h5 class="text-secondary fw-semibold"><em>Ketua Yayasan Masjid Mujahidin Surabaya</em></h5>
        </div>
        <div class="col-md-12">
            <p class="text-secondary">
                Kami senantiasa berupaya untuk terus mengembangkan website ini agar dapat 
                memberikan manfaat yang lebih besar kepada para jamaah dan masyarakat. 
                Mohon dukungan dan doa dari para jamaah agar website ini dapat menjadi 
                sarana kebaikan yang berkelanjutan. Akhir kata, jazakumullahu khairan 
                katsiran kepada semua pihak yang telah berkontribusi dalam pembuatan 
                website ini. Semoga Allah SWT senantiasa melimpahkan rahmat dan hidayah-Nya 
                kepada kita semua. Aamiin yaa rabbal ‘alamiin.</br> </br>
                Wassalamu’alaikum Warahmatullahi Wabarakatuh.
            </p>
        </div>
    
    {{--  --}}
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 mb-2">
                <div class="text-center p-3">
                    <img src="{{ asset('img') }}/logo_smpdin_fix_480_x_515_png.png" alt="" class="my-3 mx-auto d-block" style="width:100px; height:100px;">
                    <div>
                        <h5 class="text-dark fw-bold justify">Pendidikan Berkualitas</h5>
                        <p class="text-secondary justify">Yayasan ini menawarkan program pendidikan yang berkualitas, baik di tingkat dasar, menengah, maupun tinggi. Program pendidikan yang terintegrasi dengan nilai-nilai keislaman & pengembangan berkarakter.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-12 col-md-4 mb-2">
                <div class="text-center p-3">
                    <img src="{{ asset('img') }}/2.png" alt="" class="my-3 img-fluid mx-auto d-block">
                    <div>
                        <h5 class="text-dark fw-bold justify">Pusat Kegiatan Islami</h5>
                        <p class="text-secondary justify">Sebagai landasan bagi Masjid Mujahidin Surabaya, yayasan ini menjadi pusat kegiatan Islami yang menyelenggarakan berbagai kegiatan keagamaan seperti kajian, pengajian, dan pelatihan keIslaman.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-12 col-md-4 mb-2">
                <div class="text-center p-3">
                    <img src="{{ asset('img') }}/3.png" alt="" class="my-3 img-fluid mx-auto d-block">
                    <div>
                        <h5 class="text-dark fw-bold justify">Lembaga Amil Mujahidin</h5>
                        <p class="text-secondary justify">Selain pendidikan, yayasan juga memperhatikan aspek sosial masyarakat. Program pemberdayaan & bantuan kemanusiaan menjadi bukti nyata komitmen yayasan terhadap keseimbangan pendidikan & kepedulian sosial.</p>
                    </div>
                </div>
            </div>
        </div>

        {{--  --}}
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h5 class="text-success text-uppercase fw-bold text-center">Tabel Informasi</h5>
                <h2 class="text-dark text-uppercase fw-bold text-center pt-3 pb-5">Jadwal Khotib Sholat Jumat 2024</h2>
                <div style="position: relative; overflow: hidden; padding-top: 56.25%;">
                    <iframe loading="lazy" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQAACyVDCzN-UT2qiBDMJYECOU7Y67mcGUEuUCjc91QH9_lfuCAvRT-GG0BJR0YieR2q_gP8ue1ZbrW/pubhtml?widget=true&amp;headers=false" style="position: absolute; top: 0; left: 0; width: 100%; height: 500px; border: none;"></iframe>
                </div>
            </div>
        </div>

        {{--  --}}
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h2 class="text-dark text-uppercase fw-bold text-center pb-3">Informasi Kegiatan Terkini</h2>
                <h4 class="text-dark fw-semibold text-center pb-5">Berikut merupakan berita terkini terkait agenda sekolah atau prestasi siswa siswi SMP MUJAHIDIN Surabaya</h2>
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col mb-5">
                          <div class="card h-100 p-3 mb-2" style="margin-right: 30px;">
                            <img src="{{ asset('img') }}/people.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Liputan Acara Akhirussanah SMA MUJAHIDIN Surabaya Tahun Pelajaran 2023-2024</h5>
                              <p class="card-text">by Masdinn | May 27, 2024 | Uncategorized</p>
                              <p class="card-text">Liputan Acara Akhirussanah SMA MUJAHIDIN Surabaya Tahun Pelajaran 2023-2024 Surabaya, 26 Mei 2024 - SMA Mujahidin...</p>
                            </div>
                          </div>
                        </div>
                        <div class="col mb-5">
                          <div class="card h-100 p-3 mb-2" style="margin-right: 30px;">
                            <img src="{{ asset('img') }}/people.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Prestasi Gemilang Siswa Yayasan Masjid Mujahidin Surabaya</h5>
                              <p class="card-text">by Masdinn | May 8, 2024 | Uncategorized</p>
                              <p class="card-text">Prestasi Gemilang Siswa Yayasan Masjid Mujahidin Surabaya Yayasan Masjid Mujahidin Surabaya kembali menorehkan...</p>
                            </div>
                          </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card h-100 p-3 mb-2" style="margin-right: 30px;">
                              <img src="{{ asset('img') }}/people.jpg" class="card-img-top" alt="...">
                              <div class="card-body">
                                <h5 class="card-title">Kajian Safari Dakwah Bunda Astrie Ivo Semarak di Masjid Mujahidin Surabaya</h5>
                                <p class="card-text">by Masdinn | May 7, 2024 | Uncategorized</p>
                                <p class="card-text">Surabaya, 7 Mei 2024 – Senin pagi di cuaca yag cerah, Masjid Mujahidin Surabaya diramaikan dengan Kajian Safari Dakwah...</p>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="text-center">
                        <div class="button-effect pb-5">
                            <a href="" class="btn btn-primary effect effect-3"><h5 class="fw-semibold">Lihat Lainnya</h5></a>
                        </div>
                    </div>
            </div>
        </div>

    </div>
</div>    


@endsection