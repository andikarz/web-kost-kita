<?= $this->extend('templates/index'); ?>

<?= $this->section('content'); ?>

  <!-- Sidebar -->
  <div class="container" style="margin-top: 80px; margin-bottom: 80px;">
    <div class="row">
      <div class="col-md-3 p-3"
          style="background: rgb(255, 214, 221); border-radius: 5px;">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
          <i class="bx bx-home-alt me-2" style="font-size: 18px;"></i>
          <span class="fs-4">Menu</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item">
            <a href="<?= base_url('user/profile'); ?>" class="nav-link link-dark d-flex align-items-center" 
              style="border-radius: 5px;">
              <img src="<?= base_url('/img/icon/profil.png');?>" alt="riwayat" class="me-2"
              style="width: 17px; height: 17px; border-radius: 50%;">
              Profil
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('user/history'); ?>" class="nav-link link-dark d-flex align-items-center" 
              style="border-radius: 5px;">
              <img src="<?= base_url('/img/icon/riwayat.png');?>" alt="profil" class="me-2"
                style="width: 17px; height: 17px; border-radius: 50%;">
              Riwayat Pemesanan
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('user/terms'); ?>" class="nav-link link-dark d-flex align-items-center" 
              style="border-radius: 5px;">
              <img src="<?= base_url('/img/icon/syarat.png');?>" alt="riwayat" class="me-2"
                style="width: 17px; height: 17px; border-radius: 50%;">
              Syarat dan Ketentuan
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('user/report'); ?>" 
              class="nav-link active d-flex align-items-center" aria-current="page"
              style="background-color: rgb(222, 164, 173); border-radius: 5px;">
              <img src="<?= base_url('/img/icon/bantuan.png');?>" alt="riwayat" class="me-2"
                style="width: 17px; height: 17px; background-color: rgb(222, 164, 173); border-radius: 50%;">
              Bantuan
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= url_to('logout'); ?>" 
              class="nav-link link-dark d-flex align-items-center" 
              style="border-radius: 5px;">
              <img src="<?= base_url('/img/icon/keluar.png');?>" 
                  alt="keluar" 
                  class="me-2"
                  style="width: 17px; height: 17px; border-radius: 50%;">
              Keluar
            </a>
          </li>
        </ul>
        <hr>
      </div>
      <div class="container" style="max-width: 700px; ">
        <div class="card shadow-sm p-4 border-0">
          <h2 class="text-center mb-4 fw-bold">Hubungi Kami</h2>
          <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
          <?php endif; ?>
          <form action="<?= base_url('/user/createReport'); ?>" method="post">
            <?= csrf_field(); ?>
            <!-- Form Group -->
            <div class="mb-3 row">
              <label for="description" class="col-sm-4 col-form-label">Deskripsi</label>
              <div class="col-sm-8">
                  <textarea id="description" name="description" class="form-control" rows="3" required></textarea>
              </div>
            </div>
            <div class="text-end">
              <button type="submit" class="btn btn-primary" style="background-color: rgb(101,78,163); padding: 3px 30px;">Kirim</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

<?= $this->endSection(); ?>