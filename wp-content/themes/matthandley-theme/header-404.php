<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/scroll.js"></script>

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/grid.css">

	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/css/icon/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/css/icon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/css/icon/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/css/icon/apple-touch-icon-76x76.png">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/css/icon/favicon-16x16.png" sizes="16x16">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/css/icon/favicon-32x32.png" sizes="32x32">
	<meta name="msapplication-TileColor" content="#0edd96">
</head>
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?> </title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body>

	<header id="top" <?php if (is_home()) { echo 'class="banner"'; } ?>>
		<a href="<?php bloginfo( 'url' ); ?> "><div class="logo-404"></div></a>
		<div class="container-fluid">