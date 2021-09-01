<!-- <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
    Actions
</button>
<div class="dropdown-menu">
    <button type="button" class="dropdown-item btn btn-primary" data-toggle="modal" data-target="#ATD-modal"> Add to Doctor </button>
    <a class="dropdown-item" href="<?php echo base_url('nurse/vitals'); ?>">Vital Signs</a>
    <a class="dropdown-item" href="<?php echo base_url('nurse/pat_id_marks'); ?>">Patient ID Marks</a>
    <a class="dropdown-item" href="<?php echo base_url('nurse/nurse_notes'); ?>">Nurse's Notes</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Cancel Admission</a>
</div> -->

<div class="btn-group btn-block border-0 dropleft">
    <button type="button" class="btn border-0 shadow-sm btn-primary bg-gradient-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>
    <div class="dropdown-menu button-dropdown">
        <button type="button" class="dropdown-item btn btn-primary" data-toggle="modal" data-target="#ATD-modal"> Add to Doctor </button>
        <a class="dropdown-item" href="<?php echo base_url('nurse/vital-signs'); ?>">Vital Signs</a>
        <a class="dropdown-item" href="<?php echo base_url('nurse/patient-id-marks'); ?>">Patient ID Marks</a>
        <a class="dropdown-item" href="<?php echo base_url('nurse/nurse-notes'); ?>">Nurse's Notes</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Cancel Admission</a>
    </div>
</div>