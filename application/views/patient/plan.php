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
                                                        <td><b class="text-danger">STAT</b></td>
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
                                                        <td><b class="text-danger">STAT</b></td>
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