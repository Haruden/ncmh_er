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
                            <div class="card p-3">
                                <h4>Emergency Notes</h4>
                                <div class="dropdown-divider"></div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="col-sm-6">
                                            <div class="mb-3 form-inline" id="transfer_div">
                                                <label class="" for="">Transfer: </label>
                                                <select name="" id="" class="form-control ml-2 mr-3">
                                                    <option value="">In</option>
                                                    <option value="">Out</option>
                                                </select>

                                                <label class="" for="">What Pavilion? </label>
                                                <select name="" id="" class="form-control ml-2 mr-3">
                                                    <option value="">Pavilion 1</option>
                                                    <option value="">Pavilion 2</option>
                                                </select>
                                            </div>

                                            </div>
                                            <button class="btn btn-danger mr-2" id="remove_trans_btn"><i class="fas fa-minus"></i> Remove Transfer</button>
                                            <button class="btn btn-primary mr-2" id="add_trans_btn"><i class="fas fa-plus"></i> Add Transfer</button>
                                            <hr>

                                            <div class="mb-3">
                                                <label class="" for="">General Data:</label>
                                                <textarea name="editordata" id="summernote" class="form-control"></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label class="" for="">History:</label>
                                                <textarea name="editordata1" id="summernote1" class="form-control"></textarea>
                                            </div>
                                            <div class="d-flex justify-content-end">
                                                <button type="button" class="btn btn-primary dropdown-toggle mb-3" data-toggle="dropdown" aria-expanded="false">
                                                    Add Section
                                                </button>
                                                <ul class="dropdown-menu dropdown-options" x-placement="bottom-start">
                                                    <li class="dropdown-item"><a href="#">Add Subjective Notes</a></li>
                                                    <li class="dropdown-item"><a href="#">Add Objective Notes</a></li>
                                                    <li class="dropdown-item"><a href="#">Add Assessment Notes</a></li>
                                                    <li class="dropdown-item"><a data-toggle="modal" href="#mse-add">Add Mental Status Exam</a></li>
                                                    <li class="dropdown-item"><a data-toggle="modal" href="#pe-add">Add Physical Exam</a></li>
                                                    <li class="dropdown-item"><a data-toggle="modal" href="#neuro-add">Add Neurological Exam</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
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