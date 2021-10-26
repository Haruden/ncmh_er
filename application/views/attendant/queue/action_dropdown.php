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
        <a type="button" class="dropdown-item assign-er-doctor-btn" >Assign ER Doctor</a>
        <a type="button" id="" class="dropdown-item" href="<?php echo base_url('attendant/add-patient'); ?>">Patient Details</a>
        <div class="dropdown-divider"></div>
        <a type="button" id="" data-toggle="modal" data-target="#attendantCancelModal" class="dropdown-item">Cancel ER Visit</a>
    </div>
</div>