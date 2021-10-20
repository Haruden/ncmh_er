<?= view('templates/navbar');?>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-2">
    <!-- Brand Logo -->
    <a href="<?php echo base_url(auth('role').'/queue');?>" class="brand-link border-0 shadow mb-2 sidebar-dark-primary align-middle">
        <img src="<?php echo base_url(); ?>assets/img/atis-circlex32.png" alt="National Center for Mental Health" class="brand-image img-circle">
        <span class="brand-text text-light" style="font-weight: 200;">ER</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 mb-4 d-flex border-bottom-0 align-middle d-flex align-items-center">
            <div class="image">
                <!-- <img src="<?php echo base_url(); ?>assets/img/doctor_clipart.png" class="img-circle elevation-2" alt="User Image"> -->
                <?= createAvatar(auth('fullname'));?>
            </div>
            <div class="text-white col-9">
                <!-- <a href="#" class="d-block">Dr. Quack Quack</a> -->
                <h6 class="m-0 font-weight-light text-lg text-truncate mb-1"><?= auth('fullname') ?></h6>
                <p class="text-truncate text-capitalize m-0" style="margin-top: -10px !important;"><small><?= auth('role') ?><i class="fas fa-check-circle text-gray ml-1" style="font-size: 10px;"></i></small></p>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <?php echo sidebar($sidebar); ?>
            </ul>
        </nav>     
    </div>
    <!-- /.sidebar -->
</aside>