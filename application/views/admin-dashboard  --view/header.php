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
                    <li class="hidden-xs">
                        <form class="navbar-form">
                            <div class="navbar-search">
                                <input type="text" placeholder="Search &hellip;" class="form-control">
                                <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="javascript:;">
                            <i class="glyphicon glyphicon-envelope"></i>
                            <span class="badge badge-up badge-dark badge-small">3</span>
                        </a>
                        <ul class="dropdown-menu dropdown-messages pull-right">
                            <li class="dropdown-title bg-inverse">New Messages</li>
                            <li class="unread">
                                <a href="javascript:;" class="message">
                                    <img class="message-image img-circle" src="<?php echo base_url(); ?>asset/demo/images/avatars/1.jpg">

                                    <div class="message-body">
                                        <strong>Ernest Kerry</strong><br>
                                        Hello, You there?<br>
                                        <small class="text-muted">8 minutes ago</small>
                                    </div>
                                </a>
                            </li>
                            <li class="unread">
                                <a href="javascript:;" class="message">
                                    <img class="message-image img-circle" src="<?php echo base_url(); ?>asset/demo/images/avatars/3.jpg">

                                    <div class="message-body">
                                        <strong>Don Mark</strong><br>
                                        I really appreciate your &hellip;<br>
                                        <small class="text-muted">21 hours</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" class="message">
                                    <img class="message-image img-circle" src="<?php echo base_url(); ?>asset/demo/images/avatars/8.jpg">

                                    <div class="message-body">
                                        <strong>Jess Ronny</strong><br>
                                        Let me know when you free<br>
                                        <small class="text-muted">5 days ago</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" class="message">
                                    <img class="message-image img-circle" src="<?php echo base_url(); ?>asset/demo/images/avatars/7.jpg">

                                    <div class="message-body">
                                        <strong>Wilton Zeph</strong><br>
                                        If there is anything else &hellip;<br>
                                        <small class="text-muted">06/10/2014 5:31 pm</small>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-footer">
                                <a href="javascript:;"><i class="fa fa-share"></i> See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="javascript:;">
                            <i class="glyphicon glyphicon-globe"></i>
                            <span class="badge badge-up badge-danger badge-small">3</span>
                        </a>
                        <ul class="dropdown-menu dropdown-notifications pull-right">
                            <li class="dropdown-title bg-inverse">Notifications (3)</li>
                            <li>
                                <a href="javascript:;" class="notification">
                                    <div class="notification-thumb pull-left">
                                        <i class="fa fa-clock-o fa-2x text-info"></i>
                                    </div>
                                    <div class="notification-body">
                                        <strong>Call with John</strong><br>
                                        <small class="text-muted">8 minutes ago</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" class="notification">
                                    <div class="notification-thumb pull-left">
                                        <i class="fa fa-life-ring fa-2x text-warning"></i>
                                    </div>
                                    <div class="notification-body">
                                        <strong>New support ticket</strong><br>
                                        <small class="text-muted">21 hours ago</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" class="notification">
                                    <div class="notification-thumb pull-left">
                                        <i class="fa fa-exclamation fa-2x text-danger"></i>
                                    </div>
                                    <div class="notification-body">
                                        <strong>Running low on space</strong><br>
                                        <small class="text-muted">3 days ago</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" class="notification">
                                    <div class="notification-thumb pull-left">
                                        <i class="fa fa-user fa-2x text-muted"></i>
                                    </div>
                                    <div class="notification-body">
                                        New customer registered<br>
                                        <small class="text-muted">06/18/2014 12:31 am</small>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-footer">
                                <a href="javascript:;"><i class="fa fa-share"></i> See all notifications</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle navbar-user" href="javascript:;">
                            <img class="img-circle" src="<?php echo base_url(); ?>asset/demo/images/profile.jpg">
                            <span class="hidden-xs"><?php echo $this->session->userdata('nama'); ?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu pull-right-xs">
                            <li class="arrow"></li>
                            <li><a href="pages-profile.html">Profile</a></li>
                            <li><a href="javascript:;"><span class="badge badge-danger pull-right">2</span> Inbox</a></li>
                            <li><a href="javascript:;">Messages</a></li>
                            <li><a href="javascript:;">Settings</a></li>
                            <li class="divider"></li>
                            <li><a href="<?php echo base_url(); ?>admin_olshop/logout">Log Out</a></li>
                        </ul>
                    </li>
                </ul>        
            </nav>
        </header>