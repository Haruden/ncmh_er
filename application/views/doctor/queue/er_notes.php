<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <?php $this->load->view('doctor/navbar'); ?>
        <?php $this->load->view('doctor/sidebar'); ?>
        <?php $this->load->view('doctor/modals'); ?>

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
                            <?php $this->load->view('doctor/queue/sidemenu'); ?>
                        </div>
                        <!-- /.col -->

                        <div class="col-md-10">
                            <div class="card-body">
                                    <div class="tab-content">
                                        <div class="active tab-pane" id="activity">
                                            <!-- Table row -->
                                            <div class="dataTables_wrapper dt-bootstrap4">
                                                <table id="example1" class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Date/Time</th>
                                                            <th>Status</th>
                                                            <th>General Data</th>
                                                            <th>History Notes</th>
                                                            <th>Others</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Jan 24, 2021 <br> 12:10PM <small><i class="small text-muted">Encoded by: <br> Dr. Cruzada </i></small></td>
                                                            <td>In: <br> Pavilion 1 - Ward 1</td>
                                                            <td>Doctors notes about the general data of the patient will be reflected here.</td>
                                                            <td>History Notes of the patient will be reflected here.</td>
                                                            <td>
                                                                <ul>
                                                                    <li> <a href="#">View Subjective Notes</a></li>
                                                                    <li> <a href="#">View Objective Notes</a></li>
                                                                    <li><a href="#">View Assessment Notes</a></li>
                                                                    <li><a data-toggle="modal" href="#modal-MSE">View Mental Status Exam</a></li>
                                                                    <li><a href="#">View Physical Exam</a></li>
                                                                    <li><a href="#">View Neurological Exam</a></li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jan 10, 2021 <br> 12:10PM <br> <small><i class="small text-muted">Encoded by: <br> Dr. Cruzada <br> Updated by: <br> Dr. Argamosa<br> Jan 24, 2021 (4:56pm) </i></small> </td>
                                                            <td>Out: <br> Pavilion 3 - Ward 2 <br><br> In: <br> Pavilion 1 - Ward 2</td>
                                                            <td>Doctors notes about the general data of the patient will be reflected here.</td>
                                                            <td>History Notes of the patient will be reflected here.</td>
                                                            <td>
                                                                <ul>
                                                                    <li> <a href="#">View Subjective Notes</a></li>
                                                                    <li> <a href="#">View Objective Notes</a></li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jan 24, 2021 <br> 12:10PM <small><i class="small text-muted">Encoded by: <br> Dr. Cruzada </i></small></td>
                                                            <td>In: <br> Pavilion 1 - Ward 1 <br> <br> Out: <br> Pavilion 3 - Ward 2</td>
                                                            <td>Doctors notes about the general data of the patient will be reflected here.</td>
                                                            <td>History Notes of the patient will be reflected here.</td>
                                                            <td>
                                                                <ul>
                                                                    <li> <a href="#">View Subjective Notes</a></li>
                                                                    <li> <a href="#">View Objective Notes</a></li>
                                                                    <li><a href="#">View Assessment Notes</a></li>
                                                                    <li><a data-toggle="modal" href="#modal-MSE">View Mental Status Exam</a></li>
                                                                    <li><a href="#">View Physical Exam</a></li>
                                                                    <li><a href="#">View Neurological Exam</a></li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jan 10, 2021 <br> 12:10PM <br> <small><i class="small text-muted">Encoded by: <br> Dr. Cruzada <br> Updated by: <br> Dr. Argamosa<br> Jan 24, 2021 (4:56pm) </i></small> </td>
                                                            <td>Out: <br> Pavilion 3 - Ward 2</td>
                                                            <td>Doctors notes about the general data of the patient will be reflected here.</td>
                                                            <td>History Notes of the patient will be reflected here.</td>
                                                            <td>
                                                                <ul>
                                                                    <li> <a href="#">View Subjective Notes</a></li>
                                                                    <li> <a href="#">View Objective Notes</a></li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Date/Time</th>
                                                            <th>Pavilion</th>
                                                            <th>General Data</th>
                                                            <th>History Notes</th>

                                                            <th>Others</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div> <!-- /.row -->
                                            <hr>
                                            <div class="d-flex justify-content-center">
                                                <!-- <button class="btn btn-lg btn-success" data-toggle="modal" data-target="#trans-add">Add Notes</button> -->
                                            </div>

                                        </div>
                                        <!-- /.tab-pane -->

                                    </div>
                                    <!-- /.tab-content -->
                                </div><!-- /.card-body -->
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
    $(function() {
        $("#example1").DataTable({
            language: {
                searchPlaceholder: "Search notes"
            },
            "responsive": true,
            "autoWidth": false,
        });
        $( "#example1_length" ).find('label').after('<button class="btn btn-sm btn-success ml-3" data-toggle="modal" data-target="#add-er-notes">Add ER Notes <i class="ml-1 fas fa-plus"></i></button>');
        // $('#example2').DataTable({
        //     "paging": true,
        //     "lengthChange": false,
        //     "searching": false,
        //     "ordering": true,
        //     "info": true,
        //     "autoWidth": false,
        //     "responsive": true,
        // });
    });

    var transfer_counter = 0;

    $("#add_trans_btn").on('click', function() {
        transfer_counter++;
        var html = '<div class="row mt-2 ml-1" id="transfer_no' + transfer_counter + '">';
        html += '<label class="" for="">Transfer: </label>';
        html += '<select name="" id="" class="form-control ml-2 mr-3">';
        html += '<option value="">In</option>';
        html += '<option value="">Out</option>';
        html += '</select>';
        html += '<label class="" for="">What Pavilion? </label>';
        html += '<select name="" id="" class="form-control ml-2 mr-3">';
        html += '<option value="">Pavilion 1</option>';
        html += '<option value="">Pavilion 2</option>';
        html += '</select></div>';
        $("#transfer_div").append(html);
    });

    $("#remove_trans_btn").on('click', function() {
        $('#transfer_no' + transfer_counter).remove();
        transfer_counter--;
    });

    $('#summernote1, #summernote').each(function() {
        $(this).summernote({
            placeholder: this.placeholder,
            dialogsInBody: true,
            spellCheck: true,
            minHeight: 90,
            minWidth: 430,
            maxHeight: null,
            focus: true,
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font'],
                ['fontsize', ['fontsize']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['view', ['fullscreen']],
            ]
        });
    });
    
    $('.tabNext').click(function(){
        $('.nav-tabs > .active').next('a').trigger('click');
    });

    $('.tabPrevious').click(function(){
        $('.nav-tabs > .active').prev('a').trigger('click');
    });

    function change(radio) { 
        if (radio.checked && radio.id === "durationNum") {+
            $("#durNumDiv").removeClass("d-none");
            $("#durRangeDiv").hide();
        } else  {
            $("#durNumDiv").addClass("d-none");
            $("#durRangeDiv").show();
        }
    } 
</script>

</html>