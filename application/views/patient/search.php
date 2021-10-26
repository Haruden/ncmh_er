<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <?= view(auth('role') . '/modals'); ?>

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-1">
                <div class="col-sm-6">
                    <h2 class="m-0 text-dark font-weight-normal"><?= $title ?></h2>
                    <span class="font-weight-light"><?= ucfirst(auth('role')) ?></span>
                </div>
                <div class="col-sm-6">
                    <div class="d-flex justify-content-end m-0">
                        <h4 class="userDateAndTime mt-1 mb-1 text-dark font-weight-light"></h4>
                    </div>
                    <div class="d-flex justify-content-end">
                        <span> Available Beds : <b>5</b> out of 54 </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <!-- <div class="callout callout-info">
                                <h5><i class="fas fa-info"></i> Note:</h5>
                                This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.
                            </div> -->

                    <!-- Main content -->
                    <div class="invoice p-3 mb-3 card-outline card-secondary">

                        <!-- <div class="row mb-3 justify-content-center">
                                    <button class="btn btn-success">Add Patient<i class="ml-1 fas fa-plus"></i></button>
                                </div> -->

                        <!-- Table row -->
                        <div class="dataTables_wrapper dt-bootstrap4">
                            <table id="queueTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Patient Name</th>
                                        <th>Sex</th>
                                        <th>Birthdate</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Dahildahil, Roy, Onin</td>
                                        <td>Male</td>
                                        <td>Dec 19, 1994 <br> Age: 27 </td>
                                        <td>
                                            <?php $this->load->view(auth('role') . '/queue/list_dropdown'); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Santos, Juan, Velaso</td>
                                        <td>Male</td>
                                        <td>Dec 23, 1996 <br> Age: 24 </td>
                                        <td>
                                            <?php $this->load->view(auth('role') . '/queue/list_dropdown'); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Vasquez, Alfredo, Duran</td>
                                        <td>Male</td>
                                        <td>Nov 10, 1993<br> Age: 27 </td>
                                        <td>
                                            <?php $this->load->view(auth('role') . '/queue/list_dropdown'); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tolentino, Gloria, Macapagal</td>
                                        <td>Femaile</td>
                                        <td>Nov 1, 1993<br> Age: 27 </td>
                                        <td>
                                            <?php $this->load->view(auth('role') . '/queue/list_dropdown'); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Aquino, Ninoy, Abalos</td>
                                        <td>Male</td>
                                        <td>Dec 19, 1996<br> Age: 22 </td>
                                        <td>
                                            <?php $this->load->view(auth('role') . '/queue/list_dropdown'); ?>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Patient Name</th>
                                        <th>Sex</th>
                                        <th>Birthdate</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div> <!-- /.row -->

                    </div> <!-- /.invoice -->
                </div> <!-- /.col -->
            </div> <!-- /.row -->
        </div> <!-- /.container-fluid -->
    </section> <!-- /.content -->
</div> <!-- /.content-wrapper -->


<script>
    $(function() {
        $("#queueTable").DataTable({
            "responsive": true,
            "autoWidth": false,
        });

        <?php if (auth('role') == 'attendant') { ?>
            $("#queueTable_length").find('label').after('<a type="button" class="btn btn-success btn-sm ml-3" href="<?php echo base_url('attendant/add-patient'); ?>">Add Patient<i class="ml-1 fas fa-plus"></i></a>');
        <?php } ?>

        $('.add-to-queue-btn').on('click', function() {
            Swal.fire({
                title: 'Confirmation',
                text: "Add Patient to ER Queue?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Added',
                        showConfirmButton: false,
                        timer: 1000
                    });
                }
            });
        });
    });
</script>