<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php the_title(); ?> | <?php bloginfo('name'); ?></title>
	<meta name="title" content="<?php the_title(); ?> | <?php bloginfo('name'); ?>">
	<meta name="description" content="Discover new facets of your style with a personal stylist. Individual consultations for the perfect look in any situation.">
	<meta name="theme-color" content="#eae0d6">

	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://metatags.io/">
	<meta property="og:title" content="<?php the_title(); ?> | <?php bloginfo('name'); ?>">
	<meta property="og:description" content="Discover new facets of your style with a personal stylist. Individual consultations for the perfect look in any situation.">
	<meta property="og:image" content="img/og_picture.jpg">

	<!-- Twitter -->
	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:url" content="https://metatags.io/">
	<meta property="twitter:title" content="<?php the_title(); ?> | <?php bloginfo('name'); ?>">
	<meta property="twitter:description" content="Discover new facets of your style with a personal stylist. Individual consultations for the perfect look in any situation.">
	<meta property="twitter:image" content="img/og_picture.jpg">

	<!-- Favicon  -->
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo bloginfo('template_url'); ?>/assets/img2/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo bloginfo('template_url'); ?>/assets/img2/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo bloginfo('template_url'); ?>/assets/img2/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php echo bloginfo('template_url'); ?>/assets/img2/favicon/site.webmanifest">

	<?php 
        wp_head();
    ?>
</head>
<body>
	<div class="menu">
		<div class="menu__block">
			<div class="menu__close">
				<svg width="30" height="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
			</div>
			<nav>
				<?php 
					wp_nav_menu( [
						'menu'            => 'Main',
						'container'       => false,
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'items_wrap'      => '<ul class="menu__list">%3$s</ul>',
						'depth'           => 1
					] );
				?>
			</nav>
		</div>
		<div class="menu__overlay"></div>
	</div>

	<header style="background: url('<?php the_field('header_bg', 2); ?>') no-repeat top/cover" class="header">
		<div class="hamburger">
			<span></span>
			<span></span>
			<span></span>
		</div>
		<div class="container">
			<div class="header__wrapper">
				<div class="header__logo">
						<?php the_custom_logo(); ?>
				</div>
				<nav class="header__nav">
					<?php 
						wp_nav_menu( [
							'menu'            => 'Main',
							'container'       => false,
							'menu_class'      => 'header__nav',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'items_wrap'      => '<ul class="header__menu">%3$s</ul>',
							'depth'           => 1
						] );
					?>
				</nav>
				<a href="tel:<?php the_field('phone', 2); ?>" class="header__contact">
					<img src="<?php echo bloginfo('template_url'); ?>/assets/img2/phone.svg" alt="phone">
					<?php the_field('phone', 2); ?>
				</a>
			</div>
		</div>
	</header>