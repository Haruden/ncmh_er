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

                                    <div style="white-space: nowrap; overflow: hidden; margin: 0; padding: 0;">
                                        <div class="float-left" style="display: inline-block;">
                                            <h5>SPECIAL INSTRUCTIONS <span class="badge badge-pill badge-success center">3</span></h5>
                                        </div>

                                        <div class="float-right" style="display: inline-block;">
                                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                <label class="btn btn-sm btn-outline-info">
                                                    <input type="radio" name="options" id="active-filter" value="ACTIVE" selected> ACTIVE
                                                </label>
                                                <label class="btn btn-sm btn-outline-info">
                                                    <input type="radio" name="options" id="done-filter" value="DONE"> DONE
                                                </label>
                                                <label class="btn btn-sm btn-outline-info">
                                                    <input type="radio" name="options" id="all-filter" value="ALL"> ALL
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dataTables_wrapper dt-bootstrap4">
                                        <table id="special_instructions_Table" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th width="20">
                                                        <!-- <div class="form-check">
                                                            <input class="form-check-input" type="checkbox">
                                                            <label class="form-check-label"></label>
                                                        </div> -->
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
                                                        <!-- <div class="form-check">
                                                            <input class="form-check-input" type="checkbox">
                                                            <label class="form-check-label"></label>
                                                        </div> -->
                                                    </td>
                                                    <td>Sample instruction 1.</td>
                                                    <td>Jan 1, 2021 | 12:10PM <br><small><i class="small text-muted">Ordered by: Dr. Cruzada </i></small></td>
                                                    <td><button type="button" class="btn btn-xs btn-block btn-success disabled">ACTIVE</button></td>
                                                    <!-- <td><span class="badge badge-success center">ACTIVE</span></td> -->
                                                    <td>
                                                        <div class="input-group-prepend">
                                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action</button>
                                                            <div class="dropdown-menu" style="">
                                                                <a class="dropdown-item" href="#">Update</a>
                                                                <a class="dropdown-item" href="#">Complete</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <!-- <div class="form-check">
                                                            <input class="form-check-input" type="checkbox">
                                                            <label class="form-check-label"></label>
                                                        </div> -->
                                                    </td>
                                                    <td>Sample instruction 2.</td>
                                                    <td>Jan 2, 2021 | 12:10PM <br><small><i class="small text-muted">Ordered by: Dr. Cruzada </i></small></td>
                                                    <td><button type="button" class="btn btn-xs btn-block btn-success disabled">ACTIVE</button></td>
                                                    <td>
                                                        <div class="input-group-prepend">
                                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action</button>
                                                            <div class="dropdown-menu" style="">
                                                                <a class="dropdown-item" href="#">Update</a>
                                                                <a class="dropdown-item" href="#">Complete</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <!-- <div class="form-check">
                                                            <input class="form-check-input" type="checkbox">
                                                            <label class="form-check-label"></label>
                                                        </div> -->
                                                    </td>
                                                    <td>Sample instruction 3.</td>
                                                    <td>Jan 3, 2021 | 12:10PM <br><small><i class="small text-muted">Ordered by: Dr. Cruzada </i></small></td>
                                                    <td><button type="button" class="btn btn-xs btn-block btn-success disabled">ACTIVE</button></td>
                                                    <td>
                                                        <div class="input-group-prepend">
                                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action</button>
                                                            <div class="dropdown-menu" style="">
                                                                <a class="dropdown-item" href="#">Update</a>
                                                                <a class="dropdown-item" href="#">Complete</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <!-- <div class="form-check">
                                                            <input class="form-check-input" type="checkbox">
                                                            <label class="form-check-label"></label>
                                                        </div> -->
                                                    </td>
                                                    <td>Sample instruction 4.</td>
                                                    <td>Jan 24, 2021 | 12:10PM <br><small><i class="small text-muted">Ordered by: Dr. Cruzada </i></small></td>
                                                    <td><button type="button" class="btn btn-xs btn-block bg-gradient-secondary disabled">DONE</button></td>
                                                    <td>
                                                        <div class="input-group-prepend">
                                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action</button>
                                                            <div class="dropdown-menu" style="">
                                                                <a class="dropdown-item" href="#">Update</a>
                                                                <a class="dropdown-item" href="#">Complete</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <!-- <div class="form-check">
                                                            <input class="form-check-input" type="checkbox">
                                                            <label class="form-check-label"></label>
                                                        </div> -->
                                                    </td>
                                                    <td>Sample instruction 5.</td>
                                                    <td>Jan 24, 2021 | 12:10PM <br><small><i class="small text-muted">Ordered by: Dr. Cruzada </i></small></td>
                                                    <td><button type="button" class="btn btn-xs btn-block bg-gradient-secondary disabled">DONE</button></td>
                                                    <td>
                                                        <div class="input-group-prepend">
                                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action</button>
                                                            <div class="dropdown-menu" style="">
                                                                <a class="dropdown-item" href="#">Update</a>
                                                                <a class="dropdown-item" href="#">Complete</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <tfoot>
                                                <tr>
                                                    <th width="20"></th>
                                                    <th>Instruction</th>
                                                    <th width="140">Date/Time Instructed</th>
                                                    <th width="100">Status</th>
                                                    <th width="100">Action</th>
                                                </tr>
                                            </tfoot>
                                            </tbody>
                                        </table>
                                    </div> <!-- End of Table -->

                                    <!-- <div>
                                        <h5>SPECIAL INSTRUCTION</h5>
                                        <textarea class="form-control" rows="2" placeholder="Special Instructions Here" disabled></textarea>
                                    </div>
                                    <br> -->

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

<script>
    var table_alldata;
    var filteredTable;

    $(function() {

        table_alldata = $('#special_instructions_Table').DataTable({
            language: {
                searchPlaceholder: "Search Instruction"
            },
            columnDefs: [{
                orderable: false,
                className: 'select-checkbox',
                targets: 0
            }],
            select: {
                style: 'os',
                selector: 'td:first-child',
            },
            "responsive": true,
            "autoWidth": false,
            order: [
                [2, 'desc']
            ],
            dom: 't<"bottom"p>'

        });

        $('#active-filter').attr('checked', true);
        table_alldata
            .columns(3)
            .search('ACTIVE')
            .draw();

        $('input[name="options"]').on('change', function() {
            var filter = $(this).val();
            console.log('filter:' + filter);

            if (filter == "ALL") {
                table_alldata
                    .columns()
                    .search('')
                    .draw();
            } else {
                table_alldata
                    .columns(3)
                    .search(filter)
                    .draw();
            }

        });

        // $("#special_instructions_Table_paginate").find('#special_instructions_Table_previous').before(
        //     '<div class="mr-2 mt-1" style="display: inline-block;"> <div class="btn-group btn-group-toggle" data-toggle="buttons"> <label class="btn btn-sm btn-outline-info"> <input type="radio" name="options" id="active-filter" value="ACTIVE" selected> ACTIVE </label> <label class="btn btn-sm btn-outline-info"> <input type="radio" name="options" id="done-filter" value="DONE"> DONE </label> <label class="btn btn-sm btn-outline-info"> <input type="radio" name="options" id="all-filter" value="ALL"> ALL </label> </div> </div>'
        // );
    });
</script>