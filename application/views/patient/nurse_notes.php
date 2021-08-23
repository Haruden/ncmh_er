<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-2">                            
                <?php $this->load->view('templates/sidemenu'); ?>
            </div>
            <!-- /.col -->

            <div class="col-md-10">
                <div class="card">
                    <!-- <div class="col-sm-12 p-3 text-center" style="margin-bottom:-15px !important;">
                        <button data-toggle="modal" data-target="#addVitalsModal" class="btn btn-success addVitalsModal mr-2">Add Vitals <i class="ml-1 fas fa-plus"></i></button>
                        <button data-toggle="modal" data-target="#add-other-vitals-modal" class="btn btn-success open-other-vitals-modal">Add Other Vitals <i class="ml-1 fas fa-plus"></i></button>
                    </div> -->

                    <div class="card-body">
                        <div class="tab-content">
                                <div class="active tab-pane" id="nurses_notes">
                                    <!-- Table row -->
                                    <div class="dataTables_wrapper dt-bootstrap4">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Date/Time</th>
                                                    <th>Focus</th>
                                                    <th>Data</th>
                                                    <th>Action</th>
                                                    <th>Response</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Jan 24, 2021 <br> 12:10PM <br><small><i class="small text-muted">Encoded by: <br> Dr. Cruzada </i></small></td>
                                                    <td>Focus notes</td>
                                                    <td>Data notes</td>
                                                    <td>Action notes</td>
                                                    <td>Response notes</td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Date/Time</th>
                                                    <th>Focus</th>
                                                    <th>Data</th>
                                                    <th>Action</th>
                                                    <th>Response</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div> <!-- /.row -->
                                    <hr>
                                    <div class="d-flex justify-content-center">
                                        <!-- <button data-toggle="modal" id="add-nurse-notes" data-target="#nurse-add-notes-modal" class="btn btn-lg btn-success">Add Notes</button> -->
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

<script>
    $(document).ready(function () {
        $('[data-widget="pushmenu"]').PushMenu('collapse');

        $("#example1").DataTable({
            language: {
                searchPlaceholder: "Search notes"
            },
            "responsive": true,
            "autoWidth": false,
        });

        <?php if ($role == 'nurse'){ ?>
            $("#example1_length").find('label').after('<button data-toggle="modal" id="add-nurse-notes" data-target="#nurse-add-notes-modal" class="btn btn-sm btn-success ml-3">Add Nurse Notes <i class="ml-1 fas fa-plus"></i></button>');
        <?php } ?>


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
