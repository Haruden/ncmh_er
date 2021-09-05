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
                                        <h4>SPECIAL INSTRUCTIONS <span class="badge badge-pill badge-success right">4</span></h4>
                                    </div>
                                    <br>

                                    <!-- Table row -->
                                    <div class="dtaTables_wrappaer dt-bootstrap4">
                                        <table id="special_instructions_Table" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th width="20">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox">
                                                            <label class="form-check-label"></label>
                                                        </div>
                                                    </th>
                                                    <th>Instruction</th>
                                                    <th width="140">Date/Time Instructed</th>
                                                    <th width="100">Status</th>
                                                    <th width="100">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox">
                                                            <label class="form-check-label"></label>
                                                        </div>
                                                    </td>
                                                    <td>Sample instruction here.</td>
                                                    <td>Jan 24, 2021 <br> 12:10PM <br><small><i class="small text-muted">Ordered by: Dr. Cruzada </i></small></td>
                                                    <td><button type="button" class="btn btn-xs btn-block btn-success disabled">ACTIVE</button></td>
                                                    <td>    
                                                        <div class="input-group-prepend">
                                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action</button>
                                                            <div class="dropdown-menu" style="">
                                                                <a class="dropdown-item" href="#">Update</a>
                                                                <a class="dropdown-item" href="#">Compelte</a>
                                                            </div>
                                                        </div>  
                                                    </td>
                                                </tr>
                                
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox">
                                                            <label class="form-check-label"></label>
                                                        </div>
                                                    </td>
                                                    <td>Sample instruction here.</td>
                                                    <td>Jan 24, 2021 <br> 12:10PM <br><small><i class="small text-muted">Ordered by: Dr. Cruzada </i></small></td>
                                                    <td><button type="button" class="btn btn-xs btn-block btn-success disabled">ACTIVE</button></td>
                                                    <td>    
                                                        <div class="input-group-prepend">
                                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action</button>
                                                            <div class="dropdown-menu" style="">
                                                                <a class="dropdown-item" href="#">Update</a>
                                                                <a class="dropdown-item" href="#">Compelte</a>
                                                            </div>
                                                        </div>  
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox">
                                                            <label class="form-check-label"></label>
                                                        </div>
                                                    </td>
                                                    <td>Sample instruction here.</td>
                                                    <td>Jan 24, 2021 <br> 12:10PM <br><small><i class="small text-muted">Ordered by: Dr. Cruzada </i></small></td>
                                                    <td><button type="button" class="btn btn-xs btn-block btn-success disabled">ACTIVE</button></td>
                                                    <td>    
                                                        <div class="input-group-prepend">
                                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action</button>
                                                            <div class="dropdown-menu" style="">
                                                                <a class="dropdown-item" href="#">Update</a>
                                                                <a class="dropdown-item" href="#">Compelte</a>
                                                            </div>
                                                        </div>  
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <<td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox">
                                                            <label class="form-check-label"></label>
                                                        </div>
                                                    </td>
                                                    <td>Sample instruction here.</td>
                                                    <td>Jan 24, 2021 <br> 12:10PM <br><small><i class="small text-muted">Ordered by: Dr. Cruzada </i></small></td>
                                                    <td><button type="button" class="btn btn-xs btn-block btn-success disabled">ACTIVE</button></td>
                                                    <td>    
                                                        <div class="input-group-prepend">
                                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action</button>
                                                            <div class="dropdown-menu" style="">
                                                                <a class="dropdown-item" href="#">Update</a>
                                                                <a class="dropdown-item" href="#">Compelte</a>
                                                            </div>
                                                        </div>  
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox">
                                                            <label class="form-check-label"></label>
                                                        </div>
                                                    </td>
                                                    <td>Sample instruction here.</td>
                                                    <td>Jan 24, 2021 <br> 12:10PM <br><small><i class="small text-muted">Ordered by: Dr. Cruzada </i></small></td>
                                                    <td><button type="button" class="btn btn-xs btn-block btn-success disabled">ACTIVE</button></td>
                                                    <td>    
                                                        <div class="input-group-prepend">
                                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action</button>
                                                            <div class="dropdown-menu" style="">
                                                                <a class="dropdown-item" href="#">Update</a>
                                                                <a class="dropdown-item" href="#">Compelte</a>
                                                            </div>
                                                        </div>  
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
    $(function() {
        $(document).ready(function () {
        $('#special_instructions_Table').DataTable();
        $('.dataTables_length').addClass('bs-select');
        });
    });

</script>