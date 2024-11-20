<?= $this->extend('templates/index'); ?>

<?= $this->section('content'); ?>

    <!-- Slides -->
<div class="container">
  <div id="carouselExampleCaptions" class="carousel carousel-dark slide mb-5"  data-bs-ride="carousel" style="background-size: cover;" >
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" style="height: 500px;">
        <img src="slide3.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-flex flex-column justify-content-center align-items-center text-center" style="color:rgb(255, 255, 255); height: 100%;">
          <h2 class="display-5 fw-bold">Selamat Datang di Kost Kita</h2>
        </div>
      </div>
      <div class="carousel-item" style="height: 500px;">
        <img src="slide2.webp" class="d-block w-100" alt="...">
        <div class="carousel-caption d-flex flex-column justify-content-center align-items-end text-end" style="color:rgb(0, 0, 0); height: 100%;">
          <h5 class="display-6 fw-bold">Desain Kamar Milenial</h5>
          <p class="fw-bold">Harga mulai dari 1 jutaan</p>
        </div>
      </div>
      <div class="carousel-item" style="height: 500px;">
        <img src="slide1.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block" style="color: white;">
          <h5 class="display-6 fw-bold">Jangan Takut Merantau</h5>
          <p>Kost Kita memfasilitasi berbagai kost sesuai kebutuhan Anda</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Search -->
  <div class="container mb-5" style="margin-top: -30px;">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Ketik lokasi sekitar Purwokerto atau Nama kost" aria-label="Search">
          <button class="btn" type="submit" style="width: 150px; background-color: rgba(224,170,193,1) ; color: rgb(0, 0, 0);">Cari Kost</button>
        </form>
      </div>
    </div>
  </div>

  <!-- sewaKost -->
  <div class="container-fluid pt-5 pb-5 bg-light" style="margin-top: -50px;">
    <div class="container text-left">
      <h2 class="display-7 fw-bold" id="sewaKost">REKOMENDASI KOST</h2>
      <div class="row pt-4 gx-4 gy-4">
        
        <!-- Kost 1 -->
        <div class="col-md-4">
          <div class="card crop-img">
            <img
              src="kost.jpg"
              class="card-img-top"
              width="200"
              height="200"
            />
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <h5 class="card-title">Kost Putri</h5>
                <p class="text-muted" style="font-size: 0.9em;">Karangklesem, PWT Selatan</p>
              </div>
              <p class="card-text">Rp 800.000 / bulan</p>
              <h5 class="card-text">Rumah Kost Ummi</h5>
            </div>
          </div>
        </div>

        <!-- Kost 2 -->
        <div class="col-md-4">
          <div class="card crop-img">
            <img
              src="kos.jpg"
              class="card-img-top"
              width="200"
              height="200"
            />
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <h5 class="card-title">Kost Putra</h5>
                <p class="text-muted" style="font-size: 0.9em;">Purwokerto Selatan</p>
              </div>
              <p class="card-text">Rp 700.000 / bulan</p>
              <h5 class="card-text">Rumah Kost Abi</h5
                >
            </div>
          </div>
        </div>
        
        <!-- Kost 3 -->
        <div class="col-md-4">
          <div class="card crop-img">
            <img
              src="Cove-The-Day.jpg"
              class="card-img-top"
              width="200"
              height="200"
            />
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <h5 class="card-title">Kost Putra</h5>
                <p class="text-muted" style="font-size: 0.9em;">Purwokerto Selatan</p>
              </div>
              <p class="card-text">Rp 700.000 / bulan</p>
              <h5 class="card-text">Rumah Kost Abi</h5
                >
              </div>
          </div>
        </div>
        <div class="text-center mt-4">
        <button class="btn" type="submit" style="background-color: rgba(224,170,193,1) ; color: rgb(0, 0, 0);">Lihat Selengkapnya</button>
        </div>
      </div>
    </div>
  </div>

  <!-- kostTerbaru -->
  <div class="container-fluid pt-5 pb-5 bg-light" style="margin-top: -50px;">
    <div class="container text-left">
      <h2 class="display-7 fw-bold" id="kostTerbaru">KOST TERBARU</h2>
      <div class="row pt-4 gx-4 gy-4">
        <!-- Kost 1 -->
        <div class="col-md-4">
          <div class="card crop-img">
            <img
              src="Cove-The-Day-small.jpg"
              class="card-img-top"
              width="200"
              height="200"
            />
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <h5 class="card-title">Kost Putri</h5>
                <p class="text-muted" style="font-size: 0.9em;">Karangklesem, PWT Selatan</p>
              </div>
              <p class="card-text">Rp 800.000 / bulan</p>
              <h5 class="card-text">Rumah Kost Ummi</h5>
            </div>
          </div>
        </div>

        <!-- Kost 2 -->
        <div class="col-md-4">
          <div class="card crop-img">
            <img
              src="Cove-Superior-small.jpg"
              class="card-img-top"
              width="200"
              height="200"
            />
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <h5 class="card-title">Kost Putra</h5>
                <p class="text-muted" style="font-size: 0.9em;">Purwokerto Selatan</p>
              </div>
              <p class="card-text">Rp 700.000 / bulan</p>
              <h5 class="card-text">Rumah Kost Abi</h5>
            </div>
          </div>
        </div>
        
        <!-- Kost 3 -->
        <div class="col-md-4">
          <div class="card crop-img">
            <img
              src="Cove-Superior3.jpg"
              class="card-img-top"
              width="200"
              height="200"
            />
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <h5 class="card-title">Kost Putra</h5>
                <p class="text-muted" style="font-size: 0.9em;">Purwokerto Selatan</p>
              </div>
              <p class="card-text">Rp 700.000 / bulan</p>
              <h5 class="card-text">Rumah Kost Abi</h5>
            </div>
          </div>
        </div>
        
        <!-- Kost 4 -->
        <div class="col-md-4">
          <div class="card crop-img">
            <img
              src="Cove-small.jpg"
              class="card-img-top"
              width="200"
              height="200"
            />
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <h5 class="card-title">Kost Putra</h5>
                <p class="text-muted" style="font-size: 0.9em;">Purwokerto Selatan</p>
              </div>
              <p class="card-text">Rp 700.000 / bulan</p>
              <h5 class="card-text">Rumah Kost Abi</h5>
            </div>
          </div>
        </div>
        
        <!-- Kost 5 -->
        <div class="col-md-4">
          <div class="card crop-img">
            <img
              src="Cove-The-Day.jpg"
              class="card-img-top"
              width="200"
              height="200"
            />
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <h5 class="card-title">Kost Putra</h5>
                <p class="text-muted" style="font-size: 0.9em;">Purwokerto Selatan</p>
              </div>
              <p class="card-text">Rp 700.000 / bulan</p>
              <h5 class="card-text">Rumah Kost Abi</h5
                >
            </div>
          </div>
        </div>
        
        <!-- Kost 6 -->
        <div class="col-md-4">
          <div class="card crop-img">
            <img
              src="cove-medium.jpg"
              class="card-img-top"
              width="200"
              height="200"
            />
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <h5 class="card-title">Kost Putra</h5>
                <p class="text-muted" style="font-size: 0.9em;">Purwokerto Selatan</p>
              </div>
              <p class="card-text">Rp 700.000 / bulan</p>
              <h5 class="card-text">Rumah Kost Abi</h5
                >
            </div>
          </div>
        </div>
      </div>
      <div class="text-center mt-4">
        <button class="btn" type="submit" style="background-color: rgba(224,170,193,1) ; color: rgb(0, 0, 0);">Lihat Selengkapnya</button>
      </div>
    </div>
  </div>

  <!-- kostSekitarKampusPurwokerto -->
  <div class="container-fluid pt-5 pb-5 bg-light" style="margin-top: -50px;">
    <div class="container text-left">
      <h2 class="display-7 fw-bold" id="kostSekitarKampusPurwokerto">CARI KOST DI SEKITAR KAMPUS PURWOKERTO</h2>
      <div class="row pt-4 gx-4 gy-4">
        <div class="col-md-4">
          <div class="card crop-img shadow">
            <img src="UNSOED.png" class="card-img-top" alt="Kampus 1" style="object-fit: cover; height: 130px;">
          </div>
        </div>
        <div class="col-md-4">
          <div class="card crop-img shadow">
            <img src="TUP.png" class="card-img-top" alt="Kampus 2" style="object-fit: cover; height: 130px;">
          </div>
        </div>
        <div class="col-md-4">
          <div class="card crop-img shadow">
            <img src="UMP.png" class="card-img-top" alt="Kampus 3" style="object-fit: cover; height: 130px;">
          </div>
        </div>
      </div>
    </div>
  </div>

      <!-- Pengenalan Kost Kita -->
  <div class="container-fluid pt-5 pb-5">
    <div class="container text-center">
      <a class="navbar-brand" href="">
        <img src="logokostkita.png" alt="Logo Kost Kita" width="auto" height="50" class="d-inline-block align-text-top">
      </a>
      <div style="margin-top: 20px;">
        <h2>
          Cari Info Kost Sekitar Purwokerto hanya di Kost Kita
        </h2>
        <p class="text-center">
          KostKita adalah platform yang menyajikan informasi mengenai kost yang disewakan di daerah Purwokerto. Platform ini dilengkapi dengan informasi harga kost, fasilitas kost, dan foto kost yang diunggah langsung oleh pemilik kost, sehingga memudahkan pencari kost dalam menemukan tempat tinggal yang sesuai di Purwokerto.
        </p>
        <p class="text-center">
        Kemudahan-kemudahan yang kami sediakan mencakup filter pencarian berdasarkan harga, lokasi, jenis kost (putra, putri, atau campuran), fasilitas tambahan, dan jam bertamu. Fitur ini dirancang untuk memudahkan pengguna menemukan kost yang sesuai dengan kebutuhan dan budget mereka dengan cepat.
        </p>
        <p class="text-center">
          Selain itu, semua informasi kost yang ada di KostKita telah terverifikasi, memberikan rasa aman bagi para pencari kost. Kami memastikan transaksi antara pemilik kost dan penyewa berjalan dengan aman dan transparan.
        </p>
        <p class="text-center">
          KostKita hadir untuk membantu Anda menemukan pilihan kost terbaik, mulai dari kost eksklusif hingga kost sederhana, di berbagai area di Purwokerto, seperti kost di pusat kota, dekat universitas, dan di sekitar area strategis lainnya. Beberapa daerah popular yang akan kita bahas disini adalah daerah kost di Purwokerto  Timur, Selatan, Barat, dan Utara.
        </p>
        </div>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>