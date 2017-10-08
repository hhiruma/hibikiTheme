<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

		<script src='https://unpkg.com/vue'></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.16.1/axios.js"></script>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header>
			<!--
			<a href="<?php echo get_template_directory_uri(); ?>/home">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg">
				<img src="<?php echo get_template_directory_uri(); ?>/images/fox.jpg">
				<img src="<?php echo get_template_directory_uri(); ?>/images/foxhound.jpg">
			</a>
			-->
		</header>