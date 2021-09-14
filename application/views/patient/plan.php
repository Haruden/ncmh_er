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
                                <div class="active tab-pane" id="doctors_orders">

                                    <?php if (auth('role') == 'doctor') { ?>
                                        <div class="row mb-2">
                                            <button class="btn btn-sm btn-success mr-3" data-toggle="modal" data-target="#add-doctor-order">Add Doctor Order <i class="ml-1 fas fa-plus"></i></button>
                                        </div>
                                        <hr>
                                    <?php } ?>

                                    <div>
                                        <h5>SPECIAL INSTRUCTION</h5>
                                        <textarea class="form-control" rows="2" placeholder="Special Instructions Here" disabled></textarea>
                                    </div>
                                    <br>

                                    <h5>Doctor's Order Details</h5>

                                    <!-- General Orders -->
                                    <div class="card order-card">

                                        <div class="card-header p-2 pr-3 order-card-header">
                                            <span>General Orders (2)</span>
                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="card-body dataTables_wrapper dt-bootstrap4" style="display: block;">
                                            <table id="genOrderDatatable" class="table table-bordered table-striped order-datatable">
                                                <thead>
                                                    <tr>
                                                        <th width="100">Date/Time</th>
                                                        <th>Order</th>
                                                        <th>Ordering Physician</th>
                                                        <th>Priority</th>
                                                        <th width="130">Status</th>
                                                        <th width="110">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Jan 24, 2021 <br> 12:10PM</td>
                                                        <td>Doctor's notes will be posted here</br><small><b>Remarks:</b> Data notes</small></td>
                                                        <td>Dr. Joeffrey Cruzada (Attending) </td>
                                                        <td>Routine</td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <button type="button" class="btn btn-sm btn-block btn-warning dropdown-toggle btn_status" data-toggle="modal" aria-haspopup="true" aria-expanded="false" data-target="#modal-do_status">
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
                                                            <button class="btn btn-sm btn-default">View Details</button>
                                                            <br>
                                                            <small class="upd-or-sm"><a href="#">Update Order</a> </small>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>Jan 24, 2021 <br> 12:10PM</td>
                                                        <td>Doctor's notes will be posted here</br><small><b>Remarks:</b> Data notes</small></td>
                                                        <td>Dr. Joeffrey Cruzada (Attending) </td>
                                                        <td>Routine</td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <button type="button" class="btn btn-sm btn-block btn-warning dropdown-toggle btn_status" data-toggle="modal" aria-haspopup="true" aria-expanded="false" data-target="#modal-do_status">
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
                                                            <button class="btn btn-sm btn-default">View Details</button>
                                                            <br>
                                                            <small class="upd-or-sm"><a href="#">Update Order</a> </small>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>

                                    <!-- Dietary Orders -->
                                    <div class="card order-card">

                                        <div class="card-header p-2 pr-3 order-card-header">
                                            <span>Dietary Orders (1)</span>
                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="card-body dataTables_wrapper dt-bootstrap4" style="display: block;">
                                            <table id="" class="table table-bordered table-striped order-datatable">
                                                <thead>
                                                    <tr>
                                                        <th width="100">Date/Time</th>
                                                        <th>Order</th>
                                                        <th>Ordering Physician</th>
                                                        <th>Priority</th>
                                                        <th width="130">Status</th>
                                                        <th width="110">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Jan 24, 2021 <br> 12:10PM</td>
                                                        <td>Low Salt Low Fat</br><small><b>Remarks:</b> Preferrably Fish</small></td>
                                                        <td>Dr. Joeffrey Cruzada (Attending) </td>
                                                        <td>Routine</td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <button type="button" class="btn btn-sm btn-block btn-warning dropdown-toggle btn_status" data-toggle="modal" aria-haspopup="true" aria-expanded="false" data-target="#modal-do_status">
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
                                                            <button class="btn btn-sm btn-default">View Details</button>
                                                            <br>
                                                            <small class="upd-or-sm"><a href="#">Update Order</a> </small>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>

                                    <!-- Referral Orders -->
                                    <div class="card order-card">

                                        <div class="card-header p-2 pr-3 order-card-header">
                                            <span>Referral Orders (1)</span>
                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="card-body dataTables_wrapper dt-bootstrap4" style="display: block;">
                                            <table id="" class="table table-bordered table-striped order-datatable">
                                                <thead>
                                                    <tr>
                                                        <th width="100">Date/Time</th>
                                                        <th>Order</th>
                                                        <th>Ordering Physician</th>
                                                        <th>Priority</th>
                                                        <th width="130">Status</th>
                                                        <th width="110">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Jan 24, 2021 <br> 12:10PM</td>
                                                        <td>
                                                            <b>Refer to Department:</b> Neurology <br>                                                            
                                                            <b>Reason for Referral:</b> Slurred Speech <br>                                                            
                                                            <small><b>Remarks:</b> Notes</small>
                                                        </td>
                                                        <td>Dr. Joeffrey Cruzada (Attending) </td>
                                                        <td>Routine</td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <button type="button" class="btn btn-sm btn-block btn-warning dropdown-toggle btn_status" data-toggle="modal" aria-haspopup="true" aria-expanded="false" data-target="#modal-do_status">
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
                                                            <button class="btn btn-sm btn-default">View Details</button>
                                                            <br>
                                                            <small class="upd-or-sm"><a href="#">Update Order</a> </small>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>

                                    <!-- Diagnostic Orders -->
                                    <div class="card order-card">

                                        <div class="card-header p-2 pr-3 order-card-header">
                                            <span>Diagnostic Orders (2)</span>
                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="card-body dataTables_wrapper dt-bootstrap4" style="display: block;">
                                            <table id="" class="table table-bordered table-striped order-datatable">
                                                <thead>
                                                    <tr>
                                                        <th width="100">Date/Time</th>
                                                        <th>Order</th>
                                                        <th>Ordering Physician</th>
                                                        <th>Priority</th>
                                                        <th width="130">Status</th>
                                                        <th width="110">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Jan 24, 2021 <br> 12:10PM</td>
                                                        <td>Doctor's notes will be posted here</br><small><b>Remarks:</b> Data notes</small></td>
                                                        <td>Dr. Joeffrey Cruzada (Attending) </td>
                                                        <td>Routine</td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <button type="button" class="btn btn-sm btn-block btn-warning dropdown-toggle btn_status" data-toggle="modal" aria-haspopup="true" aria-expanded="false" data-target="#modal-do_status">
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
                                                            <button class="btn btn-sm btn-default">View Details</button>
                                                            <br>
                                                            <small class="upd-or-sm"><a href="#">Update Order</a> </small>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>Jan 24, 2021 <br> 12:10PM</td>
                                                        <td>Doctor's notes will be posted here</br><small><b>Remarks:</b> Data notes</small></td>
                                                        <td>Dr. Joeffrey Cruzada (Attending) </td>
                                                        <td>Routine</td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <button type="button" class="btn btn-sm btn-block btn-warning dropdown-toggle btn_status" data-toggle="modal" aria-haspopup="true" aria-expanded="false" data-target="#modal-do_status">
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
                                                            <button class="btn btn-sm btn-default">View Details</button>
                                                            <br>
                                                            <small class="upd-or-sm"><a href="#">Update Order</a> </small>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>

                                    <!-- Table row -->
                                    <!-- <div class="dataTables_wrapper dt-bootstrap4">
                                        <table id="planTable" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th width="100">Date/Time</th>
                                                    <th>Order</th>
                                                    <th width="130">Status</th>
                                                    <?php if (auth('role') == 'doctor') { ?>
                                                        <th width="100">Action</th>
                                                    <?php } else if (auth('role') == 'nurse') { ?>
                                                        <th width="100">Details</th>
                                                    <?php } ?>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Jan 24, 2021 <br> 12:10PM <br><small><i class="small text-muted">Ordered by: Dr. Cruzada </i></small></td>
                                                    <td>Doctor's notes will be posted here</br><small><b>Remarks:</b> Data notes</small></td>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <button type="button" class="btn btn-sm btn-block btn-warning dropdown-toggle btn_status" data-toggle="modal" aria-haspopup="true" aria-expanded="false" data-target="#modal-do_status">
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
                                                    <td></td>
                                                </tr>

                                                <tr>

                                                    <td>Jan 24, 2021 <br> 12:10PM <br><small><i class="small text-muted">Ordered by: Dr. Cruzada </i></small></td>
                                                    <td>Requested for laboratory</br><small><b>Remarks:</b> Data notes</small></td>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <button type="button" class="btn btn-success btn-block btn-sm dropdown-toggle btn_status" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                                    <td></td>
                                                </tr>

                                                <tr>

                                                    <td>Jan 24, 2021 <br> 12:10PM <br><small><i class="small text-muted">Ordered by: Dr. Cruzada </i></small></td>
                                                    <td>Medications</br><small><b>Remarks:</b> Data notes</small></td>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <button type="button" class="btn btn-block btn-success btn-sm dropdown-toggle btn_status" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                                    <td></td>
                                                </tr>

                                                <tr>

                                                    <td>Jan 24, 2021 <br> 12:10PM <br><small><i class="small text-muted">Ordered by: Dr. Cruzada </i></small></td>
                                                    <td>Doctor's notes will be posted here</br><small><b>Remarks:</b> Data notes</small></td>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <button type="button" class="btn btn-sm btn-block btn-warning dropdown-toggle btn_status" data-toggle="modal" aria-haspopup="true" aria-expanded="false" data-target="#modal-do_status">
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
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div> -->

                                    <!-- <hr>
                                    <div class="mt-3 d-flex justify-content-center">
                                        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#add-doctor-order">Add Order</button>
                                    </div> -->

                                </div> <!-- End of tab pane -->
                            </div> <!-- End of tab content -->
                        </div> <!-- End of card body -->
                    </div> <!-- /card -->
                </div> <!-- /.col -->
            </div> <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<script>
    var queryString = window.location.search;
    var urlParams = new URLSearchParams(queryString);
    var patient_id = urlParams.get('patient_id');

    $(function() {

        $('.order-card-header').on('click', function() {
            $(this).find(".btn-tool")[0].click();
        });

        // Common

        $('.tabNext').click(function() {
            $('.nav-tabs > .active').next('a').trigger('click');
        });

        $('.tabPrevious').click(function() {
            $('.nav-tabs > .active').prev('a').trigger('click');
        });

        $('.btn-update').click(function() {
            $(this).closest('tr').find('input,select,textarea').prop('disabled', false);
        });

        $('.btn-remove').click(function() {
            $(this).closest('tr').remove();
        });

        if (patient_id != "" && Number(patient_id) > 0) {
            setTimeout(function() {
                $('#add-doctor-order').modal('show');
            }, 500);
        }

        <?php if (auth('role') == 'doctor') { ?>
            $(".btn_status").attr("disabled", true);
        <?php } ?>

        <?php if (auth('role') == 'nurse') { ?>
            $(".upd-or-sm").hide();
        <?php } ?>

        $("#planTable").DataTable({
            language: {
                searchPlaceholder: "Search order"
            },
            "responsive": true,
            "autoWidth": false,
            "aoColumnDefs": [{
                "aTargets": [3],
                "mData": null,
                "mRender": function() {
                    var html = '<button type="button" class="btn btn-block  btn-success btn-sm" aria-haspopup="true" aria-expanded="false"> View Details </button>';
                    <?php if (auth('role') == 'doctor') { ?>
                        html += '<div class="col-sm-12">';
                        html += '<a href="#updateorder" class="text-primary"><small>Update Order</small></a>';
                        html += '</div>';
                    <?php } ?>
                    return html;
                }
            }]
        });

        <?php if (auth('role') == 'doctor') { ?>
            // $("#planTable_length").find('label').after(' <button class="btn btn-sm btn-success ml-3" data-toggle="modal" data-target="#add-doctor-order">Add Doctor Order  <i class="ml-1 fas fa-plus"></i></button>');
        <?php } ?>

        function clearDataTable(dataTable) {
            dataTable.clear().draw();
            dataTable.ajax.reload();
        }

        // General Order Functions - START

        $('#gen_or_mor_routine').attr('checked', true);

        $("#diet-select").on("change", function() {
            if ($(this).val() == "Others") {
                $('#others-diet').slideDown();
            } else {
                $('#others-diet').slideUp();
            }
        });

        var genOrderTable = $('#genOrderTable').DataTable({
            responsive: true,
            lengthChange: true,
            autoWidth: false,
            searching: false,
            paging: false,
            ajax: {
                url: '/ncmh_er/doctor/plan/gen-or-table',
                type: "POST",
                dataType: 'json',
                success: function(data) {
                    if (data !== undefined && data !== null && data !== "" && data.length !== 0) {
                        // console.log(data);
                        var length = Object.keys(data).length;
                        for (var i = 0; i < length; i++) {
                            genOrderTable.row.add([
                                data[i]['datetime'],
                                data[i]['gen_or_data'],
                                data[i]['mor'],
                                data[i]['remarks'],
                                '<button class="btn btn-sm btn-primary m-1 btn-update gen-order-update" data-index="' + i + '" data-toggle="modal" data-target="#update-gen-order">UPDATE</button>' +
                                '<button class="btn btn-sm btn-danger m-1 btn-remove gen-order-delete" data-index="' + i + '">DELETE</button>'
                            ]).draw(false);
                        }
                    } else {
                        genOrderTable.draw(false);
                    }
                },
                error: function(err) {
                    if (!err) return;
                }
            },
            order: [
                [0, 'DESC']
            ],
        });

        function addGenOrder(mor, gen_or_data, remarks, clear) {
            $.ajax({
                url: '/ncmh_er/doctor/plan/add-gen-order',
                type: 'POST',
                data: {
                    mor: mor,
                    gen_or_data: gen_or_data,
                    remarks: remarks,
                },
                dataType: 'json',
                success: function(data) {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Submitted',
                        showConfirmButton: false,
                        timer: 1000,
                        width: 400,
                    });
                    clearDataTable(genOrderTable);
                    clearDataTable(genOrderSummaryTable);
                    $('#' + clear).val('');
                },
                error: function(err) {
                    if (!err) return;
                }
            });
        }

        $('#add-gen-order-btn').on('click', function(e) {
            var gen_or_data = $('#gen_or_data').val();

            if (gen_or_data == null || gen_or_data == "") {
                $("#gen_or_data").addClass('required');
                e.preventDefault();

            } else {
                $("#gen_or_data").removeClass('required');
                var mor = $('input[name="gen_or_mor"]:checked').val();
                if ($('#spec_ins').is(':checked')) {
                    gen_or_data = "<b>SPECIAL INSTRUCTION: </b><br>" + gen_or_data;
                }
                var remarks = null;
                addGenOrder(mor, gen_or_data, remarks, 'gen_or_data');
            }
        });

        $("#gen_or_data").keyup(function() {
            $("#gen_or_data").removeClass('required');
        });

        $('#add-diet-btn').on('click', function() {
            var mor = $('input[name="gen_or_mor"]:checked').val();
            var diet = $('#diet-select').val();
            if (diet == "Others") {
                diet = diet + ': ' + $('#others-diet').val();
            }
            var gen_or_data = '<b>DIETARY ORDERS: </b><br>' + diet;
            var remarks = $('#diet-remarks').val();
            addGenOrder(mor, gen_or_data, remarks, 'diet-remarks');
        });

        $('#add-referral-btn').on('click', function() {
            var mor = $('input[name="gen_or_mor"]:checked').val();
            var referral = $('#referral-select').val();
            var referralReason = $('#referral-reason').val();
            var gen_or_data = '<b>REFERRAL ORDER: </b> <br> <b>Refer to Department:</b><br> ' + referral + '<br><b>Reason for Referral: </b><br>' + referralReason;
            var remarks = null;
            addGenOrder(mor, gen_or_data, remarks, 'referral-reason');
        });

        $('#update-gen-order').on('show.bs.modal', function() {
            var index = $(event.target).closest('.gen-order-update').data('index');
            var datetime = $(event.target).closest('tr').find('td:eq(0)').html();
            var order = $(event.target).closest('tr').find('td:eq(1)').html();
            var priority = $(event.target).closest('tr').find('td:eq(2)').html();
            var remarks = $(event.target).closest('tr').find('td:eq(3)').html();

            if (order.includes('<b>DIETARY ORDERS: </b>')) {
                $('#upd-genor-div').hide();
                $('#upd-diet-div').show();
                $('#upd-ref-div').hide();

                var string = '<b>DIETARY ORDERS: </b>';
                var firstIndex = order.indexOf(string) + (string.length + 4);
                order = order.substring(firstIndex, order.length);
                $(this).find("#upd-diet-select").val(order);

            } else if (order.includes('<b>REFERRAL ORDER: </b>')) {
                $('#upd-genor-div').hide();
                $('#upd-diet-div').hide();
                $('#upd-ref-div').show();

                var string = '<b>Refer to Department:</b>';
                var firstIndex = order.indexOf(string) + (string.length + 4);
                var secondIndex = order.indexOf('<br>', firstIndex);
                var referral = order.substring(firstIndex, secondIndex).trim();
                $(this).find("#upd-ref-select").val(referral);

                string = '<b>Reason for Referral: </b>';
                firstIndex = order.indexOf(string) + (string.length + 4);
                reason = order.substring(firstIndex, order.length).trim();
                $(this).find("#upd-ref-reason").val(reason);

                // console.log('1st:' + firstIndex + ' 2nd:' + secondIndex);
                // console.log(order);

            } else { // means general order
                $('#upd-genor-div').show();
                $('#upd-diet-div').hide();
                $('#upd-ref-div').hide();

                var string = '<b>SPECIAL INSTRUCTION: </b>';
                if (order.includes(string)) {
                    var firstIndex = order.indexOf(string) + (string.length + 4);
                    order = order.substring(firstIndex, order.length).trim();
                    $(this).find("#upd-genor-data").val(order);
                    $(this).find("#upd-spec-ins").prop('checked', true);
                } else {
                    $(this).find("#upd-genor-data").val(order);
                    $(this).find("#upd-spec-ins").prop('checked', false);
                }

            }

            //make your ajax call populate items or what even you need
            // $(this).find('#orderDetails').html($('<b> Order Id selected: ' + getIdFromRow  + '</b>'));
            $(this).find('#gou-index').val(index);
            $(this).find('#gou-datetime').val(datetime);
            // $(this).find('#gou-order').val(order);
            $(this).find('#gou-priority').val(priority);
            $(this).find('#gou-remarks').val(remarks);
        });

        $('#gou-update-btn').on('click', function(e) {
            var index = $('#gou-index').val();
            var mor = $('#gou-priority').val();

            var gen_or_data;
            if ($('#upd-genor-div').is(':visible')) {

                gen_or_data = $('#upd-genor-data').val();
                if (gen_or_data == null || gen_or_data == "") {
                    $("#upd-genor-data").addClass('required');
                    e.preventDefault();

                } else {
                    $("#upd-genor-data").removeClass('required');
                    if ($('#upd-spec-ins').is(':checked')) {
                        gen_or_data = "<b>SPECIAL INSTRUCTION: </b><br>" + gen_or_data;
                    }
                }

            } else if ($('#upd-diet-div').is(':visible')) {
                gen_or_data = $('#dpu-diagproc').val();
                var diet = $('#upd-diet-select').val();
                if (diet == "Others") {
                    diet = diet + ': ' + $('#upd-others-diet').val();
                }
                gen_or_data = '<b>DIETARY ORDERS: </b><br>' + diet;

            } else if ($('#upd-ref-div').is(':visible')) {
                var referral = $('#upd-ref-select').val();
                var referralReason = $('#upd-ref-reason').val();
                gen_or_data = '<b>REFERRAL ORDER: </b> <br> <b>Refer to Department:</b><br> ' + referral + '<br><b>Reason for Referral: </b><br>' + referralReason;
            }

            var remarks = $('#gou-remarks').val();

            $.ajax({
                url: '/ncmh_er/doctor/plan/update-gen-order',
                type: 'POST',
                data: {
                    index: index,
                    mor: mor,
                    gen_or_data: gen_or_data,
                    remarks: remarks,
                },
                dataType: 'json',
                success: function(data) {
                    $('#update-gen-order').modal('toggle');
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Updated',
                        showConfirmButton: false,
                        timer: 1000,
                        width: 400,
                    });
                    clearDataTable(genOrderTable);
                    clearDataTable(genOrderSummaryTable);
                },
                error: function(err) {
                    if (!err) return;
                }
            });
        });

        function deleteOrder(index, url, orderTable, summaryTable) {

            Swal.fire({
                title: 'Delete this order?',
                showDenyButton: true,
                confirmButtonText: 'No',
                // showCancelButton: true,                        
                denyButtonText: `Yes`,
            }).then((result) => {
                if (result.isConfirmed) {
                    // Swal.fire('Saved!', '', 'success');
                } else if (result.isDenied) {
                    $.ajax({
                        url: '/ncmh_er/doctor/plan/' + url,
                        type: 'POST',
                        data: {
                            index: index
                        },
                        dataType: 'json',
                        success: function(data) {
                            Swal.fire({
                                position: 'center',
                                icon: 'warning',
                                title: 'Deleted',
                                showConfirmButton: false,
                                timer: 1000,
                                width: 400,
                            });
                            clearDataTable(orderTable);
                            clearDataTable(summaryTable);
                        },
                        error: function(err) {
                            if (!err) return;
                        }
                    });
                }
            });

        }

        $("#genOrderTable").on("click", ".gen-order-delete", function(event) {
            var index = $(this).data('index');
            deleteOrder(index, 'delete-gen-order', genOrderTable, genOrderSummaryTable);
        });

        genOrderSummaryTable = $('#genOrderSummaryTable').DataTable({
            responsive: true,
            lengthChange: true,
            autoWidth: false,
            searching: false,
            paging: false,
            bInfo: false,
            ajax: {
                url: '/ncmh_er/doctor/plan/gen-or-table',
                type: "POST",
                dataType: 'json',
                success: function(data) {
                    if (data !== undefined && data !== null && data !== "" && data.length !== 0) {
                        var length = Object.keys(data).length;
                        for (var i = 0; i < length; i++) {
                            genOrderSummaryTable.row.add([
                                data[i]['datetime'],
                                data[i]['gen_or_data'],
                                data[i]['mor'],
                                data[i]['remarks'],
                                '<button class="btn btn-sm btn-primary m-1 btn-update gen-order-update" data-index="' + i + '" data-toggle="modal" data-target="#update-gen-order">UPDATE</button>' +
                                '<button class="btn btn-sm btn-danger m-1 btn-remove gen-order-delete" data-index="' + i + '">DELETE</button>'
                            ]).draw(false);
                        }
                    } else {
                        genOrderSummaryTable.draw(false);
                    }
                },
                error: function(err) {
                    if (!err) return;
                }
            },
            order: [
                [0, 'DESC']
            ],
        });

        $("#genOrderSummaryTable").on("click", ".gen-order-delete", function(event) {
            var index = $(this).data('index');
            deleteOrder(index, 'delete-gen-order', genOrderTable, genOrderSummaryTable);
        });

        // DIAGNOSTIC PROCEDURE
        $('#diag-mor-routine').attr('checked', true);

        var diagProcTable = $('#diagProcTable').DataTable({
            responsive: true,
            lengthChange: true,
            autoWidth: false,
            searching: false,
            paging: false,
            ajax: {
                url: '/ncmh_er/doctor/plan/diagproc-or-table',
                type: "POST",
                dataType: 'json',
                success: function(data) {
                    if (data !== undefined && data !== null && data !== "" && data.length !== 0) {
                        var length = Object.keys(data).length;
                        for (var i = 0; i < length; i++) {

                            for (var i = 0; i < length; i++) {
                                diagProcTable.row.add([
                                    data[i]['datetime'],
                                    data[i]['req'],
                                    data[i]['mor'],
                                    data[i]['remarks'],
                                    '<button class="btn btn-sm btn-primary m-1 btn-update diagproc-order-update" data-index="' + i + '" data-toggle="modal" data-target="#update-diagproc-order">UPDATE</button>' +
                                    '<button class="btn btn-sm btn-danger m-1 btn-remove diagproc-order-delete" data-index="' + i + '">DELETE</button>'
                                ]).draw(false);
                            }

                        }
                    } else {
                        diagProcTable.draw(false);
                    }
                },
                error: function(err) {
                    if (!err) return;
                }
            },
            order: [
                [0, 'DESC']
            ],
        });

        $('#submit-diagproc-btn').on('click', function() {
            var mor = $('input[name="diag-mor"]:checked').val();

            var lab_req = [];
            $("input:checkbox[name=lab_req]:checked").each(function() {
                lab_req.push($(this).val());
                $(this).prop('checked', false);
            });

            var rad_req = [];
            $("input:checkbox[name=rad_req]:checked").each(function() {
                rad_req.push($(this).val());
                $(this).prop('checked', false);
            });

            $.ajax({
                url: '/ncmh_er/doctor/plan/add-diagproc-order',
                type: 'POST',
                data: {
                    mor: mor,
                    lab_req: lab_req,
                    rad_req: rad_req,
                },
                dataType: 'json',
                success: function(data) {

                    if (data !== undefined && data !== null && data !== "" && data.length !== 0) {

                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Submitted',
                            showConfirmButton: false,
                            timer: 1000,
                            width: 400,
                        });

                        // var length = Object.keys(data).length;

                        clearDataTable(diagProcTable);
                        clearDataTable(diagProcSummaryTable);

                    } else {
                        diagProcTable.draw(false);
                    }
                },
                error: function(err) {
                    if (!err) return;
                }
            });
        });

        $('#add-diagproc-btn').on('click', function() {
            var mor = $('input[name="diag-mor"]:checked').val();
            var lab_req = [$('#diagproc-text').val()];
            var rad_req = [];

            $.ajax({
                url: '/ncmh_er/doctor/plan/add-diagproc-order',
                type: 'POST',
                data: {
                    mor: mor,
                    lab_req: lab_req,
                    rad_req: rad_req,
                },
                dataType: 'json',
                success: function(data) {

                    if (data !== undefined && data !== null && data !== "" && data.length !== 0) {
                        // var length = Object.keys(data).length;

                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Submitted',
                            showConfirmButton: false,
                            timer: 1000,
                            width: 400,
                        });

                        clearDataTable(diagProcTable);
                        clearDataTable(diagProcSummaryTable);

                        $('#diagproc-text').val('');
                    } else {
                        diagProcTable.draw(false);
                    }

                },
                error: function(err) {
                    if (!err) return;
                }
            });
        });

        $('#update-diagproc-order').on('show.bs.modal', function() {
            var index = $(event.target).closest('.diagproc-order-update').data('index');
            var datetime = $(event.target).closest('tr').find('td:eq(0)').html();
            var diagproc = $(event.target).closest('tr').find('td:eq(1)').html();
            var priority = $(event.target).closest('tr').find('td:eq(2)').html();
            var remarks = $(event.target).closest('tr').find('td:eq(3)').html();

            //make your ajax call populate items or what even you need
            // $(this).find('#orderDetails').html($('<b> Order Id selected: ' + getIdFromRow  + '</b>'));
            $(this).find('#dpu-index').val(index);
            $(this).find('#dpu-datetime').val(datetime);
            $(this).find('#dpu-diagproc').val(diagproc);
            $(this).find('#dpu-priority').val(priority);
            $(this).find('#dpu-remarks').val(remarks);
        });

        $('#dpu-update-btn').on('click', function() {
            var index = $('#dpu-index').val();
            var diagproc = $('#dpu-diagproc').val();
            var priority = $('#dpu-priority').val();
            var remarks = $('#dpu-remarks').val();

            $.ajax({
                url: '/ncmh_er/doctor/plan/update-diagproc-order',
                type: 'POST',
                data: {
                    index: index,
                    diagproc: diagproc,
                    priority: priority,
                    remarks: remarks,
                },
                dataType: 'json',
                success: function(data) {
                    $('#update-diagproc-order').modal('toggle');
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Updated',
                        showConfirmButton: false,
                        timer: 1000,
                        width: 400,
                    });
                    clearDataTable(diagProcTable);
                    clearDataTable(diagProcSummaryTable);
                },
                error: function(err) {
                    if (!err) return;
                }
            });
        });

        $("#diagProcTable").on("click", ".diagproc-order-delete", function(event) {
            var index = $(this).data('index');
            deleteOrder(index, 'delete-diagproc-order', diagProcTable, diagProcSummaryTable);
        });

        diagProcSummaryTable = $('#diagProcSummaryTable').DataTable({
            responsive: true,
            lengthChange: true,
            autoWidth: false,
            searching: false,
            paging: false,
            bInfo: false,
            ajax: {
                url: '/ncmh_er/doctor/plan/diagproc-or-table',
                type: "POST",
                dataType: 'json',
                success: function(data) {

                    if (data !== undefined && data !== null && data !== "" && data.length !== 0) {
                        var length = Object.keys(data).length;
                        for (var i = 0; i < length; i++) {

                            for (var i = 0; i < length; i++) {
                                diagProcSummaryTable.row.add([
                                    data[i]['datetime'],
                                    data[i]['req'],
                                    data[i]['mor'],
                                    data[i]['remarks'],
                                    '<button class="btn btn-sm btn-primary m-1 btn-update diagproc-order-update" data-index="' + i + '" data-toggle="modal" data-target="#update-diagproc-order">UPDATE</button>' +
                                    '<button class="btn btn-sm btn-danger m-1 btn-remove diagproc-order-delete" data-index="' + i + '">DELETE</button>'
                                ]).draw(false);
                            }

                        }
                    } else {
                        diagProcSummaryTable.draw(false);
                    }
                },
                error: function(err) {
                    if (!err) return;
                }
            },
            order: [
                [0, 'DESC']
            ],
        });

        $("#diagProcSummaryTable").on("click", ".diagproc-order-delete", function(event) {
            var index = $(this).data('index');
            deleteOrder(index, 'delete-diagproc-order', diagProcTable, diagProcSummaryTable);
        });

        // Medication Order START

        $('#med-mor-routine').attr('checked', true);
        $('#durationRange').attr('checked', true);

        $('input[name="med-duration"]').change(function() {
            if (this.id === "durationNum") {
                $("#durNumDiv").removeClass("d-none");
                $("#durRangeDiv").hide();
            } else {
                $("#durNumDiv").addClass("d-none");
                $("#durRangeDiv").show();
            }
        });

        $('input[name="mou-duration"]').change(function() {
            if (this.id === "mouDurationNum") {
                $("#mouDurNumDiv").removeClass("d-none");
                $("#mouDurRangeDiv").hide();
            } else {
                $("#mouDurNumDiv").addClass("d-none");
                $("#mouDurRangeDiv").show();
            }
        });

        var medOrderTable = $('#medOrderTable').DataTable({
            responsive: true,
            lengthChange: true,
            autoWidth: false,
            searching: false,
            paging: false,
            ajax: {
                url: '/ncmh_er/doctor/plan/med-or-table',
                type: "POST",
                dataType: 'json',
                success: function(data) {
                    if (data !== undefined && data !== null && data !== "" && data.length !== 0) {
                        var length = Object.keys(data).length;
                        for (var i = 0; i < length; i++) {
                            medOrderTable.row.add([
                                data[i]['datetime'],
                                data[i]['name'] + ' ' + data[i]['dosage'] + ' ' + data[i]['prep'],
                                data[i]['route'],
                                data[i]['frequency'],
                                data[i]['duration'],
                                data[i]['mor'],
                                '<button class="btn btn-sm btn-primary m-1 btn-update med-order-update" data-index="' + i + '" data-toggle="modal" data-target="#update-med-order" data-name="' + data[i]['name'] + '" data-dosage="' + data[i]['dosage'] + '" data-prep="' + data[i]['prep'] + '">UPDATE</button>' +
                                '<button class="btn btn-sm btn-danger m-1 btn-remove med-order-delete" data-index="' + i + '">DELETE</button>'
                            ]).draw(false);
                        }
                    } else {
                        medOrderTable.draw(false);
                    }
                },
                error: function(err) {
                    if (!err) return;
                }
            },
            order: [
                [0, 'DESC']
            ],
        });

        $('#add-med-btn').on('click', function() {
            var mor = $('input[name="med-mor"]:checked').val();
            var name = $('#med-name').val();
            var dosage = $('#med-dosage').val();
            var prep = $('#med-prep').val();
            var route = $('#med-route').val();
            var frequency = $('#med-frequency').val();
            var duration = $('input[name="med-duration"]:checked').val();
            if (duration == 'Number') {
                duration = $('#med-days').val() + ' days';
            } else if (duration == 'Range') {
                duration = 'From ' + $('#med-range-from').val() + ' to ' + $('#med-range-to').val();
            }

            $.ajax({
                url: '/ncmh_er/doctor/plan/add-med-order',
                type: 'POST',
                data: {
                    mor: mor,
                    name: name,
                    dosage: dosage,
                    prep: prep,
                    route: route,
                    frequency: frequency,
                    duration: duration
                },
                dataType: 'json',
                success: function(data) {

                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Submitted',
                        showConfirmButton: false,
                        timer: 1000,
                        width: 400,
                    });
                    clearDataTable(medOrderTable);
                    clearDataTable(medSummaryTable);
                },
                error: function(err) {
                    if (!err) return;
                }
            });
        });

        $('#update-med-order').on('show.bs.modal', function() {
            var index = $(event.target).closest('.med-order-update').data('index');
            var datetime = $(event.target).closest('tr').find('td:eq(0)').html();
            var route = $(event.target).closest('tr').find('td:eq(2)').html();
            var frequency = $(event.target).closest('tr').find('td:eq(3)').html();
            var duration = $(event.target).closest('tr').find('td:eq(4)').html();
            var priority = $(event.target).closest('tr').find('td:eq(5)').html();

            if (duration.includes('days')) {
                $('#mouDurationNum').prop('checked', true);
                $("#mouDurNumDiv").removeClass("d-none");
                $("#mouDurRangeDiv").hide();
                duration = duration.replace('days', '');
                duration = duration.trim();
                $(this).find("#mou-days").val(duration);
            } else if (duration.includes('From') && duration.includes('to')) {
                $('#mouDurationRange').prop('checked', true);
                $("#mouDurNumDiv").addClass("d-none");
                $("#mouDurRangeDiv").show();
                // console.log();
                var firstIndex = duration.indexOf('From') + 5;
                var secondIndex = firstIndex + 10;
                var fromDate = duration.substring(firstIndex, secondIndex);
                firstIndex = duration.indexOf('to') + 3;
                secondIndex = firstIndex + 10;
                var toDate = duration.substring(firstIndex, secondIndex);
                $(this).find("#mou-range-from").val(fromDate);
                $(this).find("#mou-range-to").val(toDate);
            }

            var name = $(event.target).closest('.med-order-update').data('name');
            var dosage = $(event.target).closest('.med-order-update').data('dosage');
            var prep = $(event.target).closest('.med-order-update').data('prep');

            //make your ajax call populate items or what even you need
            // $(this).find('#orderDetails').html($('<b> Order Id selected: ' + getIdFromRow  + '</b>'));
            $(this).find('#mou-index').val(index);
            $(this).find('#mou-datetime').val(datetime);
            $(this).find('#mou-name').val(name);
            $(this).find('#mou-dosage').val(dosage);
            $(this).find('#mou-prep').val(prep);
            $(this).find('#mou-route').val(route);
            $(this).find('#mou-frequency').val(frequency);
            $(this).find('#mou-priority').val(priority);
        });

        $('#mou-update-btn').on('click', function() {
            var index = $('#mou-index').val();
            var mor = $('#mou-priority').val();
            var name = $('#mou-name').val();
            var dosage = $('#mou-dosage').val();
            var prep = $('#mou-prep').val();
            var route = $('#mou-route').val();
            var frequency = $('#mou-frequency').val();
            var duration = $('input[name="mou-duration"]:checked').val();
            if (duration == 'Number') {
                duration = $('#mou-days').val() + ' days';
            } else if (duration == 'Range') {
                duration = 'From ' + $('#mou-range-from').val() + ' to ' + $('#mou-range-to').val();
            }

            $.ajax({
                url: '/ncmh_er/doctor/plan/update-med-order',
                type: 'POST',
                data: {
                    index: index,
                    mor: mor,
                    name: name,
                    dosage: dosage,
                    prep: prep,
                    route: route,
                    frequency: frequency,
                    duration: duration
                },
                dataType: 'json',
                success: function(data) {
                    $('#update-med-order').modal('toggle');
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Updated',
                        showConfirmButton: false,
                        timer: 1000,
                        width: 400,
                    });
                    clearDataTable(medOrderTable);
                    clearDataTable(medSummaryTable);
                },
                error: function(err) {
                    if (!err) return;
                }
            });
        });

        $("#medOrderTable").on("click", ".med-order-delete", function(event) {
            var index = $(this).data('index');
            deleteOrder(index, 'delete-med-order', medOrderTable, medSummaryTable);
        });

        var medSummaryTable = $('#medSummaryTable').DataTable({
            responsive: true,
            lengthChange: true,
            autoWidth: false,
            searching: false,
            paging: false,
            bInfo: false,
            ajax: {
                url: '/ncmh_er/doctor/plan/med-or-table',
                type: "POST",
                dataType: 'json',
                success: function(data) {
                    if (data !== undefined && data !== null && data !== "" && data.length !== 0) {
                        var length = Object.keys(data).length;
                        for (var i = 0; i < length; i++) {
                            medSummaryTable.row.add([
                                data[i]['datetime'],
                                data[i]['name'] + ' ' + data[i]['dosage'] + ' ' + data[i]['prep'],
                                data[i]['route'],
                                data[i]['frequency'],
                                data[i]['duration'],
                                data[i]['mor'],
                                '<button class="btn btn-sm btn-primary m-1 btn-update med-order-update" data-index="' + i + '" data-toggle="modal" data-target="#update-med-order" data-name="' + data[i]['name'] + '" data-dosage="' + data[i]['dosage'] + '" data-prep="' + data[i]['prep'] + '">UPDATE</button>' +
                                '<button class="btn btn-sm btn-danger m-1 btn-remove med-order-delete" data-index="' + i + '">DELETE</button>'
                            ]).draw(false);
                        }
                    } else {
                        medSummaryTable.draw(false);
                    }
                },
                error: function(err) {
                    if (!err) return;
                }
            },
            order: [
                [0, 'DESC']
            ],
        });

        $("#medSummaryTable").on("click", ".med-order-delete", function(event) {
            var index = $(this).data('index');
            deleteOrder(index, 'delete-med-order', medOrderTable, medSummaryTable);
        });

        $('#finalize-btn').on('click', function() {
            $.ajax({
                url: '/ncmh_er/doctor/plan/finalize',
                type: 'POST',
                data: {},
                dataType: 'json',
                success: function(data) {

                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Orders Saved',
                        showConfirmButton: false,
                        timer: 1500,
                        width: 400,
                    }).then(function() {
                        location.reload();
                    });

                },
                error: function(err) {
                    if (!err) return;
                }
            });
        });

    });
</script>