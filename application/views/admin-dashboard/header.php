<!doctype html>
<html> 
    <head>
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Veneto Admin &middot; Dashboard </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/dist/css/veneto-admin.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/demo/css/demo.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/dist/assets/font-awesome/css/font-awesome.css">

        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/dist/assets/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.css"/>
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/dist/css/plugins/rickshaw.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/dist/css/plugins/morris.min.css">

          <link rel="stylesheet" href="<?php echo base_url(); ?>asset/dist/css/plugins/jquery-select2.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/dist/css/plugins/jquery-selectBoxIt.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/dist/css/plugins/jquery-chosen.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/dist/css/plugins/bootstrap-tagsinput.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/dist/css/plugins/bootstrap-switch.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/dist/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">

    </head>
    <body class="">
        <header>
            <nav class="navbar navbar-default navbar-static-top no-margin" role="navigation">
                <div class="navbar-brand-group">
                    <a class="navbar-sidebar-toggle navbar-link" data-sidebar-toggle>
                        <i class="fa fa-lg fa-fw fa-bars"></i>
                    </a>
                    <a class="navbar-brand hidden-xxs" href="index.html">
                        <span class="sc-visible">
                            V
                        </span>
                        <span class="sc-hidden">
                            <span class="bold">Olshop</span>
                            ADMIN
                        </span>
                    </a>
                </div>
                <ul class="nav navbar-nav navbar-nav-expanded pull-right margin-md-right">
                   
                    
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle navbar-user" href="javascript:;">
                            <img class="img-circle" src="<?php echo base_url(); ?>asset/demo/images/profile.jpg">
                            <span class="hidden-xs"><?php echo $this->session->userdata('nama'); ?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu pull-right-xs">
                           
                            <li><a href="<?php echo base_url(); ?>index.php/admin_olshop/logout">Log Out</a></li>
                             <li><a href="<?php echo base_url(); ?>index.php/admin_olshop/admin">Seting</a></li>
                        </ul>
                    </li>
                </ul>        
            </nav>
        </header>