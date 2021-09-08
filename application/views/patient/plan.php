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
                                                    <td>
                                                        <!-- Content rendered in javascript -->
                                                    </td>
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
                                                    <td>
                                                        <!-- Content rendered in javascript -->
                                                    </td>
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
                                                    <td>
                                                        <!-- Content rendered in javascript -->
                                                    </td>
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
                                                    <td>
                                                        <!-- Content rendered in javascript -->
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
</div>

<script>
    var queryString = window.location.search;
    var urlParams = new URLSearchParams(queryString);
    var patient_id = urlParams.get('patient_id');

    $(function() {

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
            $("#planTable_length").find('label').after(' <button class="btn btn-sm btn-success ml-3" data-toggle="modal" data-target="#add-doctor-order">Add Doctor Order  <i class="ml-1 fas fa-plus"></i></button>');
        <?php } ?>

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
                        console.log(data);
                        var length = Object.keys(data).length;
                        for (var i = 0; i < length; i++) {
                            genOrderTable.row.add([
                                data[i]['datetime'],
                                data[i]['gen_or_data'],
                                data[i]['mor'],
                                data[i]['remarks'],
                                '<button class="btn btn-sm btn-primary m-1 btn-update">UPDATE</button>' +
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
                    var index = genOrderTable.rows().count();
                    genOrderTable.row.add([
                        data['datetime'],
                        data['gen_or_data'],
                        data['mor'],
                        data['remarks'],
                        '<button class="btn btn-sm btn-primary m-1 btn-update">UPDATE</button>' +
                        '<button class="btn btn-sm btn-danger m-1 btn-remove gen-order-delete" data-index="' + index + '">DELETE</button>'
                    ]).draw(false);
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Submitted',
                        showConfirmButton: false,
                        timer: 1000,
                        width: 400,
                    });
                    $('#' + clear).val('');
                },
                error: function(err) {
                    if (!err) return;
                }
            });
        }

        function clearDataTable(dataTable) {
            dataTable.clear().draw();
            dataTable.ajax.reload();
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

        $("#genOrderTable").on("click", ".gen-order-delete", function(event) {
            var index = $(this).data('index');
            // var row = $(this).parents('tr');

            $.ajax({
                url: '/ncmh_er/doctor/plan/delete-gen-order',
                type: 'POST',
                data: {
                    index: index
                },
                dataType: 'json',
                success: function(data) {
                    clearDataTable(genOrderTable);
                },
                error: function(err) {
                    if (!err) return;
                }
            });
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

            $.ajax({
                url: '/ncmh_er/doctor/plan/delete-diagproc-order',
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
                    clearDataTable(diagProcTable);
                    clearDataTable(diagProcSummaryTable);
                },
                error: function(err) {
                    if (!err) return;
                }
            });
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
            $.ajax({
                url: '/ncmh_er/doctor/plan/delete-diagproc-order',
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
                    clearDataTable(diagProcSummaryTable);
                    clearDataTable(diagProcTable);
                },
                error: function(err) {
                    if (!err) return;
                }
            });
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

            var durationType;
            if (duration.includes('days')) {
                $('#mouDurationNum').prop('checked', true);
                $("#mouDurNumDiv").removeClass("d-none");
                $("#mouDurRangeDiv").hide();
                duration = duration.replace('days', '');
                duration = duration.trim();
                $(this).find("#mou-days").val(duration);
            }
            else if (duration.includes('From') && duration.includes('to')) {
                $('#mouDurationRange').prop('checked', true);
                $("#mouDurNumDiv").addClass("d-none");
                $("#mouDurRangeDiv").show();
                console.log();
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

            $.ajax({
                url: '/ncmh_er/doctor/plan/delete-med-order',
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
                    clearDataTable(medOrderTable);
                    clearDataTable(medSummaryTable);
                },
                error: function(err) {
                    if (!err) return;
                }
            });
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
            $.ajax({
                url: '/ncmh_er/doctor/plan/delete-med-order',
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
                    clearDataTable(medSummaryTable);
                    clearDataTable(medOrderTable);
                },
                error: function(err) {
                    if (!err) return;
                }
            });
        });

        // Summary modal

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
                                '<button class="btn btn-sm btn-primary m-1 btn-update">UPDATE</button>' +
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
            $.ajax({
                url: '/ncmh_er/doctor/plan/delete-gen-order',
                type: 'POST',
                data: {
                    index: index
                },
                dataType: 'json',
                success: function(data) {
                    clearDataTable(genOrderSummaryTable);
                    clearDataTable(genOrderTable);
                },
                error: function(err) {
                    if (!err) return;
                }
            });
        });

        $('#order-summary-modal').on('shown.bs.modal', function() {
            clearDataTable(genOrderSummaryTable);
            // clearDataTable(medSummaryTable);
            // clearDataTable(diagProcSummaryTable);
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