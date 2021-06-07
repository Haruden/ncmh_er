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
                                        <input type="number" class ="form-control mx-1" style="width 40%">
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
</script>