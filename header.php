<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo("stylesheet_url");?>"/>
		<title><?php bloginfo('name'); ?></title>
	</head>
	
	<body>
		<div id="mainWrapper">
			<div id="header">
				<img src="<?php bloginfo("template_url"); ?>/masthead.png" alt="<?php bloginfo('name'); ?>"/>
					<?php wp_nav_menu(); ?>
			</div>