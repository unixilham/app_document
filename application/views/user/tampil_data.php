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



                        <div class="flash-data" data-flash="<?= $this->session->flashdata('pesan'); ?>"></div>


                        <table class="table table-bordered table-striped" id="dataTabel">
                            <thead>
                                <tr class="text-center">
                                    <th width="8%">NO</th>
                                    <th>Jenis Document</th>
                                    <th>Judul Dockument</th>
                                    <th>Departemen</th>
                                    <th>Tgl Update</th>
                                    <th>Nama File</th>
                                    <th width="15%">Action</th>
                            </thead>
                            <tbody>
                                </tr>

                                <?php $i = 1;
                                foreach ($document as $j) : ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $j->nama_jenis; ?></td>
                                        <td><?= $j->judul_document; ?></td>
                                        <td><?= $j->nama_departemen; ?></td>
                                        <td><?= $j->tgl_upload; ?></td>
                                        <td> <?= $j->document; ?></td>
                                        <td class="text-center">
                                            <a href="<?= base_url('assets/upload/' . $j->document) ?>" class="btn btn-success btn-sm"><i class="mdi mdi-folder-download"></i></a>


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