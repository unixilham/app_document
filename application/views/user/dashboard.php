<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-info text-white me-2">
                    <i class="<?= $icon; ?>"></i>
                </span> Dashboard
            </h3>

        </div>

        <div class="row">
            <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                    <div class="card-body">
                        <img src="<?= base_url(); ?>/assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                        <h4 class="font-weight-normal mb-3">Document <i class="mdi mdi-file-document mdi-24px float-right"></i>
                        </h4>
                        <h2 class="mb-5"><?= $document; ?></h2>

                    </div>
                </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                    <div class="card-body">
                        <img src="<?= base_url(); ?>/assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                        <h4 class="font-weight-normal mb-3">Departemen <i class="mdi mdi-worker mdi-24px float-right"></i>
                        </h4>
                        <h2 class="mb-5"><?= $departemen; ?></h2>

                    </div>
                </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white">
                    <div class="card-body">
                        <img src="<?= base_url(); ?>/assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                        <h4 class="font-weight-normal mb-3"> Jenis Dokumen <i class="mdi mdi-file-multiple mdi-24px float-right"></i>
                        </h4>
                        <h2 class="mb-5"><?= $jenis; ?></h2>

                    </div>
                </div>
            </div>
        </div>




    </div>
    <!-- content-wrapper ends -->