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
                        <!-- <div class="col-sm-12 p-3 text-center" style="margin-bottom:-15px !important;">
                        <button data-toggle="modal" data-target="#addVitalsModal" class="btn btn-success addVitalsModal mr-2">Add Vitals <i class="ml-1 fas fa-plus"></i></button>
                        <button data-toggle="modal" data-target="#add-other-vitals-modal" class="btn btn-success open-other-vitals-modal">Add Other Vitals <i class="ml-1 fas fa-plus"></i></button>
                    </div> -->

                        <div class="card-body">
                            <!-- <div class="tab-content">
                                <div class="active tab-pane" id="nurses_notes">
                                    <div class="dataTables_wrapper dt-bootstrap4">
                                        <table id="nurseNotesTable" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Date/Time</th>
                                                    <th>Focus</th>
                                                    <th>Data</th>
                                                    <th>Action</th>
                                                    <th>Response</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Jan 24, 2021 <br> 12:10PM <br><small><i class="small text-muted">Encoded by: <br> Dr. Cruzada </i></small></td>
                                                    <td>Focus notes</td>
                                                    <td>Data notes</td>
                                                    <td>Action notes</td>
                                                    <td>Response notes</td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Date/Time</th>
                                                    <th>Focus</th>
                                                    <th>Data</th>
                                                    <th>Action</th>
                                                    <th>Response</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div> -->

                            <h4>Status: Paid</h4>

                            <button class="btn btn-primary">Print Charge Slip</button>
                            <button class="btn btn-success" id="end-consult-btn">End Consult</button>
                        </div>
                    </div>

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
</div>

<script>
    $(function() {
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
                } else if ( result.dismiss === Swal.DismissReason.cancel ) {
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