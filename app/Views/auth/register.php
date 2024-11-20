<?= $this->extend('auth/templates/index'); ?>

<?= $this->section('content'); ?>

<!-- Login -->
<div class="container" style="max-width: 450px; margin-top: 80px;">
    <div class="card shadow-sm p-4 border-0">
        <h2 class="text-center mb-4 fw-bold">Daftar di Kost Kita</h2>
        <?= view('Myth\Auth\Views\_message_block') ?>
        <form action="<?= url_to('register') ?>" method="post">
            <?= csrf_field() ?>
            <div class="mb-3">
                <label for="email"><?=lang('Auth.email')?></label>
                <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>"
                        name="email" aria-describedby="emailHelp" placeholder="<?=lang('Auth.email')?>" value="<?= old('email') ?>">
                <small id="emailHelp" class="form-text text-muted"><?=lang('Auth.weNeverShare')?></small>
            </div>
            <div class="mb-3">
                <label for="username"><?=lang('Auth.username')?></label>
                <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>
                    "name="username" placeholder="<?=lang('Auth.username')?>" value="<?= old('username') ?>">
            </div>
            <div class="mb-3">
                <label for="password"><?=lang('Auth.password')?></label>
                <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>
                    is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>" autocomplete="off">
            </div>
            <div class="mb-3">
                <label for="pass_confirm"><?=lang('Auth.repeatPassword')?></label>
                <input type="password" name="pass_confirm" class="form-control <?php if (session('errors.pass_confirm')) : ?>
                    is-invalid<?php endif ?>" placeholder="<?=lang('Auth.repeatPassword')?>" autocomplete="off">
            </div>
            <button type="submit" class="btn btn-primary w-100" style="background-color: rgb(101,78,163); border: none;"><?=lang('Auth.register')?></button>
        </form>
        <div class="text-center mt-3">
            <p class="mb-0"> <?=lang('Auth.alreadyRegistered')?> <a href="<?= url_to('login') ?>" class="text-decoration-none fw-bold" 
            style="color: rgb(101,78,163);"><?=lang('Auth.signIn')?></a></p>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>