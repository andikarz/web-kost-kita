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
          <a href="<?= base_url('/admin/kost'); ?>" class="nav-link active" aria-current="page" style="background-color:
            rgb(222, 164, 173);">
            <i class="bx bx-daftarKost me-2"></i> Daftar Kost
          </a>
        </li>
        <li>
          <a href="<?= base_url('/admin/report'); ?>" class="nav-link link-dark">
            <i class="bx bx-report me-2"></i> Report
          </a>
        </li>
        <li>
          <a href="<?= url_to('logout'); ?>" class="nav-link link-dark">
            <i class="bx bx-keluar me-2"></i> Keluar
          </a>
        </li>
      </ul>
      <hr>
    </div>

    <!-- Form Daftar Kost -->
    <div class="col-md-8 p-2 mx-auto" style="background: rgb(240, 240, 255); border-radius: 5px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); font-size: 13px;">
      <h4 class="text-center mb-4 fw-bold">Daftar Kost</h4>
      <form>
        <div class="d-flex justify-content-between mb-3">
          <input type="text" class="form-control w-50" placeholder="Search...">
          <button class="btn btn-primary">+ Tambah Kost</button>
        </div>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead class="table-light text-center">
              <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tipe Kost</th>
                <th>Harga</th>
                <th>Kapasitas Kamar</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Rumah Kost Ummi</td>
                <td>Jl. Karangsalam No.2, Banyumas</td>
                <td>Putri</td>
                <td>Rp 800.000</td>
                <td>20</td>
                <td>
                  <button class="btn btn-primary btn-sm">Detail</button>
                  <button class="btn btn-success btn-sm">Edit</button>
                  <button class="btn btn-danger btn-sm">Hapus</button>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>Rumah Kost Abi</td>
                <td>Jl. Karangsalam No.7, Banyumas</td>
                <td>Putra</td>
                <td>Rp 850.000</td>
                <td>10</td>
                <td>
                  <button class="btn btn-primary btn-sm">Detail</button>
                  <button class="btn btn-success btn-sm">Edit</button>
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