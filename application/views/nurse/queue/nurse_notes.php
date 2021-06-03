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
                            <div class="card">
                                <!-- <div class="col-sm-12 p-3 text-center" style="margin-bottom:-15px !important;">
                                    <button data-toggle="modal" data-target="#addVitalsModal" class="btn btn-success addVitalsModal mr-2">Add Vitals <i class="ml-1 fas fa-plus"></i></button>
                                    <button data-toggle="modal" data-target="#add-other-vitals-modal" class="btn btn-success open-other-vitals-modal">Add Other Vitals <i class="ml-1 fas fa-plus"></i></button>
                                </div> -->

                                <div class="card-body">
                                    <h4>Nurse Notes</h4>
                                    <div class="dropdown-divider"></div>
                                    <div class="form-group">
                                        <label for="nurseModalDateAndTime">Date & Time:</label>
                                        <div class="input-group mb-2">
                                            <input type="text"  id="nurseModalDateAndTime" data-target="#nurseModalDateAndTime" data-toggle="datetimepicker" class="form-control datetimepicker-input" placeholder="Date & Time">
                                            <div class="input-group-prepend" data-target="#nurseModalDateAndTime" data-toggle="datetimepicker">
                                                <div class="input-group-text">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="choose-pavilion">Pavilion <i class="fas fa-caret-down"></i></label>
                                        <select class="form-control" id="choose-pavilion">
                                            <option selected disabled>Choose Pavillion</option>
                                            <option value="Pavilion 1">Pavilion 1</option>
                                            <option value="Pavilion 2">Pavilion 2</option>
                                            <option value="ACIS">ACIS</option>
                                        </select>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="focus">Focus:</label>
                                                <textarea name="focus" placeholder="Add your focus here..." class="form-control addNurseNotesTextArea" rows="2"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="data">Data:</label>
                                                <textarea name="data" placeholder="Add your data here..." class="form-control addNurseNotesTextArea" rows="2"></textarea>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="form-group">
                                                <label for="action">Action:</label>
                                                <textarea name="action" placeholder="Add your action here..." class="form-control addNurseNotesTextArea" rows="2"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="response">Response:</label>
                                                <textarea name="response" placeholder="Add your response here..."  class="form-control addNurseNotesTextArea" rows="2"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <div class="row">
                                        <button type="button" class="btn btn-primary ml-auto">Save</button>
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
    $(document).ready(function () {
        $('[data-widget="pushmenu"]').PushMenu('collapse');
        $(function getCurrentTime () {
        var datetime = moment().format('L LT');
        $("#nurseModalDateAndTime").attr("value", datetime);
            setTimeout(getCurrentTime, 1000);
        });
        
        $("#nurseModalDateAndTime").click(function () {
            $("#nurseModalDateAndTime").removeAttr("value");
            clearTimeout(getCurrentTime);
        });

        $("#nurseModalDateAndTime").focusout(function(){
            $('.bootstrap-datetimepicker-widget').hide();
        });
        
        $(document).ready(function () {
            $('.addNurseNotesTextArea').each(function () {
                $(this).summernote({
                    placeholder: this.placeholder,
                    dialogsInBody: true,
                    spellCheck: true,
                    minHeight: 100,    
                    minWidth:430,        
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
        });

    });
</script>

</html>