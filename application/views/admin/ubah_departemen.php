<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-info text-white me-2">
                    <i class="<?= $icon; ?>"></i>
                </span> <?= $tittle; ?>
            </h3>

        </div>


        <div class="row">
            <div class=" grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <form class="forms-sample" method="post">
                            <div class="form-group">
                                <label for="nama_departemen">Nama Departemen</label>
                                <input type="text" name="nama_departemen" class="form-control" id="nama_departemen" value="<?= $departemen['nama_departemen'] ?>">
                                <?= form_error('nama_departemen', '<p class="text-danger"></p>') ?>
                            </div>


                            <button type="submit" class="btn btn-gradient-info me-2">Ubah Data</button>

                        </form>



                    </div>
                </div>
            </div>
        </div>





    </div>