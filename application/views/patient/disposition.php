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
                                <div>
                                    <button class="btn btn-info btn-sm ml-2">Print Charge Slip</button>
                                </div>
                            </div>
                            <hr>

                            <div class="expired-option option-div" style="display:none;">
                                <h4>Notice of Death</h4>

                                <div class="form-inline">
                                    <span>Date/Time of Death: </span>
                                    <input type="datetime-local" name="" id="expired_tod" class="form-control ml-2" style="width: 20%"> 
                                </div>

                                <div class="form-inline mt-2">
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
                                </div>
                                <hr>
                            </div>

                            <div class="transfer-option option-div" style="display:none;">
                                <h4>Transfer Record</h4>

                                <div class="form-inline">
                                    <span> Receiving Facility: </span>
                                    <input type="text" name="" id="" class="form-control ml-2">
                                </div>

                                <div class="form-inline mt-2">
                                    <span> Receiving Doctor: </span>
                                    <input type="text" name="" id="" class="form-control ml-2">
                                </div>

                                <div class="form-inline mt-2">
                                    <span> Receiving Facility Contact number: </span>
                                    <input type="text" name="" id="" class="form-control ml-2">
                                </div>

                                <div class="form-inline mt-2">
                                    <span> Transfer Notes: </span>
                                    <input type="text" name="" id="" class="form-control ml-2">
                                </div>

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
                                        <span>Psychiatric Discharge Diagnosis</span>
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
                                        <span>Medical Discharge Diagnosis</span>
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
                                        <span>Psychiatric Discharge Diagnosis</span>
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
                                        <span>Medical Discharge Diagnosis</span>
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
                                        <span>Medication Prescriptions</span>
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
                                        <span>Procedure Prescriptions</span>
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
                                    <span>Home Instruction:</span> <br>
                                    <textarea name="" id="" cols="30" rows="10" class="dispo-summernote"></textarea>
                                </div>
                                <hr>
                            </div>
                            <!-- homIns_div -->

                            <div id="absconded_div" class="absconded-option option-div" style="display:none;">
                                <div>
                                    <span>Absconded Remarks:</span> <br>
                                    <textarea name="" id="" cols="30" rows="10" class="dispo-summernote"></textarea>
                                </div>
                                <hr>
                            </div>
                            <!-- homIns_div -->

                            <div id="ffup_div" class="discharge-option option-div" style="display: none;">
                                <h4>Follow-up</h4>

                                <div class="form-inline mb-2">
                                    <label>Duration: </label>
                                    <input type="radio" id="durationNum" class="form-control ml-2 mr-1" name="ffup_duration" value="Number"> Number
                                    <input type="radio" id="durationRange" class="form-control ml-2 mr-1" name="ffup_duration" value="Range"> Range

                                    <div id="ffupNumDiv" class="form-inline ml-2" style="display: none;">
                                        <input type="number" class="form-control mx-1 w-40" id="med-days" name="med-days" />
                                        <label>Days</label>
                                    </div>
                                    <div id="ffupRangeDiv" class="form-inline ml-2" style="display: none;">
                                        From: <input type="date" class="form-control mx-1 w-40" id="med-range-from" name="med-range-from" />
                                        To: <input type="date" class="form-control ml-1 w-40" id="med-range-to" name="med-range-to" />
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
                                    <span>Refer to Emergency Room When:</span> <br>
                                    <textarea name="" id="" cols="30" rows="10" class="dispo-summernote"></textarea>
                                </div>

                            </div>

                            <div class="admit-option option-div" style="display: none;">
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
                                <hr>
                            </div>

                            <div class="discharge-option absconded-option expired-option transfer-option option-div" style="display: none;">
                                <button class="btn btn-success btn-sm end-consult-btn">Discharge Patient</button>
                            </div>

                            <div class="admit-option option-div" style="display: none;">
                                <button class="btn btn-success btn-sm end-consult-btn">Admit Patient</button>
                            </div>

                            </div>
                            <!-- card-body -->

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