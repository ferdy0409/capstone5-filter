<?php $this->extend('layout.php'); ?>

<?php $this->section('content'); ?>

<section class="section profile">
    <div class="row">
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                    <img src="<?= base_url() ?>NiceAdmin/assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                    <h2><?= $username; ?></h2>
                    <h3><?= ucfirst($role); ?></h3>
                </div>
            </div>
        </div>

        <div class="col-xl-8">
            <div class="card">
                <div class="card-body pt-3"
                    <div class="tab-content pt-2">
                        <div class="tab-pane fade show active profile-overview" id="profile-overview">
                            <h5 class="card-title">Informasi Profil Pengguna</h5>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">
                                    <strong>Username</strong>
                                </div>
                                <div class="col-lg-9 col-md-8">
                                    <?= $username; ?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">
                                    <strong>Role</strong>
                                </div>
                                <div class="col-lg-9 col-md-8">
                                    <?= ucfirst($role); ?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">
                                    <strong>Email</strong>
                                </div>
                                <div class="col-lg-9 col-md-8">
                                    <?= $email; ?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">
                                    <strong>Waktu Login</strong>
                                </div>
                                <div class="col-lg-9 col-md-8">
                                    <?= $login_time; ?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">
                                    <strong>Status Login</strong>
                                </div>
                                <div class="col-lg-9 col-md-8">
                                    <span class="badge bg-success">
                                        <?= 'Sudah Login'; ?>
                                    </span>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Bordered Tabs -->
                </div>
            </div>
        </div>
    </div>
</section>

<?php $this->endSection(); ?>
