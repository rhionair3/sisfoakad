<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo $judul; ?></title>
        <link rel="icon" type="image/ico" href="<?php echo config_item('assets'); ?>images/favicon.ico" />
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php echo config_item('assets'); ?>css/vendor/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo config_item('assets'); ?>css/vendor/animate.css">
        <link rel="stylesheet" href="<?php echo config_item('assets'); ?>css/vendor/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo config_item('assets'); ?>js/vendor/animsition/css/animsition.min.css">


        <!-- project main css files -->
        <link rel="stylesheet" href="<?php echo config_item('assets'); ?>css/main.css">
        <!--/ stylesheets -->
        <script src="<?php echo config_item('assets'); ?>js/vendor/modernizr/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <!--/ modernizr -->
</head>
<body id="minovate" class="appWrapper">
    <div id="wrap" class="animsition">

        <section id="header">
            <header class="clearfix">

                <!-- Branding -->
                <div class="branding">
                    <a class="brand" href="index.html">
                        <span><strong>SISFO</strong>AKAD</span>
                    </a>
                    <a href="#" class="offcanvas-toggle visible-xs-inline"><i class="fa fa-bars"></i></a>
                </div>
                <!-- Branding end -->

                <ul class="nav-left pull-left list-unstyled list-inline">
                    <li class="sidebar-collapse divided-right">
                        <a href="#" class="collapse-sidebar">
                            <i class="fa fa-outdent"></i>
                        </a>
                    </li>
                </ul>
                <!-- Left-side navigation end -->
                <!-- Right-side navigation -->
                <ul class="nav-right pull-right list-inline">
                    <li class="dropdown nav-profile">

                        <a href class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?php echo config_item('assets'); ?>images/profile-photo.jpg" alt="" class="img-circle size-30x30">
                            <span><?php echo $bio; ?></span>
                        </a>

                    </li>
                    <li><a href="<?php echo base_url(); ?>web/logout"><i class="fa fa-sign-out"></i></a></li>
                </ul>
                <!-- Right-side navigation end -->



            </header>

        </section>