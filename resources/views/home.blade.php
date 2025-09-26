@extends('layouts.main')

@section('title', 'Beranda - YAPENAS 17 Agustus 1945 Muncar')

@section('content')

<!-- Hero Section -->
<section class="hero position-relative d-flex align-items-center justify-content-center text-center text-white" style="min-height: 100vh; overflow: hidden;">

<!-- Background: 3 foto sejajar -->
<div class="hero-bg d-flex w-100 h-100 position-absolute top-0 start-0" style="overflow: hidden;">
  <div style="flex: 1; height: 100%; background: url('/images/smk.jpg') center/cover no-repeat; opacity: 0.4;"></div>
  <div style="flex: 1; height: 100%; background: url('/images/smp1.webp') center/cover no-repeat; opacity: 0.4;"></div>
  <div style="flex: 1; height: 100%; background: url('/images/smp2.jpg') center/cover no-repeat; opacity: 0.4;"></div>
</div>
  <!-- Overlay warna biar teks makin jelas -->
  <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0, 0, 0, 0.5);"></div>

<!-- Wave di bawah -->
<svg class="position-absolute bottom-0 start-0 w-100" height="120"
     xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
     viewBox="0 0 1300 120" style="display: block; width: 100%; height: 120px; transform: rotateX(180deg); z-index: 2;">
  <path d="M0,0V46.29c47.74,22,120,35,200,25,70-9,130-40,200-50,65-9,135,5,200,20s130,30,200,25c65-5,125-30,190-45s145-15,215,10c60,20,110,60,170,75,50,10,100,5,150,0V0Z"
        opacity=".25" fill="#fff"></path>
  <path d="M0,0V15.81c60,25,120,40,200,35,70-5,130-30,200-40,65-10,135-5,200,5s130,25,200,30c65,5,125-2,190-15s145-20,215-10c60,10,110,40,170,50,50,7,100-3,150-10V0Z"
        opacity=".5" fill="#fff"></path>
  <path d="M0,0V5.63c60,20,120,35,200,35,70,0,130-15,200-25,65-10,135-10,200-5s130,20,200,25c65,5,125-5,190-12s145-12,215-8c60,4,110,15,170,20,50,3,100-2,150-5V0Z"
        fill="#fff"></path>
</svg>




  <!-- Content -->
  <div class="container position-relative" style="z-index: 3;">
    <h1 class="display-3 fw-bold mb-3 animate__animated animate__fadeInDown">
      YAPENAS 17 AGUSTUS 1945<br>MUNCAR
    </h1>
    <p class="lead mb-4 animate__animated animate__fadeInUp animate__delay-1s">
      Membangun generasi dengan semangat kemerdekaan & pendidikan berkualitas di Banyuwangi.
    </p>
    <a href="#tentang" class="btn btn-light btn-lg px-4 py-2 fw-bold shadow-sm hero-btn">
      Pelajari Lebih Lanjut
    </a>
  </div>
</section>

<!-- Tentang Section -->
<section id="tentang" class="py-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <img src="{{ asset('images/yayasan.jpg') }}" class="img-fluid rounded shadow" alt="Tentang YAPENAS">
      </div>
      <div class="col-lg-6 mt-4 mt-lg-0">
        <h2 class="fw-bold text-danger">Tentang YAPENAS</h2>
        <p class="mt-3">
          YAPENAS 17 Agustus 1945 Banyuwangi berdiri pada <strong>24 Desember 1966</strong> 
          di <strong>Jl. Hayam Wuruk No.37, Muncar, Banyuwangi</strong>.  
          Yayasan ini menaungi beberapa institusi pendidikan yang berlandaskan pada semangat kemerdekaan.
        </p>
        <ul class="list-unstyled">
          <li><i class="fa-solid fa-check text-danger me-2"></i>SMP 17 Agustus 1945-1 Muncar</li>
          <li><i class="fa-solid fa-check text-danger me-2"></i>SMP 17 Agustus 1945-2 Muncar</li>
          <li><i class="fa-solid fa-check text-danger me-2"></i>SMK 17 Agustus 1945 Muncar</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Institusi Section -->
<section id="institusi" class="py-5 bg-light">
  <div class="container">
    <h2 class="fw-bold text-center text-danger mb-5">Institusi di Bawah Naungan</h2>
    <div class="row g-4">
      <div class="col-md-6 col-lg-4">
        <div class="card shadow-sm border-0 h-100">
          <img src="{{ asset('images/smp1card.jpg') }}" class="card-img-top" alt="SMP 17-1">
          <div class="card-body">
            <h5 class="fw-bold">SMP 17 Agustus 1945-1 Muncar</h5>
            <p class="text-muted small">Aktif dalam kegiatan belajar, disiplin, dan menjaga lingkungan sekolah.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="card shadow-sm border-0 h-100">
          <img src="{{ asset('images/smp2.jpg') }}" class="card-img-top" alt="SMP 17-2">
          <div class="card-body">
            <h5 class="fw-bold">SMP 17 Agustus 1945-2 Muncar</h5>
            <p class="text-muted small">Terletak di Sumberberas, dengan akreditasi B. Fokus pada pengembangan siswa secara menyeluruh.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="card shadow-sm border-0 h-100">
          <img src="{{ asset('images/smk.jpg') }}" class="card-img-top" alt="SMK 17 Muncar">
          <div class="card-body">
            <h5 class="fw-bold">SMK 17 Agustus 1945 Muncar</h5>
            <p class="text-muted small">Memiliki jurusan AKL, BDP, PH, RPL, TKRO, dan TP. Fokus pada persiapan dunia kerja.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Program Section -->
<section id="program" class="py-5">
  <div class="container">
    <h2 class="fw-bold text-center text-danger mb-5">Program & Keunggulan</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="p-4 shadow-sm rounded bg-white h-100">
          <h5 class="fw-bold">Pendidikan Berkarakter</h5>
          <p class="text-muted">Membentuk siswa dengan semangat kemerdekaan dan disiplin tinggi.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="p-4 shadow-sm rounded bg-white h-100">
          <h5 class="fw-bold">Kompetensi Kejuruan</h5>
          <p class="text-muted">Jurusan keahlian sesuai kebutuhan industri lokal dan nasional.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="p-4 shadow-sm rounded bg-white h-100">
          <h5 class="fw-bold">Ekstrakurikuler</h5>
          <p class="text-muted">Aktivitas pramuka, olahraga, seni, hingga kegiatan sosial masyarakat.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Testimoni -->
<section id="testimoni" class="py-5 bg-light">
  <div class="container">
    <h2 class="fw-bold text-center text-danger mb-5">Apa Kata Mereka</h2>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="bg-white shadow-sm p-4 rounded">
          <p class="mb-1">“Sekolah di bawah YAPENAS membantu saya lebih siap masuk dunia kerja.”</p>
          <h6 class="fw-bold mt-3">– Alumni SMK 17 Agustus 1945 Muncar</h6>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section id="faq" class="py-5">
  <div class="container">
    <h2 class="fw-bold text-center text-danger mb-5">Pertanyaan Umum</h2>
    <div class="accordion" id="faqAccordion">
      <div class="accordion-item">
        <h2 class="accordion-header" id="faq1">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#answer1">
            Bagaimana cara mendaftar?
          </button>
        </h2>
        <div id="answer1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
          <div class="accordion-body">Pendaftaran dapat dilakukan langsung di sekolah atau melalui PPDB online (info di media sosial resmi).</div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="faq2">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#answer2">
            Apa saja jurusan di SMK 17 Agustus 1945 Muncar?
          </button>
        </h2>
        <div id="answer2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">Jurusan: Akuntansi (AKL), Bisnis Daring (BDP), Perhotelan (PH), RPL, TKRO, dan Teknik Permesinan (TP).</div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
