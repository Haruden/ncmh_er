<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <?php $this->load->view('doctor/navbar'); ?>
        <?php $this->load->view('doctor/sidebar'); ?>
        <?php $this->load->view('doctor/modals'); ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h2 class="m-0 text-dark">ROY O. DAHILDAHIL, 28, M</h2>
                            <p class="mb-0">Date of Admission: December 19, 2020 (3 Days)</p>
                            <a href="#">View Pavilion History</a>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <div class="d-flex justify-content-end mb-2">
                                <h1>Pavilion 1</h1>
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

                            <?php $this->load->view('doctor/queue/sidemenu'); ?>

                        </div>
                        <!-- /.col -->
                        <div class="col-md-10">
                            <div class="card">
                                <!-- <div class="col-sm-12 p-2 text-center"  style="margin-bottom:-15px !important;">
                                    <button class="btn btn-md btn-success mr-3" data-toggle="modal" data-target="#add-doctor-order">Add Doctor Order  <i class="ml-1 fas fa-plus"></i></button>
                                </div> -->
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="active tab-pane" id="doctors_orders">
                                            <div>
                                                <h4>SPECIAL INSTRUCTION</h4>
                                                <textarea class="form-control" rows="2" placeholder="Special Instructions Here" disabled></textarea>
                                            </div>
                                            <br>

                                            <!-- Table row -->
                                            <div class="dataTables_wrapper dt-bootstrap4">
                                                <table id="example1" class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Date/Time</th>
                                                            <th>Order</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Jan 24, 2021 <br> 12:10PM <br><small><i class="small text-muted">Ordered by: Dr. Cruzada </i></small></td>
                                                            <td>Doctor's notes will be posted here</br><small><b>Remarks:</b> Data notes</small></td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <button type="button" class="btn btn-sm btn-block btn-warning dropdown-toggle" data-toggle="modal" aria-haspopup="true" aria-expanded="false" data-target="#modal-do_status" disabled>
                                                                            Pending
                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item">Carried</a>
                                                                            <a class=" dropdown-item">Administered</a>
                                                                            <a class="dropdown-item">Request Made</a>
                                                                            <a class="dropdown-item">Endorsed</a>
                                                                            <a class="dropdown-item">Discontinued</a>
                                                                            <div class="dropdown-divider"></div>
                                                                            <a class="dropdown-item">Separated link</a>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                                
                                                            </td>
                                                            <td>
                                                                <button type="button" class="btn btn-block  btn-success btn-sm" aria-haspopup="true" aria-expanded="false" >
                                                                            View Details
                                                                </button>
                                                                <div class="col-sm-12">
                                                                    <a href="#updateorder" class="text-primary"><small>Update Order</small></a>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>

                                                            <td>Jan 24, 2021 <br> 12:10PM <br><small><i class="small text-muted">Ordered by: Dr. Cruzada </i></small></td>
                                                            <td>Requested for laboratory</br><small><b>Remarks:</b> Data notes</small></td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <button type="button" class="btn btn-success btn-block btn-sm dropdown-toggle " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" disabled>
                                                                            Requested
                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item">Carried</a>
                                                                            <a class=" dropdown-item">Administered</a>
                                                                            <a class="dropdown-item">Request Made</a>
                                                                            <a class="dropdown-item">Endorsed</a>
                                                                            <a class="dropdown-item">Discontinued</a>
                                                                            <div class="dropdown-divider"></div>
                                                                            <a class="dropdown-item">Separated link</a>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <small><i class="small text-muted btn-block">Updated by: Burr Herber, RN </br> Jan 10, 2021 - 12:02 PM</i></small>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <button type="button" class="btn btn-block  btn-success btn-sm" aria-haspopup="true" aria-expanded="false" >
                                                                            View Details
                                                                </button>
                                                                <div class="col-sm-12">
                                                                    <a href="#updateorder" class="text-primary"><small>Update Order</small></a>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>

                                                            <td>Jan 24, 2021 <br> 12:10PM <br><small><i class="small text-muted">Ordered by: Dr. Cruzada </i></small></td>
                                                            <td>Medications</br><small><b>Remarks:</b> Data notes</small></td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <button type="button" class="btn btn-block btn-success btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" disabled>
                                                                            Administered
                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item">Carried</a>
                                                                            <a class="dropdown-item">Administered</a>
                                                                            <a class="dropdown-item">Request Made</a>
                                                                            <a class="dropdown-item">Endorsed</a>
                                                                            <a class="dropdown-item">Discontinued</a>
                                                                            <div class="dropdown-divider"></div>
                                                                            <a class="dropdown-item">Separated link</a>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                                
                                                                <div class="col-sm-12">
                                                                    <small><i class="small text-muted btn-block">Updated by: Burr Herber, RN </br> Jan 10, 2021 - 12:02 PM</i></small>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <button type="button" class="btn btn-block  btn-success btn-sm" aria-haspopup="true" aria-expanded="false" >
                                                                            View Details
                                                                </button>
                                                                <div class="col-sm-12">
                                                                    <a href="#updateorder" class="text-primary"><small>Update Order</small></a>
                                                                </div>
                                                            </td>

                                                        </tr>

                                                        <tr>

                                                            <td>Jan 24, 2021 <br> 12:10PM <br><small><i class="small text-muted">Ordered by: Dr. Cruzada </i></small></td>
                                                            <td>Doctor's notes will be posted here</br><small><b>Remarks:</b> Data notes</small></td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <button type="button" class="btn btn-sm btn-block btn-warning dropdown-toggle" data-toggle="modal" aria-haspopup="true" aria-expanded="false" data-target="#modal-do_status" disabled>
                                                                            Pending
                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item">Carried</a>
                                                                            <a class=" dropdown-item">Administered</a>
                                                                            <a class="dropdown-item">Request Made</a>
                                                                            <a class="dropdown-item">Endorsed</a>
                                                                            <a class="dropdown-item">Discontinued</a>
                                                                            <div class="dropdown-divider"></div>
                                                                            <a class="dropdown-item">Separated link</a>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                                
                                                            <td>
                                                                <button type="button" class="btn btn-block  btn-success btn-sm" aria-haspopup="true" aria-expanded="false" >
                                                                            View Details
                                                                </button>
                                                                <div class="col-sm-12">
                                                                    <a href="#updateorder" class="text-primary"><small>Update Order</small></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div> <!-- End of Table -->

                                            <hr>
                                            <div class="mt-3 d-flex justify-content-center">
                                                <!-- <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#add-doctor-order">Add Order</button> -->
                                            </div>

                                        </div> <!-- End of tab pane -->
                                    </div> <!-- End of tab content -->
                                </div> <!-- End of card body -->
                            </div> <!-- /card -->
                        </div> <!-- /.col -->
                    </div> <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->

        </div> <!-- /.content-wrapper -->
    </div>
    <!-- ./wrapper -->
</body>

<script>
    $('[data-widget="pushmenu"]').PushMenu('collapse');

    var queryString = window.location.search;
    var urlParams = new URLSearchParams(queryString);
    var patient_id = urlParams.get('patient_id');

    $(function() {

        if (patient_id != "" && Number(patient_id) > 0) {
            setTimeout(function() {
                $('#add-doctor-order').modal('show');
            }, 500);
        }

        $("#example1").DataTable({
            language: {
                searchPlaceholder: "Search order"
            },
            "responsive": true,
            "autoWidth": false,
        });
        $("#example1_length").find('label').after(' <button class="btn btn-sm btn-success ml-3" data-toggle="modal" data-target="#add-doctor-order">Add Doctor Order  <i class="ml-1 fas fa-plus"></i></button>');

    });


</script>

</html>