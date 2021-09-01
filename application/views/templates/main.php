<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="shorcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/img/public/favicon.ico">
    <title>ER - <?= $title; ?> </title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/fontawesome-free/css/all.min.css'); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/adminlte.min.css'); ?>">
    <!-- Toastr -->
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/toastr/toastr.min.css'); ?>">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- Sweetalert -->
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/sweetalert2/sweetalert2.min.css') ?>">
    <!-- Plugins -->
    <?php if ($css_plugins) : ?>
        <?php foreach ($css_plugins as $css) : ?>
            <link rel="stylesheet" href="<?php echo base_url('assets/plugins/' . $css) ?>">
        <?php endforeach; ?>
    <?php endif; ?>

    <!-- App CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/app.css'); ?>">
    <!-- Common CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/common/common.css'); ?>">

    <!-- Custom CSS -->
    <?php if ($custom_css) : ?>
        <?php foreach ($custom_css as $custom) : ?>
            <script src="<?php echo base_url('assets/css/' . $custom) ?>"></script>
        <?php endforeach; ?>
    <?php endif; ?>

    <!-- jQuery -->
    <script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js'); ?>"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?php echo base_url('assets/plugins/jquery-ui/jquery-ui.min.js'); ?>"></script>
    <!-- jQuery Validation -->
    <script src="<?php echo base_url('assets/plugins/jquery-validation/jquery.validate.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/plugins/jquery-validation/additional-methods.js') ?>"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Toastr Options -->
    <script src="<?php echo base_url('assets/plugins/toastr/toastr.min.js'); ?>"></script>
    <!-- Lodash -->
    <script src="<?php echo base_url('assets/plugins/lodash/lodash.min.js') ?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url('assets/dist/js/adminlte.js'); ?>"></script>
    <!-- Sweetalert -->
    <script src="<?php echo base_url('assets/plugins/sweetalert2/sweetalert2.min.js') ?>"></script>
    <!-- Templates -->
    <script src="<?php echo base_url('assets/js/templates/navbar.js') ?>"></script>
    <!-- Plugins -->
    <?php if ($javascript_plugins) : ?>
        <?php foreach ($javascript_plugins as $javascript) : ?>
            <script src="<?php echo base_url('assets/plugins/' . $javascript) ?>"></script>
        <?php endforeach; ?>
    <?php endif; ?>

    <!-- App JS -->
    <script src="<?php echo base_url('assets/js/app.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/ui.js') ?>"></script>

    <!-- Helpers JS -->
    <script src="<?php echo base_url('assets/js/helpers/forms.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/helpers/storage.js') ?>"></script>
    <!-- <script src="<?php echo base_url('assets/js/helpers/textarea.js') ?>"></script> -->
    <script src="<?php echo base_url('assets/js/helpers/time.js') ?>"></script>

    <!-- Custom Javascript-->
    <?php if ($custom_javascript) : ?>
        <?php foreach ($custom_javascript as $custom) : ?>
            <script src="<?php echo base_url('assets/js/' . $custom) ?>"></script>
        <?php endforeach; ?>
    <?php endif; ?>

    <script>
        toastr.options = {
            "preventDuplicates": true,
        }
    </script>
</head>
<?php if (!isset($component)) : ?>

    <body>
    <?php else : ?>

        <body class="hold-transition sidebar-mini layout-fixed <?= $sidebar_collapse ? 'sidebar-collapse' : '' ?>">
        <?php endif; ?>
        <div>
            <?php if (isset($component)) : ?>
                <?= $component ?>
            <?php endif; ?>
            <?= $content ?>
        </div>
        </body>

</html>