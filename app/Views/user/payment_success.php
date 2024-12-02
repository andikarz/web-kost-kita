<?= $this->extend('templates/index'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <p>PEMBAYARAN BERHASIL</p>
    <a href="<?= base_url('/user'); ?>" class="btn btn-secondary">Kembali Ke Menu Awal</a>
</div>

<?= $this->endSection(); ?>