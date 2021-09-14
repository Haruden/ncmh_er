<!-- add-doctors-order -->
<div class="modal fade" id="add-doctor-order" data-backdrop="static">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add New Order</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a style="width: 33%;" href="#nav-doctor-order" class="nav-item nav-link ml-1 text-center active" id="nav-doctor-order-tab" data-toggle="tab" role="tab" aria-controls="nav-doctor-order" aria-selected="true">
                            <i class="fas fa-folder-open mr-2"></i>Orders
                        </a>
                        <a style="width: 33%;" href="#nav-diag-proc" class="nav-item nav-link text-center" id="nav-diag-proc-tab" data-toggle="tab" role="tab" aria-controls="nav-diag-proc" aria-selected="false">
                            <i class="fas fa-vial mr-2"></i><i class="fas fa-radiation-alt mr-2"></i>Diagnostic Procedures
                        </a>
                        <a style="width: 33%;" href="#nav-medication" class="nav-item nav-link text-center" id="nav-medication-tab" data-toggle="tab" role="tab" aria-controls="nav-medication" aria-selected="false">
                            <i class="fas fa-briefcase-medical mr-2"></i> Medications
                        </a>
                    </div>
                </nav>

                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active m-3" id="nav-doctor-order" role="tabpanel" aria-labelledby="nav-doctor-order-tab">
                        <div class="form-inline font-weight-bold lead">
                            Mode of Request:
                            <input type="radio" name="gen_or_mor" id="gen_or_mor_stat" class="ml-2 mr-1" value="STAT"> STAT
                            <input type="radio" name="gen_or_mor" id="gen_or_mor_routine" class="ml-2 mr-1" value="Routine"> Routine
                        </div>

                        <label for="" class="text-left">General Order Data Entry:</label>
                        <input type="text" name="gen_or_data" id="gen_or_data" class="form-control w-100" placeholder="General Order Data Entry" value="">
                        <div class="form-inline col-md-12">
                            <input type="checkbox" class="form-control" name="" id="spec_ins" value="1">
                            <label for="" class="ml-1">Special Instruction</label>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="row form-inline">
                                    <div class="col-sm-9">
                                        <div class="dropdown-divider"></div>
                                    </div>
                                    <div class="col-sm-3">
                                        <button id="add-gen-order-btn" class="btn btn-sm btn-success btn-block"><i class="fas fa-folder-plus mr-2"></i>Add Order</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label for="diet-select" class="col-sm-12">Dietary Orders:</label>
                            <div class="col-sm-5">
                                <select name="" id="diet-select" class="form-control  block">
                                    <option value="Low Fat Low Salt">Low Fat Low Salt</option>
                                    <option value="Diet as Tolerated">Diet as Tolerated</option>
                                    <option value="Hypoallergenic Diet">Hypoallergenic Diet</option>
                                    <option value="Muslim Diet">Muslim Diet</option>
                                    <option value="Diabetic Diet">Diabetic Diet</option>
                                    <option value="Others">Others</option>
                                </select>
                                <input type="text" name="" id="others-diet" placeholder="Please specify here..." style="display:none;" class="form-control  mt-2">
                            </div>
                            <div class="col-sm-4">
                                <input type="text" name="" id="diet-remarks" placeholder="Remarks" class="form-control">
                            </div>
                            <div class="col-sm-3">
                                <button id="add-diet-btn" class="btn btn-sm btn-success btn-block"><i class="fas fa-folder-plus mr-2"></i>Add Diet</button>
                            </div>
                        </div>


                        <div class="row mt-4">
                            <div class="col-sm-12">
                                <label for="" class="text-left">Referral Orders:</label>
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">Refer to Department</th>
                                            <th scope="col">Reason for Referral</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <select name="" id="referral-select" class="form-control  block">
                                                    <option value="Neurology">Neurology</option>
                                                    <option value="Internal Medicine">Internal Medicine</option>
                                                    <option value="Surgery">Surgery</option>
                                                    <option value="Pediatrics">Pediatrics</option>
                                                    <option value="OB Gyne">OB Gyne</option>
                                                    <option value="ORL-HNS">ORL-HNS</option>
                                                    <option value="Ophthalmology">Ophthalmology</option>
                                                    <option value="Anesthesiology">Anesthesiology</option>
                                                </select>
                                            </td>
                                            <td>
                                                <textarea placeholder="Your reason here..." class="form-control" name="" id="referral-reason" rows="2"></textarea>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="row form-inline">
                            <div class="col-sm-9">
                                <div class="dropdown-divider"></div>
                            </div>

                            <div class="col-sm-3">
                                <button id="add-referral-btn" class="btn btn-sm btn-success btn-block"><i class="fas fa-folder-plus mr-2"></i>Add Refferal</button>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <label for="" class="text-left">General Order Summary:</label>

                                <!-- Table row -->
                                <div class="dataTables_wrapper dt-bootstrap4">
                                    <table id="genOrderTable" class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th class="no-sort">Date/Time Ordered</th>
                                                <th class="no-sort">Order</th>
                                                <th class="no-sort">Priority</th>
                                                <th class="no-sort">Remarks</th>
                                                <th class="no-sort">Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th class="no-sort">Date/Time Ordered</th>
                                                <th class="no-sort">Order</th>
                                                <th class="no-sort">Priority</th>
                                                <th class="no-sort">Remarks</th>
                                                <th class="no-sort">Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div> <!-- /.row -->

                                <!-- <table class="table table-striped table-bordered">
                                    <thead>
                                        <th>Date/Time</th>
                                        <th>Order</th>
                                        <th>Priority</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1/10/2021 | 1:51PM</td>
                                            <td class="col-sm-6">
                                                <b>SPECIAL INSTRUCTION:</b>
                                                <textarea class="w-100" disabled>All added orders from different order types will be placed in this summary section."</textarea>
                                            </td>
                                            <td>
                                                <select name="" id="" disabled>
                                                    <option value="">STAT</option>
                                                    <option value="">Routine</option>
                                                </select>
                                            </td>
                                            <td>
                                                <button class="btn btn-sm btn-danger m-1 btn-remove">DELETE</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1/10/2021 | 1:52PM</td>
                                            <td class="col-sm-6">
                                                <b>DIETARY ORDER:</b>
                                                <textarea class="w-100" disabled>All added orders from different order types will be placed in this summary section."</textarea>
                                            </td>
                                            <td>
                                                <select name="" id="" disabled>
                                                    <option value="">STAT</option>
                                                    <option value="">Routine</option>
                                                </select>
                                            </td>
                                            <td>
                                                <button class="btn btn-sm btn-danger m-1 btn-remove">DELETE</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1/10/2021 | 1:53PM</td>
                                            <td class="col-sm-6">
                                                <b>REFERRAL ORDER:</b>
                                                <textarea class="w-100" disabled>All added orders from different order types will be placed in this summary section."</textarea>
                                            </td>
                                            <td>
                                                <select name="" id="" disabled>
                                                    <option value="">Routine</option>
                                                    <option value="">STAT</option>
                                                </select>
                                            </td>
                                            <td>
                                                <button class="btn btn-sm btn-danger m-1 btn-remove">DELETE</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1/10/2021 | 1:53PM</td>
                                            <td class="col-sm-6">
                                                <textarea class="w-100" disabled>All added orders from different order types will be placed in this summary section."</textarea>
                                            </td>
                                            <td>
                                                <select name="" id="" disabled>
                                                    <option value="">Routine</option>
                                                    <option value="">STAT</option>
                                                </select>
                                            </td>
                                            <td>>
                                                <button class="btn btn-sm btn-danger m-1 btn-remove">DELETE</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table> -->

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <button class="btn btn-sm btn-primary float-right tabNext">Go to Diagnostic Procedures</button>
                            </div>
                        </div>

                    </div>

                    <div class="tab-pane fade m-3" id="nav-diag-proc" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="form-inline font-weight-bold lead">
                            Mode of Request:
                            <input type="radio" name="diag-mor" id="diag-mor-stat" class="ml-2 mr-1" value="STAT"> STAT
                            <input type="radio" name="diag-mor" id="diag-mor-routine" class="ml-2 mr-1" value="Routine"> Routine
                        </div>

                        <div class="form-group mb-2">
                            <div class="form-inline mb-2">
                                <div class="col-4 d-flex justify-content-left">
                                    <label> Diagnostic Procedure Order Data Entry: </label>
                                </div>
                                <div class="col-5">
                                    <hr>
                                </div>
                                <div class="col-3">
                                    <button class="btn btn-sm btn-primary" data-dismiss="modal" data-toggle="modal" href="#proc-cat">
                                        <i class="fas fa-book-medical mr-2"></i>View Procedure Catalog
                                    </button>
                                </div>
                            </div>
                            <input type="text" placeholder="Diagnostic Procedure Order Data Entry" class="form-control" name="diagproc-text" id="diagproc-text" />
                        </div>

                        <div class="row mb-2">
                            <div class="col-9">
                                <hr>
                            </div>
                            <div class="col-3">
                                <button id="add-diagproc-btn" class="btn btn-sm btn-success w-100">
                                    <i class="fas fa-folder-plus mr-2"></i> Add Diagnostic Procedure Order
                                </button>
                            </div>
                        </div>

                        <!-- <div class="row form-inline text-center mb-2">
                            <div class="col-sm-12">
                                <a href="<?php echo base_url(); ?>assets/pdf/lab.pdf" target="_blank">
                                    <button class="btn btn-success">
                                        <i class="fas fa-folder-plus mr-2"></i>Add Laboratory Test
                                    </button>
                                </a>
                            </div>
                        </div> -->

                        <h5>Diagnostic Procedure Order Summary</h5>

                        <table id="diagProcTable" class="table table-striped table-bordered">
                            <thead>
                                <th>Date/Time Ordered</th>
                                <th>Diagnostic Procedure</th>
                                <th>Priority</th>
                                <th>Remarks</th>
                                <th>Actions</th>
                            </thead>
                            <!-- <tbody>
                                <tr>
                                    <td>1/10/2021 | 1:51 PM</td>
                                    <td>Complete Blood Count (CBC)</td>
                                    <td>Routine
                                    </td>
                                    <td>To be extracted at 6am<td>
                                        <button class="btn btn-sm btn-primary m-1">UPDATE</button>
                                        <button class="btn btn-sm btn-danger m-1">DELETE</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1/10/2021 | 1:51 PM</td>
                                    <td>Complete Blood Count (CBC)</td>
                                    <td>STAT
                                    </td>
                                    <td>Extract Now</td>
                                    <td>
                                        <button class="btn btn-sm btn-primary m-1">UPDATE</button>
                                        <button class="btn btn-sm btn-danger m-1">DELETE</button>
                                    </td>
                                </tr>
                            </tbody> -->
                            <tfoot>
                                <th>Date/Time Ordered</th>
                                <th>Diagnostic Procedure</th>
                                <th>Priority</th>
                                <th>Remarks</th>
                                <th>Actions</th>
                            </tfoot>
                        </table>

                        <div class="row">
                            <div class="col-sm-6">
                                <button class="btn btn-sm btn-primary float-left tabPrevious">Go to General Orders</button>
                            </div>
                            <div class="col-sm-6">
                                <button class="btn btn-sm btn-primary float-right tabNext">Go to Medications</button>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade m-3" id="nav-medication" role="tabpanel" aria-labelledby="nav-medication-tab">

                        <div class="form-inline font-weight-bold lead">
                            Mode of Request:
                            <input type="radio" name="med-mor" id="med-mor-stat" class="ml-2 mr-1" value="STAT"> STAT
                            <input type="radio" name="med-mor" id="med-mor-routine" class="ml-2 mr-1" value="Routine"> Routine
                        </div>
                        <label for="" class="text-left">Medication Order Entry:</label>
                        <table class="table table-striped table-bordered w-100">
                            <thead>
                                <th>Name of Medication</th>
                                <th>Dosage</th>
                                <th>Preparation</th>
                                <th>Route</th>
                                <th>Frequency</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><textarea id="med-name" name="med-name" class="form-control"></textarea></td>
                                    <td><textarea id="med-dosage" name="med-dosage" class="form-control"></textarea></td>
                                    <td><select name="med-prep" id="med-prep" class="form-control">
                                            <option value="Tablet"> Tablet </option>
                                            <option value="Orodispersible tab"> Orodispersible tab </option>
                                            <option value="Ampule"> Ampule </option>
                                            <option value="Vial"> Vial </option>
                                            <option value="Cream"> Cream </option>
                                            <option value="Ointment"> Ointment </option>
                                            <option value="Bottle"> Bottle </option>
                                            <option value="Suppository"> Suppository </option>
                                            <option value="Suspension"> Suspension </option>
                                            <option value="Syrup"> Syrup </option>
                                            <option value="Solution"> Solution </option>
                                            <option value="Lozenges"> Lozenges </option>
                                            <option value="Spray"> Spray </option>
                                            <option value="Lotion"> Lotion </option>
                                            <option value="Capsule"> Capsule </option>
                                            <option value="Gel"> Gel </option>
                                            <option value="Powder"> Powder </option>
                                            <option value="Nebule"> Nebule </option>
                                            <option value="Inhaler"> Inhaler </option>
                                            <option value="Emulsion"> Emulsion </option>
                                            <option value="Shampoo"> Shampoo </option>
                                            <option value="Eye drop"> Eye drop </option>
                                            <option value="Ear drop"> Ear drop </option>
                                            <option value="Eye ointment"> Eye ointment </option>
                                        </select></td>

                                    <td><textarea name="med-route" id="med-route" class="form-control"></textarea></td>
                                    <td><select name="med-frequency" id="med-frequency" class="form-control">
                                            <option value="1"> 1</option>
                                            <option value="2"> 2</option>
                                            <option value="3"> 3</option>
                                        </select></td>
                                    <!-- <td> <button class="rounded btn btn-success"><i class="fas fa-plus"></i></button></td> -->
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <div class="form-inline">
                                            <label>Duration: </label>
                                            <input type="radio" id="durationNum" class="form-control ml-2 mr-1" name="med-duration" value="Number"> Number
                                            <input type="radio" id="durationRange" class="form-control ml-2 mr-1" name="med-duration" value="Range"> Range
                                        </div>
                                    </td>

                                    <td colspan="3">
                                        <div id="durNumDiv" class="form-inline d-none">
                                            <input type="number" class="form-control mx-1 w-40" id="med-days" name="med-days" />
                                            <label>Days</label>
                                        </div>
                                        <div id="durRangeDiv" class="form-inline">
                                            From: <input type="date" class="form-control mx-1 w-40" id="med-range-from" name="med-range-from" />
                                            To: <input type="date" class="form-control ml-1 w-40" id="med-range-to" name="med-range-to" />
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="row form-inline">
                            <div class="col-sm-9">
                                <div class="dropdown-divider"></div>
                            </div>
                            <div class="col-sm-3">
                                <button id="add-med-btn" class="btn btn-sm  btn-success btn-block"><i class="fas fa-folder-plus mr-2"></i>Add Medication</button>
                            </div>
                        </div>

                        <h5>Medication Order Summary</h5>
                        <table id="medOrderTable" class="table table-striped table-bordered">
                            <thead>
                                <th>Date/Time Ordered</th>
                                <th>Medication Details</th>
                                <th>Route</th>
                                <th>Frequency</th>
                                <th>Duration</th>
                                <th>Priority</th>
                                <th>Actions</th>
                            </thead>
                            <!-- <tbody>
                                <tr>
                                    <td>1/10/2021 | 1:51PM</td>
                                    <td>Paracetamol 500 mg tablet</td>
                                    <td>Orally</td>
                                    <td>Once a day</td>
                                    <td>7 days</td>
                                    <td>STAT
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-primary m-1">UPDATE</button>
                                        <button class="btn btn-sm btn-danger m-1">DELETE</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1/10/2021 | 1:52PM</td>
                                    <td>Paracetamol 500 mg tablet</td>
                                    <td>Orally</td>
                                    <td>Once a day</td>
                                    <td>7 days</td>
                                    <td>STAT
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-primary m-1">UPDATE</button>
                                        <button class="btn btn-sm btn-danger m-1">DELETE</button>
                                    </td>
                                </tr>
                            </tbody> -->
                            <tfoot>
                                <th>Date/Time Ordered</th>
                                <th>Medication Details</th>
                                <th>Route</th>
                                <th>Frequency</th>
                                <th>Duration</th>
                                <th>Priority</th>
                                <th>Actions</th>
                            </tfoot>
                        </table>

                        <!-- <button class="btn btn-sm btn-primary tabPrevious">Go to Orders</button> -->
                        <div class="row">
                            <div class="col-sm-6">
                                <button class="btn btn-sm btn-primary float-left tabPrevious">Go to Diagnostic Procedures</button>
                            </div>
                            <!-- <div class="col-sm-6">
                                <button class="btn btn-sm btn-primary float-right tabNext">Go to Diagnostic Procedures</button>
                            </div> -->
                        </div>
                        <!-- <div class="alert alert-info">Consider <a href="https://trello.com/c/SN921sjM/101-preparation-autosuggest">https://trello.com/c/SN921sjM/101-preparation-autosuggest for table above</a></div> -->
                    </div>



                </div>
            </div> <!-- modal body -->
            <div class="modal-footer justify-content-between p-1">
                <button type="submit" class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#order-summary-modal" data-dismiss="modal">Submit</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<div class="modal fade" id="update-gen-order" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Update General Order</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <input type="hidden" name="" id="gou-index">

                <div class="form-inline">
                    <label for=""> Mode of Request: </label>
                    <select name="" id="gou-priority" class="form-control ml-2">
                        <option value="Routine">Routine</option>
                        <option value="STAT">STAT</option>
                    </select>
                </div>

                <div class="form-inline mt-2">
                    <label for=""> Date/Time Ordered: </label>
                    <input type="text" name="" id="gou-datetime" class="form-control ml-2" readonly>
                </div>

                <hr>

                <div id="upd-genor-div" class="row mt-2">
                    <label for="" class="text-left">General Order Data Entry:</label>
                    <input type="text" name="" id="upd-genor-data" class="form-control w-100" placeholder="General Order Data Entry" value="">
                    <div class="form-inline col-md-12">
                        <input type="checkbox" class="form-control" name="" id="upd-spec-ins" value="1">
                        <label for="" class="ml-1">Special Instruction</label>
                    </div>
                </div>

                <div id="upd-diet-div" class="row mt-2">
                    <label for="" class="col-sm-12">Dietary Orders:</label>
                    <div class="col-sm-5">
                        <select name="" id="upd-diet-select" class="form-control  block">
                            <option value="Low Fat Low Salt">Low Fat Low Salt</option>
                            <option value="Diet as Tolerated">Diet as Tolerated</option>
                            <option value="Hypoallergenic Diet">Hypoallergenic Diet</option>
                            <option value="Muslim Diet">Muslim Diet</option>
                            <option value="Diabetic Diet">Diabetic Diet</option>
                            <option value="Others">Others</option>
                        </select>
                        <input type="text" name="" id="upd-others-diet" placeholder="Please specify here..." style="display:none;" class="form-control  mt-2">
                    </div>
                    <!-- <div class="col-sm-4">
                        <input type="text" name="" id="upd-diet-remarks" placeholder="Remarks" class="form-control">
                    </div>   -->
                </div>


                <div id="upd-ref-div" class="row mt-4">
                    <div class="col-sm-12">
                        <label for="" class="text-left">Referral Orders:</label>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Refer to Department</th>
                                    <th scope="col">Reason for Referral</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <select name="" id="upd-ref-select" class="form-control  block">
                                            <option value="Neurology">Neurology</option>
                                            <option value="Internal Medicine">Internal Medicine</option>
                                            <option value="Surgery">Surgery</option>
                                            <option value="Pediatrics">Pediatrics</option>
                                            <option value="OB Gyne">OB Gyne</option>
                                            <option value="ORL-HNS">ORL-HNS</option>
                                            <option value="Ophthalmology">Ophthalmology</option>
                                            <option value="Anesthesiology">Anesthesiology</option>
                                        </select>
                                    </td>
                                    <td>
                                        <textarea placeholder="Your reason here..." class="form-control" name="" id="upd-ref-reason" rows="2"></textarea>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="form-inline mt-2">
                    <label for=""> Remarks: </label>
                    <input type="text" name="" id="gou-remarks" class="form-control ml-2">
                </div>
            </div>
            <div class="modal-footer justify-content-between p-1">
                <button type="submit" class="btn btn-sm btn-danger" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-sm btn-primary" id="gou-update-btn">Update</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="update-diagproc-order" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Update Diagnostic Procedure Order</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">

                <input type="hidden" name="" id="dpu-index">

                <div class="form-inline">
                    <label for=""> Mode of Request: </label>
                    <select name="" id="dpu-priority" class="form-control ml-2">
                        <option value="Routine">Routine</option>
                        <option value="STAT">STAT</option>
                    </select>
                </div>

                <div class="form-inline mt-2">
                    <label for=""> Date/Time Ordered: </label>
                    <input type="text" name="" id="dpu-datetime" class="form-control ml-2" readonly>
                </div>
                <div class="form-inline mt-2">
                    <label for=""> Diagnostic Procedure: </label>
                    <input type="text" name="" id="dpu-diagproc" class="form-control ml-2">
                </div>
                <div class="form-inline mt-2">
                    <label for=""> Remarks: </label>
                    <input type="text" name="" id="dpu-remarks" class="form-control ml-2">
                </div>
            </div>
            <div class="modal-footer justify-content-between p-1">
                <button type="submit" class="btn btn-sm btn-danger" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-sm btn-primary" id="dpu-update-btn">Update</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="update-med-order" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Update Medications Order</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <input type="hidden" name="" id="mou-index">

                <div class="row">
                    <div class="col-8">
                        <div class="form-inline mb-2">
                            <label for="">Date/Time Ordered:</label>
                            <input type="text" name="" id="mou-datetime" class="form-control ml-2" readonly>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-inline mb-2">
                            <label for="">Mode of Request:</label>
                            <select name="" id="mou-priority" class="form-control ml-2">
                                <option value="Routine">Routine</option>
                                <option value="STAT">STAT</option>
                            </select>
                        </div>
                    </div>
                </div>

                <table class="table table-striped table-bordered w-100">
                    <thead>
                        <th>Name of Medication</th>
                        <th>Dosage</th>
                        <th>Preparation</th>
                        <th>Route</th>
                        <th>Frequency</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td><textarea id="mou-name" name="mou-name" class="form-control"></textarea></td>
                            <td><textarea id="mou-dosage" name="mou-dosage" class="form-control"></textarea></td>
                            <td><select name="mou-prep" id="mou-prep" class="form-control">
                                    <option value="Tablet"> Tablet </option>
                                    <option value="Orodispersible tab"> Orodispersible tab </option>
                                    <option value="Ampule"> Ampule </option>
                                    <option value="Vial"> Vial </option>
                                    <option value="Cream"> Cream </option>
                                    <option value="Ointment"> Ointment </option>
                                    <option value="Bottle"> Bottle </option>
                                    <option value="Suppository"> Suppository </option>
                                    <option value="Suspension"> Suspension </option>
                                    <option value="Syrup"> Syrup </option>
                                    <option value="Solution"> Solution </option>
                                    <option value="Lozenges"> Lozenges </option>
                                    <option value="Spray"> Spray </option>
                                    <option value="Lotion"> Lotion </option>
                                    <option value="Capsule"> Capsule </option>
                                    <option value="Gel"> Gel </option>
                                    <option value="Powder"> Powder </option>
                                    <option value="Nebule"> Nebule </option>
                                    <option value="Inhaler"> Inhaler </option>
                                    <option value="Emulsion"> Emulsion </option>
                                    <option value="Shampoo"> Shampoo </option>
                                    <option value="Eye drop"> Eye drop </option>
                                    <option value="Ear drop"> Ear drop </option>
                                    <option value="Eye ointment"> Eye ointment </option>
                                </select></td>

                            <td><textarea name="mou-route" id="mou-route" class="form-control"></textarea></td>
                            <td><select name="mou-frequency" id="mou-frequency" class="form-control">
                                    <option value="1"> 1</option>
                                    <option value="2"> 2</option>
                                    <option value="3"> 3</option>
                                </select></td>
                            <!-- <td> <button class="rounded btn btn-success"><i class="fas fa-plus"></i></button></td> -->
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="form-inline">
                                    <label>Duration: </label>
                                    <input type="radio" id="mouDurationNum" class="form-control ml-2 mr-1" name="mou-duration" value="Number"> Number
                                    <input type="radio" id="mouDurationRange" class="form-control ml-2 mr-1" name="mou-duration" value="Range"> Range
                                </div>
                            </td>

                            <td colspan="3">
                                <div id="mouDurNumDiv" class="form-inline d-none">
                                    <input type="number" class="form-control mx-1 w-40" id="mou-days" name="mou-days" />
                                    <label>Days</label>
                                </div>
                                <div id="mouDurRangeDiv" class="form-inline">
                                    From: <input type="date" class="form-control mx-1 w-40" id="mou-range-from" name="mou-range-from" />
                                    To: <input type="date" class="form-control ml-1 w-40" id="mou-range-to" name="mou-range-to" />
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer justify-content-between p-1">
                <button type="submit" class="btn btn-sm btn-danger" data-dismiss="modal">Cancel</button>
                <button type="submit" id="mou-update-btn" class="btn btn-sm btn-primary">Update</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="proc-cat" data-backdrop="static">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Diagnostic Procedure Order</h5>
                <button type="button" class="close" aria-label="Close" data-toggle="modal" data-target="#add-doctor-order" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a style="width: 49%;" href="#nav-lab-proc" class="nav-item nav-link text-center active" id="nav-lab-proc-tab" data-toggle="tab" role="tab" aria-controls="nav-lab-proc" aria-selected="true">
                            <i class="fas fa-vial mr-2"></i>Laboratory Procedures
                        </a>
                        <a style="width: 49%;" href="#nav-rad-proc" class="nav-item nav-link text-center" id="nav-rad-proc-tab" data-toggle="tab" role="tab" aria-controls="nav-rad-proc" aria-selected="true">
                            <i class="fas fa-radiation-alt mr-2"></i>Radiologic Procedures
                        </a>
                    </div>
                </nav>

                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active m-3" id="nav-lab-proc" role="tabpanel" aria-labelledby="nav-lab-proc-tab">

                        <div class="form-group row">

                            <div class="col-sm-3">
                                <!-- HEMATOLOGY -->
                                <label>HEMATOLOGY</label>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0001" id="NCMHLAB0001" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0001">
                                        CBC
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0002" id="NCMHLAB0002" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0002">
                                        Platelet count
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0003" id="NCMHLAB0003" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0003">
                                        Hemoglobin &amp; Hematocrit only
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0004" id="NCMHLAB0004" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0004">
                                        RBC
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0005" id="NCMHLAB0005" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0005">
                                        WBC w/ Differential Count
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0006" id="NCMHLAB0006" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0006">
                                        Blood Indices
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0007" id="NCMHLAB0007" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0007">
                                        ESR
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0008" id="NCMHLAB0008" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0008">
                                        Clotting Time
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0009" id="NCMHLAB0009" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0009">
                                        Bleeding Time
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0010" id="NCMHLAB0010" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0010">
                                        Malarial Smear
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0011" id="NCMHLAB0011" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0011">
                                        L.E. Preparation
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0012" id="NCMHLAB0012" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0012">
                                        Peripheral Smear
                                    </label>
                                </div>
                                <br>

                                <!-- SEROLOGY -->
                                <label>SEROLOGY</label>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0013" id="NCMHLAB0013" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0013">
                                        HBsAg/ Hepatitis B s antigen
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0014" id="NCMHLAB0014" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0014">
                                        HIV
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0015" id="NCMHLAB0015" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0015">
                                        Syphilis Test RPR / Anti Treponema Pallidum
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0016" id="NCMHLAB0016" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0016">
                                        Anti HAV
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0017" id="NCMHLAB0017" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0017">
                                        Anti HBS
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0018" id="NCMHLAB0018" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0018">
                                        Anti HCV
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0019" id="NCMHLAB0019" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0019">
                                        Salmonella IgM,IgG
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0020" id="NCMHLAB0020" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0020">
                                        Dengue NS1
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0021" id="NCMHLAB0021" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0021">
                                        Dengue IgM, IgG
                                    </label>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <!-- Blood Bank -->
                                <label>BLOOD BANK</label>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0022" id="NCMHLAB0022" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0022">
                                        Blood Typing [ABO &amp; Rh]
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0023" id="NCMHLAB0023" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0023">
                                        Crossmatching
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0024" id="NCMHLAB0024" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0024">
                                        Coomb's Test Direct
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0025" id="NCMHLAB0025" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0025">
                                        Coomb's Test Indirect
                                    </label>
                                </div>
                                <br>

                                <!-- CHEMISTRY -->
                                <label>CHEMISTRY</label>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0026" id="NCMHLAB0026" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0026">
                                        FBS
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0027" id="NCMHLAB0027" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0027">
                                        RBS
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0028" id="NCMHLAB0028" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0028">
                                        BUN/ Blood Urea Nitrogen
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0029" id="NCMHLAB0029" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0029">
                                        Creatinine
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0030" id="NCMHLAB0030" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0030">
                                        Blood Uric Acid
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0031" id="NCMHLAB0031" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0031">
                                        Total Cholesterol
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0032" id="NCMHLAB0032" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0032">
                                        Triglycerides
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0033" id="NCMHLAB0033" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0033">
                                        HDL
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0034" id="NCMHLAB0034" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0034">
                                        LDL
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0035" id="NCMHLAB0035" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0035">
                                        Alkaline Phosphatase
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0036" id="NCMHLAB0036" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0036">
                                        SGPT/ ALT
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0037" id="NCMHLAB0037" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0037">
                                        SGOT/ AST
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0038" id="NCMHLAB0038" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0038">
                                        Total Bilirubin
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0039" id="NCMHLAB0039" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0039">
                                        Indirect &amp; Direct Bilirubin
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0040" id="NCMHLAB0040" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0040">
                                        Total Protein
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0041" id="NCMHLAB0041" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0041">
                                        Albumin
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0042" id="NCMHLAB0042" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0042">
                                        Globulin
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0043" id="NCMHLAB0043" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0043">
                                        OGTT
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0044" id="NCMHLAB0044" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0044">
                                        OGCT
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0045" id="NCMHLAB0045" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0045">
                                        Hemoglobin A1c (Hba1c)
                                    </label>
                                </div>
                            </div>

                            <div class="col-sm-3">

                                <!-- ELETROLYTES -->
                                <label>ELETROLYTES</label>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0046" id="NCMHLAB0046" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0046">
                                        Sodium/ Na
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0047" id="NCMHLAB0047" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0047">
                                        Potassium/ K
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0048" id="NCMHLAB0048" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0048">
                                        Lithium/ Li
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0049" id="NCMHLAB0049" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0049">
                                        Chloride
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0050" id="NCMHLAB0050" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0050">
                                        Total Calcium
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0051" id="NCMHLAB0051" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0051">
                                        Phosphorous (Inorganic Phosphate)
                                    </label>
                                </div>
                                <br>
                                <!-- CARDIAC MARKERS -->
                                <label>CARDIAC MARKERS</label>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0052" id="NCMHLAB0052" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0052">
                                        Troponin [Qualitative]
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0053" id="NCMHLAB0053" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0053">
                                        CK-MB [Qualitative]
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0054" id="NCMHLAB0054" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0054">
                                        CK-Total [Qualitative]
                                    </label>
                                </div>
                                <br>
                                <!-- MICROSCOPY -->
                                <label>MICROSCOPY</label>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0055" id="NCMHLAB0055" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0055">
                                        Routine Urinalysis
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0056" id="NCMHLAB0056" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0056">
                                        Routine Fecalysis/ Stool Exam
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0057" id="NCMHLAB0057" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0057">
                                        Scotch tape Method
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0058" id="NCMHLAB0058" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0058">
                                        Pregnancy Test
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0059" id="NCMHLAB0059" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0059">
                                        Vaginal Smear for Spermatozoa
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0060" id="NCMHLAB0060" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0060">
                                        Semen Analysis
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0061" id="NCMHLAB0061" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0061">
                                        Fecal Occult Blood (FOBT)
                                    </label>
                                </div>
                            </div>

                            <div class="col-sm-3">

                                <!-- MICROBIOLOGY -->
                                <label>MICROBIOLOGY</label>
                                <div class="">
                                    <input type="checkbox" class="with_src" value="NCMHLAB0062" id="NCMHLAB0062" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0062">
                                        Gram Stain
                                    </label>
                                    <div class="pl-4 d-none" id="src_data-NCMHLAB0062"><input placeholder="Source" type="text" name="txt-NCMHLAB0062" class="form-control text-scr" data-id="NCMHLAB0062"></div>
                                </div>
                                <div class="">
                                    <input type="checkbox" class="with_src" value="NCMHLAB0063" id="NCMHLAB0063" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0063">
                                        AFB Stain
                                    </label>
                                    <div class="pl-4 d-none" id="src_data-NCMHLAB0063"><input placeholder="Source" type="text" name="txt-NCMHLAB0063" class="form-control text-scr" data-id="NCMHLAB0063"></div>
                                </div>
                                <div class="">
                                    <input type="checkbox" class="with_src" value="NCMHLAB0064" id="NCMHLAB0064" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0064">
                                        KOH
                                    </label>
                                    <div class="pl-4 d-none" id="src_data-NCMHLAB0064"><input placeholder="Source" type="text" name="txt-NCMHLAB0064" class="form-control text-scr" data-id="NCMHLAB0064"></div>
                                </div>
                                <div class="">
                                    <input type="checkbox" class="with_src" value="NCMHLAB0065" id="NCMHLAB0065" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0065">
                                        Culture &amp; Sensitivity
                                    </label>
                                    <div class="pl-4 d-none" id="src_data-NCMHLAB0065">
                                        <div class="form-check"><input class="form-check-input" name="chk-NCMHLAB0065[]" type="checkbox" value="Blood">&nbsp;<label class="thin-label">Blood</label></div>
                                        <div class="form-check"><input class="form-check-input" name="chk-NCMHLAB0065[]" type="checkbox" value="Urine">&nbsp;<label class="thin-label">Urine</label></div>
                                        <div class="form-check"><input class="form-check-input" name="chk-NCMHLAB0065[]" type="checkbox" value="Stool">&nbsp;<label class="thin-label">Stool</label></div>
                                        <div class="form-check"><input class="form-check-input" name="chk-NCMHLAB0065[]" type="checkbox" value="Wound">&nbsp;<label class="thin-label">Wound</label></div>
                                        <div class="form-check"><input class="form-check-input" name="chk-NCMHLAB0065[]" type="checkbox" value="Rectal" swab="">&nbsp;<label class="thin-label">Rectal Swab</label></div><input placeholder="Others - please specify" type="text" name="txt-NCMHLAB0065" class="form-control text-scr" data-id="NCMHLAB0065">
                                    </div>
                                </div>
                                <div class="">
                                    <input type="checkbox" class="with_src" value="NCMHLAB0066" id="NCMHLAB0066" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0066">
                                        PCR for M.Tuberculosis
                                    </label>
                                    <div class="pl-4 d-none" id="src_data-NCMHLAB0066"></div>
                                </div>
                                <div class="">
                                    <input type="checkbox" class="with_src" value="NCMHLAB0067" id="NCMHLAB0067" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0067">
                                        Environmental Swabbing
                                    </label>
                                    <div class="pl-4 d-none" id="src_data-NCMHLAB0067"></div>
                                </div> <br>
                                <!-- MISCELLANEOUS -->
                                <label>MISCELLANEOUS</label>

                                <!-- Body Fluid Analysis (Cell Count, Sugar, Protein) -->
                                <div>
                                    <label class="thin-label">Body Fluid Analysis<br>(Cell Count, Sugar, Protein)</label>
                                    <div class="pl-4">
                                        <input type="checkbox" value="NCMHLAB0068" id="&quot;NCMHLAB0068&quot;" name="lab_req">
                                        <label class="thin-label" for="NCMHLAB0068">CSF</label>
                                    </div>
                                    <div class="pl-4">
                                        <input type="checkbox" value="NCMHLAB0069" id="&quot;NCMHLAB0069&quot;" name="lab_req">
                                        <label class="thin-label" for="NCMHLAB0069">Plueral Fluid</label>
                                    </div>
                                </div>

                                <!-- 24-HR Urine Chemistry  -->
                                <div>
                                    <label class="thin-label">24-HR Urine Chemistry</label>
                                    <div class="pl-4">
                                        <input type="checkbox" value="NCMHLAB0070" id="&quot;NCMHLAB0070&quot;" name="lab_req">
                                        <label class="thin-label" for="NCMHLAB0070">Gloucose</label>
                                    </div>
                                    <div class="pl-4">
                                        <input type="checkbox" value="NCMHLAB0071" id="&quot;NCMHLAB0071&quot;" name="lab_req">
                                        <label class="thin-label" for="NCMHLAB0071">Protein</label>
                                    </div>
                                    <div class="pl-4">
                                        <input type="checkbox" value="NCMHLAB0072" id="&quot;NCMHLAB0072&quot;" name="lab_req">
                                        <label class="thin-label" for="NCMHLAB0072">ECC-Creatine Clearance</label>
                                    </div>
                                </div>

                                <!-- DRUG TESTING -->
                                <label>DRUG TESTING</label>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0073" id="NCMHLAB0073" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0073">
                                        Metamphetamine/ Shabu
                                    </label>
                                </div>
                                <div class="">
                                    <input type="checkbox" value="NCMHLAB0074" id="NCMHLAB0074" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0074">
                                        THC/ Marijuana
                                    </label>
                                </div>

                            </div>

                        </div>

                        <div class="form-group row">

                            <div class="col-sm-12">
                                <!-- Package -->
                                <label>OPD PACKAGES</label>
                                <div class="">
                                    <input class="lab_req_pack" type="checkbox" data-group="NCMHLAB0029,NCMHLAB0028,NCMHLAB0030" value="NCMHLAB0075" id="NCMHLAB0075" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0075">
                                        OPD 1/ Kidney Profile [Creat, BUN,BUA]
                                    </label>
                                </div>
                                <div class="">
                                    <input class="lab_req_pack" type="checkbox" data-group="NCMHLAB0031,NCMHLAB0032,NCMHLAB0033,NCMHLAB0034" value="NCMHLAB0076" id="NCMHLAB0076" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0076">
                                        OPD 2/ Lipid Profile [Choles, Trigly, HDL, LDL]
                                    </label>
                                </div>
                                <div class="">
                                    <input class="lab_req_pack" type="checkbox" data-group="NCMHLAB0035,NCMHLAB0036,NCMHLAB0037,NCMHLAB0038,NCMHLAB0039,NCMHLAB0040,NCMHLAB0041,NCMHLAB0042" value="NCMHLAB0077" id="NCMHLAB0077" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0077">
                                        OPD 3/ Liver Profile [SGPT, SGOT, TP &amp; A/G, Total Bili,B1&amp;B2, Alk. Phos]
                                    </label>
                                </div>
                                <div class="">
                                    <input class="lab_req_pack" type="checkbox" data-group="NCMHLAB0029,NCMHLAB0028,NCMHLAB0030,NCMHLAB0026" value="NCMHLAB0078" id="NCMHLAB0078" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0078">
                                        OPD 4 [FBS + Kidney Profile]
                                    </label>
                                </div>
                                <div class="">
                                    <input class="lab_req_pack" type="checkbox" data-group="NCMHLAB0031,NCMHLAB0032,NCMHLAB0033,NCMHLAB0034,NCMHLAB0026" value="NCMHLAB0079" id="NCMHLAB0079" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0079">
                                        OPD 5 [FBS + Lipid Profile]
                                    </label>
                                </div>
                                <div class="">
                                    <input class="lab_req_pack" type="checkbox" data-group="NCMHLAB0029,NCMHLAB0028,NCMHLAB0030,NCMHLAB0031,NCMHLAB0032,NCMHLAB0033,NCMHLAB0034,NCMHLAB0035,NCMHLAB0036,NCMHLAB0037,NCMHLAB0038,NCMHLAB0039,NCMHLAB0040,NCMHLAB0041,NCMHLAB0042,NCMHLAB0026" value="NCMHLAB0080" id="NCMHLAB0080" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0080">
                                        OPD 5 [FBS + kidney, Lipid &amp; Liver Profile]
                                    </label>
                                </div>
                                <div class="">
                                    <input class="lab_req_pack" type="checkbox" data-group="NCMHLAB0001,NCMHLAB0055,NCMHLAB0056" value="NCMHLAB0081" id="NCMHLAB0081" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0081">
                                        OPD 7 [CBC + Urinalysis + Fecalysis]
                                    </label>
                                </div>
                                <div class="">
                                    <input class="lab_req_pack" type="checkbox" data-group="NCMHLAB0001,NCMHLAB0002,NCMHLAB0028,NCMHLAB0029,NCMHLAB0050,NCMHLAB0046,NCMHLAB0047,NCMHLAB0041,NCMHLAB0051,NCMHLAB0036,NCMHLAB0030,NCMHLAB0013,NCMHLAB0017,NCMHLAB0018,NCMHLAB0015,NCMHLAB0014,NCMHLAB0022" value="NCMHLAB0082" id="NCMHLAB0082" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0082">
                                        HD Package 1 (CBC with Platelet, BUN, Creatinine, Total Ca, Na, K, Albumin,Phosphorous (Inorganic Phosphate), SGPT/ALT, Uric Acid, HBsAg, Anti-HBS, Anti-HCV, RPR/TPPA(Syphilis), HIV (Screening) Blood Typing (gel Technique)
                                    </label>
                                </div>
                                <div class="">
                                    <input class="lab_req_pack" type="checkbox" data-group="NCMHLAB0001,NCMHLAB0029,NCMHLAB0046,NCMHLAB0047,NCMHLAB0028,NCMHLAB0041,NCMHLAB0050,NCMHLAB0051,NCMHLAB0036,NCMHLAB0055" value="NCMHLAB0083" id="NCMHLAB0083" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0083">
                                        HD Package 2 (CBC, Creatinine, Na, K, BUN (Pre-Dialysis), BUN (Post-Dialysis) Albumin, Total Ca, Phosphorous (Inorganic Phosphate), SGPT/ALT, Uric Acid)
                                    </label>
                                </div>
                                <div class="">
                                    <input class="lab_req_pack" type="checkbox" data-group="NCMHLAB0013,NCMHLAB0017,NCMHLAB0018" value="NCMHLAB0084" id="NCMHLAB0084" name="lab_req">
                                    <label class="thin-label" for="NCMHLAB0084">
                                        HD Package 3 (HBsAg, Anti-HBs, Anti-HCV)
                                    </label>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="tab-pane fade m-3" id="nav-rad-proc" role="tabpanel" aria-labelledby="nav-rad-proc-tab">

                        <!-- Radiologic X-ray exam -->
                        <div>
                            <label>X-RAY EXAMINATIONS</label>
                            <div class="row">
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0085" id="NCMHLAB0085" name="rad_req"><label class="thin-label" for="NCMHLAB0085">Abdomen (Supine/Upright)</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0086" id="NCMHLAB0086" name="rad_req"><label class="thin-label" for="NCMHLAB0086">Abdomen (Supine Cross-Table Lateral)</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0087" id="NCMHLAB0087" name="rad_req"><label class="thin-label" for="NCMHLAB0087">Ankle AP/L</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0088" id="NCMHLAB0088" name="rad_req"><label class="thin-label" for="NCMHLAB0088">Arm AP/L</label></div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0089" id="NCMHLAB0089" name="rad_req"><label class="thin-label" for="NCMHLAB0089">Cervical AP/L</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0090" id="NCMHLAB0090" name="rad_req"><label class="thin-label" for="NCMHLAB0090">Chest PA (Adult)</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0091" id="NCMHLAB0091" name="rad_req"><label class="thin-label" for="NCMHLAB0091">Chest AP/L (Pedia)</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0092" id="NCMHLAB0092" name="rad_req"><label class="thin-label" for="NCMHLAB0092">Chest (Supine)</label></div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0093" id="NCMHLAB0093" name="rad_req"><label class="thin-label" for="NCMHLAB0093">Chest (Apicolordotic View)</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0094" id="NCMHLAB0094" name="rad_req"><label class="thin-label" for="NCMHLAB0094">Clavicle AP</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0095" id="NCMHLAB0095" name="rad_req"><label class="thin-label" for="NCMHLAB0095">Elbow AP/L</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0096" id="NCMHLAB0096" name="rad_req"><label class="thin-label" for="NCMHLAB0096">Foot AP/L,O</label></div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0097" id="NCMHLAB0097" name="rad_req"><label class="thin-label" for="NCMHLAB0097">Forearm AP/L</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0098" id="NCMHLAB0098" name="rad_req"><label class="thin-label" for="NCMHLAB0098">Hand PA/L,O</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0099" id="NCMHLAB0099" name="rad_req"><label class="thin-label" for="NCMHLAB0099">Hips AP</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0100" id="NCMHLAB0100" name="rad_req"><label class="thin-label" for="NCMHLAB0100">Knee AP/L</label></div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0101" id="NCMHLAB0101" name="rad_req"><label class="thin-label" for="NCMHLAB0101">Leg APL/L</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0102" id="NCMHLAB0102" name="rad_req"><label class="thin-label" for="NCMHLAB0102">Lumbosacral AP/L</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0103" id="NCMHLAB0103" name="rad_req"><label class="thin-label" for="NCMHLAB0103">Mandible AP/O</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0104" id="NCMHLAB0104" name="rad_req"><label class="thin-label" for="NCMHLAB0104">Mastoid Series</label></div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0105" id="NCMHLAB0105" name="rad_req"><label class="thin-label" for="NCMHLAB0105">Nasal Bone (STL)</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0106" id="NCMHLAB0106" name="rad_req"><label class="thin-label" for="NCMHLAB0106">Paranasal Sinuses</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0107" id="NCMHLAB0107" name="rad_req"><label class="thin-label" for="NCMHLAB0107">Plain KUB</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0108" id="NCMHLAB0108" name="rad_req"><label class="thin-label" for="NCMHLAB0108">Pelvis AP</label></div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0109" id="NCMHLAB0109" name="rad_req"><label class="thin-label" for="NCMHLAB0109">Scoilosis Series</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0110" id="NCMHLAB0110" name="rad_req"><label class="thin-label" for="NCMHLAB0110">Shoulder AP</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0111" id="NCMHLAB0111" name="rad_req"><label class="thin-label" for="NCMHLAB0111">Skeletal Survey</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0112" id="NCMHLAB0112" name="rad_req"><label class="thin-label" for="NCMHLAB0112">Skull PA/L</label></div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0113" id="NCMHLAB0113" name="rad_req"><label class="thin-label" for="NCMHLAB0113">Skull Series (PA, Laterals, Towne's)</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0114" id="NCMHLAB0114" name="rad_req"><label class="thin-label" for="NCMHLAB0114">TMJ (open/Close Mouth View)</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0115" id="NCMHLAB0115" name="rad_req"><label class="thin-label" for="NCMHLAB0115">Thigh AP/L</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0116" id="NCMHLAB0116" name="rad_req"><label class="thin-label" for="NCMHLAB0116">Thoracic Cage PA</label></div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0117" id="NCMHLAB0117" name="rad_req"><label class="thin-label" for="NCMHLAB0117">Thoracic Spine AP/L</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0118" id="NCMHLAB0118" name="rad_req"><label class="thin-label" for="NCMHLAB0118">Thiracolumbar AP/L</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0119" id="NCMHLAB0119" name="rad_req"><label class="thin-label" for="NCMHLAB0119">Wrist PA/L</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0120" id="NCMHLAB0120" name="rad_req"><label class="thin-label" for="NCMHLAB0120">Zygoma Submentovertex (SMV)</label></div>
                            </div>
                            <div class="row">
                                <div class="col-md-5"><input type="checkbox" class="with_others" value="NCMHLAB0121" id="NCMHLAB0121" name="rad_req"><label class="thin-label" for="NCMHLAB0121">Others</label><input type="text" placeholder="Others - please specify" class="form-control d-none" id="others_NCMHLAB0121" name="others_NCMHLAB0121"></div>
                            </div>
                        </div>

                        <!-- Radiologic X-ray special procedure -->
                        <div class="mt-3">
                            <label>X-RAY SPECIAL PROCEDURE</label>
                            <div class="row">
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0122" id="NCMHLAB0122" name="rad_req"><label class="thin-label" for="NCMHLAB0122">Barium Enema</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0123" id="NCMHLAB0123" name="rad_req"><label class="thin-label" for="NCMHLAB0123">Cystourethrogram</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0124" id="NCMHLAB0124" name="rad_req"><label class="thin-label" for="NCMHLAB0124">Distal Colonogram</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0125" id="NCMHLAB0125" name="rad_req"><label class="thin-label" for="NCMHLAB0125">Esophagogram</label></div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0126" id="NCMHLAB0126" name="rad_req"><label class="thin-label" for="NCMHLAB0126">Intraop Choloangiogram</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0127" id="NCMHLAB0127" name="rad_req"><label class="thin-label" for="NCMHLAB0127">Small Bowel Series</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0128" id="NCMHLAB0128" name="rad_req"><label class="thin-label" for="NCMHLAB0128">T-Tube Cholangiogram</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0129" id="NCMHLAB0129" name="rad_req"><label class="thin-label" for="NCMHLAB0129">Upper GI Series</label></div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0130" id="NCMHLAB0130" name="rad_req"><label class="thin-label" for="NCMHLAB0130">Intravenous Pyelography (IVP)</label></div>
                                <div class="col-md-5"><input type="checkbox" class="with_others" value="NCMHLAB0131" id="NCMHLAB0131" name="rad_req"><label class="thin-label" for="NCMHLAB0131">Others</label><input type="text" placeholder="Others - please specify" class="form-control d-none" id="others_NCMHLAB0131" name="others_NCMHLAB0131"></div>
                            </div>
                        </div>

                        <!-- Radiologic Ultrasound Examinations -->
                        <div class="mt-3">
                            <label>ULTRASOUND EXAMINATIONS</label>
                            <div class="row">
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0132" id="NCMHLAB0132" name="rad_req"><label class="thin-label" for="NCMHLAB0132">Biophysical Scoring (BPS)</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0133" id="NCMHLAB0133" name="rad_req"><label class="thin-label" for="NCMHLAB0133">Breast</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0134" id="NCMHLAB0134" name="rad_req"><label class="thin-label" for="NCMHLAB0134">Chest</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0135" id="NCMHLAB0135" name="rad_req"><label class="thin-label" for="NCMHLAB0135">Cranial</label></div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0136" id="NCMHLAB0136" name="rad_req"><label class="thin-label" for="NCMHLAB0136">Upper Abdomen</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0137" id="NCMHLAB0137" name="rad_req"><label class="thin-label" for="NCMHLAB0137">Hepatobliary Tree</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0138" id="NCMHLAB0138" name="rad_req"><label class="thin-label" for="NCMHLAB0138">Inguino-Scrotal</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0139" id="NCMHLAB0139" name="rad_req"><label class="thin-label" for="NCMHLAB0139">KUB</label></div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0140" id="NCMHLAB0140" name="rad_req"><label class="thin-label" for="NCMHLAB0140">KUB with Prostate</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0141" id="NCMHLAB0141" name="rad_req"><label class="thin-label" for="NCMHLAB0141">Pelvic (Transabdominal)</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0142" id="NCMHLAB0142" name="rad_req"><label class="thin-label" for="NCMHLAB0142">Pelvic (Transvaginal)</label></div>
                                <div class="col-md-3"><input type="checkbox" class="with_others" value="NCMHLAB0143" id="NCMHLAB0143" name="rad_req"><label class="thin-label" for="NCMHLAB0143">Soft Tissue</label><input type="text" class="form-control d-none" id="specify_NCMHLAB0143" name="specify_NCMHLAB0143"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0144" id="NCMHLAB0144" name="rad_req"><label class="thin-label" for="NCMHLAB0144">Thyroid</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0145" id="NCMHLAB0145" name="rad_req"><label class="thin-label" for="NCMHLAB0145">Lower Abdomen</label></div>
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0146" id="NCMHLAB0146" name="rad_req"><label class="thin-label" for="NCMHLAB0146">Whole Abdomen</label></div>
                                <div class="col-md-3"><input type="checkbox" class="with_others" value="NCMHLAB0147" id="NCMHLAB0147" name="rad_req"><label class="thin-label" for="NCMHLAB0147">Single Organ Examination</label><input type="text" class="form-control d-none" id="specify_NCMHLAB0147" name="specify_NCMHLAB0147"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"><input type="checkbox" class="" value="NCMHLAB0148" id="NCMHLAB0148" name="rad_req"><label class="thin-label" for="NCMHLAB0148">Focused Assessment Sonography Trauma</label></div>
                                <div class="col-md-5"><input type="checkbox" class="with_others" value="NCMHLAB0149" id="NCMHLAB0149" name="rad_req"><label class="thin-label" for="NCMHLAB0149">Others</label><input type="text" placeholder="Others - please specify" class="form-control d-none" id="others_NCMHLAB0149" name="others_NCMHLAB0149"></div>
                            </div>
                        </div>

                        <div class="mt-3">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>OTHERS</label>
                                    <input type="text" name="" id="" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="modal-footer justify-content-between p-1">
                <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal" data-toggle="modal" href="#add-doctor-order">Close</button>
                <button type="button" class="btn btn-sm btn-primary" id="submit-diagproc-btn" data-dismiss="modal" data-toggle="modal" href="#add-doctor-order">Submit</button>
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- Order Summary -->
<div class="modal fade" id="order-summary-modal" data-backdrop="static">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Order Summary</h5>
                <button type="button" class="close" data-dismiss="modal" data-toggle="modal" href="#add-doctor-order" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12">
                        <label for="" class="text-left">General Order Summary:</label>
                        <table id="genOrderSummaryTable" class="table table-striped table-bordered">
                            <thead>
                                <th>Date/Time Ordered</th>
                                <th>Order</th>
                                <th>Priority</th>
                                <th>Remarks</th>
                                <th>Actions</th>
                            </thead>
                            <tfoot>
                                <th>Date/Time Ordered</th>
                                <th>Order</th>
                                <th>Priority</th>
                                <th>Remarks</th>
                                <th>Actions</th>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-12">
                        <label for="" class="text-left">Diagnostic Procedure Order Summary</label>

                        <table id="diagProcSummaryTable" class="table table-striped table-bordered">
                            <thead>
                                <th>Date/Time Ordered</th>
                                <th>Diagnostic Procedure</th>
                                <th>Priority</th>
                                <th>Remarks</th>
                                <th>Actions</th>
                            </thead>
                            <tfoot>
                                <th>Date/Time Ordered</th>
                                <th>Diagnostic Procedure</th>
                                <th>Priority</th>
                                <th>Remarks</th>
                                <th>Actions</th>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-12">
                        <label for="" class="text-left">Medication Order Summary:</label>
                        <table id="medSummaryTable" class="table table-striped table-bordered">
                            <thead>
                                <th>Date/Time Ordered</th>
                                <th>Medication Details</th>
                                <th>Route</th>
                                <th>Frequency</th>
                                <th>Duration</th>
                                <th>Priority</th>
                                <th>Actions</th>
                            </thead>
                            <tfoot>
                                <th>Date/Time Ordered</th>
                                <th>Medication Details</th>
                                <th>Route</th>
                                <th>Frequency</th>
                                <th>Duration</th>
                                <th>Priority</th>
                                <th>Actions</th>
                            </tfoot>
                        </table>
                    </div>
                </div>


            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal" data-toggle="modal" href="#add-doctor-order">Cancel</button>
                <button type="button" class="btn btn-sm btn-success" data-dismiss="modal" id="finalize-btn">Finalize</button>
            </div>
        </div>
    </div>
</div>
<!-- End of Order Summary -->