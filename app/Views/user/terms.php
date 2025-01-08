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
            <a href="<?= base_url('user/terms'); ?>" 
              class="nav-link active d-flex align-items-center" aria-current="page"
              style="background-color: rgb(222, 164, 173); border-radius: 5px;">
              <img src="<?= base_url('/img/icon/syarat.png');?>" alt="riwayat" class="me-2"
                style="width: 17px; height: 17px; background-color: rgb(222, 164, 173); border-radius: 50%;">
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
      
      <!-- Form Syarat dan Ketentuan -->
      <div class="col-md-8 p-2 mx-auto" style="background: rgb(255, 255, 255); border-radius: 5px; 
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); font-size: 13px;">
        <h4 class="text-center mb-4 fw-bold">Syarat dan Ketentuan</h4>
        <form>
          <div class="card-body">
            <p>Selamat datang di KostKita! Sebelum menggunakan layanan kami, harap baca Syarat dan 
                Ketentuan berikut dengan saksama. Dengan mengakses dan menggunakan website ini, Anda 
                menyetujui Syarat dan Ketentuan yang berlaku. Jika Anda tidak setuju dengan ketentuan 
                ini, mohon untuk tidak menggunakan layanan kami..</p>
            <h5>1. Definisi</h5>
            <ul>
                <li>Afiliasi: Pihak yang memiliki kendali atas atau dikendalikan oleh salah satu pihak 
                    terkait layanan.</li>
                <li>Ajukan Sewa: Pemesanan properti oleh Penghuni untuk tanggal yang tersedia.</li>
                <li>Akun Pengguna KostKita: Akun terdaftar yang dikelola oleh KostKita.</li>
                <li>Biaya Transaksi: Biaya yang dikenakan oleh penyedia layanan pembayaran per 
                    transaksi.</li>
                <li>Jadwal Pembayaran: Tanggal-tanggal kewajiban penyelesaian transaksi tagihan.</li>
                <li>Kontrak: Kesepakatan penggunaan platform antara pengguna dan KostKita, atau 
                    antara Penyewa dan 
                    Pemilik.</li>
                <li>Pemilik (Owner): Pihak yang sah menurut hukum dan bertanggung jawab atas properti 
                    yang terdaftar.
                <li>Penyewa (Tenant): Pengguna yang menyewa atau mengajukan sewa properti.</li>
                <li>Properti: Unit kos atau rumah sewa yang terdaftar di platform.</li>
                <li>Rekening Kami : Sistem pembayaran yang disediakan oleh platform melalui berbagai 
                    pilihan payment gateway.</li>
                <li>Syarat & Ketentuan: Perjanjian yang mengatur hak, kewajiban, dan tanggung jawab 
                    pengguna dan KostKita.</li>
            </ul>
            <h5>2. Akun Pengguna</h5>
            <ul>
                <li>Pengguna harus membuat akun di platform KostKita untuk mengakses layanan dan fitur 
                    yang tersedia.</li>
                <li>Pengguna bertanggung jawab untuk menjaga kerahasiaan informasi akun dan memastikan 
                    bahwa informasi yang diberikan pada saat pendaftaran adalah akurat dan terbaru.</li>
                <li>KostKita berhak untuk menangguhkan atau menghapus akun pengguna yang ditemukan 
                    melanggar Syarat dan Ketentuan ini.</li>
            </ul>
            <h5>3. Riwayat Pemesanan</h5>
            <ul>
                <li>KostKita menyediakan riwayat pemesanan yang dapat diakses pengguna melalui Akun 
                    Pengguna.</li>
                <li>Riwayat pemesanan hanya dapat diakses oleh pemilik akun yang bersangkutan untuk 
                    menjaga privasi dan keamanan data.</li>
                <li>Pengguna bertanggung jawab untuk memeriksa status pemesanan melalui fitur ini dan 
                    memastikan keakuratan data.</li>
                <li>KostKita tidak bertanggung jawab atas kesalahan atau kelalaian dalam pemeriksaan 
                    riwayat pemesanan yang dilakukan oleh pengguna.</li>
            </ul>
            <h5>4. Fitur Chat</h5>
            <ul>
                <li>Fitur chat disediakan untuk memfasilitasi komunikasi antara Penyewa dan Pemilik, serta antara pengguna dan tim dukungan KostKita.</li>
                <li>Pengguna wajib menggunakan fitur chat dengan etika yang baik, tidak mengirimkan pesan yang mengandung unsur penipuan, pelecehan, atau konten tidak pantas.</li>
                <li>KostKita berhak untuk memantau dan meninjau percakapan di fitur chat untuk memastikan kepatuhan terhadap Syarat dan Ketentuan ini.</li>
            </ul>
            <h5>5. Pemesanan (Booking)</h5>
            <ul>
                <li>Pengguna dapat memesan properti melalui fitur "Pemesanan Kamar Kost" di platform KostKita.</li>
                <li>Pastikan data yang dimasukkan akurat.</li>
                <li>Pemesanan dianggap sah setelah konfirmasi diterima.</li>
                <li>KostKita tidak bertanggung jawab atas perselisihan antara Penghuni dan Pemilik.</li>
                <li>Pengguna wajib mematuhi peraturan tambahan di properti.</li>
            </ul>
            <h5>6. Prosedur Pembayaran</h5>
            <ul>
                <li>Penyewa wajib melakukan pembayaran melalui metode pembayaran yang tersedia pada platform KostKita.</li>
                <li>Semua pembayaran harus diselesaikan sesuai dengan jadwal pembayaran yang ditentukan dalam kontrak atau pemesanan.</li>
                <li>Biaya transaksi akan dikenakan sesuai dengan ketentuan pembayaran yang berlaku.</li>
                <li>Setelah pembayaran berhasil, e-ticket dan bukti pembayaran akan dikirimkan ke email pengguna yang terdaftar.</li>
            </ul>
            <h5>7. Keamanan dan Perlindungan Informasi</h5>
            <ul>
                <li>KostKita berkomitmen untuk melindungi data pribadi Pengguna sesuai dengan kebijakan privasi yang berlaku.</li>
                <li>Pengguna diharapkan untuk menjaga kerahasiaan akun mereka dan melaporkan segera jika terjadi penyalahgunaan informasi akun.</li>
            </ul>
            <h5>8. Konteks dan Hak Kekayaan Intelektual</h5>
            <ul>
                <li>Semua konten yang ada di platform, termasuk namun tidak terbatas pada teks, gambar, dan video, adalah milik KostKita atau pihak ketiga yang memberikan lisensi kepada KostKita.</li>
                <li>Pengguna dilarang untuk menggunakan, menyalin, atau mendistribusikan konten tanpa izin yang sah.</li>
            </ul>
            <h5>9. Umpan Balik dan Kiriman</h5>
            <ul>
                <li>Pengguna dapat memberikan umpan balik atau ulasan terkait layanan atau properti yang digunakan di platform.</li>
                <li>KostKita berhak untuk menggunakan umpan balik tersebut untuk kepentingan platform dan perbaikan layanan.</li>
            </ul>
            <h5>10. Fitur Bantuan</h5>
            <ul>
                <li>Fitur bantuan disediakan untuk membantu pengguna dalam menyelesaikan kendala terkait penggunaan platform.</li>
                <li>Pengguna wajib memberikan informasi yang akurat dan relevan saat menggunakan fitur bantuan agar tim dukungan dapat memberikan solusi yang tepat.</li>
                <li>KostKita berhak untuk mencatat dan menyimpan percakapan atau interaksi dalam fitur bantuan untuk keperluan peningkatan layanan.</li>
                <li>Segala saran atau solusi yang diberikan melalui fitur bantuan bersifat informatif dan tidak mengikat.</li>
                <li>Pengguna diharapkan untuk tetap sopan dan tidak menyalahgunakan fitur bantuan, termasuk mengirimkan permintaan berulang tanpa alasan yang jelas atau menggunakan bahasa yang tidak pantas.</li>   
            </ul>
            <h5>11. Persyaratan dan Jaminan</h5>
            <ul>
                <li>KostKita tidak memberikan jaminan bahwa layanan akan selalu bebas dari gangguan atau kesalahan.</li>
                <li>Pengguna setuju untuk menggunakan layanan ini dengan risiko mereka sendiri.</li>
            </ul>
            <h5>12. Perubahan Syarat dan Ketentuan</h5>
            <ul>
                <li>KostKita berhak untuk mengubah atau memperbarui Syarat dan Ketentuan ini kapan saja.</li>
            </ul>
            <h5>13. Hukum yang berlaku</h5>
            <ul>
                <li>Syarat dan Ketentuan ini tunduk pada hukum yang berlaku di Indonesia.</li>
                <li>Setiap perselisihan akan diselesaikan melalui jalur hukum sesuai dengan ketentuan yang berlaku.</li>
            </ul>
          </div>
        </form>
      </div>
    </div>
  </div>
<?= $this->endSection(); ?>