<?= $this->extend('auth/templates/index'); ?>

<?= $this->section('content'); ?>

<!-- forgotPassword -->
<div class="container" style="max-width: 450px; margin-top: 80px;">
    <div class="card shadow-sm p-4 border-0">
        <h2 class="text-left" style="margin-top: 70px;">Lupa Kata Sandi</h2>
        <p>Masukkan e-mail yang terdaftar. Kami akan mengirimkan link untuk reset kata sandi</p>
        <form action="<?= url_to('forgot') ?>" method="post">
            <?= csrf_field() ?>
            <div class="form-group">
                <label for="email"><?=lang('Auth.emailAddress')?></label>
                <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>"
                        name="email" aria-describedby="emailHelp" placeholder="<?=lang('Auth.email')?>">
                <div class="invalid-feedback">
                    <?= session('errors.email') ?>
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-primary w-100" style="background-color: rgb(101,78,163); border: none;">Kirim</button>
        </form>
    </div> 
</div>

<?= $this->endSection(); ?>