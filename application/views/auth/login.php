<body class="hold-transition login-page">

    <div class="login-box p-3">
        <div class="login-logo">
            <div class="row justify-content-center">
                <img src="<?php echo base_url('assets/img/ncmh_logo.png'); ?>" style="width: 150px;" />
            </div>
            <div class="row justify-content-center">
                <span> <b>NCMH</b> Emergency Room </span>
            </div>
        </div>
        <!-- /.login-logo -->

        <?php if (isset($_SESSION['validation_errors'])) :?>
            <div class="alert alert-danger border-0 bg-gradient-danger rounded shadow alert-dismissible fade show align-middle" role="alert">
                <small>
                    <?php echo $this->session->tempdata('validation_errors')['message'];?>
                </small>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif ?>

        <form method="POST" id="login-form" action="auth/login" novalidate="novalidate" method="post" class="p-2">
            <div class="input-group mb-3">
                <input type="text" id="username" class="form-control border-0 border-white rounded-left" placeholder="Username" name="username" required="">
                <div class="input-group-append">
                    <div class="input-group-text bg-white border-0 rounded-right">
                        <span class="fas fa-user text-secondary"></span>
                    </div>
                </div>
                <div class="invalid-feedback m-0 ml-2">
                    <small> Username is required</small>
                </div>
            </div>
            <div class="input-group rounded">
                <input type="password" class="form-control border-0 border-white rounded-left" placeholder="Password" name="password" required="">
                <div class="input-group-append">
                    <div class="input-group-text bg-white border-0 rounded-right">
                        <span class="fas fa-lock text-secondary"></span>
                    </div>
                </div>
                <div class="invalid-feedback m-0 ml-2">
                    <small> Password is required</small>
                </div>
            </div>
            <!-- <small class="mr-auto ml-1">
                <a href="forgot-password.html">I forgot my password</a>
            </small> -->
            <div class="row mt-4">
                <div class="col-sm-12 mb-2">
                    <button type="submit" class="btn btn-primary bg-gradient-primary border-0 btn-block shadow-sm">Sign In</button>
                </div>
            </div>
        </form>

    </div>
    <!-- /.login-box -->

</body>

</html>