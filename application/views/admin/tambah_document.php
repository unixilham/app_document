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

                        <form class="forms-sample" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="jenis">Jenis Document</label>
                                <select class="form-control form-control-sm" id="jenis" name="jenis">

                                    <option selected disabled>Pilih Jenis Document</option>
                                    <?php foreach ($jenis as $j) : ?>
                                        <option value="<?= $j->id ?> "><?= $j->nama_jenis ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?= form_error('jenis') ?>
                            </div>

                            <div class="form-group">
                                <label for="judul_document">Judul Document</label>
                                <input type="text" name="judul_document" class="form-control" id="judul_document" placeholder="Judul Document">
                                <?= form_error('judul_document') ?>
                            </div>

                            <div class="form-group">
                                <label for="Departemen">Departemen</label>
                                <select class="form-control form-control-sm" id="Departemen" name="departemen">

                                    <option selected disabled>Pilih Departemen</option>
                                    <?php foreach ($departemen as $d) : ?>
                                        <option value="<?= $d->id_departemen ?> "><?= $d->nama_departemen ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?= form_error('departemen') ?>
                            </div>

                            <div class="mb-3">
                                <label for="formFile" class="form-label">Pilih Document</label>
                                <input class="form-control" type="file" id="formFile" name="document">
                                <small class="text-muted">Maximal File 3 MB</small>

                            </div>

                            <br>


                            <button type="submit" class="btn btn-gradient-info me-2">Tambah Data</button>

                        </form>



                    </div>
                </div>
            </div>
        </div>





    </div>