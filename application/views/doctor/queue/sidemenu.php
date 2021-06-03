<div class="card card-primary">
    <div class="card-body">
        
        <?php if($title== "ER Notes"){ ?>
            <div style="background-color:#7A3B69;" class="p-2 rounded">
                <a style="color:white;" href="#"> ER Notes </a>
            </div>
        <?php } else { ?>
            <strong><a href="<?php echo base_url('doctor/er_notes');?>"> ER Notes </a> </strong>
        <?php } ?>

        <hr>

        <?php if($title== "Plan"){ ?>
            <div style="background-color:#7A3B69;" class="p-2 rounded">
                <a style="color:white;" href="#"> Plan </a>
            </div>
        <?php } else { ?>
            <strong><a href="<?php echo base_url('doctor/plan');?>"> Plan </a> </strong>
        <?php } ?>

    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->