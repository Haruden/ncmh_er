<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <?php $this->load->view('nurse/navbar'); ?>
        <?php $this->load->view('nurse/sidebar'); ?>
        <?php $this->load->view('nurse/modals'); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- Content Header (Page header) -->
            <section class="content-header" style="margin-bottom: -1%;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2 class="m-0 text-dark">ROY O. DAHILDAHIL, 28, M</h2>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <div class="d-flex justify-content-end">
                                <h1>Emergency Room</h1>
                            </div>
                            <div class="d-flex justify-content-end">
                                <p>December 22, 2020</p>
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

                        <div class="col-md-2">                            
                            <?php $this->load->view('nurse/queue/sidemenu'); ?>
                        </div>
                        <!-- /.col -->

                        <div class="col-md-10">

                            <h4>Vitals</h4>
                            <div class="card">
                                <!-- <div class="col-sm-12 p-3 text-center" style="margin-bottom:-15px !important;">
                                    <button data-toggle="modal" data-target="#addVitalsModal" class="btn btn-success addVitalsModal mr-2">Add Vitals <i class="ml-1 fas fa-plus"></i></button>
                                    <button data-toggle="modal" data-target="#add-other-vitals-modal" class="btn btn-success open-other-vitals-modal">Add Other Vitals <i class="ml-1 fas fa-plus"></i></button>
                                </div> -->
                                
                                <div class="card-body">

                                    <div class="dataTables_wrapper dt-bootstrap4">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Date/Time Ordered</th>
                                                    <th>Blood Pressure</th>
                                                    <th>Respiratory Rate</th>
                                                    <th>Pulse Rate</th>
                                                    <th>Temperature</th>
                                                    <th>O2 Sat</th>
                                                    <th>Others</th>
                                                    <th>Taken By</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Jan-13-2021 | 11:12 AM</td>
                                                    <td>140/80</td>
                                                    <td>15</td>
                                                    <td>98</td>
                                                    <td>37.7</td>
                                                    <td>98%</td>
                                                    <td></td>
                                                    <td>B. Herber, RN</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <hr>
                                </div>
                            </div>

                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
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
</body>

<script>
    $('[data-widget="pushmenu"]').PushMenu('collapse');

    $("#addOtherVitalsDatePicker, #addVitalsDatePicker").attr("value", moment().format('L LT'));
    $("#addOtherVitalsDatePicker, #addVitalsDatePicker").click(function() {
        $("#addOtherVitalsDatePicker, #addVitalsDatePicker").removeAttr("value");
    });

    $("#addVitalsDatePicker, #addVitalsDatePicker").focusout(function() {
        $('.bootstrap-datetimepicker-widget').hide();
    });

    $(function() {
        $("#example1").DataTable({
            language: {
                searchPlaceholder: "Search vitals"
            },
            "responsive": true,
            "autoWidth": false,
        });

        $("#example1_length").find('label').after(
            '<button data-toggle="modal" data-target="#addVitalsModal" class="btn btn-success ml-2 btn-sm open-other-vitals-modal"> Add Vitals <i class="ml-1 fas fa-plus"></i></button>'
            );

        $("#example2").DataTable({
            language: {
                searchPlaceholder: "Search vitals"
            },
            "responsive": true,
            "autoWidth": false,
        });

        $("#example2_length").find('label').after(
            '<button data-toggle="modal" data-target="#add-other-vitals-modal" class="btn btn-success ml-2 btn-sm open-other-vitals-modal">Add Other Vitals <i class="ml-1 fas fa-plus"></i></button>'
            );
    });
</script>

</html>