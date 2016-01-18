<!DOCTYPE html>
<?php include('inc/inc-header.php') ?>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link rel="icon" href="../../favicon.ico">	
		<?php wp_head(); ?>	
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>
	
	<body <?php body_class() ?>>
	
	<!-- nav -->
	<nav class="navbar">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand visible-xs" href="#">UK Open Government</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<?php wp_nav_menu($mainnav); ?>
				<form class="navbar-form navbar-right nav-search" role="search" action="<?php echo get_site_url() ?>" method="get">
					<div class="form-group">
						<label for="search" class="sr-only">Search the site</label>
						<input type="search" value="" id="search" name="s" class="search-field form-control" placeholder="Search">
						<button type="submit"><span class="glyphicon glyphicon-search"></span></button>
					</div>
				</form>
			</div>
		</div>
	</nav><!--.navbar-->

	<!--header-->
	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col col-sm-5">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/australia_silhouette.png" alt="Australian Open Government" class="logo pull-left img-responsive">
					<h1><span>UK Open</span>Government</h1>
					<p class="strap">Civil Society Network</p>
				</div>
				<div class="col col-sm-7">
					<p class="lead text-right hidden-xs"><?php echo get_bloginfo ( 'description' )?></p>
				</div>
			</div>
			<div class="rectangles"></div>
	    </div><!-- /.container -->
	</header>

	<div class="wrapper">

		<?php if (!is_front_page() && ( 'post' !== get_post_type() ) && ( 'event' !== get_post_type() ) && ('resource' !== get_post_type() ) && function_exists('bcn_display')) : ?>
		<div class="container">
			<div class="row wide-gutter-row">
				<div class="col-sm-8 wide-gutter-col breadcrumb">
					<?php bcn_display(); ?>
				</div>
			</div>
		</div>
		<?php endif ?>
		
		<?php if ( 'event' == get_post_type() && !is_tax('countries') ) : ?>
		<div class="container">
			<div class="row wide-gutter-row">
				<div class="col-sm-8 wide-gutter-col breadcrumb">
					<a href="<?= site_url() ?>">Open Gov</a> > <a href="<?= site_url() ?>/events">Events</a> > <?= single_post_title() ?>
				</div>
			</div>
		</div>
		<?php endif ?>
		
		<?php if ( 'post' == get_post_type() OR is_tax('countries') ) : ?>
		<div class="container">
			<div class="row">
				<div class="col-lg-offset-2 col-lg-8 breadcrumb">
					<a href="<?= site_url() ?>">Open Gov</a> > <a href="<?= site_url() ?>/updates">Updates</a> > <?= single_post_title() ?> <?php if (is_category()) { echo single_cat_title( '', true ); }; ?> <?php if (is_tax('countries')) { echo get_queried_object()->name; }; ?>
				</div>
			</div>
		</div>
		<?php endif ?>
		
		<?php if ( is_single() && 'resource' == get_post_type() ) : ?>
		<div class="container">
			<div class="row wide-gutter-row">
				<div class="col-lg-offset-2 col-lg-8 wide-gutter-col breadcrumb">
					<a href="<?= site_url() ?>">Open Gov</a> > <a href="<?= site_url() ?>/resources">Resources</a> > <?= get_queried_object()->post_title ?>
				</div>
			</div>
		</div>
		<?php endif ?>
		
		<?php if ( is_tax() && 'resource' == get_post_type() ) : ?>
		<div class="container">
			<div class="row wide-gutter-row">
				<div class=" col-sm-8 wide-gutter-col breadcrumb">
					<a href="<?= site_url() ?>">Open Gov</a> > <a href="<?= site_url() ?>/resources">Resources</a> > <?= get_queried_object()->name ?>
				</div>
			</div>
		</div>
		<?php endif ?>
		

	
	