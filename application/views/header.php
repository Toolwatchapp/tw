<!DOCTYPE html>
<html lang="en">
<head>
    <title>Toolwatch • <?php if(isset($title)) echo $title; else echo 'Easily measure and track the accuracy of your mechanical watch'; ?></title>
    <meta property="og:title" content="<?php if(isset($title)) echo $title; else echo 'Easily measure and track the accuracy of your mechanical watch'; ?>">
    <meta name="keywords" content="toolwatch, toolwatchapp, accuracy, precision, measure, mechanical watch, manual winding, automatic winding">
    <meta name="description" content="Toolwatch makes it super easy to measure the accuracy of any mechanical watch. Keep your watch’s accuracy at its best with Toolwatch.">
    <meta property="og:description" content="Toolwatch makes it super easy to measure the accuracy of any mechanical watch. Keep your watch’s accuracy at its best with Toolwatch.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='//fonts.googleapis.com/css?family=Raleway:500,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Raleway:700,400' rel='stylesheet' type='text/css'>
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo ico_url('apple-icon-57x57.png')?>">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo ico_url('apple-icon-60x60.png')?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo ico_url('apple-icon-72x72.png')?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo ico_url('apple-icon-76x76.png')?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo ico_url('apple-icon-114x114.png')?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo ico_url('apple-icon-120x120.png')?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo ico_url('apple-icon-144x144.png')?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo ico_url('apple-icon-152x152.png')?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo ico_url('apple-icon-180x180.png')?>">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo ico_url('android-icon-192x192.png')?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo ico_url('favicon-32x32.png')?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo ico_url('favicon-96x96.png')?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo ico_url('favicon-16x16.png')?>">
    <link rel="manifest" href="<?php echo ico_url('manifest.json')?>">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/js/MediaElement/mediaelementplayer.css" />
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo ico_url('ms-icon-144x144.png')?>">
    <meta name="theme-color" content="#ffffff">
	<?php
		foreach($styleSheets as $css) { echo '<link rel="stylesheet" href="'.css_url($css).'">'; }
		foreach($javaScripts as $js) { echo '<script src="'.js_url($js).'"></script>'; }
	?>
	<script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-59148878-1', 'auto');
          ga('send', 'pageview');
    </script>
    <!--[if lt IE 8]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<div class="modal fade" id="pageModal" tabindex="-1" role="dialog" aria-labelledby="pageModal" aria-hidden="true" data-keyboard="true" data-backdrop="static">
		<div class="modal-dialog  modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
			     <p>Handcrafted with love in Lausanne, Switzerland, near the Watch Valley. Copyright 2015.</p>
            </div>
		</div>
	  </div>
	</div>
    <header class="navbar <?php echo $headerClass; ?>">
        <div class="container container-fluid">
            <div class="row">
               <div class="col-md-12"><a href="<?php echo base_url(); ?>"><div class="logo"></div></a></div>
            </div>
            <div class="row collapse navbar-collapse" id="nav-menu">
                <div class="col-md-12">
                    <ul class="nav navbar-nav">
                        <?php 
                            if($userIsLoggedIn)
                            {
                                echo '<li><a href="/logout/" title="Logout">Logout</a></li>';
                                echo '<li><a href="/measures/" title="Measures">Measures</a></li>';
                            }
                            else
                            {
                                
                                echo '<li><a href="#" title="Login" data-toggle="modal" data-target="#pageModal" data-modal-update="true" data-href="/login/">Login</a></li>';
                                echo '<li><a href="#" title="Measures" data-toggle="modal" data-target="#pageModal" data-modal-update="true" data-href="/login/">Measures</a></li>';
                            }
                        ?>
						<li><a href="/watch-tips/">Watch Tips</a></li>
						<li><a href="/about/">About</a></li>
						<li><a href="/contact/">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-menu">
						<span class="fa fa-caret-up"></span>
					</button>
                </div>
            </div>
        </div>
    </header>