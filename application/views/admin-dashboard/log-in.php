<!doctype html>
<html class="no-js">
<head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Veneto Admin &middot; Sign In </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/dist/css/veneto-admin.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/demo/css/demo.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/dist/assets/font-awesome/css/font-awesome.css">


    </head>
    <body class="body-sign-in">
    <div class="container">
        <div class="panel panel-default form-container">
            <div class="panel-body">
                <form role="form" method="post" action="<?php echo base_url(); ?>index.php/admin_olshop/login">
                    <h3 class="text-center margin-xl-bottom">Welcome Back!</h3>
                    <div class="form-group text-center">
                        <label class="sr-only" for="email">Email Address</label>
                        <input name="username" class="form-control input-lg" placeholder="Email Address" required>
                    </div>
                    <div class="form-group text-center">
                        <label class="sr-only" for="password">Password</label>
                        <input name="password" type="password" class="form-control input-lg" placeholder="Password" required>
                    </div>
                    <input type="submit" class="btn btn-primary btn-block btn-lg" text="SIGN IN">    
                    <!-- <a href="<?php echo base_url(); ?>admin_olshop/login" ></a> -->
                </form>
            </div>
            <div class="panel-body text-center">
                <div class="margin-bottom">
                    <a class="text-muted text-underline" href="javascript:;">Forgot Password?</a>
                </div>
                <div>
                    Don't have an account? <a class="text-primary-dark" href="pages-sign-up.html">Sign up here</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
