<!-- <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
    Actions
</button>
<div class="dropdown-menu">
    <a class="dropdown-item" href="<?php echo base_url('attendant/pat_details'); ?>">Patient Details</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" data-toggle="modal" data-target="#cancel-modal">Cancel Admission</a>
</div> -->

<div class="btn-group btn-block border-0 dropleft">
    <button type="button" class="btn border-0 shadow-sm btn-primary bg-gradient-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>
    <div class="dropdown-menu button-dropdown">
        <a type="button" id="assign_er_doctor_btn" class="dropdown-item" >Assign ER Doctor</a>
        <a type="button" id="" class="dropdown-item" href="<?php echo base_url('attendant/add-patient'); ?>">Patient Details</a>
        <div class="dropdown-divider"></div>
        <a type="button" id="" data-toggle="modal" data-target="#attendantCancelModal" class="dropdown-item">Cancel ER Visit</a>
    </div>
</div>

<script>
$(function(){
    $('#assign_er_doctor_btn').on('click', function(){
        Swal.fire({
            title: 'Confirmation',
            text: "Assign Patient to ER Doctor?",
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
                    title: 'Assigned',
                    showConfirmButton: false,
                    timer: 1000
                });
            }
        });
    });
});
</script>