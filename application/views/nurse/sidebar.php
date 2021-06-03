<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url('nurse');?>" class="brand-link">
        <img src="<?php echo base_url(); ?>assets/img/ncmh_logo.png" alt="NCMH Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Nurse</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Nurse User</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                <a href="<?php echo base_url('nurse'); ?>" class="nav-link <?php if($title=="Nurse's Queue") echo 'active';?>">
                        <i class="nav-icon fas fa-list-ol"></i>
                        <p>
                            Patient Queue
                        </p>
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a href="<?php echo base_url('nurse/patient_list'); ?>" class="nav-link <?php if($title=="Patient List") echo 'active';?>">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            InPatient List
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-calendar-alt"></i>
                        <p>
                            My Schedule
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-bar"></i>
                        <p>
                            Reports
                        </p>
                    </a>
                </li> -->
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
