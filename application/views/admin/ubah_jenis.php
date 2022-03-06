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
                                <label for="jenis">Nama Jenis Dockument</label>
                                <input type="text" name="jenis" class="form-control" id="jenis" value="<?= $jenis['nama_jenis'] ?>">
                                <?= form_error('jenis', '<p class="text-danger"></p>') ?>
                            </div>


                            <button type="submit" class="btn btn-gradient-info me-2">Ubah Data</button>

                        </form>



                    </div>
                </div>
            </div>
        </div>





    </div>