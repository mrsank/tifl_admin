<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Learn is fun">
	<meta name="author" content="translinguaindia.com">
	<title>Translingua Institute of Foriegn Languages</title>
	<link rel="favicon" href="<?php echo base_url();?>assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="<?php echo $base;?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo $base;?>assets/css/font-awesome.min.css">
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="<?php echo $base;?>assets/css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/da-slider.css" />
	<link rel="stylesheet" href="<?php echo $base;?>assets/css/style.css">
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="<?php echo $base;?>assets/js/html5shiv.js"></script>
	<script src="<?php echo $base;?>assets/js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
				<a class="navbar-brand" href="index.html">
					<img src="<?php echo $base; ?>assets/images/logo.png" alt="Techro HTML5 template"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right mainNav">
					<li <?php if($panel=="index") { ?>class="active"<?php } ?>><a href="<?php echo $base;?>index.php/front/">Home</a></li>
					<li <?php if($panel=="about") { ?>class="active"<?php } ?>><a href="<?php echo $base;?>index.php/front/aboutus">About Us</a></li>
					<li <?php if($panel=="achieve") { ?>class="active"<?php } ?>><a href="<?php echo $base;?>index.php/front/achievements">Our Achievements</a></li>
					<li><a href="#">Courses</a></li>
					<li><a href="#">Results</a></li>
					<li><a href="#">Time Table</a></li>
					<li <?php if($panel=="germany") { ?>class="active"<?php } ?>><a href="<?php echo $base;?>index.php/front/germany">Why German?</a></li>
					<li <?php if($panel=="gruppe") { ?>class="active"<?php } ?>><a href="<?php echo $base;?>index.php/front/gruppe">Gruppe Deutsch</a></li>
					<li <?php if($panel=="contact") { ?>class="active"<?php } ?>><a href="<?php echo $base;?>index.php/front/contactus">Contact</a></li>

				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->