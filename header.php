<!DOCTYPE html>
<html>
	<head>
		<title><?php bloginfo('title'); ?></title>
		<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css">
		<link href="<?php echo get_stylesheet_directory_uri(); ?>/foundation.css" rel="stylesheet" type="text/css">
		<?php wp_head(); ?>
	</head>
	<body>
		<div class="row">
	        <div class="large-12 columns">
	          <div class="nav-bar right">
	           <?php wp_nav_menu(); ?>
	          </div>
	          <h1><?php bloginfo('name'); ?><small><?php bloginfo('description'); ?></small></h1>
	          <hr/>
	        </div>
      	</div>
      	 <div class="row">