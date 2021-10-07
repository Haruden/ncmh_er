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
                    <h3>Patient Disposition</h3>
                    <div class="card">
                        <div class="card-body">

                            <div class="d-flex justify-content-between">
                                <div class="form-inline">
                                    <label for="">Disposition:</label>
                                    <select name="disposition" id="disposition" class="form-control ml-2">
                                        <option value=""></option>
                                        <option value="Discharge">Discharge</option>
                                        <option value="Admit">Admit</option>
                                        <option value="HAMA">HAMA</option>
                                        <option value="Transfer">Transfer</option>
                                        <option value="Expired">Expired</option>
                                        <option value="Absconded">Absconded</option>
                                    </select>
                                </div>
                                <!-- <div>
                                    <button class="btn btn-info btn-sm ml-2">Print Charge Slip</button>
                                </div> -->
                            </div>
                            <hr>

                            <div class="expired-option option-div" style="display:none;">
                                <h4>Notice of Death</h4>

                                <div class="form-inline">
                                    <span>Date/Time of Death: </span>
                                    <input type="datetime-local" name="" id="expired_tod" class="form-control ml-2" style="width: 20%"> 
                                </div>

                                <div class="row mt-2">
                                    <div class="col-6 border border-dark">CAUSES OF DEATH</div>
                                    <div class="col-6 border border-dark">Interval Between Onset & Death</div>
                                </div>

                                <div class="row">
                                    <div class="col-2 border border-dark p-3">Immediate Cause</div>
                                    <div class="col-4 border border-dark form-inline">
                                        <span>a)</span> 
                                        <textarea name="" id="" cols="" rows="2" style="width:90%;" class="form-control er-expired-tx"></textarea>
                                    </div>
                                    <div class="col-6 border border-dark p-0">
                                        <textarea name="" id="" cols="" rows="2" style="width:100%" class="form-control er-expired-tx"></textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-2 border border-dark p-3">Antecedent Cause</div>
                                    <div class="col-4 border border-dark form-inline">
                                        <span>b)</span> 
                                        <textarea name="" id="" cols="" rows="2" style="width:90%" class="form-control er-expired-tx"></textarea>
                                    </div>
                                    <div class="col-6 border border-dark p-0">
                                        <textarea name="" id="" cols="" rows="2" style="width:100%" class="form-control er-expired-tx"></textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-2 border border-dark p-3">Underlying Cause</div>
                                    <div class="col-4 border border-dark form-inline">
                                        <span>c)</span> 
                                        <textarea name="" id="" cols="" rows="2" style="width:90%" class="form-control er-expired-tx"></textarea>
                                    </div>
                                    <div class="col-6 border border-dark p-0">
                                        <textarea name="" id="" cols="" rows="2" style="width:100%" class="form-control er-expired-tx"></textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-2 border border-dark p-3">Other dignificant conditions contributing to death</div>
                                    <div class="col-4 border border-dark form-inline p-0">
                                        <textarea name="" id="" cols="" rows="2" style="width:100%" class="form-control er-expired-tx"></textarea>
                                    </div>
                                    <div class="col-6 border border-dark p-0">
                                        <textarea name="" id="" cols="" rows="2" style="width:100%" class="form-control er-expired-tx"></textarea>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col-6 form-inline">
                                        If attended, State Duration: <input type="text" name="" id="" class="form-control ml-2">
                                    </div>
                                    <div class="col-6 form-inline">
                                        Autopsy (Yes/No): 
                                        <select name="" id="" class="form-control ml-2">
                                            <option value=""></option>
                                            <option value="">YES</option>
                                            <option value="">NO</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- <div class="form-inline mt-2">
                                    <span> Immediate Cause of Death: </span>
                                    <input type="text" name="" id="" class="form-control ml-2">
                                </div>

                                <div class="form-inline mt-2">
                                    <span>Antecedent Cause of Death: </span>
                                    <input type="text" name="" id="" class="form-control ml-2">
                                </div>

                                <div class="form-inline mt-2">
                                    <span>Underlying Cause of Death: </span>
                                    <input type="text" name="" id="" class="form-control ml-2">
                                </div>

                                <div class="form-inline mt-2">
                                    <span>Other Significant Cause of Death: </span>
                                    <input type="text" name="" id="" class="form-control ml-2">
                                </div>

                                <div class="form-inline mt-2">
                                    <span>Pronounced By: </span>
                                    <input type="text" name="" id="" class="form-control ml-2">
                                </div>

                                <div class="form-inline mt-2">
                                    <span>Notified By: </span>
                                    <input type="text" name="" id="" class="form-control ml-2">
                                </div>

                                <div class="form-inline mt-2">
                                    <span>Name of Relative: </span>
                                    <input type="text" name="" id="" class="form-control ml-2">
                                </div>

                                <div class="form-inline mt-2">
                                    <span>Relationship to Patient: </span>
                                    <input type="text" name="" id="" class="form-control ml-2">
                                </div>

                                <div class="form-inline mt-2">
                                    <span>Date/Time of Notified: </span>
                                    <input type="datetime-local" name="" id="expired_ton" class="form-control ml-2" style="width: 20%"> 
                                </div>

                                <div class="form-inline mt-2">
                                    <span>Manner of Notification: </span>
                                    <input type="text" name="" id="" class="form-control ml-2">
                                </div>

                                <div class="form-inline mt-2">
                                    <span>Autopsy: </span>
                                    <input type="text" name="" id="" class="form-control ml-2">
                                </div>

                                <div class="form-inline mt-2">
                                    <span>DOA: </span>
                                    <input type="text" name="" id="" class="form-control ml-2">
                                </div>

                                <div class="form-inline mt-2">
                                    <span>Prepared By: </span>
                                    <input type="text" name="" id="" class="form-control ml-2">
                                </div>

                                <div class="form-inline mt-2">
                                    <span>Verified By: </span>
                                    <input type="text" name="" id="" class="form-control ml-2">
                                </div>

                                <div class="form-inline mt-2">
                                    <span>Received By: </span>
                                    <input type="text" name="" id="" class="form-control ml-2">
                                </div> -->
                                <hr>
                            </div>

                            <div class="transfer-option option-div" style="display:none;">
                                <h4>Transfer Record</h4>

                                <h5>Referring Facility Details</h5>

                                <div class="row">
                                    <div class="col-2">
                                        <span> Receiving Doctor: </span>
                                    </div>
                                    <div class="col-10">
                                        <input type="text" name="" id="" class="form-control ml-2">
                                    </div>                              
                                </div>
                                <div class="row mt-2">
                                    <div class="col-2">
                                        <span> Receiving Facility: </span>
                                    </div>
                                    <div class="col-10">
                                        <input type="text" name="" id="" class="form-control ml-2">
                                    </div>                              
                                </div>
                                <div class="row mt-2">
                                    <div class="col-2">
                                        <span> Receiving Facility Address: </span>
                                    </div>
                                    <div class="col-10">
                                        <input type="text" name="" id="" class="form-control ml-2">
                                    </div>                              
                                </div>

                                <div class="row mt-2">
                                    <div class="col-2">
                                        <span> Receiving Facility Contact number: </span>
                                    </div>
                                    <div class="col-10">
                                        <input type="text" name="" id="" class="form-control ml-2">
                                    </div>                              
                                </div>

                                <hr>

                                <h5>Referral Details</h5>

                                <div class="row">
                                    <div class="col-2">
                                        <span> Referring / Requesting Physician: </span>
                                    </div>
                                    <div class="col-10">
                                        <input type="text" name="" id="" class="form-control ml-2">
                                    </div>                              
                                </div>

                                <div class="row mt-2">
                                    <div class="col-2">
                                        <span> Reason for Referral: </span>
                                    </div>
                                    <div class="col-10">
                                        <input type="text" name="" id="" class="form-control ml-2">
                                    </div>                              
                                </div>

                                <div class="row mt-2">
                                    <div class="col-2">
                                        <span> Management: </span>
                                    </div>
                                    <div class="col-10">
                                        <textarea name="" id="" cols="" rows="2" class="form-control" style="width: 100%;"></textarea>
                                    </div>                              
                                </div>

                                <div class="row mt-2">
                                    <div class="col-2">
                                        <span> Referral Details/ Justification: </span>
                                    </div>
                                    <div class="col-10">
                                        <textarea name="" id="" cols="" rows="2" class="form-control" style="width: 100%;"></textarea>
                                    </div>                              
                                </div>

                                <div class="row mt-2">
                                    <div class="col-2">
                                        <span> Medical Social Worker: </span>
                                    </div>
                                    <div class="col-10">
                                        <input type="text" name="" id="" class="form-control ml-2">
                                    </div>                              
                                </div>

                                <!-- <div class="form-inline mt-2">
                                    <span> Transfer Notes: </span>
                                    <input type="text" name="" id="" class="form-control ml-2">
                                </div> -->

                                <hr>
                            </div>

                            <div id="dischargediagnosis_div" class="expired-option discharge-option transfer-option absconded-option option-div" style="display: none;">
                                <div class="d-flex justify-content-between mb-2">
                                    <div>
                                        <h4>Discharge Diagnosis</h4>
                                    </div>
                                    <div>
                                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#discharge_pdiagnosis_modal"> Add Psychiatric Diagnosis <i class="ml-1 fas fa-plus"></i></button>
                                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#discharge_mdiagnosis_modal"> Add Medical Diagnosis <i class="ml-1 fas fa-plus"></i></button>
                                    </div>
                                </div>

                                <div class="card order-card">
                                    <div class="card-header p-2 pr-3 diagnosis-card-header">
                                        <span>Psychiatric Discharge Diagnosis (1) </span>
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="card-body dataTables_wrapper dt-bootstrap4" style="display: block;">
                                        <table id="" class="table table-bordered table-striped order-datatable">
                                            <thead>
                                                <tr>
                                                    <th>Diagnosis</th>
                                                    <th>To Consider</th>
                                                    <th>Is Primary</th>
                                                    <th>Condition</th>
                                                    <th>Condition Note</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Dementia in Alzheimer's diseas with early onset (G30.0+)</td>
                                                    <td>Test</td>
                                                    <td>No</td>
                                                    <td>Improved</td>
                                                    <td>Test</td>
                                                    <td><button class="btn btn-default btn-sm" data-toggle="modal" data-target="#discharge_pdiagnosis_modal">Update</button></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="card order-card">
                                    <div class="card-header p-2 pr-3 diagnosis-card-header">
                                        <span>Medical Discharge Diagnosis (1)</span>
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="card-body dataTables_wrapper dt-bootstrap4" style="display: block;">
                                        <table id="" class="table table-bordered table-striped order-datatable">
                                            <thead>
                                                <tr>
                                                    <th>Co-morbid Diagnosis</th>
                                                    <th>To Consider</th>
                                                    <th>Condition Note</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Some Medical Diagnosis</td>
                                                    <td>Consider</td>
                                                    <td>Notes</td>
                                                    <td><button class="btn btn-default btn-sm" data-toggle="modal" data-target="#discharge_mdiagnosis_modal"">Update</button></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <hr>
                            </div>
                            <!-- dischargeiagnosis_div -->

                            <div id="admittingdiagnosis_div" class="admit-option option-div" style="display: none;">
                                <div class="d-flex justify-content-between mb-2">
                                    <div>
                                        <h4>Admitting Diagnosis</h4>
                                    </div>
                                    <div>
                                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#discharge_pdiagnosis_modal"> Add Psychiatric Diagnosis <i class="ml-1 fas fa-plus"></i></button>
                                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#discharge_mdiagnosis_modal"> Add Medical Diagnosis <i class="ml-1 fas fa-plus"></i></button>
                                    </div>
                                </div>

                                <div class="card order-card">
                                    <div class="card-header p-2 pr-3 diagnosis-card-header">
                                        <span>Psychiatric Discharge Diagnosis (1)</span>
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="card-body dataTables_wrapper dt-bootstrap4" style="display: block;">
                                        <table id="" class="table table-bordered table-striped order-datatable">
                                            <thead>
                                                <tr>
                                                    <th>Diagnosis</th>
                                                    <th>To Consider</th>
                                                    <th>Is Primary</th>
                                                    <th>Condition</th>
                                                    <th>Condition Note</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Dementia in Alzheimer's diseas with early onset (G30.0+)</td>
                                                    <td>Test</td>
                                                    <td>No</td>
                                                    <td>Improved</td>
                                                    <td>Test</td>
                                                    <td><button class="btn btn-default btn-sm" data-toggle="modal" data-target="#discharge_pdiagnosis_modal">Update</button></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="card order-card">
                                    <div class="card-header p-2 pr-3 diagnosis-card-header">
                                        <span>Medical Discharge Diagnosis (1)</span>
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="card-body dataTables_wrapper dt-bootstrap4" style="display: block;">
                                        <table id="" class="table table-bordered table-striped order-datatable">
                                            <thead>
                                                <tr>
                                                    <th>Co-morbid Diagnosis</th>
                                                    <th>To Consider</th>
                                                    <th>Condition Note</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Some Medical Diagnosis</td>
                                                    <td>Consider</td>
                                                    <td>Notes</td>
                                                    <td><button class="btn btn-default btn-sm" data-toggle="modal" data-target="#discharge_mdiagnosis_modal"">Update</button></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <hr>
                            </div>
                            <!-- dischargeiagnosis_div -->

                            <div id="prescription_div" class="discharge-option option-div" style="display: none;">
                                <div class="d-flex justify-content-between mb-2">
                                    <div>
                                        <h4>Prescription</h4>
                                    </div>
                                    <div>
                                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#discharge_meds_modal"> Add Medication Prescription <i class="ml-1 fas fa-plus"></i></button>
                                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#discharge_proc_modal"> Add Procedure Prescription <i class="ml-1 fas fa-plus"></i></button>
                                        <button class="btn btn-primary btn-sm"> Print Prescription <i class="fas fa-print"></i> </button>
                                    </div>
                                </div>

                                <div class="card order-card">
                                    <div class="card-header p-2 pr-3 meds-card-header">
                                        <span>Medication Prescriptions (2)</span>
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="card-body dataTables_wrapper dt-bootstrap4" style="display: block;">
                                        <table id="" class="table table-bordered table-striped order-datatable">
                                            <thead>
                                                <tr>
                                                    <th>Medication</th>
                                                    <th>Directions</th>
                                                    <th>Frequency</th>
                                                    <th>Duration</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Paracetamol 500 mg tablet</td>
                                                    <td>Take 1 tablet as needed.</td>
                                                    <td>every 4 hours</td>
                                                    <td>3 days</td>
                                                    <td>
                                                        <button class="btn btn-sm btn-primary m-1">UPDATE</button>
                                                        <button class="btn btn-sm btn-danger m-1">DELETE</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Paracetamol 500 mg tablet</td>
                                                    <td>Take 1 tablet as needed.</td>
                                                    <td>every 4 hours</td>
                                                    <td>3 days</td>
                                                    <td>
                                                        <button class="btn btn-sm btn-primary m-1">UPDATE</button>
                                                        <button class="btn btn-sm btn-danger m-1">DELETE</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="card order-card">
                                    <div class="card-header p-2 pr-3 meds-card-header">
                                        <span>Procedure Prescriptions (1)</span>
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="card-body dataTables_wrapper dt-bootstrap4" style="display: block;">
                                        <table id="" class="table table-bordered table-striped order-datatable">
                                            <thead>
                                                <tr>
                                                    <th>Diagnostic Procedure</th>
                                                    <th>Remarks</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Complete Blood Count</td>
                                                    <td>notes</td>
                                                    <td>
                                                        <button class="btn btn-sm btn-primary m-1">UPDATE</button>
                                                        <button class="btn btn-sm btn-danger m-1">DELETE</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <hr>
                            </div>
                            <!-- prescription_div -->

                            <div id="homIns_div" class="discharge-option option-div" style="display:none;">
                                <div>
                                    <b>Home Instruction:</b> <br>
                                    <textarea name="" id="" cols="30" rows="10" class="dispo-summernote"></textarea>
                                </div>
                                <hr>
                            </div>
                            <!-- homIns_div -->

                            <div id="absconded_div" class="absconded-option option-div" style="display:none;">
                                <div>
                                    <b>Absconded Remarks:</b> <br>
                                    <textarea name="" id="" cols="30" rows="10" class="dispo-summernote"></textarea>
                                </div>
                                <hr>
                            </div>
                            <!-- homIns_div -->

                            <div id="ffup_div" class="discharge-option option-div" style="display: none;">
                                <h4>Follow-up</h4>

                                <div class="form-inline mb-2">
                                    <input type="radio" id="durationNum" class="form-control ml-2 mr-1" name="ffup_duration" value="Number"> Duration
                                    <input type="radio" id="durationRange" class="form-control ml-2 mr-1" name="ffup_duration" value="Range"> Date

                                    <div id="ffupNumDiv" class="form-inline ml-2" style="display: none;">
                                        <input type="number" class="form-control mx-1 w-40" id="med-days" name="med-days" />
                                        <label>Days</label>
                                    </div>
                                    <div id="ffupRangeDiv" class="form-inline ml-2" style="display: none;">
                                        <input type="date" class="form-control mx-1" id="med-range-from" name="med-range-from" />
                                        <!-- To: <input type="date" class="form-control ml-1 w-40" id="med-range-to" name="med-range-to" /> -->
                                    </div>
                                </div>

                                <div class="form-inline mb-2">
                                    <label for="">Department/Service: </label>
                                    <input type="text" name="" id="" class="form-control ml-2">
                                </div>

                                <div class="form-inline mb-2">
                                    <label for="">Doctor: </label>
                                    <input type="text" name="" id="" class="form-control ml-2">
                                </div>

                                <div>
                                    <b>Refer to Emergency Room When:</b> <br>
                                    <textarea name="" id="" cols="30" rows="10" class="dispo-summernote"></textarea>
                                </div>

                            </div>

                            <div class="admit-option option-div" style="display: none;">
                                <h4> Admission Details </h4>

                                <div>
                                    <label for="">Admitting Consultant: </label>
                                    <input type="text" name="" id="" class="form-control">
                                </div>
                                
                                <div class="mt-2">
                                    <label for="">Admitting Resident: </label>
                                    <input type="text" name="" id="" class="form-control">
                                </div>

                                <div class="mt-2">
                                    <label for="">Disposition Location: </label>
                                    <select name="" id="dispo_loc" class="form-control">
                                        <option value=""></option>
                                        <option value="Pavilion">Pavilion</option>
                                        <option value="ICU">ICU</option>
                                        <option value="Specify">Specify</option>
                                    </select>
                                    <div id="dispo_loc_specify" class="mt-2" style="display: none;">
                                        <input type="text" name="" id="" class="form-control" placeholder="Specify">
                                    </div>
                                </div>

                                <!-- Table div -->
                                <div class="dataTables_wrapper dt-bootstrap4 mt-4">
                                    <div class="mb-2">
                                        <b>Admission Notes:</b> 
                                        <button class="btn btn-sm btn-success ml-3" data-toggle="modal" data-target="#er-notes-add">Add Admission Notes <i class="ml-1 fas fa-plus"></i></button>
                                    </div>    

                                    <table id="admitNotesTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Date/Time</th>
                                                <th>Status</th>
                                                <th>History Notes</th>
                                                <th>Others</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Jan 10, 2021; 12:10PM <br> <small><i class="small text-muted">Encoded by: Dr. Cruzada </i></small></td>
                                                <td>Out: Emergency Room</td>
                                                <td>History Notes of the patient will be reflected here.</td>
                                                <td>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Jan 24, 2021; 12:10PM <br> <small><i class="small text-muted">Encoded by: Dr. Cruzada <br> Updated by: Dr. Argamosa (Jan 24, 2021; 4:56pm) </i></small> </td>
                                                <td>In: <br> Pavilion 1 - Ward 1</td>
                                                <td>History Notes of the patient will be reflected here.</td>
                                                <td>
                                                    <ul>
                                                        <li> <a href="#">View Assessment Notes</a></li>
                                                        <li> <a href="#">View Mental Status Exam</a></li>
                                                        <li> <a href="#">View Physical Exam</a></li>
                                                        <li> <a href="#">View Neurological Exam</a></li>
                                                    </ul>
                                                </td>
                                            </tr>                                            
                                        </tbody>
                                    </table>
                                </div>
                                <!-- Table div -->

                                <hr>

                                <div class="d-flex justify-content-left">
                                    <div class="">
                                        <h5>Doctor's Order Details</h5>
                                    </div>
                                   
                                    <div class="ml-2">
                                        <button class="btn btn-sm btn-success mr-3" data-toggle="modal" data-target="#add-doctor-order">Add Doctor Order <i class="ml-1 fas fa-plus"></i></button>
                                    </div>
                                </div>                                

                                <div class="mt-2">
                                    <h6>SPECIAL INSTRUCTION</h6>
                                    <textarea class="form-control" rows="2" placeholder="Special Instructions Here" disabled></textarea>
                                </div>
                                <br>

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
                                
                                <hr>
                            </div>

                            <div class="discharge-option absconded-option expired-option transfer-option option-div row" style="display: none;">
                                <div class="d-flex justify-content-between" style="width:100%;">
                                    <div>
                                        <button class="btn btn-success btn-sm end-consult-btn">Discharge Patient</button>
                                        <button class="btn btn-primary btn-sm">Save Draft</button>
                                    </div>                                   
                                    <button class="btn btn-danger btn-sm">Cancel</button>         
                                </div>                   
                            </div>

                            <div class="admit-option option-div" style="display: none;">
                                <div class="d-flex justify-content-between" style="width:100%;">
                                    <div>
                                        <button class="btn btn-success btn-sm end-consult-btn">Admit Patient</button>
                                        <button class="btn btn-primary btn-sm">Save Draft</button>
                                    </div>                                   
                                    <button class="btn btn-danger btn-sm">Cancel</button>         
                                </div>                                   
                            </div>

                        </div>
                        <!-- card-body -->

                    </div>
                    <!-- card -->
                </div>
                <!-- col-md-10 -->
            </div>
            <!-- row -->
        </div>
        <!-- containter-fluid -->

    </section>

</div>
<!-- content-wrapper -->

<!-- JS as assets/js/doctor/disposition.js -->