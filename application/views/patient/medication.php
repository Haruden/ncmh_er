<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <?= view(auth('role') . '/modals'); ?>
    <?= view('patient/components/content_header'); ?>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-2">
                    <?= view('patient/components/sub_sidebar', $title); ?>
                </div>

                <div class="col-md-10">
                    <div class="card">

                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="medication_sheet">
                                    <h3>Medication Administration Record</h3>
                                    <hr>
                                    <!-- <button type="button" class="btn btn-default btn-md dropdown-toggle mb-3" data-toggle="dropdown" aria-expanded="false">
                                                Bulk Action
                                            </button> -->
                                    <!-- <button  data-toggle="modal" id="add-medication-notes" data-target="#medication-add-notes-modal" class="btn btn-md btn-success mb-3 ml-3">
                                                Add Medication <i class="ml-1 fas fa-plus"></i>
                                            </button> -->
                                    <!-- <ul class="dropdown-menu dropdown-options" x-placement="bottom-start">
                                        <li class="dropdown-item"><a href="#" data-toggle="modal" data-target="#modal-action">Carry Out</a></li>
                                        <li class="dropdown-item"><a href="#">Administer</a></li>
                                        <li class="dropdown-item"><a href="#">Hold</a></li>
                                        <li class="dropdown-item"><a href="#">Shifted</a></li>
                                        <li class="dropdown-item"><a href="#">Discontinued</a></li>
                                    </ul> -->

                                    <!-- Table row -->
                                    <div class="dataTables_wrapper dt-bootstrap4">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <?php if (auth('role') == 'nurse') { ?> <th width='25px'><input type="checkbox" name="" id="sall-medcb"></th> <?php } ?>
                                                    <th>Date/Time Ordered</th>
                                                    <th>Name of Medication</th>
                                                    <th>Dosage</th>
                                                    <th>Frequency</th>
                                                    <th>Route</th>
                                                    <th>Last Dose Given</th>
                                                    <th>Medication Due On</th>
                                                    <th>Status</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <?php if (auth('role') == 'nurse') { ?> <td><input type="checkbox" name="" id=""></td> <?php } ?>
                                                    <td>01/10/2021 <br> 1:51PM</td>
                                                    <td>Paracetamol</td>
                                                    <td>500mg</td>
                                                    <td>TID</td>
                                                    <td>PO</td>
                                                    <td>01/25/2021 <br> 8:32AM</td>
                                                    <td>01/25/2021 <br> 1:00PM</td>
                                                    <td><strong style="color:red">NEW</strong></td>
                                                    <td>
                                                        <?php if (auth('role') == 'doctor') { ?>
                                                            <button class="btn btn-block btn-default" data-toggle="modal" aria-haspopup="true" aria-expanded="false" data-target="#administration-record-modal">
                                                                View Details
                                                            </button>
                                                        <?php } ?>
                                                        <?php if (auth('role') == 'nurse') { ?>
                                                            <button type="button" class="btn btn-primary btn-md dropdown-toggle mb-3" data-toggle="dropdown" aria-expanded="false">
                                                                Action
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-options" x-placement="bottom-start">
                                                                <li class="dropdown-item"><button class="btn btn-sm btn-block btn-default" data-toggle="modal" data-target="#modal-action" data-title="Carry Out">Carry Out</button></li>
                                                                <li class="dropdown-item"><button class="btn btn-sm btn-block btn-default" data-toggle="modal" data-target="#modal-action" data-title="Administer">Administer</button></li>
                                                                <li class="dropdown-item"><button class="btn btn-sm btn-block btn-default" data-toggle="modal" data-target="#modal-action" data-title="Hold">Hold</button></li>
                                                                <li class="dropdown-item"><button class="btn btn-sm btn-block btn-default" data-toggle="modal" data-target="#modal-action" data-title="Shift">Shifted</button></li>
                                                                <li class="dropdown-item"><button class="btn btn-sm btn-block btn-default" data-toggle="modal" data-target="#modal-action" data-title="Discontinue">Discontinued</button></li>
                                                                <div class="dropdown-divider"></div>
                                                                <li class="dropdown-item">
                                                                    <button class="btn btn-sm btn-block btn-default" data-toggle="modal" aria-haspopup="true" data-target="#administration-record-modal">
                                                                        View Details
                                                                    </button>
                                                                </li>
                                                            </ul>
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <?php if (auth('role') == 'nurse') { ?> <td><input type="checkbox" name="" id=""></td> <?php } ?>
                                                    <td>01/10/2021 <br> 1:51PM</td>
                                                    <td>Ibuprofen</td>
                                                    <td>500mg</td>
                                                    <td>TID</td>
                                                    <td>PO</td>
                                                    <td>01/25/2021 <br> 8:32AM</td>
                                                    <td>01/26/2021 <br> 8:00PM</td>
                                                    <td><strong>Active</strong></td>
                                                    <td>
                                                        <?php if (auth('role') == 'doctor') { ?>
                                                            <button class="btn btn-block btn-default" data-toggle="modal" aria-haspopup="true" aria-expanded="false" data-target="#administration-record-modal">
                                                                View Details
                                                            </button>
                                                        <?php } ?>
                                                        <?php if (auth('role') == 'nurse') { ?>
                                                            <button type="button" class="btn btn-primary btn-md dropdown-toggle mb-3" data-toggle="dropdown" aria-expanded="false">
                                                                Action
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-options" x-placement="bottom-start">
                                                                <li class="dropdown-item"><button class="btn btn-sm btn-block btn-default" data-toggle="modal" data-target="#modal-action" data-title="Carry Out">Carry Out</button></li>
                                                                <li class="dropdown-item"><button class="btn btn-sm btn-block btn-default" data-toggle="modal" data-target="#modal-action" data-title="Administer">Administer</button></li>
                                                                <li class="dropdown-item"><button class="btn btn-sm btn-block btn-default" data-toggle="modal" data-target="#modal-action" data-title="Hold">Hold</button></li>
                                                                <li class="dropdown-item"><button class="btn btn-sm btn-block btn-default" data-toggle="modal" data-target="#modal-action" data-title="Shift">Shifted</button></li>
                                                                <li class="dropdown-item"><button class="btn btn-sm btn-block btn-default" data-toggle="modal" data-target="#modal-action" data-title="Discontinue">Discontinued</button></li>
                                                                <div class="dropdown-divider"></div>
                                                                <li class="dropdown-item">
                                                                    <button class="btn btn-sm btn-block btn-default" data-toggle="modal" aria-haspopup="true" data-target="#administration-record-modal">
                                                                        View Details
                                                                    </button>
                                                                </li>
                                                            </ul>
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <?php if (auth('role') == 'nurse') { ?> <td><input type="checkbox" name="" id=""></td> <?php } ?>
                                                    <td>01/10/2021 <br> 1:51PM</td>
                                                    <td>Mefenamic</td>
                                                    <td>500mg</td>
                                                    <td>TID</td>
                                                    <td>PO</td>
                                                    <td>01/25/2021 <br> 8:32AM</td>
                                                    <td>01/25/2021 <br> 1:00PM</td>
                                                    <td><strong>Active</strong></td>
                                                    <td>
                                                        <?php if (auth('role') == 'doctor') { ?>
                                                            <button class="btn btn-block btn-default" data-toggle="modal" aria-haspopup="true" aria-expanded="false" data-target="#administration-record-modal">
                                                                View Details
                                                            </button>
                                                        <?php } ?>
                                                        <?php if (auth('role') == 'nurse') { ?>
                                                            <button type="button" class="btn btn-primary btn-md dropdown-toggle mb-3" data-toggle="dropdown" aria-expanded="false">
                                                                Action
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-options" x-placement="bottom-start">
                                                                <li class="dropdown-item"><button class="btn btn-sm btn-block btn-default" data-toggle="modal" data-target="#modal-action" data-title="Carry Out">Carry Out</button></li>
                                                                <li class="dropdown-item"><button class="btn btn-sm btn-block btn-default" data-toggle="modal" data-target="#modal-action" data-title="Administer">Administer</button></li>
                                                                <li class="dropdown-item"><button class="btn btn-sm btn-block btn-default" data-toggle="modal" data-target="#modal-action" data-title="Hold">Hold</button></li>
                                                                <li class="dropdown-item"><button class="btn btn-sm btn-block btn-default" data-toggle="modal" data-target="#modal-action" data-title="Shift">Shifted</button></li>
                                                                <li class="dropdown-item"><button class="btn btn-sm btn-block btn-default" data-toggle="modal" data-target="#modal-action" data-title="Discontinue">Discontinued</button></li>
                                                                <div class="dropdown-divider"></div>
                                                                <li class="dropdown-item">
                                                                    <button class="btn btn-sm btn-block btn-default" data-toggle="modal" aria-haspopup="true" data-target="#administration-record-modal">
                                                                        View Details
                                                                    </button>
                                                                </li>
                                                            </ul>
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <?php if (auth('role') == 'nurse') { ?> <th></th> <?php } ?>
                                                    <th>Date/Time Ordered</th>
                                                    <th>Name of Medication</th>
                                                    <th>Dosage</th>
                                                    <th>Frequency</th>
                                                    <th>Route</th>
                                                    <th>Last Dose Given</th>
                                                    <th>Medication Due On</th>
                                                    <th>Status</th>
                                                    <th></th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div> <!-- /.row -->

                                </div> <!-- /.tab-pane -->
                            </div> <!-- /.tab-content -->
                        </div> <!-- /.card-body -->
                    </div>
                    <!-- /.nav-tabs-custom -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div> <!-- /.content-wrapper -->


<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->



<script>
    $('[data-widget="pushmenu"]').PushMenu('collapse');


    $(function() {
        var dataTable = $("#example1").DataTable({
            language: {
                searchPlaceholder: "Search record"
            },
            "responsive": true,
            "autoWidth": false,
            <?php if (auth('role') == 'nurse') { ?>
                columnDefs: [{
                    orderable: false,
                    targets: 0
                }],
                order: [
                    [1, 'desc']
                ],
            <?php } ?>
            <?php if (auth('role') == 'doctor') { ?>
                order: [
                    [0, 'desc']
                ],
            <?php } ?>
        });

        <?php if (auth('role') == 'doctor') { ?>
            $("#example1_length").find('label').after('<button  data-toggle="modal" id="add-medication-notes" data-target="#medication-add-notes-modal" class="btn btn-sm btn-success ml-3">Add Medication <i class="ml-1 fas fa-plus"></i></button>');
        <?php } ?>

        <?php if (auth('role') == 'nurse') { ?>
            var html = '<button type="button" class="btn btn-primary btn-sm dropdown-toggle ml-3" data-toggle="dropdown" aria-expanded="false"> Bulk Action </button>';
            html += ' <ul class="dropdown-menu dropdown-options" x-placement="bottom-start">';
            html += '   <li class="dropdown-item"><button class="btn btn-sm btn-block btn-default" data-toggle="modal" data-target="#modal-action" data-title="Carry Out">Carry Out</button></li>';
            html += '   <li class="dropdown-item"><button class="btn btn-sm btn-block btn-default" data-toggle="modal" data-target="#modal-action" data-title="Administer">Administer</button></li>';
            html += '   <li class="dropdown-item"><button class="btn btn-sm btn-block btn-default" data-toggle="modal" data-target="#modal-action" data-title="Hold">Hold</button></li>';
            html += '   <li class="dropdown-item"><button class="btn btn-sm btn-block btn-default" data-toggle="modal" data-target="#modal-action" data-title="Shift">Shifted</button></li>';
            html += '   <li class="dropdown-item"><button class="btn btn-sm btn-block btn-default" data-toggle="modal" data-target="#modal-action" data-title="Discontinue">Discontinued</button></li>';
            html += '   <div class="dropdown-divider"></div>';
            html += '   <li class="dropdown-item">';
            html += '       <button class="btn btn-sm btn-block btn-default" data-toggle="modal" aria-haspopup="true" data-target="#administration-record-modal">';
            html += '   View Details';
            html += '   </button>';
            html += '   </li>';
            html += '   </ul>';
            $("#example1_length").find('label').after(html);
        <?php } ?>

        // Handle click on "Select all" control
        $('#sall-medcb').on('click', function(){
            // Get all rows with search applied
            var rows = dataTable.rows({ 'search': 'applied' }).nodes();
            // Check/uncheck checkboxes for all rows in the table
            $('input[type="checkbox"]', rows).prop('checked', this.checked);
        });
    });
</script>

</html>