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
            <a href="<?= base_url('user/history'); ?>" 
              class="nav-link active d-flex align-items-center" aria-current="page" 
              style="background-color: rgb(222, 164, 173); border-radius: 5px;">
              <img src="<?= base_url('/img/icon/riwayat.png');?>" alt="profil" class="me-2"
                  style="width: 17px; height: 17px; background-color: rgb(222, 164, 173); border-radius: 50%;">
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
            <a href="<?= base_url('user/report'); ?>" class="nav-link link-dark d-flex align-items-center" 
              style="border-radius: 5px;">
              <img src="<?= base_url('/img/icon/bantuan.png');?>" alt="riwayat" class="me-2"
                  style="width: 17px; height: 17px; border-radius: 50%;">
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

       <!-- Form Daftar Kost -->
      <div class="col-md-8 p-2 mx-auto" style="background: rgb(240, 240, 255); border-radius: 5px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); font-size: 13px;">
        <h4 class="text-center mb-4 fw-bold">Riwayat Pemesanan Kost</h4>
        <form>
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead class="table-light text-center">
                <tr>
                  <th>#</th>
                  <th>Nama Kost</th>
                  <th>Mulai Sewa</th>
                  <th>Akhir Sewa</th>
                  <th>Lama Sewa</th>
                  <th>Total Harga</th>
                  <th>Tanggal Pesan</th>
                </tr>
              </thead>
              <tbody>
                <?php $i=1; ?>
                <?php foreach ($orders as $order) : ?>
                <tr>
                  <td><?= $i++; ?></td>
                  <td><?= $order['kost_name'] ?></td>
                  <td><?= $order['start_date'] ?></td>
                  <td><?= $order['end_date'] ?></td>
                  <td><?= $order['time_period'] ?></td>
                  <td><?= $order['total_price'] ?></td>
                  <td><?= $order['order_date'] ?></td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </form>
      </div>
    </div>
  </div>
<?= $this->endSection(); ?>