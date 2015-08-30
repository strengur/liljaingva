<!DOCTYPE html>

<html>
	<head>
<!-- 		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" /> -->
		<meta charset="utf-8">
		<?php wp_head(); ?>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Lilja Ingva - ÍAK einkaþjálfari</title>
						
<!-- 		<link rel="stylesheet" href="http://basehold.it/30/ff00ff"> -->
	</head>
	<body>
		<div class="wrapper">
			
			<div class="main-menu">
				<?php wp_nav_menu( array('menu' => 'Side-Menu')); ?>
			</div>

			
			<div class="logo">
				<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory');?>/images/lilja-ingva-logo.svg"></a>
			</div>
			
			<div class="menu-icon">
					<img id="open" src="<?php bloginfo('template_directory');?>/images/icons/menu-icon-open.svg">
					<img id="close" src="<?php bloginfo('template_directory');?>/images/icons/menu-icon-close.svg">
			</div>

