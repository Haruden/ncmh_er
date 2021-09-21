<?php $this->load->view('doctor/modals/doctor_order'); ?>
<?php $this->load->view('doctor/modals/er_notes'); ?>
<?php $this->load->view('doctor/modals/disposition'); ?>

<!-- Add to Doctor Modal -->
<div class="modal fade" id="ATD-modal">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add to Doctor</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-inline">
                    <label>Are the documents complete?</label>
                    <select class="form-control ml-2">
                        <option>Yes</option>
                        <option>No</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Submit</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- Modal Add Vitals -->
<div class="modal fade" id="addVitalsModal" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Vitals</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <div class="modal-body">

                <div class="row">

                    <div class="col-12">

                        <!-- Date dd/mm/yyyy -->
                        <div class="form-group">

                            <label>Date/Time:</label>

                            <div class="input-group mb-2">
                                <input type="text" id="addVitalsDatePicker" data-target="#addVitalsDatePicker" data-toggle="datetimepicker" class="form-control datetimepicker-input" placeholder="Date & Time">
                                <div class="input-group-prepend" data-target="#addVitalsDatePicker" data-toggle="datetimepicker">
                                    <div class="input-group-text">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- /.input group -->
                        </div>

                    </div>

                    <div class="col-6 border-right rounded">

                        <!-- /.form group -->
                        <div class="form-group">
                            <label>Blood Pressure:</label>
                            <div class="row">
                                <div class="col-6 border-right rounded ">
                                    <div class="input-group mb-3">
                                        <input type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6 ">
                                    <div class="input-group mb-3">
                                        <input type="number" class="form-control">
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- /.form group -->

                        <!-- /.form group -->
                        <div class="form-group">
                            <label>Repository rate:</label>
                            <div class="input-group mb-3">
                                <input type="number" class="form-control">
                            </div>
                        </div>
                        <!-- /.form group -->

                        <!-- /.form group -->
                        <div class="form-group">
                            <label>Pulse Rate:</label>
                            <div class="input-group mb-3">

                                <input type="number" class="form-control">

                            </div>
                        </div>
                        <!-- /.form group -->

                    </div>

                    <div class="col-6">

                        <!-- /.form group -->
                        <div class="form-group">
                            <label>Temperature:</label>
                            <div class="input-group mb-3">

                                <input type="number" class="form-control">
                                <div class="input-group-append">
                                    <span class="input-group-text">°C</span>
                                </div>

                            </div>
                        </div>
                        <!-- /.form group -->

                        <!-- /.form group -->
                        <div class="form-group">
                            <label>O2 Stat:</label>
                            <div class="input-group mb-3">

                                <input type="number" class="form-control">

                            </div>
                        </div>
                        <!-- /.form group -->

                    </div>

                    <div class="col-12 border-top mt-3">

                        <!-- /.form group -->
                        <div class="form-group mt-2">
                            <label>Others:</label>
                            <div class="input-group mb-3">

                                <input type="text" class="form-control">

                            </div>
                        </div>
                        <!-- /.form group -->

                        <!-- /.form group -->
                        <div class="form-group">
                            <label>Taken By:</label>
                            <div class="input-group mb-3">

                                <input type="text" class="form-control">

                            </div>
                        </div>
                        <!-- /.form group -->

                    </div>

                </div>

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" data-dismiss="modal">Submit</button>
            </div>


        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- Large Modal -->
<div class="modal fade" id="order-summary-modal" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Order Summary</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12">
                        <label for="" class="text-left">General Order Summary:</label>
                        <table class="table table-striped table-bordered">
                            <thead>
                                <th>Date/Time</th>
                                <th>Duration</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1/10/2021 | 1:51PM</td>
                                    <td class="col-sm-6">All added orders from different order types will be placed in this summary section.</td>
                                    <td>
                                        <button class="btn btn-primary m-1">UPDATE</button>
                                        <button class="btn btn-danger m-1">DELETE</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1/10/2021 | 1:52PM</td>
                                    <td class="col-sm-6">All added orders from different order types will be placed in this summary section.</td>
                                    <td>
                                        <button class="btn btn-primary m-1">UPDATE</button>
                                        <button class="btn btn-danger m-1">DELETE</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1/10/2021 | 1:52PM</td>
                                    <td class="col-sm-6">All added orders from different order types will be placed in this summary section.</td>
                                    <td>
                                        <button class="btn btn-primary m-1">UPDATE</button>
                                        <button class="btn btn-danger m-1">DELETE</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1/10/2021 | 1:52PM</td>
                                    <td class="col-sm-6">All added orders from different order types will be placed in this summary section.</td>
                                    <td>
                                        <button class="btn btn-primary m-1">UPDATE</button>
                                        <button class="btn btn-danger m-1">DELETE</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label for="" class="text-left">Medication Order Summary:</label>
                        <table class="table table-striped table-bordered">
                            <thead>
                                <th>Date/Time</th>
                                <th>Medication Details</th>
                                <th>Route</th>
                                <th>Frequency</th>
                                <th>Duration</th>
                                <th></th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1/10/2021 | 1:51PM</td>
                                    <td>Paracetamol 500 mg tablet</td>
                                    <td>Orally</td>
                                    <td>Once a day</td>
                                    <td>7 days</td>
                                    <td>
                                        <button class="btn btn-primary m-1">UPDATE</button>
                                        <button class="btn btn-danger m-1">DELETE</button>
                                        <!-- <button class="rounded btn btn-danger"><i class="fas fa-times"></i></button> -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>1/10/2021 | 1:52PM</td>
                                    <td>Paracetamol 500 mg tablet</td>
                                    <td>Orally</td>
                                    <td>Once a day</td>
                                    <td>7 days</td>
                                    <td>
                                        <button class="btn btn-primary m-1">UPDATE</button>
                                        <button class="btn btn-danger m-1">DELETE</button>
                                        <!-- <button class="rounded btn btn-danger"><i class="fas fa-times"></i></button> -->
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <label for="" class="text-left">Laboratory Tests Summary:</label>
                        <table class="table table-striped table-bordered">
                            <thead>
                                <th>Date</th>
                                <th>Name of Lab Tests</th>
                                <th>Mode of Request</th>
                                <th></th>
                            </thead>
                            <tbody>
                                <td>1/10/2021 | 1:51 PM</td>
                                <td class="col-sm-4">Kidney Profile (Creat, BUN, BUA) <br> <strong>REMARKS:</strong> To be extracted at 6am</td>
                                <td>STAT</td>
                                <td>
                                    <button class="btn btn-primary m-1">UPDATE</button>
                                    <button class="btn btn-danger m-1">DELETE</button>
                                    <!-- <button class="rounded btn btn-danger"><i class="fas fa-times"></i></button> -->
                                </td>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" data-dismiss="modal">Finalize</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- View Medication -->
<div class="modal fade" id="medication-modal-doctor">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">View Details</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <div class="modal-body">
                <div class="dataTables_wrapper dt-bootstrap4">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Date/Time Ordered</th>
                                <th>Name of Medication</th>
                                <th>Dosage</th>
                                <th>Frequency</th>
                                <th>Route</th>
                                <th>Last Dose Given</th>
                                <th>Medication Due On</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>01/10/2021 <br> 1:51PM</td>
                                <td>Paracetamol</td>
                                <td>500mg</td>
                                <td>TID</td>
                                <td>PO</td>
                                <td>01/25/2021 <br> 8:32AM</td>
                                <td>01/25/2021 <br> 1:00PM</td>
                                <td><strong style="color:red">NEW</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <hr>
                <div class="dataTables_wrapper dt-bootstrap4">
                    <table id="modal_table" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Day Count</th>
                                <th>Dose Count</th>
                                <th>Status</th>
                                <th>Target Time of Administration</th>
                                <th>Actual Time of Administration</th>
                                <th>Reasons for Omission / Remarks</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>13</td>
                                <td>2</td>
                                <td>-</td>
                                <td>01/23/2021 1:00PM</td>
                                <td>-</td>
                                <td>Patient Refused.</td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>1</td>
                                <td>ADMINISTERED</td>
                                <td>01/23/2021 8:00AM</td>
                                <td>01/23/2021 8:32AM</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>1</td>
                                <td>SHIFTED</td>
                                <td>01/11/2021 8:00AM</td>
                                <td>01/11/2021 10:24AM</td>
                                <td>Initially refused but eventually given</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>2</td>
                                <td>ADMINISTERED</td>
                                <td>-</td>
                                <td>01/10/2021 8:31PM</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>1</td>
                                <td>ADMINISTERED</td>
                                <td>01/10/2021 8:00PM</td>
                                <td>01/10/2021 2:00PM</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>


        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->