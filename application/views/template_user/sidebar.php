<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="nav-profile-image">
                    <img src="<?= base_url() ?>assets/images/logobudiasih.svg" alt="profile">
                    <span class="login-status online"></span>
                    <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2">RS BUDIASIH</span>
                    <span class="text-secondary text-small">Public</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href=" <?= base_url(); ?> ">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">View Document</span>
                <i class="menu-arrow"></i>
                <i class="mdi  mdi-file-document menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <?php foreach ($data_departemen as $d) : ?>
                        <li class="nav-item"> <a class="nav-link" class="text-lowercase" href="<?= base_url('dashboard/tampil_data/' . $d->id_departemen)  ?>"> <?= $d->nama_departemen; ?> </a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </li>

        <?php if (!$this->session->userdata('username')) : ?>
            <li class="nav-item">
                <a class="nav-link" href=" <?= base_url('auth'); ?> ">
                    <span class="menu-title">Login</span>
                    <i class="mdi mdi mdi-login menu-icon"></i>
                </a>
            </li>
        <?php else : ?>
            <li class="nav-item">
                <a class="nav-link" href=" <?= base_url('auth/logout'); ?> ">
                    <span class="menu-title">Logout</span>
                    <i class="mdi mdi mdi-login menu-icon"></i>
                </a>
            </li>
        <?php endif; ?>


    </ul>
</nav>