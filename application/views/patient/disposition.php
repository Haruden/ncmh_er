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

                            <div class="form-inline">
                                <label for="">Disposition:</label>
                                <select name="" id="" class="form-control ml-2">
                                    <option value="Discharge">Discharge</option>
                                    <option value="Admit">Admit</option>
                                    <option value="HAMA">HAMA</option>
                                    <option value="Transfer">Transfer</option>
                                    <option value="Expired">Expired</option>
                                    <option value="Absconded">Absconded</option>
                                </select>
                            </div>

                            <hr>

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

                                <div class=" d-flex justify-content-between mb-2">
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

                                <button class="btn btn-primary btn-sm">Print Charge Slip</button>
                                <button class="btn btn-success btn-sm" id="end-consult-btn">End Consult</button>

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

<script>
    $(function() {

        $('.diagnosis-card-header').on('click', function() {
            $(this).find(".btn-tool")[0].click();
        });

        $('.meds-card-header').on('click', function() {
            $(this).find(".btn-tool")[0].click();
        });

        $('.select2bs4').select2({
            theme: 'bootstrap4',
            width: 'resolve'
        });

        // $('#psychDischargeTable').DataTable();

        $('#end-consult-btn').on('click', function() {

            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success ml-3',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            })

            swalWithBootstrapButtons.fire({
                title: 'End Consult?',
                // text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes',
                cancelButtonText: 'No',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    // swalWithBootstrapButtons.fire(
                    //     'Deleted!',
                    //     'Your file has been deleted.',
                    //     'success'
                    // )
                    window.location.href = 'queue';
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    // swalWithBootstrapButtons.fire(
                    //     'Cancelled',
                    //     'Your imaginary file is safe :)',
                    //     'error'
                    // )
                }
            })
        });
    });
</script>