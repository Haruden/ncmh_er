<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!-- Main content -->
<div class="content-wrapper">

    <?= view(auth('role') . '/modals'); ?>
    <?= view('patient/components/content_header'); ?>

    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-2">
                    <?= view('patient/components/sub_sidebar', $title); ?>
                </div>

                <div class="col-md-10">

                    <h4>Vitals</h4>
                    <div class="card">
                        <!-- <div class="col-sm-12 p-3 text-center" style="margin-bottom:-15px !important;">
                        <button data-toggle="modal" data-target="#addVitalsModal" class="btn btn-success addVitalsModal mr-2">Add Vitals <i class="ml-1 fas fa-plus"></i></button>
                        <button data-toggle="modal" data-target="#add-other-vitals-modal" class="btn btn-success open-other-vitals-modal">Add Other Vitals <i class="ml-1 fas fa-plus"></i></button>
                    </div> -->

                        <div class="card-body">

                            <div class="dataTables_wrapper dt-bootstrap4">
                                <table id="vitalsTable" class="table table-bordered table-striped">
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
</div>

<script>
    $("#addOtherVitalsDatePicker, #addVitalsDatePicker").attr("value", moment().format('L LT'));
    $("#addOtherVitalsDatePicker, #addVitalsDatePicker").click(function() {
        $("#addOtherVitalsDatePicker, #addVitalsDatePicker").removeAttr("value");
    });

    $("#addVitalsDatePicker, #addVitalsDatePicker").focusout(function() {
        $('.bootstrap-datetimepicker-widget').hide();
    });

    $(function() {
        $("#vitalsTable").DataTable({
            language: {
                searchPlaceholder: "Search vitals"
            },
            "responsive": true,
            "autoWidth": false,
        });

        <?php if (auth('role') == 'nurse') { ?>
            $("#vitalsTable_length").find('label').after(
                '<button data-toggle="modal" data-target="#addVitalsModal" class="btn btn-success ml-2 btn-sm open-other-vitals-modal"> Add Vitals <i class="ml-1 fas fa-plus"></i></button>'
            );
        <?php } ?>
    });
</script>