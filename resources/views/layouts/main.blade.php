<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'YAPENAS 17 AGUSTUS 1945 Muncar')</title>
  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
</head>
<body>

<!-- Topbar -->
<div class="topbar bg-danger text-white py-1 small">
  <div class="container d-flex justify-content-between">
    <div>
      <i class="fa-solid fa-phone me-2"></i> +62 812-3456-7890
      <span class="ms-3"><i class="fa-solid fa-envelope me-1"></i> info@yapenas-muncar.sch.id</span>
    </div>
    <div>
      <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
      <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
      <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
    </div>
  </div>
</div>


  <!-- Navbar utama -->
  <style>
    .topbar {
  position: relative;
  z-index: 1020;
  transition: margin-top 0.3s ease;
}
.navbar.sticky-top {
  z-index: 1030; /* pastikan navbar selalu di atas */
}

    /* Navbar link style */
.navbar .nav-link {
  color: #dc3545;
  font-weight: 500;
  position: relative;
  padding: 8px 14px;
  transition: color 0.3s ease;
}

.navbar .nav-link::after {
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  width: 0%;
  height: 2px;
  background-color: #dc3545;
  transition: width 0.3s ease;
}

.navbar .nav-link:hover {
  color: #b02a37;
}

.navbar .nav-link:hover::after {
  width: 100%;
}
  </style>
  <nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top">
    <div class="container">
      <a class="navbar-brand fw-bold text-danger d-flex align-items-center" href="/">
        <img src="{{ asset('images/logoYapenas.png') }}" alt="Logo YAPENAS" style="height:40px;" class="me-2">
        YAPENAS <span class="text-dark">17 AGUSTUS 1945</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navMenu">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link text-danger fw-semibold" href="/#about">Tentang</a></li>
          <li class="nav-item"><a class="nav-link text-danger fw-semibold" href="/#institusi">Institusi</a></li>
          <li class="nav-item"><a class="nav-link text-danger fw-semibold" href="/#kegiatan">Kegiatan</a></li>
          <li class="nav-item"><a class="nav-link text-danger fw-semibold" href="/#galeri">Galeri</a></li>
          <li class="nav-item"><a class="nav-link text-danger fw-semibold" href="/#kontak">Kontak</a></li>
          <li class="nav-item"><a class="btn btn-danger btn-sm ms-lg-3 text-white" href="/#donasi">Donasi</a></li>
        </ul>
        <div class="ms-3 d-flex align-items-center">
          <a href="#" class="text-danger me-3"><i class="fa-solid fa-magnifying-glass"></i></a>
          <a href="#" class="text-danger"><i class="fa-solid fa-bars"></i></a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Content -->
  <main>
    @yield('content')
  </main>

  <!-- Footer -->
  <footer class="bg-danger text-white mt-5">
    <div class="container py-4">
      <div class="row align-items-center">
        <div class="col-md-6">
          <p class="mb-0">&copy; <span id="tahun"></span> YAPENAS 17 AGUSTUS 1945 - Muncar. All rights reserved.</p>
        </div>
        <div class="col-md-6 text-md-end small">
          Alamat: Jalan Hayam Wuruk No. 37, Muncar, Banyuwangi
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('js/app.js') }}">
  document.addEventListener("scroll", function() {
  const topbar = document.querySelector(".topbar");
  if (window.scrollY > 50) {
    topbar.style.marginTop = "-40px"; // sembunyikan topbar
  } else {
    topbar.style.marginTop = "0"; // tampilkan lagi
  }
});

  
  </script>
</body>
</html>
