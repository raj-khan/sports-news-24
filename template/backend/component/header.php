<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin |  Sports News 24 </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/backend/assets/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <!-- jvectormap -->
    <link rel="stylesheet"
          href="<?php echo base_url(); ?>template/backend/assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!--    <link rel="stylesheet" href="-->
    <?php //echo base_url();     ?><!--template/backend/assets/plugins/colorpicker/bootstrap-colorpicker.min.css">-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/backend/assets/plugins/select2/select2.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/backend/assets/dist/css/AdminLTE.min.css">

    <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/backend/assets/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet"
          href="<?php echo base_url(); ?>template/backend/assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/backend/assets/css/fileinput.css">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="favicon.png">

    <!-- Datepicker-->
    <link rel="stylesheet"
          href="<?php echo base_url(); ?>template/backend/assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">


    <!--    Daterangepicker-->
    <link rel="stylesheet"
          href="<?php echo base_url(); ?>template/backend/assets/plugins/daterangepicker/daterangepicker.css">
    <!--<link rel="stylesheet" href="<?php echo base_url(); ?>template/backend/assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">-->

    <script src="<?php echo base_url(); ?>template/backend/assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>template/backend/assets/js/fileinput.js"></script>
    <script src="<?php echo base_url(); ?>template/backend/assets/js/fr.js"></script>
    <script src="<?php echo base_url(); ?>template/backend/assets/js/es.js"></script>
    <script src="<?php echo base_url(); ?>template/backend/assets/js/theme.js"></script>
    <script src="<?php echo base_url(); ?>template/backend/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>template/backend/assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

    <!--    Timepicker-->
    <link rel="stylesheet"
          href="<?php echo base_url(); ?>template/backend/assets/plugins/timepicker/bootstrap-timepicker.min.css">
    <script src="<?php echo base_url(); ?>template/backend/assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <!--<script src="<?php echo base_url(); ?>template/backend/assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>-->
    <!-- DataTables -->
    <link rel="stylesheet"
          href="<?php echo base_url(); ?>template/backend/assets/plugins/datatables/dataTables.bootstrap.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">

        <!-- Logo -->
        <a href="<?php echo base_url(); ?>Super_admin" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>Admin</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Admin</b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav" style="text-align: right;">
                    <!-- Tasks: style can be found in dropdown.less -->
                    <li class="dropdown tasks-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-user"></i>
                            <?php echo $this->session->userdata('name'); ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li><a href="<?php echo base_url(); ?>admin/change-password"><h3 style="font-size: 18px; font-weight: 700;"><i class="fa fa-key">Change
                                                    Password </i></h3></a></li>
                                    <li><a href="<?php echo base_url(); ?>Super_admin/logout"> <h3
                                                style="font-size: 18px; font-weight: 700;"><i class="fa fa-power-off">
                                                    Logout </i></h3> </a> </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->