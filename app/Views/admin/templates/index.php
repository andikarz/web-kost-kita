<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= $title ?></title>
  
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
    crossorigin="anonymous"
  />
  
  <!-- Boxicons -->
  <link
    rel="stylesheet"
    href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
    crossorigin="anonymous"
  />
  </style>
</head>

<body>
  <!-- navigasi -->
  <nav
    class="navbar navbar-expand-lg navbar-light fixed-top" 
    style="background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgb(189, 167, 248) 0%, 
    rgba(224,170,193,1) 100%)">
    <div class="container">
      <a class="navbar-brand" href="">
          <img src="<?= base_url('/img/logokostkita.png');?>" alt="Logo Kost Kita" width="auto" height="30" 
          class="d-inline-block align-text-top" style="margin-right: 8px;">
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarText"
        aria-controls="navbarText"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-right" id="navbarText">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/'); ?>"><?= user()->username; ?></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <?= $this->renderSection('content'); ?>
  <!-- Kontak -->
  <div class="container-fluid pt-5 pb-5" style="padding-bottom: 0; margin-bottom: 0; background-color: rgb(189, 167, 248);">
    <div class="container text-center">
      <h2 class="fw-bold">Hubungi Kami</h2>
      <p class="text-center">
        Jika Anda membutuhkan bantuan lebih lanjut, silakan hubungi kami melalui kontak di bawah ini. Kami siap membantu Anda menemukan kost yang sesuai dengan kebutuhan Anda.
      </p>
      <div class="pt-3">
        <a href="https://wa.me/689630417804" target="_blank" style="text-decoration: none;">
          <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp Logo" width="35" style="margin-right: 8px;">
        </a>
        <a href="mailto:info@kostkita.com" style="text-decoration: none; color: #333;">
          <img src="<?= base_url('/img/gmail.webp');?>" alt="Email Logo" width="35" style="margin-right: 8px;">
        </a>
      </div>
      <div class="container text-center pt-5 pb-5" style="margin-top: -20px;">
        &copy; 2024 Kost Kita. 
        <p>Semua hak dilindungi undang-undang</p>
      </div>
    </div>
  </div>
  <!-- Bootstrap JS -->
  <script>
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
    integrity="sha384-eOSaGkANZjW9GxXxGUEuT5r0wXy1SWMf4IUnxBJHRogEFNayVZ4FcE3mI5woXYFg"
    crossorigin="anonymous"
  </script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
    integrity="sha384-j0AjbfxBYQwG4FmhWb76m56SRy9s4U78tWs/FzDv9rhr3y1fgaMntGccVjXIIe6t"
    crossorigin="anonymous"
  ></script>
</body>
</html>