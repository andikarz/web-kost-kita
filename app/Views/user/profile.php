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
            <a href="#" class="nav-link active" aria-current="page" style="background-color: rgb(222, 164, 173);">
              <i class="bx bx-profil-alt me-2"></i> Profil
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link link-dark">
              <i class="bx bx-riwayatPemesanan me-2"></i> Riwayat Pemesanan
            </a>
          </li>
          <li>
            <a href="#" class="nav-link link-dark">
              <i class="bx bx-cart me-2"></i> Chat
            </a>
          </li>
          <li>
            <a href="#" class="nav-link link-dark">
              <i class="bx bx-box me-2"></i> Syarat dan Ketentuan
            </a>
          </li>
          <li>
            <a href="#" class="nav-link link-dark">
              <i class="bx bx-user me-2"></i> Bantuan
            </a>
          </li>
          <li>
            <a href="<?= url_to('logout'); ?>" class="nav-link link-dark">
              <i class="bx bx-user me-2"></i> Keluar
            </a>
          </li>
        </ul>
        <hr>
      </div>

      <!-- Form Profil -->
      <div class="col-md-8 p-3" style="max-width: 900px; background: rgb(240, 240, 255); 
      border-radius: 5px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); margin-left: 25px; font-size: 15px;">
        <h4 class="text-center mb-4 fw-bold">Profil</h4>
        <?php if(session()->getFlashdata('pesan')): ?>
          <div class="alert alert-success">
              <?= session()->getFlashdata('pesan'); ?>
          </div>
        <?php endif; ?>
        <form action="<?= base_url('/user/update'); ?>" method="post" enctype="multipart/form-data">
          <?= csrf_field(); ?>
          <div class="mb-3">
              <label for="fullname" class="form-label">Nama Lengkap sesuai KTP *</label>
              <input type="text" id="fullname" name="fullname" class="form-control" 
                    value="<?= $user['fullname'] ?>" placeholder="Masukkan nama lengkap">
          </div>
          <div class="mb-3">
              <label for="phone_number" class="form-label">Nomor HP *</label>
              <input type="text" id="phone_number" name="phone_number" class="form-control" 
                    value="<?= $user['phone_number'] ?>" placeholder="Masukkan nomor HP">
          </div>
          <div class="mb-3">
              <label for="email" class="form-label">E-mail *</label>
              <input type="email" id="email" name="email" class="form-control" 
                    value="<?= $user['email'] ?>" placeholder="Masukkan email">
          </div>
          <div class="mb-3">
              <p>Foto Diri:</p>
              <div class="small font-italic text-muted mb-4">* Catatan: Ukuran foto maksimal 3MB</div>
          </div>
          <div class="input-group mb-3">
              <input type="file" class="form-control" name="user_image" id="user_image">
              <label class="input-group-text" for="user_image">Upload</label>
          </div>
          <div class="mb-3">
              <label for="gender" class="form-label">Jenis Kelamin *</label>
              <select id="gender" name="gender" class="form-select">
                  <option value="L" <?= $user['gender'] == 'L' ? 'selected' : '' ?>>Laki-laki</option>
                  <option value="P" <?= $user['gender'] == 'P' ? 'selected' : '' ?>>Perempuan</option>
              </select>
          </div>
          <div class="mb-3">
              <label for="nik" class="form-label">NIK *</label>
              <input type="text" id="nik" name="nik" class="form-control" 
                    value="<?= $user['nik'] ?>" placeholder="Masukkan NIK">
          </div>
          <div class="mb-3">
              <p>Foto Identitas:</p>
              <div class="small font-italic text-muted mb-4">* Catatan: Ukuran foto maksimal 3MB</div>
          </div>
          <div class="input-group mb-3">
              <input type="file" class="form-control" name="id_image" id="id_image">
              <label class="input-group-text" for="id_image">Upload</label>
          </div>
          <button type="submit" class="btn btn-primary text-right">Simpan</button>
        </form>
      </div>
    </div>
  </div>

<?= $this->endSection(); ?>