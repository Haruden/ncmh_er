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

<!-- ER Modal -->
<div class="modal fade" id="er-notes-add" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">ER Notes</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

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
                        <li class="dropdown-item"><a href="#">Add Treatment Plan</a></li>
                        <li class="dropdown-item"><a href="#">Add Course in the Ward</a></li>
                        <li class="dropdown-item"><a data-toggle="modal" href="#mse-add">Add Mental Status Exam</a></li>
                        <li class="dropdown-item"><a data-toggle="modal" href="#pe-add">Add Physical Exam</a></li>
                        <li class="dropdown-item"><a data-toggle="modal" href="#neuro-add">Add Neurological Exam</a></li>
                    </ul>
                </div>

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" data-dismiss="modal">Save</button>
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
                            <input type="text"  id="addVitalsDatePicker" data-target="#addVitalsDatePicker" data-toggle="datetimepicker" class="form-control datetimepicker-input" placeholder="Date & Time">
                                <div class="input-group-prepend" data-target="#addVitalsDatePicker" data-toggle="datetimepicker">
                                    <div class="input-group-text" >
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
                                <div class = "row">
                                    <div class = "col-6 border-right rounded ">
                                        <div class="input-group mb-3">
                                            <input type="number" class="form-control">
                                        </div>
                                    </div>
                                    <div class = "col-6 ">
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

<!-- add-doctors-order -->
<div class="modal fade" id="add-doctor-order" data-backdrop="static">
    <div class="modal-dialog modal-lg">
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
                        <a style="width: 33%;" href="#nav-laboratory-test" class="nav-item nav-link text-center" id="nav-laboratory-tab" data-toggle="tab" role="tab" aria-controls="nav-laboratory-test" aria-selected="false">
                            <i class="fas fa-vial mr-2"></i>Laboratory Tests
                        </a>
                        <a style="width: 33%;" href="#nav-medication" class="nav-item nav-link text-center" id="nav-medication-tab" data-toggle="tab" role="tab" aria-controls="nav-medication" aria-selected="false">
                            <i class="fas fa-briefcase-medical mr-2"></i> Medications
                        </a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active m-3" id="nav-doctor-order" role="tabpanel" aria-labelledby="nav-doctor-order-tab">
                        <label for="" class="text-left">General Order Data Entry:</label>
                            <input type="text" name="" id="" class="form-control" style="width:100%;" placeholder="General Order Data Entry">
                            <div class="form-inline col-md-12">
                                <input type="checkbox" class="form-control" name="" id="">
                                <label for="" class="ml-1">Special Instruction</label>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="row form-inline">
                                        <div class="col-sm-9">
                                            <div class="dropdown-divider"></div>
                                        </div>
                                        <div class="col-sm-3">
                                            <button class="btn btn-success btn-block"><i class="fas fa-folder-plus mr-2"></i>Add Order</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                        <label for="diet_select" class="col-sm-12">Dietary Orders:</label>
                                <div class="col-sm-5">
                                    <select name="" id="diet_select" class="form-control  block">
                                        <option value="">Low Fat Low Salt</option>
                                        <option value="">Diet as Tolerated</option>
                                        <option value="">Hypoallergenic Diet</option>
                                        <option value="">Muslim Diet</option>
                                        <option value="">Diabetic Diet</option>
                                        <option value="others">Others</option>
                                    </select>
                                    <input type="text" name="" id="others_diet" placeholder="Please specify here..." style="display:none;" class="form-control  mt-2">
                                </div>
                                <div class="col-sm-4">
                                <input type="text" name="" id="remarks" placeholder="Remarks"  class="form-control">
                                </div>
                                <div class="col-sm-3">
                                    <button class="btn btn-success  btn-block"><i class="fas fa-folder-plus mr-2"></i>Add Diet</button>
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
                                                <select name="" id="diet_select" class="form-control  block">
                                                    <option value="">Neurology</option>
                                                    <option value="">di ko know</option>
                                                </select>
                                            </td>
                                            <td>
                                                <textarea placeholder="Your reason here..." class="form-control" name="" id="" rows="2"></textarea>
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
                                    <button class="btn btn-success btn-block"><i class="fas fa-folder-plus mr-2"></i>Add Refferal</button>
                                </div>
                            </div>

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
                                                <td >1/10/2021 | 1:51PM</td>
                                                <td class="col-sm-6">All added orders from different order types will be placed in this summary section.</td>
                                                <td >
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
                                    <button class="btn btn-primary float-right tabNext">Go to Laboratory Tests</button>
                                </div>
                            </div>
                               
                    </div>

                    <div class="tab-pane fade m-3" id="nav-laboratory-test" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="row form-inline text-center mb-2">
                            <div class="col-sm-12">
                                <a href="<?php echo base_url();?>assets/pdf/lab.pdf" target="_blank">
                                    <button class="btn btn-success">
                                        <i class="fas fa-folder-plus mr-2"></i>Add Laboratory Test
                                    </button>
                                </a>
                            </div>
                        </div>
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

                       
                        <div class="row">
                            <div class="col-sm-6">
                                <button class="btn btn-primary float-left tabPrevious">Go to General Orders</button>
                            </div>
                            <div class="col-sm-6">
                                <button class="btn btn-primary float-right tabNext">Go to Medication Order</button>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade m-3" id="nav-medication" role="tabpanel" aria-labelledby="nav-medication-tab">

                    <!-- <div class="col-sm-12">
                        <div class="row form-inline">
                            <div class="col-sm-5">
                                <div class="dropdown-divider"></div>
                            </div>
                            <div class="col-sm-2 text-center mb-1">
                                <h5>Medication</h5>
                            </div>
                            <div class="col-sm-5">
                                <div class="dropdown-divider"></div>
                            </div>
                        </div>
                    </div> -->

                    <table class="table table-striped table-bordered" style="width:100%;">
                        <thead>
                            <th>Name of Medication</th>
                            <th>Preparation</th>
                            <th>Dosage</th>
                            <th>Route</th>
                            <th>Frequency</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td><textarea class="form-control"></textarea></td>
                                <td><select name="" id="" class="form-control">
                                        <option> Tablet </option>
                                        <option>Orodispersible tab</option>
                                        <option>Ampule</option>
                                        <option>Vial</option>
                                        <option>Cream</option>
                                        <option>Ointment</option>
                                        <option>Bottle</option>
                                        <option>Suppository</option>
                                        <option> Suspension</option>
                                        <option>Syrup</option>
                                        <option>Solution</option>
                                        <option>Lozenges</option>
                                        <option>Spray</option>
                                        <option>Lotion</option>
                                        <option>Capsule</option>
                                        <option> Gel</option>
                                        <option> Powder</option>
                                        <option> Nebule</option>
                                        <option> Inhaler</option>
                                        <option> Emulsion</option>
                                        <option> Shampoo</option>
                                        <option> Eye drop</option>
                                        <option> Ear drop</option>
                                        <option> Eye ointment</option>
                                    </select></td>
                                <td><textarea class="form-control"></textarea></td>
                                <td><textarea class="form-control"></textarea></td>
                                <td><select name="" id="" class="form-control">
                                        <option> 1</option>
                                        <option> 2</option>
                                        <option> 3</option></select></td>
                                <!-- <td> <button class="rounded btn btn-success"><i class="fas fa-plus"></i></button></td> -->
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="form-inline">
                                        <label>Duration: </label>
                                        <input type="radio" id="durationNum" class="form-control ml-2 mr-1" name="Duration" onclick="change(this)" > Number
                                        <input type="radio" id="durationRange" class="form-control ml-2 mr-1" name="Duration" onclick="change(this)" > Range
                                    </div>
                                </td>

                                <td colspan="3">
                                    <div id="durNumDiv" class="form-inline d-none">
                                        <input type="number" class ="form-control mx-1" style="width: 40%">
                                        <label>Days</label>
                                    </div>
                                    <div id="durRangeDiv" class="form-inline">
                                        From: <input type="date" class="form-control mx-1" style="width:40%" />
                                        To: <input type="date" class="form-control ml-1" style="width:40%" />
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
                            <button class="btn btn-success btn-block"><i class="fas fa-folder-plus mr-2"></i>Add Medication</button>
                        </div>
                    </div>

                    <h5>Medication Order Summary</h5>
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
                    <button class="btn btn-primary m-1 tabPrevious">Go to Laboratory Test</button>


                    <!-- <div class="alert alert-info">Consider <a href="https://trello.com/c/SN921sjM/101-preparation-autosuggest">https://trello.com/c/SN921sjM/101-preparation-autosuggest for table above</a></div> -->
                    </div>

                </div>
            </div> <!-- modal body -->
            <div class="modal-footer justify-content-between">
                <button type="submit" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#order-summary-modal" data-dismiss="modal">Submit</button>
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
                                    <td >1/10/2021 | 1:51PM</td>
                                    <td class="col-sm-6">All added orders from different order types will be placed in this summary section.</td>
                                    <td >
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

<!-- Large Modal -->
<div class="modal fade" id="mse-add" data-backdrop="static">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add MENTAL STATUS EXAMINATION</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <!-- <h3>MENTAL STATUS EXAMINATION &nbsp;  -->
                    <button class="btn btn-default">Import Previous Data</button></h3>

                    <hr>

                    <div class="row">
                        <div class="col-md-2 d-flex justify-content-end">
                            <label>General Appearance</label>
                        </div>
                        <div class="col-md-10">
                            <div class="card pl-2">
                                <div class="form-inline">
                                    <label for="" class="mr-3">Weight:</label>
                                    <input type="radio" name="weight" class="form-control mr-1"> <span class="mr-3"> Obese </span>
                                    <input type="radio" name="weight" class="form-control mr-1"> <span class="mr-3"> Underweight </span>
                                    <input type="radio" name="weight" class="form-control mr-1"> <span class="mr-3"> Emaciated </span>
                                    <input type="radio" name="weight" class="form-control mr-1"> <span class="mr-3"> Normal </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Grooming:</label>
                                    <input type="radio" name="grooming" class="form-control mr-1"> <span class="mr-3"> Well-kempt </span>
                                    <input type="radio" name="grooming" class="form-control mr-1"> <span class="mr-3"> Kempt </span>
                                    <input type="radio" name="grooming" class="form-control mr-1"> <span class="mr-3"> Poorly-kempt </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Other Findings:</label>
                                    <textarea class="form-control mb-2" style="width:85%"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2 d-flex justify-content-end">
                            <label>Behavior/Motor</label>
                        </div>
                        <div class="col-md-10">
                            <div class="card pl-2">
                                <div class="form-inline">
                                    <input type="radio" name="behavior" class="form-control mr-1"> <span class="mr-3"> Repetition </span>
                                    <input type="radio" name="behavior" class="form-control mr-1"> <span class="mr-3"> Overactivity </span>
                                    <input type="radio" name="behavior" class="form-control mr-1"> <span class="mr-3"> Agitated </span>
                                    <input type="radio" name="behavior" class="form-control mr-1"> <span class="mr-3"> Catatonia </span>
                                    <input type="radio" name="behavior" class="form-control mr-1"> <span class="mr-3"> Normal </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Other Findings:</label>
                                    <textarea class="form-control mb-2" style="width:85%"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2 d-flex justify-content-end">
                            <label>Attitude</label>
                        </div>
                        <div class="col-md-10">
                            <div class="card pl-2">
                                <div class="form-inline">
                                    <input type="radio" name="attitude" class="form-control mr-1"> <span class="mr-3"> Cooperative </span>
                                    <input type="radio" name="attitude" class="form-control mr-1"> <span class="mr-3"> Attentive </span>
                                    <input type="radio" name="attitude" class="form-control mr-1"> <span class="mr-3"> Evasive </span>
                                    <input type="radio" name="attitude" class="form-control mr-1"> <span class="mr-3"> Hostile </span>
                                    <input type="radio" name="attitude" class="form-control mr-1"> <span class="mr-3"> Normal </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Other Findings:</label>
                                    <textarea class="form-control mb-2" style="width:85%"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2 d-flex justify-content-end">
                            <label>Mood</label>
                        </div>
                        <div class="col-md-10">
                            <div class="card pl-2">
                                <div class="form-inline">
                                    <input type="radio" name="mood" class="form-control mr-1"> <span class="mr-3"> Euphoric </span>
                                    <input type="radio" name="mood" class="form-control mr-1"> <span class="mr-3"> Dysphoric </span>
                                    <input type="radio" name="mood" class="form-control mr-1"> <span class="mr-3"> Expansive </span>
                                    <input type="radio" name="mood" class="form-control mr-1"> <span class="mr-3"> Depressed </span>
                                    <input type="radio" name="mood" class="form-control mr-1"> <span class="mr-3"> Euthymic </span>
                                    <input type="radio" name="mood" class="form-control mr-1"> <span class="mr-3"> Labile </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Other Findings:</label>
                                    <textarea class="form-control mb-2" style="width:85%"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2 d-flex justify-content-end">
                            <label>Affect</label>
                        </div>
                        <div class="col-md-10">
                            <div class="card pl-2">
                                <div class="form-inline">
                                    <label for="" class="mr-3">Quality/Tone:</label>
                                    <input type="radio" name="quality" class="form-control mr-1"> <span class="mr-3"> Euthymic </span>
                                    <input type="radio" name="quality" class="form-control mr-1"> <span class="mr-3"> Happy </span>
                                    <input type="radio" name="quality" class="form-control mr-1"> <span class="mr-3"> Dysphoric </span>
                                    <input type="radio" name="quality" class="form-control mr-1"> <span class="mr-3"> Irritable </span>
                                    <input type="radio" name="quality" class="form-control mr-1"> <span class="mr-3"> Expansive </span>
                                    <input type="radio" name="quality" class="form-control mr-1"> <span class="mr-3"> Labile </span>
                                    <input type="radio" name="quality" class="form-control mr-1"> <span class="mr-3"> Depressed </span>
                                    <input type="radio" name="quality" class="form-control mr-1"> <span class="mr-3"> Agitated </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Quantity:</label>
                                    <input type="radio" name="quantity" class="form-control mr-1"> <span class="mr-3"> Mild </span>
                                    <input type="radio" name="quantity" class="form-control mr-1"> <span class="mr-3"> Moderate </span>
                                    <input type="radio" name="quantity" class="form-control mr-1"> <span class="mr-3"> Severe </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Range:</label>
                                    <input type="radio" name="range" class="form-control mr-1"> <span class="mr-3"> Normal </span>
                                    <input type="radio" name="range" class="form-control mr-1"> <span class="mr-3"> Restricted </span>
                                    <input type="radio" name="range" class="form-control mr-1"> <span class="mr-3"> Flat </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Appropriateness:</label>
                                    <input type="radio" name="appropriateness" class="form-control mr-1"> <span class="mr-3"> Appropriate </span>
                                    <input type="radio" name="appropriateness" class="form-control mr-1"> <span class="mr-3"> Inappropriate </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Congruence:</label>
                                    <input type="radio" name="congruence" class="form-control mr-1"> <span class="mr-3"> Congruent </span>
                                    <input type="radio" name="congruence" class="form-control mr-1"> <span class="mr-3"> Incongruent </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Other Findings:</label>
                                    <textarea class="form-control mb-2" style="width:85%"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2 d-flex justify-content-end">
                            <label>Speech</label>
                        </div>
                        <div class="col-md-10">
                            <div class="card pl-2">
                                <div class="form-inline">
                                    <label for="" class="mr-3">Fluency:</label>
                                    <input type="radio" name="fluency" class="form-control mr-1"> <span class="mr-3"> Normal </span>
                                    <input type="radio" name="fluency" class="form-control mr-1"> <span class="mr-3"> Paraphasia </span>
                                    <input type="radio" name="fluency" class="form-control mr-1"> <span class="mr-3"> Slurred </span>
                                    <input type="radio" name="fluency" class="form-control mr-1"> <span class="mr-3"> Stuttering </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Amount:</label>
                                    <input type="radio" name="amount" class="form-control mr-1"> <span class="mr-3"> Normoproductive </span>
                                    <input type="radio" name="amount" class="form-control mr-1"> <span class="mr-3"> Hyperproductive </span>
                                    <input type="radio" name="amount" class="form-control mr-1"> <span class="mr-3"> Hypoproductive </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Rate:</label>
                                    <input type="radio" name="rate" class="form-control mr-1"> <span class="mr-3"> Normal </span>
                                    <input type="radio" name="rate" class="form-control mr-1"> <span class="mr-3"> Slowed </span>
                                    <input type="radio" name="rate" class="form-control mr-1"> <span class="mr-3"> Rapid </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Tone:</label>
                                    <input type="radio" name="tone" class="form-control mr-1"> <span class="mr-3"> Normal </span>
                                    <input type="radio" name="tone" class="form-control mr-1"> <span class="mr-3"> Childlike </span>
                                    <input type="radio" name="tone" class="form-control mr-1"> <span class="mr-3"> Anxious </span>
                                    <input type="radio" name="tone" class="form-control mr-1"> <span class="mr-3"> Irritable </span>
                                    <input type="radio" name="tone" class="form-control mr-1"> <span class="mr-3"> Timid </span>
                                    <input type="radio" name="tone" class="form-control mr-1"> <span class="mr-3"> Dysphoric </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Volume:</label>
                                    <input type="radio" name="volume" class="form-control mr-1"> <span class="mr-3"> Audible </span>
                                    <input type="radio" name="volume" class="form-control mr-1"> <span class="mr-3"> Soft </span>
                                    <input type="radio" name="volume" class="form-control mr-1"> <span class="mr-3"> Loud </span>
                                    <input type="radio" name="volume" class="form-control mr-1"> <span class="mr-3"> Mumbled </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Other Findings:</label>
                                    <textarea class="form-control mb-2" style="width:85%"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2 d-flex justify-content-end">
                            <label>Thought Process</label>
                        </div>
                        <div class="col-md-10">
                            <div class="card pl-2">
                                <div class="form-inline">
                                    <input type="radio" name="thought_process" class="form-control mr-1"> <span class="mr-3"> Goal-directed </span>
                                    <input type="radio" name="thought_process" class="form-control mr-1"> <span class="mr-3"> Flight of Ideas </span>
                                    <input type="radio" name="thought_process" class="form-control mr-1"> <span class="mr-3"> Circumstantiality </span>
                                    <input type="radio" name="thought_process" class="form-control mr-1"> <span class="mr-3"> Looseness of Association </span>
                                </div>
                                <div class="form-inline">
                                    <input type="radio" name="thought_process" class="form-control mr-1"> <span class="mr-3"> Tangentiality </span>
                                    <input type="radio" name="thought_process" class="form-control mr-1"> <span class="mr-3"> Thought Blocking </span>
                                    <input type="radio" name="thought_process" class="form-control mr-1"> <span class="mr-3"> Neologism </span>
                                    <input type="radio" name="thought_process" class="form-control mr-1"> <span class="mr-3"> Perseveration </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Other Findings:</label>
                                    <textarea class="form-control mb-2" style="width:85%"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2 d-flex justify-content-end">
                            <label>Thought Content</label>
                        </div>
                        <div class="col-md-10">
                            <div class="card pl-2 pt-2">

                                <div class="form-inline mb-2">
                                    <div class="form-inline col-md-2">
                                        <input type="checkbox" class="form-control mr-1" name="" id="">
                                        <label for="" class="mr-1">Obsession:</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="text" name="" id="" class="form-control" style="width:100%;">
                                    </div>
                                </div>

                                <div class="form-inline mb-2">
                                    <div class="form-inline col-md-2">
                                        <input type="checkbox" class="form-control mr-1" name="" id="">
                                        <label for="" class="mr-1">Preoccupations:</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="text" name="" id="" class="form-control" style="width:100%;">
                                    </div>
                                </div>

                                <div class="form-inline mb-2">
                                    <div class="form-inline col-md-2">
                                        <input type="checkbox" class="form-control mr-1" name="" id="">
                                        <label for="" class="mr-1">Compulsions:</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="text" name="" id="" class="form-control" style="width:100%;">
                                    </div>
                                </div>

                                <div class="form-inline mb-2">
                                    <div class="form-inline col-md-2">
                                        <input type="checkbox" class="form-control mr-1" name="" id="">
                                        <label for="" class="mr-1">Suicidality:</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="radio" name="suicidality" class="form-control mr-1"> <span class="mr-2"> Suicide ideations </span>
                                        <input type="radio" name="suicidality" class="form-control mr-1"> <span class="mr-2"> Suicide behavior </span>
                                        <input type="text" name="suicidality" class="form-control mr-1" style="width:60%">
                                    </div>
                                </div>

                                <div class="form-inline mb-2">
                                    <div class="form-inline col-md-2">
                                        <input type="checkbox" class="form-control mr-1" name="" id="">
                                        <label for="" class="mr-1">Homocidality:</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="text" name="" id="" class="form-control" style="width:100%;">
                                    </div>
                                </div>

                                <div class="form-inline mb-2">
                                    <div class="form-inline col-md-2">
                                        <input type="checkbox" class="form-control mr-1" name="" id="">
                                        <label for="" class="mr-1">Delusions:</label>
                                    </div>
                                    <div class="col-md-10">
                                                <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-2"> Bizzare </span>
                                                <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-2"> Non-bizzare </span>
                                                <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-2"> Mood-congruent </span>
                                                <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-2"> Mood-incongruent </span>
                                                <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-2"> Grandiose </span>
                                                <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-2"> Persecutory </span>
                                                </br>
                                                <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-2"> Erotomania </span>
                                                <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-2"> Paranoid </span>
                                                <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-2"> Jealousy </span>
                                                <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-2"> Somatic </span>
                                                <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-2"> Referential </span>
                                                <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-2"> Nihilistic </span>
                                                </br>
                                                <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-2"> Thought Withdrawal </span>
                                                <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-2"> Thought Broadcasting </span>
                                                <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-2"> Thought Insertion </span>
                                                <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-2"> Thought Control </span>
                                    </div>
                                </div>

                                <div class="form-inline">
                                    <div class="col-md-2">
                                    </div>
                                    <div class="col-md-10 row m-0">
                                            <div class="form-inline col-md-1 m-0 p-0">
                                                <label>Details:</label>
                                            </div>
                                            <div class="col-md-11 m-0 p-0">
                                                <textarea class="form-control mb-2" style="width:100%"></textarea>
                                            </div>
                                    </div>
                                </div>

                                

                                <div class="form-inline mb-2">
                                    <div class="form-inline col-md-2">
                                        <label for="" class="mr-1">Other Findings:</label>
                                    </div>
                                    <div class="col-md-10">
                                        <textarea class="form-control mb-2" style="width:100%"></textarea>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2 d-flex justify-content-end">
                            <label>Perception</label>
                        </div>
                        <div class="col-md-10">
                            <div class="card pl-2">
                                <div class="form-inline">
                                    <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-3"> Auditory </span>
                                    <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-3"> Visual </span>
                                    <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-3"> Tactile </span>
                                    <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-3"> Gustatory </span>
                                    <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-3"> Olfactory </span>
                                    <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-3"> Derealization </span>
                                    <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-3"> Depersonalization </span>
                                </div>

                                <div class="form-inline mb-2">
                                    <div class="form-inline col-md-2">
                                        <label for="" class="mr-1">Notes:</label>
                                    </div>
                                    <div class="col-md-10">
                                        <textarea class="form-control mb-2" style="width:100%"></textarea>
                                    </div>
                                </div>

                                <div class="form-inline mb-2">
                                    <div class="form-inline col-md-2">
                                        <label for="" class="mr-1">Other Findings:</label>
                                    </div>
                                    <div class="col-md-10">
                                        <textarea class="form-control mb-2" style="width:100%"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2 d-flex justify-content-end">
                            <label>Sensorium/Cognition</label>
                        </div>
                        <div class="col-md-10">
                            <div class="card pl-2">
                                <div class="form-inline">
                                    <label for="" class="mr-3">Consciousness:</label>
                                    <input type="radio" name="consciousness" class="form-control mr-1"> <span class="mr-3"> Awake </span>
                                    <input type="radio" name="consciousness" class="form-control mr-1"> <span class="mr-3"> Asleep </span>
                                    <input type="radio" name="consciousness" class="form-control mr-1"> <span class="mr-3"> Lethargic </span>
                                    <input type="radio" name="consciousness" class="form-control mr-1"> <span class="mr-3"> Obtunded </span>
                                    <input type="radio" name="consciousness" class="form-control mr-1"> <span class="mr-3"> Stuporous </span>
                                    <input type="radio" name="consciousness" class="form-control mr-1"> <span class="mr-3"> Coma </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Orientation:</label>
                                    <input type="checkbox" name="orientation" class="form-control mr-1"> <span class="mr-3"> Person </span>
                                    <input type="checkbox" name="orientation" class="form-control mr-1"> <span class="mr-3"> Place </span>
                                    <input type="checkbox" name="orientation" class="form-control mr-1"> <span class="mr-3"> Time </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Attention Span:</label>
                                    <input type="radio" name="attention_span" class="form-control mr-1"> <span class="mr-3"> Good </span>
                                    <input type="radio" name="attention_span" class="form-control mr-1"> <span class="mr-3"> Fair </span>
                                    <input type="radio" name="attention_span" class="form-control mr-1"> <span class="mr-3"> Poor </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Calculation:</label>
                                    <input type="radio" name="reliability" class="form-control mr-1"> <span class="mr-3"> Good </span>
                                    <input type="radio" name="reliability" class="form-control mr-1"> <span class="mr-3"> Fair </span>
                                    <input type="radio" name="reliability" class="form-control mr-1"> <span class="mr-3"> Poor </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Abstract Thinking:</label>
                                    <input type="radio" name="reliability" class="form-control mr-1"> <span class="mr-3"> Good </span>
                                    <input type="radio" name="reliability" class="form-control mr-1"> <span class="mr-3"> Fair </span>
                                    <input type="radio" name="reliability" class="form-control mr-1"> <span class="mr-3"> Poor </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Fund of Knowledge:</label>
                                    <input type="radio" name="reliability" class="form-control mr-1"> <span class="mr-3"> Good </span>
                                    <input type="radio" name="reliability" class="form-control mr-1"> <span class="mr-3"> Fair </span>
                                    <input type="radio" name="reliability" class="form-control mr-1"> <span class="mr-3"> Poor </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Memory:</label>
                                    <input type="radio" name="reliability" class="form-control mr-1"> <span class="mr-3"> Good </span>
                                    <input type="radio" name="reliability" class="form-control mr-1"> <span class="mr-3"> Fair </span>
                                    <input type="radio" name="reliability" class="form-control mr-1"> <span class="mr-3"> Poor </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Impulse:</label>
                                    <input type="radio" name="impulse" class="form-control mr-1"> <span class="mr-3"> Good </span>
                                    <input type="radio" name="impulse" class="form-control mr-1"> <span class="mr-3"> Fair </span>
                                    <input type="radio" name="impulse" class="form-control mr-1"> <span class="mr-3"> Poor </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Judgement:</label>
                                    <input type="radio" name="judgement" class="form-control mr-1"> <span class="mr-3"> Good </span>
                                    <input type="radio" name="judgement" class="form-control mr-1"> <span class="mr-3"> Fair </span>
                                    <input type="radio" name="judgement" class="form-control mr-1"> <span class="mr-3"> Poor </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Insight:</label>
                                    <input type="radio" name="insight" class="form-control mr-1"> <span class="mr-3"> Good </span>
                                    <input type="radio" name="insight" class="form-control mr-1"> <span class="mr-3"> Fair </span>
                                    <input type="radio" name="insight" class="form-control mr-1"> <span class="mr-3"> Poor </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Reliability:</label>
                                    <input type="radio" name="reliability" class="form-control mr-1"> <span class="mr-3"> Good </span>
                                    <input type="radio" name="reliability" class="form-control mr-1"> <span class="mr-3"> Fair </span>
                                    <input type="radio" name="reliability" class="form-control mr-1"> <span class="mr-3"> Poor </span>
                                </div>
                                <div class="form-inline">
                                    <label for="" class="mr-3">Other Findings:</label>
                                    <textarea class="form-control mb-2" style="width:85%"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <input type="hidden" value="submitted" name="ope_submitted" /> -->
                    <!-- <button type="submit" class="btn btn-primary float-right" name="ope_submit">Submit</button> -->
                    <!-- <button type="button" class="btn btn-danger float-right" data-dismiss="modal">Close</button> -->
                </form>

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" data-dismiss="modal">Save</button>
            </div>


        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- Large Modal -->
<div class="modal fade" id="pe-add" data-backdrop="static">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Physical Examination</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="">
                    <div class="form-group form-inline">
                        <label>General Survey:</label>
                        <select class="form-control mx-2" name="pe_general_survey">
                            <option value="">Ambulatory</option>
                            <option value="">Ambulatory with assistance</option>
                            <option value="">Wheelchair-borne</option>
                            <option value="">Stretcher-borne</option>
                        </select>
                    </div>

                    <hr>
                    <h5>Body Measurements</h5>

                    <div class="form-group form-inline">
                        <label>Height:</label>
                        <input type="number" class="form-control mx-2" id="height" style="width: 100px;" value=0>cm &emsp;

                        <label>Weight:</label>
                        <input type="number" class="form-control mx-2" id="weight" style="width: 100px;" value=0>kg &emsp;

                        <label>BMI:</label>
                        <input type="text" class="form-control mx-2" style="width: 100px;" id="bmi" readonly> &emsp;

                        <label>Abdominal Girth:</label>
                        <input type="text" class="form-control mx-2" style="width: 100px;" id="">in &emsp;
                    </div>

                    <div class="form-group form-inline">
                        <label>Level of Consciousness:</label>
                        <select name="pe_general_survey" class="form-control mx-2">
                            <option value="">Alert</option>
                            <option value="">Drowsy</option>
                            <option value="">Stuporous</option>
                            <option value="">Lethargic</option>
                        </select>
                    </div>

                    <hr>
                    <h5>Vital Signs</h5>
                    <div class="form-group form-inline">
                        <label> BP (SBP/DBP): </label>
                        <input type="number" class="form-control mx-2" style="width: 80px;" id="">/
                        <input type="number" class="form-control mx-2" style="width: 80px;" id="">mmHg &emsp;

                        <label> Heart Rate: </label>
                        <input type="text" class="form-control mx-2" style="width: 50px;" id="">bpm &emsp;

                        <label> O2 Saturation: </label>
                        <input type="text" class="form-control mx-2" style="width: 50px;" id="">
                    </div>

                    <div class="form-group form-inline">
                        <label>Respiratory Rate:</label>
                        <input type="text" class="form-control mx-2" style="width: 50px;" id=""> &emsp;

                        <label> Temperature: </label>
                        <input type="text" class="form-control mx-2" style="width: 100px;" id="">C
                    </div>

                    <hr>
                    <h5>Other Physical Examination</h5>

                    <div class="form-group">
                        <input type="checkbox" id="normal_phyex" class="form-group mx-2" name="normal_phyex" /> Essentially Normal, No Significant Findings
                        <table class="table" id="other_phyex_form">
                            <tr>
                                <td><label>Skin</label></td>
                                <td><input type="radio" name="skin" value="normal">Normal</td>
                                <td><input type="radio" name="skin" value="abnormal">Abnormal</td>
                                <td>Details: <input type="text" id=""></td>
                            </tr>
                            <tr>
                                <td><label>HEENT</label></td>
                                <td><input type="radio" name="heent">Normal</td>
                                <td><input type="radio" name="heent">Abnormal</td>
                                <td>Details: <input type="text" id=""></td>
                            </tr>
                            <tr>
                                <td><label>Chest and Lungs</label></td>
                                <td><input type="radio" name="cl">Normal</td>
                                <td><input type="radio" name="cl">Abnormal</td>
                                <td>Details: <input type="text" id=""></td>
                            </tr>
                            <tr>
                                <td><label>Heart</label></td>
                                <td><input type="radio" name="heart">Normal</td>
                                <td><input type="radio" name="heart">Abnormal</td>
                                <td>Details: <input type="text" id=""></td>
                            </tr>
                            <tr>
                                <td><label>Abdomen</label></td>
                                <td><input type="radio" name="ab">Normal</td>
                                <td><input type="radio" name="ab">Abnormal</td>
                                <td>Details: <input type="text" id=""></td>
                            </tr>
                            <tr>
                                <td><label>Extremities</label></td>
                                <td><input type="radio" name="ex">Normal</td>
                                <td><input type="radio" name="ex">Abnormal</td>
                                <td>Details: <input type="text" id=""></td>
                            </tr>
                        </table>
                        <label for="hn_ope_findings">Other Relevant Findings:</label>
                        <textarea class="form-control"></textarea>
                    </div>

                </form>

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" data-dismiss="modal">Save</button>
            </div>


        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- Large Modal -->
<div class="modal fade" id="neuro-add" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Neurological Exam </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" class="needs-validation" method="POST" novalidate>

                    <div class="form-group">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Status</th>
                                    <th>Remarks</th>
                                </tr>
                            </thead>
                            <tr>
                                <td><label>Cerebral/Cognitive Function</label></td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>Normal</option>
                                            <option>Abnormal</option>
                                        </select>
                                    </div>
                                </td>
                                <td><textarea class="form-control" style="min-width: 100%"></textarea></td>
                            </tr>
                            <tr>
                                <td><label>Cranial Nerves</label></td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>Normal</option>
                                            <option>Abnormal</option>
                                        </select>
                                    </div>
                                </td>
                                <td><textarea class="form-control" style="min-width: 100%"></textarea></td>
                            </tr>
                            <tr>
                                <td><label>Motor Strength</label></td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>Normal</option>
                                            <option>Abnormal</option>
                                        </select>
                                    </div>
                                </td>
                                <td><textarea class="form-control" style="min-width: 100%"></textarea></td>
                            </tr>
                            <tr>
                                <td><label>Cerebellar Function</label></td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>Normal</option>
                                            <option>Abnormal</option>
                                        </select>
                                    </div>
                                </td>
                                <td><textarea class="form-control" style="min-width: 100%"></textarea></td>
                            </tr>
                            <tr>
                                <td><label>Reflexes</label></td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>Normal</option>
                                            <option>Abnormal</option>
                                        </select>
                                    </div>
                                </td>
                                <td><textarea class="form-control" style="min-width: 100%"></textarea></td>
                            </tr>
                            <tr>
                                <td><label>Sensory Exam</label></td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>Normal</option>
                                            <option>Abnormal</option>
                                        </select>
                                    </div>
                                </td>
                                <td><textarea class="form-control" style="min-width: 100%"></textarea></td>
                            </tr>
                            <tr>
                                <td><label>Meningeal Sign/s</label></td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>Normal</option>
                                            <option>Abnormal</option>
                                        </select>
                                    </div>
                                </td>
                                <td><textarea class="form-control" style="min-width: 100%"></textarea></td>
                            </tr>
                            <tr>
                                <td><label>Gait</label></td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>Normal</option>
                                            <option>Abnormal</option>
                                        </select>
                                    </div>
                                </td>
                                <td><textarea class="form-control" style="min-width: 100%"></textarea></td>
                            </tr>
                        </table>
                    </div>

                    <!-- <input type="hidden" value="submitted" name="ope_submitted" /> -->
                    <!-- <button type="submit" class="btn btn-primary float-right" name="ope_submit">Submit</button> -->
                    <!-- <button type="button" class="btn btn-danger float-right" data-dismiss="modal">Close</button> -->
                </form>

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" data-dismiss="modal">Save</button>
            </div>


        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- VIEW MSE -->
<div class="modal fade" id="modal-MSE" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Mental Status Examination</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Date/Time</th>
                            <th>Findings</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Jan 24, 2021 <br> 12:10PM <small><i class="small text-muted"><br>Encoded by: <br> Dr. Cruzada </i></small></td>
                            <td>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <b>General Appearance:</b><br>
                                            </td>
                                            <td>
                                                <b>Weight:</b> Obese &emsp; <b>Grooming:</b> Well-kempt &emsp; <b>Other Findings:</b> Notes on other findings.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>Behavior/Motor:</b></td>
                                            <td>Repetition &emsp; <b>Other Findings: </b>Notes on other findings.</td>
                                        </tr>
                                        <tr>
                                            <td><b>Attitude:</b></td>
                                            <td>Cooperative &emsp; <b>Other Findings: </b>Notes on other findings.</td>
                                        </tr>
                                        <tr>
                                            <td><b>Mood:</b></td>
                                            <td>Euphoric &emsp; <b>Other Findings: </b>Notes on other findings.</td>
                                        </tr>
                                        <tr>
                                            <td><b>Affect:</b></td>
                                            <td><b>Quality/Tone:</b> Eutymic &emsp; <b>Quantity:</b> Mild &emsp; <b>Range:</b> Normal &emsp; <b>Appropriateness:</b> Appropriate &emsp;<b>Congruence:</b> Congruent</td>
                                        </tr>
                                        <tr>
                                            <td><b>Speech:</b></td>
                                            <td><b>Fluency:</b> Normal &emsp; <b>Amount:</b> Normoproductive &emsp; <b>Rate:</b> Normal &emsp; <b>Tone:</b> Normal &emsp; <b>Volume:</b> Congruent </td>
                                        </tr>
                                        <tr>
                                            <td><b>Thought Process:</b></td>
                                            <td><b>Quality/Tone:</b> Goal-directed</td>
                                        </tr>
                                        <tr>
                                            <td><b>Thought Content:</b></td>
                                            <td><b>Obsession:</b> Notes here about px obsessions.<br>
                                                <b>Preoccupations:</b> Notes here about px preoccupations.<br>
                                                <b>Compulsions:</b> Notes here about px compulsions.<br>
                                                <b>Suicidality:</b> Suicide ideations notes<br>
                                                <b>Homicidality:</b> Notes here about px homicidality.<br>
                                                <b>Delusions:</b> Bizarre, mood-congruent<br>
                                                <b>Description:</b> Notes here about thought content.<br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>Perception:</b></td>
                                            <td>Auditory, Derealization, Gustatory, Olfactory<br><b>Notes:</b> Additional notes on perception.</td>
                                        </tr>
                                        <tr>
                                            <td><b>Sensorium/Cognition:</b></td>
                                            <td><b>Consciousness:</b> Awake </br>
                                                <b>Orientation:</b> Person </br>
                                                <b>Attention span:</b> Good </br>
                                                <b>Abstract Thinking:</b> Good </br>
                                                <b>Calculation:</b> Good </br>
                                                <b>Abstract Thinking:</b> Good </br>
                                                <b>Fund of Knowledge:</b> Good </br>
                                                <b>Memory:</b> Good </br>
                                                <b>Impulse:</b> Good </br>
                                                <b>Judgement:</b> Good </br>
                                                <b>Insight:</b> Good </br>
                                                <b>Reliability:</b> Good </br>
                                                <b>Others:</b>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer justify-content-end">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Add Notes</button>
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

<script>
    function change(radio) { 
        if (radio.checked && radio.id === "durationNum") {+
            $("#durNumDiv").removeClass("d-none");
            $("#durRangeDiv").hide();
        } else  {
            $("#durNumDiv").addClass("d-none");
            $("#durRangeDiv").show();
        }
    } 

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
</script>
