<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Minovate - Admin Dashboard</title>
        <link rel="icon" type="image/ico" href="<?php echo config_item('assets'); ?>images/favicon.ico" />
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- vendor css files -->
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
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div id="wrap" class="animsition">

            <div class="page page-core page-login">

                <div class="text-center">
        			<h1>Selamat Datang di Sistem Informasi Akademik Online</h1>
        			<h3 class="text-light text-white"><span class="text-lightred">SISFO</span>AKAD</h3>
        		</div>

                <div class="container w-420 p-15 bg-white mt-40 text-center">

                    <h2 class="text-light text-greensea">FORM LOGIN</h2>

                        <?php echo form_open('web/login'); ?>
                        <div class="form-group">
							<?php echo form_input($username); ?>
                        </div>
                        <div class="form-group">
							<?php echo form_input($password); ?>
                        </div>
						<br/><br/>
						<?php echo form_submit('submit', 'Log In', ' class="btn btn-block btn-info btn-sm btn-kirim-login"');?> 
						<br/>
						<?php echo form_reset('submit', 'Hapus',' class="btn btn-block btn-warning btn-sm btn-kirim-login"');?>
						<?php echo form_close(); ?>

                </div>

            </div>
        </div>
        <!--/ Application Content -->
        <script src="../../ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo config_item('assets'); ?>js/vendor/jquery/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="<?php echo config_item('assets'); ?>js/vendor/bootstrap/bootstrap.min.js"></script>

        <script src="<?php echo config_item('assets'); ?>js/vendor/jRespond/jRespond.min.js"></script>

        <script src="<?php echo config_item('assets'); ?>js/vendor/sparkline/jquery.sparkline.min.js"></script>

        <script src="<?php echo config_item('assets'); ?>js/vendor/slimscroll/jquery.slimscroll.min.js"></script>

        <script src="<?php echo config_item('assets'); ?>js/vendor/animsition/js/jquery.animsition.min.js"></script>

        <script src="<?php echo config_item('assets'); ?>js/vendor/screenfull/screenfull.min.js"></script>
        <!--/ vendor javascripts -->
        <script src="<?php echo config_item('assets'); ?>js/main.js"></script>

    </body>
</html>
