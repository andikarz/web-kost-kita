<?= $this->extend('templates/index'); ?>

<?= $this->section('content'); ?>

  <!-- Konten Utama -->
  <div class="container mt-5 pt-5">
    <div class="row">
      <!-- Metode Pembayaran -->
      <div class="col-md-8">
        <h3 class="fw-bold">Pembayaran Kamar Kost</h3>
        <p class="mt-3 fw-bold">Transfer Bank (Konfirmasi Manual)</p>
        <ul>
          <li>Kamu bisa transfer melalui Mobile Banking, Internet Banking, SMS Banking, atau ATM.</li>
          <li>
            Biaya admin sebesar Rp2.500-Rp6.500 akan dikenakan oleh pihak bank
            jika kamu menggunakan bank lain untuk transfer.
          </li>
        </ul>
        <p>Pilih metode pembayaran dan cek total harga:</p>
        <h4>Metode Pembayaran</h4>
        <form action="/user/order/payment/process" method="post">
          <input type="hidden" name="id_order" value="<?= $order['id']; ?>" />
          <input type="hidden" name="amount" value="<?= $order['total_price']; ?>" />
          <div class="p-3 border">
            <div class="form-check mb-2 d-flex align-items-center">
              <input class="form-check-input me-2" type="radio" name="method" id="mandiri" value="mandiri" required/>
              <label class="form-check-label fw-bold me-auto" for="mandiri">MANDIRI</label>
              <img src="mandiri.png" alt="bank" style="width: auto; height: 30px;"/>
            </div>
            <div class="form-check mb-2 d-flex align-items-center">
              <input class="form-check-input me-2" type="radio" name="method" id="bca" value="bca"/>
              <label class="form-check-label fw-bold me-auto" for="bca">BCA</label>
              <img src="bca.png" alt="bank" style="width: auto; height: 20px;"/>
            </div>
            <div class="form-check mb-2 d-flex align-items-center">
              <input class="form-check-input me-2" type="radio" name="method" id="bni" value="bni"/>
              <label class="form-check-label fw-bold me-auto" for="bni">BNI</label>
              <img src="bni.png" alt="bank" style="width: auto; height: 20px;"/>
            </div>
            <div class="form-check mb-2 d-flex align-items-center">
              <input class="form-check-input me-2" type="radio" name="method" id="bri" value="bri"/>
              <label class="form-check-label fw-bold me-auto" for="bri">BRI</label>
              <img src="bri.png" alt="bank" style="width: auto; height: 25px;"/>
            </div>
          </div>
          <div class="text-center mt-4">
            <button class="btn" type="submit" style="background-color: rgba(224,170,193,1); color: rgb(0, 0, 0);">
              Lanjutkan Pembayaran
            </button>
          </div>
        </form>
      </div>
        
      <!-- Informasi Kamar -->
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><?= $order['kost_name'] ?></h5>
            <h6><?= $order['type'] ?></h6>
            <div
              class="d-flex align-items-start mb-3"
              style="font-size: 0.9rem;"
            >
              <img
                src="map.png"
                alt="Map"
                class="d-inline-block"
                style="width: auto; height: 20px; margin-right: 10px;"
              />
              <p class="m-0">
                <i class="bi bi-geo-alt"></i><?= $order['address'] ?>
              </p>
            </div>
            <h6 class="card-title">(1x) Single Bed</h6 >
            <ul style="font-size: 0.9rem;">
              <li>Spring bed + bantal</li>
              <li>Lemari baju</li>
              <li>Kamar mandi dalam</li>
              <li>WiFi bersama</li>
              <li>Kulkas bersama</li>
              <li>Dapur bersama</li>
            </ul>
            <h6 class="card-title">Rincian Kamar</h6 >
            <ul style="font-size: 0.9rem;">
              <li>No. 1</li>
              <li>Tipe Single Bed</li>
            </ul>
            <h6 class="card-title">Data Penyewa</h6 >
            <ul style="font-size: 0.9rem;">
              <li><?= $order['fullname'] ?></li>
              <li><?= $order['user_phone'] ?></li>
              <li><?= $order['email'] ?></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Metode Pembayaran -->
    <div class="col-md-8" style="margin-top: 50px;">
      <!-- Detail Bank -->
      <div id="mandiri-info" class="bank-info p-3 border">
        <div class="mb-2 d-flex align-items-center">
          <label class="fw-bold me-auto">Bank Mandiri</label>
          <img src="mandiri.png" alt="bank" style="width: auto; height: 30px;"/>
        </div>
        <div class="d-flex justify-content-between">
          <p>Nomor Rekening:</p>
          <span><?= $order['no_rek'] ?></span>
          <div class="copy" onclick="copyText('<?= $order['no_rek'] ?>')">Salin</div>
        </div>
        <div class="d-flex justify-content-between">
          <p>Nama Penerima:</p>
          <span><?= $order['owner_name'] ?></span>
        </div>
        <div class="d-flex justify-content-between">
          <p>Jumlah Transfer:</p>
          <span>Rp <?= number_format($order['total_price'], 0, ',', '.'); ?></span>
          <div class="copy" onclick="copyText('<?= $order['total_price'] ?>')">Salin</div>
        </div>
        <p class="mb-0 fw-bold">PENTING!<a> Mohon transfer sampai 3 digit terakhir</a></p>
      </div>

      <div id="bca-info" class="bank-info p-3 border">
        <div class="mb-2 d-flex align-items-center">
          <label class="fw-bold me-auto">Bank BCA</label>
          <img src="bca.png" alt="bank" style="width: auto; height: 30px;"/>
        </div>
        <div class="d-flex justify-content-between">
          <p>Nomor Rekening:</p>
          <span><?= $order['no_rek'] ?></span>
          <div class="copy" onclick="copyText('<?= $order['no_rek'] ?>')">Salin</div>
        </div>
        <div class="d-flex justify-content-between">
          <p>Nama Penerima:</p>
          <span><?= $order['owner_name'] ?></span>
        </div>
        <div class="d-flex justify-content-between">
          <p>Jumlah Transfer:</p>
          <span>Rp <?= number_format($order['total_price'], 0, ',', '.'); ?></span>
          <div class="copy" onclick="copyText('<?= $order['total_price'] ?>')">Salin</div>
        </div>
        <p class="mb-0 fw-bold">PENTING!<a> Mohon transfer sampai 3 digit terakhir</a></p>
      </div>

      <div id="bni-info" class="bank-info p-3 border">
        <div class="mb-2 d-flex align-items-center">
          <label class="fw-bold me-auto">Bank BNI</label>
          <img src="bca.png" alt="bank" style="width: auto; height: 30px;"/>
        </div>
        <div class="d-flex justify-content-between">
          <p>Nomor Rekening:</p>
          <span><?= $order['no_rek'] ?></span>
          <div class="copy" onclick="copyText('<?= $order['no_rek'] ?>')">Salin</div>
        </div>
        <div class="d-flex justify-content-between">
          <p>Nama Penerima:</p>
          <span><?= $order['owner_name'] ?></span>
        </div>
        <div class="d-flex justify-content-between">
          <p>Jumlah Transfer:</p>
          <span>Rp <?= number_format($order['total_price'], 0, ',', '.'); ?></span>
          <div class="copy" onclick="copyText('<?= $order['total_price'] ?>')">Salin</div>
        </div>
        <p class="mb-0 fw-bold">PENTING!<a> Mohon transfer sampai 3 digit terakhir</a></p>
      </div>

      <div id="bri-info" class="bank-info p-3 border">
        <div class="mb-2 d-flex align-items-center">
          <label class="fw-bold me-auto">Bank BRI</label>
          <img src="bca.png" alt="bank" style="width: auto; height: 30px;"/>
        </div>
        <div class="d-flex justify-content-between">
          <p>Nomor Rekening:</p>
          <span><?= $order['no_rek'] ?></span>
          <div class="copy" onclick="copyText('<?= $order['no_rek'] ?>')">Salin</div>
        </div>
        <div class="d-flex justify-content-between">
          <p>Nama Penerima:</p>
          <span><?= $order['owner_name'] ?></span>
        </div>
        <div class="d-flex justify-content-between">
          <p>Jumlah Transfer:</p>
          <span>Rp <?= number_format($order['total_price'], 0, ',', '.'); ?></span>
          <div class="copy" onclick="copyText('<?= $order['total_price'] ?>')">Salin</div>
        </div>
        <p class="mb-0 fw-bold">PENTING!<a> Mohon transfer sampai 3 digit terakhir</a></p>
      </div>

    </div>
      
    <div class="col-md-8" style="margin-top: 50px;">
        <h4 class="fw-bold">Sudah selesai bayar?</h4>
    </div>
    <div class="p-3 border mt-3">
      <div class="d-flex justify-content-between align-items-center">
        <span>Kalau pembayaranmu sudah dikonfirmasi, kami akan mengirimkan e-ticket dan bukti pembayaranmu ke emailmu.</span>
      </div>
      <div class="text-center mt-4">
        <a href="<?= base_url('/user/order/payment/success/'. $order['id']); ?>" 
        class="btn" style="background-color: rgba(224,170,193,1) ; color: rgb(0, 0, 0);">Ya, saya sudah bayar</a>
      </div>
    </div>
  </div>

  <style>
    .bank-info {
      display: none;
    }
  </style>

  <script>
    // Fungsi untuk memperbarui tampilan bank
    function updateBankInfo(selectedBank) {
      // Sembunyikan semua elemen detail bank
      document.querySelectorAll('.bank-info').forEach(info => {
        info.style.display = 'none';
      });

      // Tampilkan elemen yang sesuai dengan pilihan
      const selectedInfo = document.getElementById(`${selectedBank}-info`);
      if (selectedInfo) {
        selectedInfo.style.display = 'block';
      }
    }

    // Tambahkan event listener untuk radio button
    document.querySelectorAll('input[name="method"]').forEach(radio => {
      radio.addEventListener('change', function () {
        updateBankInfo(this.value);
      });
    });

    // Fungsi untuk menyalin teks
    function copyText(text) {
      navigator.clipboard.writeText(text).then(() => {
        alert('Teks berhasil disalin!');
      }).catch(err => {
        alert('Gagal menyalin teks. Browser Anda mungkin tidak mendukung fitur ini.');
      });
    }

    // Pilihan awal (jika ada)
    const initialSelection = document.querySelector('input[name="method"]:checked');
    if (initialSelection) {
      updateBankInfo(initialSelection.value);
    }
  </script>

<?= $this->endSection(); ?>