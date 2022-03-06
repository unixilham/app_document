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

                        <a href=" <?= base_url('jenis_document/tambah') ?> " class="btn btn-gradient-info btn-fw">Tambah Data</a> <br><br>



                        <div class="flash-data" data-flash="<?= $this->session->flashdata('pesan'); ?>"></div>

                        <table class="table table-bordered table-striped" id="dataTabel">

                            <thead>
                                <tr class="text-center">
                                    <th width="8%">NO</th>
                                    <th>Jenis Document</th>
                                    <th width="15%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($jenis as $j) : ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $j->nama_jenis; ?></td>
                                        <td class="text-center">
                                            <a href="<?= base_url('jenis_document/delete/' . $j->id) ?>" class="btn btn-danger btn-sm tombol-hapus"><i class="mdi mdi-delete-forever"></i></a>
                                            <a href="<?= base_url('jenis_document/update/' . $j->id) ?>" class="btn btn-success btn-sm"><i class="mdi mdi-table-edit"></i></a>

                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>





    </div>