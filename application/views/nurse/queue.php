<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <?php $this->load->view('nurse/navbar'); ?>
        <?php $this->load->view('nurse/sidebar'); ?>
        <?php $this->load->view('nurse/modals'); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h2 class="m-0 text-dark">Emergency Room</h4>
                            <h4 class="m-0 text-dark">Patient Queue</h4>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <div class="d-flex justify-content-end mb-2">
                                <h5 class="m-0 text-dark">March 1, 2020 | 11:08 AM&nbsp;&nbsp;</h5>
                            </div>
                            <div class="d-flex justify-content-end">
                                <span style="color:red;"> Average Queue Time: 4 Hours 10 mins </span>
                            </div>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">

                            <!-- <div class="callout callout-info">
                                <h5><i class="fas fa-info"></i> Note:</h5>
                                This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.
                            </div> -->

                            <!-- Main content -->
                            <div class="invoice p-3 mb-3">
                                
                                <!-- <div class="row mb-3 justify-content-center">
                                    <button class="btn btn-success">Add Patient<i class="ml-1 fas fa-plus"></i></button>
                                </div> -->

                                <!-- Table row -->
                                <div class="dataTables_wrapper dt-bootstrap4">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Queue #</th>
                                                <th>Patient Name</th>
                                                <th>Sex</th>
                                                <th>Birthdate</th>
                                                <th>Origin</th>
                                                <th>Remarks</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Dahildahil, Roy, Onin</td>
                                                <td>Male</td>
                                                <td>Dec 19, 1994 <br> Age: 27 </td>
                                                <td>Outpatient Department</td>
                                                <td>Vagrant</td>
                                                <td>
                                                    <?php $this->load->view('nurse/queue/action_dropdown'); ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Santos, Juan, Velaso</td>
                                                <td>Male</td>
                                                <td>Dec 23, 1996 <br> Age: 24 </td>
                                                <td>ER Direct</td>
                                                <td></td>
                                                <td>
                                                    <?php $this->load->view('nurse/queue/action_dropdown'); ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Vasquez, Alfredo, Duran</td>
                                                <td>Male</td>
                                                <td>Nov 10, 1993<br> Age: 27 </td>
                                                <td>Outpatient Department</td>
                                                <td></td>
                                                <td>
                                                    <?php $this->load->view('nurse/queue/action_dropdown'); ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Tolentino, Gloria, Macapagal</td>
                                                <td>Femaile</td>
                                                <td>Nov 1, 1993<br> Age: 27 </td>
                                                <td>Outpatient Department</td>
                                                <td></td>
                                                <td>
                                                    <?php $this->load->view('nurse/queue/action_dropdown'); ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Aquino, Ninoy, Abalos</td>
                                                <td>Male</td>
                                                <td>Dec 19, 1996<br> Age: 22 </td>
                                                <td>Outpatient Department</td>
                                                <td></td>
                                                <td>
                                                    <?php $this->load->view('nurse/queue/action_dropdown'); ?>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Queue #</th>
                                                <th>Patient Name</th>
                                                <th>Sex</th>
                                                <th>Birthdate</th>
                                                <th>Origin</th>
                                                <th>Remarks</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div> <!-- /.row -->

                            </div> <!-- /.invoice -->
                        </div> <!-- /.col -->
                    </div> <!-- /.row -->
                </div> <!-- /.container-fluid -->
            </section> <!-- /.content -->
        </div> <!-- /.content-wrapper -->

        <!-- <footer class="main-footer">
            <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.0.5
            </div>
        </footer> -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });

            $("#example1_length").find('label').after('<button class="btn btn-success btn-sm ml-3">Add Patient<i class="ml-1 fas fa-plus"></i></button>');
        });
    </script>
</body>

</html>