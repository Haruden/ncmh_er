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
                    if (data !== undefined && data !== null && data !== "") {
                        var length = Object.keys(data).length;
                        for (var i = 0; i < length; i++) {
                            genOrderTable.row.add([
                                data[i]['datetime'],
                                data[i]['gen_or_data'],
                                data[i]['mor'],
                                data[i]['remarks'],
                                '<button class="btn btn-sm btn-primary m-1 btn-update">UPDATE</button>' +
                                '<button class="btn btn-sm btn-danger m-1 btn-remove">DELETE</button>'
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
                    genOrderTable.row.add([
                        data['datetime'],
                        data['gen_or_data'],
                        data['mor'],
                        data['remarks'],
                        '<button class="btn btn-sm btn-primary m-1 btn-update">UPDATE</button>' +
                        '<button class="btn btn-sm btn-danger m-1 btn-remove">DELETE</button>'
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

        $("#gen_or_data").keyup(function(){
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

        $('#gen_or_mor_routine').attr('checked', true);

        // General Order Functions - END

        $('#durationRange').attr('checked', true);

        $('input[name="Duration"]').change(function() {
            if (this.id === "durationNum") {
                $("#durNumDiv").removeClass("d-none");
                $("#durRangeDiv").hide();
            } else {
                $("#durNumDiv").addClass("d-none");
                $("#durRangeDiv").show();
            }
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

    });
</script>