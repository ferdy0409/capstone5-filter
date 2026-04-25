<?= $this->extend('components/layout_clear'); ?>

<?= $this->section('content') ?>
<section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

        <div class="d-flex justify-content-center py-4">
          <a href="#" class="logo d-flex align-items-center w-auto">
            <img src="<?= base_url() ?>NiceAdmin/assets/img/logo.png" alt="">
            <span class="d-none d-lg-block">Toko</span>
          </a>
        </div>

        <div class="card mb-3">
          <div class="card-body">
            <div class="pt-4 pb-2">
              <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
              <p class="text-center small">Enter your username & password to login</p>
            </div>

            <?php if (session()->getFlashdata('failed')) : ?>
              <div class="alert alert-danger text-center" role="alert">
                <?= session()->getFlashdata('failed') ?>
              </div>
            <?php endif; ?>

            <form action="<?= base_url('login') ?>" method="post" class="row g-3">
              <div class="col-12">
                <label class="form-label">Username</label>
                <div class="input-group">
                  <span class="input-group-text">@</span>
                  <input type="text" name="username" class="form-control" required>
                </div>
              </div>

              <div class="col-12">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
              </div>

              <div class="col-12">
                <button class="btn btn-primary w-100" type="submit">Login</button>
              </div>
            </form>

          </div>
        </div>

        <div class="credits text-center">
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>

      </div>
    </div>
  </div>
</section>
<?= $this->endSection() ?>