<?= $this->extend('auth/templates/index'); ?>

<?= $this->section('content'); ?>

<!-- Login -->
<div class="container" style="max-width: 450px; margin-top: 80px;">
    <div class="card shadow-sm p-4 border-0">
        <h2 class="text-center mb-4 fw-bold">Masuk ke Kost Kita</h2>

        <?= view('Myth\Auth\Views\_message_block') ?>
        
        <form action="<?= url_to('login') ?>" method="post">
            <?= csrf_field() ?>
<?php $config = config('Auth');?>
<?php if ($config->validFields === ['email']): ?>

            <div class="mb-3">
                <label for="login"><?=lang('Auth.email')?></label>
				<input type="email" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
						name="login" placeholder="<?=lang('Auth.email')?>">
				<div class="invalid-feedback">
					<?= session('errors.login') ?>
				</div>
            </div>
<?php else: ?>
            <div class="mb-3">
                <label for="login"><?=lang('Auth.emailOrUsername')?></label>
                <input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
                        name="login" placeholder="<?=lang('Auth.emailOrUsername')?>">
                <div class="invalid-feedback">
                    <?= session('errors.login') ?>
                </div>
            </div>
<?php endif; ?>
            <div class="mb-3">
                <label for="password"><?=lang('Auth.password')?></label>
                <input type="password" name="password" class="form-control  <?php if (session('errors.password')) : ?>
                    is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>">
                <div class="invalid-feedback">
                    <?= session('errors.password') ?>
                </div>
            </div>
<?php if ($config->allowRemembering): ?>
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" name="remember" class="form-check-input" <?php if (old('remember')) : ?> 
                                checked <?php endif ?>>
                            Ingat Saya
                        </label>
                    </div>
                </div>
<?php endif; ?>

            <button type="submit" class="btn btn-primary w-100" style="background-color: rgb(101,78,163); border: none;">Masuk</button>
		</form>

		<hr>
<?php if ($config->activeResetter): ?>	
    <p><a href="<?= url_to('forgot') ?>" class="text-decoration-none" style="color: rgb(101,78,163);">Lupa Password</a></p>
<?php endif; ?>
<?php if ($config->allowRegistration) : ?>
		<p class="mb-0">Belum punya akun? <a href="<?= url_to('register') ?>" class="text-decoration-none fw-bold" 
        style="color: rgb(101,78,163);">Daftar disini</a></p>
<?php endif; ?>



    </div>
</div>

<?= $this->endSection(); ?>