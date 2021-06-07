<div class="card card-primary">
    <div class="card-body">
        
        <?php if($title== "Patient Details"){ ?>
            <div style="background-color:#7A3B69;" class="p-2 rounded">
                <a style="color:white;" href="#"> Patient Details </a>
            </div>
        <?php } else { ?>
            <strong><a href="<?php echo base_url('nurse/pat_details');?>"> Patient Details </a> </strong>
        <?php } ?>

        <hr>

        <?php if($title== "Vital Signs"){ ?>
            <div style="background-color:#7A3B69;" class="p-2 rounded">
                <a style="color:white;" href="#"> Vital Signs </a>
            </div>
        <?php } else { ?>
            <strong><a href="<?php echo base_url('nurse/vitals');?>"> Vital Signs </a> </strong>
        <?php } ?>

        <hr>

        <?php if($title== "Patient ID Marks"){ ?>
            <div style="background-color:#7A3B69;" class="p-2 rounded">
                <a style="color:white;" href="#"> Patient ID Marks </a>
            </div>
        <?php } else { ?>
            <strong><a href="<?php echo base_url('nurse/pat_id_marks');?>"> Patient ID Marks </a> </strong>
        <?php } ?>

        <hr>

        <?php if($title== "Nurse's Notes"){ ?>
            <div style="background-color:#7A3B69;" class="p-2 rounded">
                <a style="color:white;" href="#"> Nurse's Notes </a>
            </div>
        <?php } else { ?>
            <strong><a href="<?php echo base_url('nurse/nurse_notes');?>"> Nurse's Notes </a> </strong>
        <?php } ?>

    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->