<?= $this->extend('layout_clear') ?>
<?= $this->section('content') ?>
<?php
$username = [
    'name' => 'username',
    'id' => 'username',
    'class' => 'form-control'
];

$password = [
    'name' => 'password',
    'id' => 'password',
    'class' => 'form-control'
];
?>
<div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <?php
                                        if (session()->getFlashData('failed')) {
                                        ?>
                                            <div class="col-12 alert alert-danger" role="alert">
                                                <hr>
                                                <p class="mb-0">
                                                    <?= session()->getFlashData('failed') ?>
                                                </p>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                            <?= form_open('login') ?>
                                            <div class="form-floating mb-3">
                                                <?= form_input($username) ?>
                                                <label for="yourUsername">Username</label>
                                            </div>
                                                <div class="form-floating mb-3">
                                                <?= form_password($password) ?>
                                                <label for="inputPassword">Password</label>
                                            </div>
                                                <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                    <?= form_submit('submit', 'Login', ['class' => 'btn btn-primary w-100']) ?>
                                                </div>
                                            <?= form_close() ?>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
                        <script src="js/scripts.js"></script>
<?= $this->endSection() ?>