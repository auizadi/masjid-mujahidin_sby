<header class="d-flex flex-wrap justify-content-center py-3">
<div class="d-flex align-items-center mb-2 mb-md-0 me-md-auto text-dark text-decoration-none">
    <img src="{{'img'}}/logo_masjid_mujahidin_png.png" class="img-logo" alt="Logo" width="50" height="50">
</div>



<ul class="nav nav-pills align-items-center" id="navbar">
  <li class="nav-item"><a href="/" class="nav-link" aria-current="page">Home</a></li>
  <li class="nav-item"><a href="/profil" class="nav-link">Profil</a></li>
  <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="/bidang">Bidang</a>
      <ul class="dropdown-menu dropdown-menu-end fade-down">
          <li><a class="dropdown-item" href="#">Dakwah &#038; Ketakmiran</a></li>
          <li class="nav-item dropstart">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pendidikan</a>
              <ul class="dropdown-menu">
                  <li class="dropdown-item"><a href="http://kbtkmujahidin-sby.sch.id">KBTK Mujahidin</a></li>
                  <li class="dropdown-item"><a href="http://kbramujahidin-sby.sch.id">KBRA Mujahidin</a></li>
                  <li class="dropdown-item"><a href="https://sdmujahidin1-sby.sch.id/">SD Mujahidin 1</a></li>
                  <li class="dropdown-item"><a href="http://sdmujahidin2-sby.sch.id">SD Mujahidin 2</a></li>
                  <li class="dropdown-item"><a href="http://smpmujahidin-sby.sch.id">SMP Mujahidin</a></li>
                  <li class="dropdown-item"><a href="http://smamujahidin-sby.sch.id">SMA Mujahidin</a></li>
              </ul>
          </li>
          <li class="nav-item dropstart">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Ekonomi</a>
              <ul class="dropdown-menu">
                  <li class="dropdown-item"><a href="#">Lembaga Amal Mujahidin</a></li>
                  <li class="dropdown-item"><a href="#">UBO</a></li>
                  <li class="dropdown-item"><a href="#">Suara Mujahidin Plus</a></li>
              </ul>
          </li>
          <li><a class="dropdown-item" href="#">Kesekretariatan</a></li>
      </ul>
  </li>
  <li class="nav-item"><a href="#" class="nav-link">Galeri</a></li>
  <li class="nav-item"><a href="/berita" class="nav-link">Berita</a></li>
  <li class="nav-item"><a href="/kontak" class="nav-link">Kontak</a></li>
</ul>

</header>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    const currentPath = window.location.pathname;
    const navbarLinks = document.querySelectorAll("#navbar .nav-link");

    navbarLinks.forEach(link => {
        if (link.getAttribute("href") === currentPath) {
            link.classList.add("active");
        }
    });
});

</script>

  {{-- <ul class="nav nav-pills align-items-center">
    <li class="nav-item"><a href="/" class="nav-link active" aria-current="page">Home</a></li>
    <li class="nav-item"><a href="/profil" class="nav-link">Profil</a></li>
    <li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="/bidang">Bidang</a>
		    <ul class="dropdown-menu dropdown-menu-end fade-down">
			  <li><a class="dropdown-item" href="#"> Dakwah &#038; Ketakmiran</a></li>
        <li class="nav-item dropstart">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Pendidikan
              </a>
              <ul class="dropdown-menu">
                <li class="dropdown-item"><a href="http://kbtkmujahidin-sby.sch.id">KBTK Mujahidin</a></li>
                <li class="dropdown-item"><a href="http://kbramujahidin-sby.sch.id">KBRA Mujahidin</a></li>
                <li class="dropdown-item"><a href="https://sdmujahidin1-sby.sch.id/">SD Mujahidin 1</a></li>
                <li class="dropdown-item"><a href="http://sdmujahidin2-sby.sch.id">SD Mujahidin 2</a></li>
                <li class="dropdown-item"><a href="http://smpmujahidin-sby.sch.id">SMP Mujahidin</a></li>
                <li class="dropdown-item"><a href="http://smamujahidin-sby.sch.id">SMA Mujahidin</a></li>
              </ul>
        </li>
        <li class="nav-item dropstart">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ekonomi
          </a>
          <ul class="dropdown-menu">
            <li class="dropdown-item"><a href="#"></a>Lembaga Amal Mujahidin</li>
            <li class="dropdown-item"><a href="#"></a>UBO</li>
            <li class="dropdown-item"><a href="#"></a>Suara Mujahidin Plus</li>            
          </ul>
    </li>
			  <li><a class="dropdown-item" href="#"> Kesekretariatan</a></li>
      </ul>
		</li>
    <li class="nav-item"><a href="#" class="nav-link">Galeri</a></li>
    <li class="nav-item"><a href="/berita" class="nav-link">Berita</a></li>
    <li class="nav-item"><a href="/kontak" class="nav-link">Kontak</a></li>
  </ul>

</header>


</header> --}}
