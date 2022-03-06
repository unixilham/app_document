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

                            <input type="hidden" name="id_document" value="<?= $document->id_document; ?>">

                            <div class="form-group">
                                <label for="jenis">Jenis Document</label>
                                <select class="form-control form-control-sm" id="jenis" name="jenis">

                                    <option>Pilih Jenis Document</option>
                                    <?php foreach ($jenis as $j) : ?>
                                        <?php if ($j->id == $document->id_jenis) : ?>
                                            <option value="<?= $document->id_jenis ?>" selected><?= $document->nama_jenis ?></option>
                                        <?php else : ?>
                                            <option value="<?= $j->id ?>"><?= $j->nama_jenis ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                                <?= form_error('jenis') ?>
                            </div>

                            <div class="form-group">
                                <label for="judul_document">Judul Document</label>
                                <input type="text" name="judul_document" class="form-control" id="judul_document" value="<?= $document->judul_document; ?>">
                                <?= form_error('judul_document') ?>
                            </div>

                            <div class="form-group">
                                <label for="Departemen">Departemen</label>
                                <select class="form-control form-control-sm" id="Departemen" name="departemen">

                                    <option>Pilih Departemen</option>

                                    <?php foreach ($departemen as $d) : ?>
                                        <?php if ($d->id_departement == $document->id_departement) : ?>
                                            <option value="<?= $d->id_departemen ?> " selected><?= $d->nama_departemen ?></option>
                                        <?php else : ?>
                                            <option value="<?= $d->id_departemen ?> "><?= $d->nama_departemen ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                                <?= form_error('departemen') ?>
                            </div>

                            <div class="mb-3">
                                <label for="formFile" class="form-label">Pilih Document</label>
                                <input class="form-control" type="file" id="formFile" name="document" value="<?= $document->document; ?>">
                                <small class="text-muted">Maximal File 3 MB</small>
                            </div>

                            <br>


                            <button type="submit" class="btn btn-gradient-info me-2">Ubah Data</button>

                        </form>



                    </div>
                </div>
            </div>
        </div>





    </div>