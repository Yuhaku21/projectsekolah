<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
      body {
      font-family: 'Poppins', sans-serif;
    }
    </style>
  </head>
  <body>
    <!--Navbar--> 
    @include('partial.navbar-user')
      <!--Runner Text-->
      <div class="container mt-3">
        <div class="alert alert-primary" role="alert">
          <marquee behavior="" direction="">Pengumuman pendaftaran siswa baru mulai tanggal 24 Maret 2025 - 28 Maret 2025</marquee>
        </div>
      </div>
    <!--HeroSection-->
    <div class="container mt-3">
      <div class="row align-items-center">
        <!-- Kolom teks -->
        <div class="col-md-6">
          <h2 class="fw-bold">Selamat Datang di SMAN 11 Mataram</h2>
          <p>
            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, <i>consectetur</i>, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.
          </p>
          <a href="#" class="btn btn-dark mt-3" style="font-size: 1.2rem;">Daftar Sekarang</a>
        </div>
        <!-- Kolom gambar -->
        <div class="col-md-6 text-center">
          <img src="{{ asset('images/sekolah.jpg') }}" alt="Gambar Sekolah" height="70%" width="70%">
        </div>
      </div>
    </div>
    <!--Pengumuman-->
    <div class="container mt-5 mb-5">
      <h2 class="text-center"><b>Pengumuman</b></h2>
      <div class="spacer mt-3" style="border-bottom: 2px rgba(188, 184, 184, 0.532) solid; widht: 20%;  margin: 0 auto;"></div>
      <!--Data Pengumuman-->
      <div class="row mt-5">
        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <h3><b>Pembagian Ijasah</b></h3>
              <a href="#" class="btn btn-outline-dark">Lihat Detail</a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <h3><b>Pembagian Jadwal Ujian</b></h3>
              <a href="#" class="btn btn-outline-dark">Lihat Detail</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>