<?= $this->extend('admin/templates/index'); ?>

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
          <a href="<?= base_url('/admin/profile'); ?>" class="nav-link link-dark">
            <i class="bx bx-profil-alt me-2"></i> Profile
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('/admin/kost'); ?>" class="nav-link link-dark">
            <i class="bx bx-daftarKost me-2"></i> Daftar Kost
          </a>
        </li>
        <li>
          <a href="<?= base_url('/admin/report'); ?>" class="nav-link active" aria-current="page" style="background-color:
            rgb(222, 164, 173);">
            <i class="bx bx-report me-2"></i> Report
          </a>
        </li>
        <li>
          <a href="#" class="nav-link link-dark">
            <i class="bx bx-keluar me-2"></i> Keluar
          </a>
        </li>
      </ul>
      <hr>
    </div>
    <!-- Form Report -->
    <div class="col-md-8 p-2 mx-auto" style="background: rgb(240, 240, 255); border-radius: 5px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); font-size: 13px;">
      <h4 class="text-center mb-4 fw-bold">Report</h4>
      <form>
        <div class="d-flex justify-content-between mb-3">
          <input type="text" class="form-control w-50" placeholder="Search...">
        </div>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead class="table-light text-center">
              <tr>
                <th>Report ID</th>
                <th>User ID</th>
                <th>Nama</th>
                <th>Subyek</th>
                <th>Deskripsi</th>
                <th>Tanggal</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>1</td>
                <td>Bernadya Ribka</td>
                <td>Error pencarian kost</td>
                <td>Sistem gagal menampilkan hasil</td>
                <td>25-11-2024</td>
                <td>
                  <button class="btn btn-danger btn-sm">Hapus</button>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>2</td>
                <td>Alvi Anggraeni</td>
                <td>Kesalahan Lokasi kost</td>
                <td>Lokasi yang ditampilkan pada peta tidak sesuai</td>
                <td>24-11-2024</td>
                <td>
                  <button class="btn btn-danger btn-sm">Hapus</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </form>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>