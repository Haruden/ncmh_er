<!-- <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
    Actions
</button>
<div class="dropdown-menu">
    <a class="dropdown-item" href="<?php echo base_url('doctor/er_notes'); ?>">ER Notes</a>
    <a class="dropdown-item" href="<?php echo base_url('doctor/plan'); ?>">Plan</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Cancel Admission</a>
</div> -->

<div class="btn-group btn-block border-0 dropleft">
    <button type="button" class="btn border-0 shadow-sm btn-primary bg-gradient-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>
    <div class="dropdown-menu button-dropdown">
        <a class="dropdown-item" href="<?php echo base_url('doctor/er-notes'); ?>">ER Notes</a>
        <a class="dropdown-item" href="<?php echo base_url('doctor/plan'); ?>">Plan</a>
        <a class="dropdown-item" href="<?php echo base_url('doctor/disposition'); ?>">Disposition</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" data-toggle="modal" data-target="#doctorCancelModal">Cancel ER Visit</a>
    </div>
</div>