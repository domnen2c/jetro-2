<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" <?php language_attributes() ?> >

<head>
	<meta charset="<?php bloginfo( 'charset' );  ?>">
	<!-- If you delete this meta tag World War Z will become a reality -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name') ?></title>

	<link rel="icon" href="<?php bloginfo(  'template_url' )?>/favicon.ico">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css">
	<?php wp_head(); ?>
</head>
<body <?php body_class();?>>

	<div class="row">
		<div class="columns small-12">
			<nav class="top-bar" data-topbar role="navigation">
				<ul class="title-area">
					<li class="name">
						<h1><a href="<?php echo esc_url( home_url() ) ?>">
							<?php bloginfo('name') ?>
						</a></h1>
					</li>
					<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
				</ul>

				<section class="top-bar-section">
					<!-- Right Nav Section -->
					<?php wp_nav_menu(array(
						'theme_location' => 'main-menu',
						'menu_class' => 'right',
						'container' => false
						));
					 ?>
					<!-- <ul class="right">
						<li class="active"><a href="index.html">Home</a></li>
						<li><a href="about.html">About Us</a></li>
						<li><a href="blog.html">Blog</a></li>
						<li><a href="portfolio.html">Portfolio</a></li>
						<li><a href="contact.html">Contact Us</a></li>
					</ul> -->
				</section>
			</nav>
		</div>
	</div>
	<!-- /.row menu -->
	<main class="row">
		<div class="columns ba-content">
		<b style="position: fixed; left:0; top:0; z-index: 10">
			<?php
				global $template;
				print_r(basename($template));
			 ?>
		</b>