<ul class="nav nav-pills flex-column sub_sidemenu mt-2" role="tablist" style="height:100%">
    <li class="nav-item mb-2">
        <a class="nav-link <?php echo $title === 'Patient Details' ? 'active bg-secondary shadow font-weight-normal' : null ?>" href="<?php echo base_url(auth('role') . '/patient-details'); ?>">
            Patient Details
        </a>
    </li>
    <li class="nav-item mb-2">
        <a class="nav-link <?php echo $title === 'Patient ID Marks' ? 'active bg-secondary shadow font-weight-normal' : null ?>" href="<?php echo base_url(auth('role') . '/patient-id-marks'); ?>">
            Patient ID Marks
        </a>
    </li>
    <li class="nav-item mb-2">
        <a class="nav-link <?php echo $title === 'Vital Signs' ? 'active bg-secondary shadow font-weight-normal' : null ?>" href="<?php echo base_url(auth('role') . '/vital-signs'); ?>">
            Vital Signs
        </a>
    </li>
    <li class="nav-item mb-2">
        <a class="nav-link <?php echo $title === 'Nurse\'s Notes' ? 'active bg-secondary shadow font-weight-normal' : null ?>" href="<?php echo base_url(auth('role') . '/nurse-notes'); ?>">
            Nurse's Notes
        </a>
    </li>
    <li class="nav-item mb-2">
        <a class="nav-link <?php echo $title === 'ER Notes' ? 'active bg-secondary shadow font-weight-normal' : null ?>" href="<?php echo base_url(auth('role') . '/er-notes'); ?>">
            ER Notes
        </a>
    </li>
    <li class="nav-item mb-2">
        <a class="nav-link <?php echo $title === 'Plan' ? 'active bg-secondary shadow font-weight-normal' : null ?>" href="<?php echo base_url(auth('role') . '/plan'); ?>">
            Plan
        </a>
    </li>
</ul>

<script>
    $('.sub_sidemenu .nav-item .nav-link').hover(function() {
        !$(this).hasClass('active') && $(this).addClass('text-secondary bg-gradient-light shadow-sm font-weight-normal');
        $(this).mouseleave(function() {
            $(this).removeClass('active bg-gradient-light shadow-sm shadow-sm font-weight-normal')
        });
    });
</script>