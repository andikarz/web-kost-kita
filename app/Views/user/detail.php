<?= $this->extend('templates/index'); ?>

<?= $this->section('content'); ?>

  <!-- Konten Utama -->
  <div class="container mb-5" style="margin-top: 80px;">
    <div class="row">
      <div class="col-12">
        <h1 class="h4"><?= $kost['name']; ?></h1>
        <div class="d-flex align-items-center">
          <img src="<?= base_url('/img/maps.png'); ?>" alt="Map" class="d-inline-block" style="width: auto; height: 20px; margin-right: 10px;">
          <p class="m-0"><i class="bi bi-geo-alt"></i><?= $kost['address']; ?></p>
        </div>
      </div>
      <div class="row">
        <!-- Gambar utama -->
        <div class="col-md-8" style="margin-top: 15px;">
          <img src="<?= base_url('/img/kost/kiri.png'); ?>" class="img-fluid rounded" alt="Kamar Kost" style="width: 100%; height: 90%;">
        </div>
        <!-- Gambar tambahan -->
        <div class="col-md-4">
          <div class="row">
            <div class="col-12 mb-3 text-center" style="margin-top: -50px;">
              <a href="<?= base_url('user/' . $kost['slug']) . '/order'; ?>" class="btn btn-primary">SEWA</a>
              <a href="<?= base_url('/'); ?>" class="btn btn-secondary">BACK</a>
            </div>
            <div class="col-12 mb-3 text-center" style="margin-top: 15;">
              <img src="<?= base_url('/img/kost/kanan-atas.png'); ?>" class="img-fluid rounded" alt="Kamar Mandi" style="width: 80%; height: 90%;">
            </div>
            <div class="col-12 mb-3 text-center">
              <img src="<?= base_url('/img/kost/kanan-bawah.png'); ?>" class="img-fluid rounded" alt="Dapur" style="width: 80%; height: 90%;">
              <a href="#" class="btn btn-warning" style="margin-top: 20px;">Hubungi Pemilik</a>
            </div>
          </div>
        </div>
        <!-- Fasilitas -->
        <div class="row mt-4">
          <div class="col-12">
            <p><strong>Fasilitas:</strong></p>
            <p><?= $kost['description']; ?></p>
            <p><strong>Luas Kamar:</strong> 3 m x 4 m</p>
            <p><strong>Deskripsi:</strong><?= $kost['description']; ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
<?= $this->endSection(); ?>