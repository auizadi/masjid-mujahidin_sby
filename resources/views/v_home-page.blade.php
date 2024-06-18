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
                                
                                <p class="selamat text-light fw-bold">Selamat Datang di Website</p>
                                
                                <p class="masjid text-light fw-bold">Yayasan Masjid Mujahidin Surabaya</p>
                                <div class="col-md-7">
                                    <p class="text-light pt-4 pb-4">Merupakan lembaga yang mendukung & mengelola berbagai kegiatan keagamaan, sosial, dan pendidikan di wilayah Surabaya.</p> 
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
<div class="sambutan container pt-5">
    <div class="row">
        <div class="col-lg-6 col-md-12 col-12">
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
            </br>
            <p>Kami berharap, kehadiran website ini dapat menjadi:</p>
            <ol class="custom-ol pt-2">
                <li>Sarana untuk meningkatkan keimanan dan ketaqwaan para jamaah</li>
                <li>Media untuk mempererat silaturahmi antar jamaah dan masyarakat</li>
                <li>Platform untuk mempermudah akses informasi mengenai kegiatan yayasan</li>
                <li>Saluran donasi online yang amanah dan transparan</li>
            </ol>
            </p>
        </div>
        <div class="ketua col-lg-6 col-md-12 col-12 text-center">
            <img src="{{ asset('img')}}/kepala_yayasan_png.png" alt="" style="width: 500px;">
            <h3 class="text-dark fw-bold pt-3">H. Idris Jahja</h3>
            <p class=" fw-semibold">Ketua Yayasan Masjid Mujahidin Surabaya</p>
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
            <div class="col-lg-4 col-12 col-md-12 mb-2">
                <div class="text-center p-3">
                    <img src="{{ asset('img') }}/logo_smpdin_fix_480_x_515_png.png" alt="" class="my-3 mx-auto d-block" style="width:100px; height:100px;">
                    <div>
                        <h5 class="text-dark fw-bold justify">Pendidikan Berkualitas</h5>
                        <p class="text-secondary justify">Yayasan ini menawarkan program pendidikan yang berkualitas, baik di tingkat dasar, menengah, maupun tinggi. Program pendidikan yang terintegrasi dengan nilai-nilai keislaman & pengembangan berkarakter.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-12 col-md-12 mb-2">
                <div class="text-center p-3">
                    <img src="{{ asset('img') }}/2.png" alt="" class="my-3 img-fluid mx-auto d-block">
                    <div>
                        <h5 class="text-dark fw-bold justify">Pusat Kegiatan Islami</h5>
                        <p class="text-secondary justify">Sebagai landasan bagi Masjid Mujahidin Surabaya, yayasan ini menjadi pusat kegiatan Islami yang menyelenggarakan berbagai kegiatan keagamaan seperti kajian, pengajian, dan pelatihan keIslaman.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-12 col-md-12 mb-2">
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
                    <iframe loading="lazy" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQAACyVDCzN-UT2qiBDMJYECOU7Y67mcGUEuUCjc91QH9_lfuCAvRT-GG0BJR0YieR2q_gP8ue1ZbrW/pubhtml?widget=true&amp;headers=false" style="position: absolute; top: 0; left: 0; width: 100%; height: 700px; border: none;"></iframe>
                </div>
            </div>
        </div>

        {{--  --}}
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h2 class="text-dark text-uppercase fw-bold text-center pb-3 pt-5">Informasi Kegiatan Terkini</h2>
                <h4 class="text-dark fw-semibold text-center pb-5">Berikut merupakan berita terkini terkait agenda sekolah atau prestasi siswa siswi SMP MUJAHIDIN Surabaya</h2>
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col-lg-4 col-md-12 col-12 mb-5">
                          <div class="card h-100 p-3 mb-2" style="margin: 30px;">
                            <img src="{{ asset('img/berita1.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title fw-semibold text-dark"><a href="/detailberita" class="text-decoration-none">Kajian Ahad Pagi</a></h5>
                              <p class="card-text fw-semibold ">by Masdinn | Jun 1, 2024 | Uncategorized</p>
                              <p class="card-text"></p>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-12 mb-5">
                            <div class="card h-100 p-3 mb-2" style="margin: 30px;">
                              <img src="{{ asset('img/berita3.jpg') }}" class="card-img-top" alt="...">
                              <div class="card-body">
                                <h5 class="card-title fw-semibold text-dark"><a href="/detailberita" class="text-decoration-none">Liputan Acara Akhirussanah SMA MUJAHIDIN Surabaya Tahun Pelajaran 2023-2024</a></h5>
                              <p class="card-text fw-semibold ">by Masdinn | May 27, 2024 | Uncategorized</p>
                              <p class="card-text fw-semibold ">Liputan Acara Akhirussanah SMA MUJAHIDIN Surabaya Tahun Pelajaran 2023-2024 Surabaya, 26 Mei 2024 - SMA Mujahidin...</p>
                              </div>
                            </div>
                          </div>
                        <div class="col-lg-4 col-md-12 col-12 mb-5">
                          <div class="card h-100 p-3 mb-2" style="margin: 30px;">
                            <img src="{{ asset('img/berita2.jpeg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title fw-semibold text-dark"><a href="/detailberita" class="text-decoration-none">Prestasi Gemilang Siswa Yayasan Masjid Mujahidin Surabaya</a></h5>
                              <p class="card-text fw-semibold ">by Masdinn | May 8, 2024 | Uncategorized</p>
                              <p class="card-text fw-semibold ">Prestasi Gemilang Siswa Yayasan Masjid Mujahidin Surabaya Yayasan Masjid Mujahidin Surabaya kembali menorehkan...</p>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="text-center my-5">
                        <a target="_blank" href="/"><button type="button" class="btn btn-success px-4 py-2 fw-bold fs-5" >Lihat Lainnya</button> </a>
                    </div>
            </div>
        </div>

    </div>
</div>    


@endsection