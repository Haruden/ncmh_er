<body class="hold-transition login-page">

    <div class="login-box">
        <div class="login-logo">
            <div class="row justify-content-center">
                <img src="<?php echo base_url('assets/img/ncmh_logo.png'); ?>" class="brand-image img-circle elevation-3" style="width: 150px;" />
            </div>
            <div class="row justify-content-center">
                <span> <b>NCMH</b> Emergency Room </span>
            </div>
        </div>
        <!-- /.login-logo -->

        <div class="card">
            <div class="card-body login-card-body">
                <!-- <p class="login-box-msg">Sign in to start your session</p> -->

                <form action="" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Username" name="username" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <!-- <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="remember">
                            <label for="remember">
                                Remember Me
                            </label>
                        </div>
                    </div> -->
                        <!-- /.col -->
                        <div class="col-12 mb-2">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <p class="mb-1">
                    <a href="forgot-password.html">I forgot my password</a>
                </p>
                <!-- <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
    </p> -->
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

</body>

</html>