<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran Berhasil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container text-center mt-5">
        <div class="card shadow-lg mx-auto" style="max-width: 500px;">
            <div class="card-body">
                <div class="mb-4">
                    <img src="https://cdn-icons-png.flaticon.com/512/845/845646.png" alt="Success Icon" width="100">
                </div>
                <h2 class="text-success">Pembayaran Berhasil!</h2>
                <p class="mt-3">Terima kasih, pembayaran Anda telah berhasil diproses.</p>
                <a href="<?= base_url('/'); ?>" class="btn btn-primary mt-4">Kembali ke Menu Utama</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>