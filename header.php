<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo("stylesheet_url");?>"/>
		<title><?php bloginfo('name'); ?></title>
	</head>
	
	<body>
		<div id="wrapper">
			<div id="header">
				<h1><?php bloginfo('name'); ?></h1>
				<?php wp_nav_menu(); ?>
			</div>