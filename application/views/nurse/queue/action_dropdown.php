<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
    Actions
</button>
<div class="dropdown-menu">
    <button type="button" class="dropdown-item btn btn-primary" data-toggle="modal" data-target="#ATD-modal"> Add to Doctor </button>
    <a class="dropdown-item" href="<?php echo base_url(''); ?>">Patient Details</a>
    <a class="dropdown-item" href="<?php echo base_url('nurse/vitals'); ?>">Vital Signs</a>
    <a class="dropdown-item" href="<?php echo base_url('nurse/pat_id_marks'); ?>">Patient ID Marks</a>
    <a class="dropdown-item" href="<?php echo base_url(''); ?>">Nurse's Notes</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Out when called</a>
</div>