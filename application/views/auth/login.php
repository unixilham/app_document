<!DOCTYPE html>
<html lang="en">

<head>

    <style>
        .coba {
            background-color: aquamarine;
        }
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>LOGIN ADMIN</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= base_url() ?> assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?= base_url() ?> assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?= base_url() ?>assets/images/logobudiasih.svg" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth">
                <div class="row flex-grow">
                    <div class="col-lg-4 mx-auto shadow p-3 mb-5 bg-body rounded ">
                        <div class="auth-form-light text-center p-5">
                            <div class="brand-logo">
                                <img src="<?= base_url() ?>assets/images/logobudiasih.svg">
                            </div>
                            <h4>APLIKASI DOCUMENT CONTROL</h4>

                            <?= $this->session->flashdata('pesan'); ?>

                            <form class="pt-3" method="post" action="<?= base_url('auth') ?>">
                                <div class="form-group">
                                    <input type="username" class="form-control form-control-lg" name="username" id="exampleInputusername1" placeholder="Username" autocomplete="off" value="<?= set_value('username') ?>">
                                    <?= form_error('username', "<small class='text-danger'>", '</small>') ?>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" name="password" id="exampleInputPassword1" placeholder="Password">
                                    <?= form_error('password', "<small class='text-danger'>", "</small>") ?>

                                </div>

                                <button type="submit" class="btn btn-info">LOGIN</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?= base_url() ?>assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?= base_url() ?>assets/js/off-canvas.js"></script>
    <script src="<?= base_url() ?>assets/js/hoverable-collapse.js"></script>
    <script src="<?= base_url() ?>assets/js/misc.js"></script>
    <!-- endinject -->
</body>

</html>