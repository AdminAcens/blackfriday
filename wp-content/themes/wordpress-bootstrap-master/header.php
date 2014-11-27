<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<title><?php wp_title( '|', true, 'right' ); ?></title>
				
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
				
		<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
		<![endif]-->

		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

		<!-- theme options from options panel -->
		<?php get_wpbs_theme_options(); ?>

		<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" type="image/x-icon">
		<link rel="icon" href="/favicon.ico" type="image/x-icon">

		<!-- typeahead plugin - if top nav search bar enabled -->
		<?php require_once('library/typeahead.php'); ?>
				
	</head>	
	<body class="bg-body" data-spy="scroll" data-target="#menu">

	<!-- <div class="container text-center">
		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation" > -->
            <div class="container">

				<div class="row">

					<div class="col-md-5">
						<a href="<?php echo home_url('/'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logobf.png" alt="" class="img-responsive" /></a>
					</div>

					<div class="col-md-7 col-sm-12 col-xs-12 well-nocolor" id="menu">
						<ul class="nav nav-pills fixed pull-right">
				  		<li class="active"><a href="<?php echo home_url('/'); ?>#oque">O que é o Black Friday?</a></li>
				  		<li><a href="<?php echo home_url('/'); ?>#promocao">Nossa promoção!</a></li>
				  		<li><a href="<?php echo home_url('/'); ?>#pacotes">Os pacotes</a></li>
				  		<li><a href="<?php echo home_url('/'); ?>#compartilhe">Compartilhe!</a></li>
						</ul>	
					</div>
				</div>
			</div>
		</div>
	</div>