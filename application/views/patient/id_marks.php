<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-2">
                <?php $this->load->view('templates/sidemenu'); ?>
            </div>
            <!-- /.col -->

            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <img src="<?php echo base_url(); ?>assets/img/person_clipart.png" alt="" class="mb-2" style="width:100%;">
                                <h4>28, Male</h4>

                                <div class="form-group">
                                    <!-- <div class="col-md-7">
                                            <label for="">Date of First Admission: </label>
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" value="2020/01/01" disabled>
                                        </div> -->
                                    <label for="">Date of First Admission: </label>
                                    <input type="text" class="form-control" value="2020/01/01" disabled>
                                </div>

                                <div class="form-group">
                                    <label for="">Number of Admission: </label>
                                    <input type="text" class="form-control" value="2" disabled>
                                </div>

                                <div class="form-group">
                                    <label for="">Date of Last Admission: </label>
                                    <input type="text" class="form-control" value="2020/01/01" disabled>
                                </div>

                                <div class="form-group">
                                    <label for="">Active Court Case: </label>
                                    <input type="text" class="form-control mb-2" value="Yes/No" disabled>
                                    <a href=""><u>View Court Case</u></a>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-body" style="font-size:large;">

                                <div class="form-inline mb-2">
                                    <label for="" class="mr-2">Height: </label>
                                    <span> 5'7" </span>
                                </div>

                                <div class="form-inline mb-2">
                                    <label for="" class="mr-2">Weight: </label>
                                    <span> 120 lbs </span>
                                </div>

                                <div class="form-inline mb-2">
                                    <label for="" class="mr-2">Built: </label>
                                    <span> Medium </span>
                                </div>

                                <div class="form-inline mb-2">
                                    <label for="" class="mr-2">Hair: </label>
                                    <span> Black </span>
                                </div>

                                <div class="form-inline mb-2">
                                    <label for="" class="mr-2">Eyes: </label>
                                    <span> Black </span>
                                </div>

                                <div class="form-inline mb-2">
                                    <label for="" class="mr-2">Mustache/Beard: </label>
                                    <span> Pedro Gil, Manila </span>
                                </div>

                                <br>
                                <br>
                                <div class="form-inline mb-2">
                                    <label for="" class="mr-2">Identifying Marks: </label>
                                    <span> (Scars, Tattoos, Moles, etc.)</span>
                                </div>

                                <div class="form-inline mb-2">
                                    <label for="" class="mr-2">Physical Pecculiarities: </label>
                                    <span> N/A </span>
                                </div>

                                <div class="form-inline mb-2">
                                    <label for="" class="mr-2">Remarks: </label>
                                    <span> None </span>
                                </div>

                                <?php if ($role == 'nurse'){ ?>
                                    <div class="d-flex justify-content-end">
                                        <a href=""><u>Edit</u></a>
                                    </div>
                                <?php } ?>

                                <hr>

                                <div class="d-flex justify-content-between">
                                    <div>
                                        <small class="mb-0"><i>Encoded by Burr Herber, RN; </i></small><br>
                                        <small class="mt-0"><i><u><a href="#">View Previous Patient Identifying Marks</a></u></i></small>
                                    </div>
                                    <?php if ($role == 'nurse'){ ?>
                                        <div>
                                            <button class="btn btn-success" data-toggle="modal" data-target="#modal-marks">Add Patient Identifying Marks
                                                <i class="ml-1 fas fa-plus"></i>
                                            </button>
                                        </div>
                                    <?php } ?>

                                </div>

                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body" style="font-size:large;">

                                <div class="form-inline mb-2">
                                    <label for="" class="mr-2">Relative/Escort: </label>
                                    <span> Relative/Escort Name </span>
                                </div>

                                <div class="form-inline mb-2">
                                    <label for="" class="mr-2">Contact Number: </label>
                                    <span> +63917 5999 883 </span>
                                </div>

                                <div class="form-inline mb-2">
                                    <label for="" class="mr-2">Admitting Nurse: </label>
                                    <span> Burr Herber, RN </span>
                                </div>

                                <div class="form-inline mb-2">
                                    <label for="" class="mr-2">Date: </label>
                                    <span> March 31, 2021 </span>
                                </div>

                                <?php if ($role == 'nurse'){ ?>
                                    <div class="d-flex justify-content-end">
                                        <a href=""><u>Edit</u></a>
                                    </div>

                                    <hr>    

                                    <div class="d-flex justify-content-end">
                                        <button class="btn btn-primary">Save
                                        </button>
                                    </div>
                                <?php } ?>

                            </div>
                        </div>
                    </div>

                </div>

            </div>


        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>

<div class="modal fade" id="modal-marks">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Identifying Marks</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body row">

                <img src="<?php echo base_url(); ?>assets/img/right.png" alt="" class="mb-2" style="width:50%;">

                <button class="btn btn-default btn-lg col-sm" style="height: 50%; width: 50%;">Scan Left Thumb</button>
                <button class="btn btn-default btn-lg col-sm" style="height: 50%; width: 50%;">Scan Right Thumb</button>
            </div>
            <div class="modal-footer justify-content-end">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Save</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<script>
    $('[data-widget="pushmenu"]').PushMenu('collapse');


    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
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
</script>
