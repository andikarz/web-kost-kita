<?= $this->extend('templates/index'); ?>

<?= $this->section('content'); ?>

  <!-- Konten Utama -->
  <div class="container mb-5" style="margin-top: 80px;">
    <div class="row">
      <div class="col-md-9">
        <h1 class="h4"><?= $kost['name']; ?></h1>
        <div class="d-flex align-items-center">
          <img src="<?= base_url('/img/maps.png'); ?>" alt="Map" class="d-inline-block" style="width: auto; height: 20px; margin-right: 10px;">
          <p class="m-0"><i class="bi bi-geo-alt"></i><?= $kost['address']; ?></p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="text-right">
          <a href="<?= base_url('user/' . $kost['slug']) . '/order'; ?>" class="btn btn-primary">SEWA</a>
          <a href="<?= base_url('/'); ?>" class="btn btn-secondary">BACK</a>
        </div>
      </div>
    </div>
    <style>
      .custom-large-img {
        width: 100%;
        height: 400px; /* Atur tinggi gambar besar */
        object-fit: cover; /* Memastikan gambar tidak terdistorsi */
      }
      .custom-small-img {
        width: 100%;
        height: 190px; /* Atur tinggi gambar kecil */
        object-fit: cover;
      }
    </style>
    <div class="container mt-5">
      <div class="row g-3">
        <!-- Gambar besar -->
        <div class="col-md-8">
          <img src="<?= base_url('/img/kost/' . $kost['image']); ?>" class="img-fluid custom-large-img" alt="Gambar Besar">
        </div>
        <!-- Gambar kecil -->
        <div class="col-md-4">
          <img src="<?= base_url('/img/kost/' . $kost['image']); ?>" class="img-fluid custom-small-img mb-3" alt="Gambar Kecil 1">
          <img src="<?= base_url('/img/kost/' . $kost['image']); ?>" class="img-fluid custom-small-img" alt="Gambar Kecil 2">
        </div>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-12">
        <p><strong>Luas Kamar:</strong> 3 m x 4 m</p>
        <p><strong>Fasilitas:</strong></p>
        <p><?= $kost['description']; ?></p>
      </div>
    </div>
  </div>
<?= $this->endSection(); ?>