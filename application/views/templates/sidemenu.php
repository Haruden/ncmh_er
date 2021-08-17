<div class="card card-primary">
    <div class="card-body">
        
        <?php if($title== "Patient Details"){ ?>
            <div style="background-color:#7A3B69;" class="p-2 rounded">
                <a style="color:white;" href="#"> Patient Details </a>
            </div>
        <?php } else { ?>
            <strong><a href="<?php echo base_url($role.'/pat_details');?>"> Patient Details </a> </strong>
        <?php } ?>

        <hr>

        <?php if($title== "Vital Signs"){ ?>
            <div style="background-color:#7A3B69;" class="p-2 rounded">
                <a style="color:white;" href="#"> Vital Signs </a>
            </div>
        <?php } else { ?>
            <strong><a href="<?php echo base_url($role.'/vitals');?>"> Vital Signs </a> </strong>
        <?php } ?>

        <hr>

        <?php if($title== "Patient ID Marks"){ ?>
            <div style="background-color:#7A3B69;" class="p-2 rounded">
                <a style="color:white;" href="#"> Patient ID Marks </a>
            </div>
        <?php } else { ?>
            <strong><a href="<?php echo base_url($role.'/pat_id_marks');?>"> Patient ID Marks </a> </strong>
        <?php } ?>

        <hr>

        <?php if($title== "Nurse's Notes"){ ?>
            <div style="background-color:#7A3B69;" class="p-2 rounded">
                <a style="color:white;" href="#"> Nurse's Notes </a>
            </div>
        <?php } else { ?>
            <strong><a href="<?php echo base_url($role.'/nurse_notes');?>"> Nurse's Notes </a> </strong>
        <?php } ?>

        <hr>

        <?php if($title== "ER Notes"){ ?>
            <div style="background-color:#7A3B69;" class="p-2 rounded">
                <a style="color:white;" href="#"> ER Notes </a>
            </div>
        <?php } else { ?>
            <strong><a href="<?php echo base_url($role.'/er_notes');?>"> ER Notes </a> </strong>
        <?php } ?>

        <hr>

        <?php if($title== "Plan"){ ?>
            <div style="background-color:#7A3B69;" class="p-2 rounded">
                <a style="color:white;" href="#"> Plan </a>
            </div>
        <?php } else { ?>
            <strong><a href="<?php echo base_url($role.'/plan');?>"> Plan </a> </strong>
        <?php } ?>

    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->