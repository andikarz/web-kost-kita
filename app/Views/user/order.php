<?= $this->extend('templates/index'); ?>

<?= $this->section('content'); ?>

  <div class="container my-5">
    <h2 class="mb-4 fw-bold text-left" style="margin-top: 80px;">Pemesanan Kamar Kost</h2>
    <p class="text-left">Pastikan kamu mengisi semua informasi di halaman ini dengan benar sebelum melanjutkan ke pembayaran.</p>
    <div class="row">
      <!-- Form Pemesanan -->
      <div class="col-md-8">
        <!-- Form Pemesanan -->
        <div class="container">
            <h2>Pemesanan Kost</h2>
            <form action="<?= base_url('/user/'.$kost['slug'].'/order'); ?>" method="post" id="orderForm">
                <?= csrf_field(); ?>
                <input type="hidden" name="id_kost" value="<?= $kost['id']; ?>">

                <!-- Pilih Tanggal Mulai -->
                <div class="mb-3">
                    <label for="start_date" class="form-label">Tanggal Mulai Sewa</label>
                    <input type="date" id="start_date" name="start_date" class="form-control" required>
                </div>

                <!-- Pilih Lama Sewa -->
                <div class="mb-3">
                    <label for="time_period" class="form-label">Lama Sewa</label>
                    <select id="time_period" name="time_period" class="form-select" required>
                        <option value="1">1 Bulan</option>
                        <option value="3">3 Bulan</option>
                        <option value="6">6 Bulan</option>
                    </select>
                </div>

                <!-- Total Harga -->
                <div class="mb-3">
                    <label for="total_price" class="form-label">Total Harga</label>
                    <input type="text" id="total_price" class="form-control" value="Rp <?= number_format($kost['price'], 0, ',', '.'); ?>" readonly>
                </div>

                <div class="mt-3">
                    <button type="submit" class="btn btn-primary">Pesan</button>
                    <a href="<?= base_url('/user/' . $kost['slug']); ?>" class="btn btn-secondary">Kembali</a>
                </div>
            </form>
        </div>

        <!-- Tambahkan Script JavaScript di Sini -->
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const timePeriod = document.getElementById('time_period');
                const totalPrice = document.getElementById('total_price');
                const pricePerMonth = <?= $kost['price']; ?>; // Harga per bulan dari backend

                // Kalkulasi total harga berdasarkan lama sewa
                timePeriod.addEventListener('change', function () {
                    const months = parseInt(this.value) || 0;
                    const total = pricePerMonth * months;
                    totalPrice.value = `Rp ${total.toLocaleString('id-ID')}`;
                });
            });
        </script>


      </div>
      <!-- Informasi Kamar -->
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><?= $kost['name']; ?></h5>
            <h6>Kost <?= $kost['type']; ?></h6>
            <div class="d-flex align-items" style="font-size: 0.9rem;">
            <img src="<?= base_url('/img/maps.png') ?>" alt="Map" class="d-inline-block" style="width: auto; height: 20px; margin-right: 10px;">
            <p class="m-0"><i class="bi bi-geo-alt"></i><?= $kost['address']; ?></p>
          </div>
          <img src="<?= base_url('/img/kost/' . $kost['image']) ?>" class="card-img-top" style="margin-top: 10px;" alt="Kamar Kost">  
          <p><strong>Fasilitas:</strong></p>
            <p><?= $kost['description']; ?></p>
            <p class="mt-2"><strong>Harga Bulanan:</strong>Rp <?= number_format($kost['price'], 0, ',', '.'); ?></p>
            <p class="mt-2">1 bulan</p>
          </div>
        </div>
      </div>
    </div>
  </div>

<?= $this->endSection(); ?>