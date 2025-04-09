<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php bloginfo('name'); ?></title>
	<meta name="title" content="<?php bloginfo('name'); ?>">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="theme-color" content="#eae0d6">

	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://www.irenastyle.eu/">
	<meta property="og:title" content="<?php bloginfo('name'); ?>">
	<meta property="og:description" content="<?php bloginfo('description'); ?>">
	<meta property="og:image" content="<?php echo bloginfo('template_url'); ?>/assets/img/og_picture.jpg">

	<!-- Twitter -->
	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:url" content="https://www.irenastyle.eu/">
	<meta property="twitter:title" content="<?php bloginfo('name'); ?>">
	<meta property="twitter:description" content="<?php bloginfo('description'); ?>">
	<meta property="twitter:image" content="<?php echo bloginfo('template_url'); ?>/assets/img/og_picture.jpg">

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

	<section style="background: url('<?php the_field('promo_bg'); ?>') center center/cover no-repeat" class="promo">
		<div class="hamburger">
			<span></span>
			<span></span>
			<span></span>
		</div>
		<div class="container">
			<header class="header header_main">
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
			</header>

			<div class="promo__wrapper">
				<h1 class="promo__header"><?php the_field('promo_title'); ?><br> <span><?php the_field('promo_name'); ?></span></h1>
				<h2 class="promo__subheader"><?php the_field('promo_subtitle'); ?></h2>
				<a href="#form" class="button"><?php the_field('promo_btn'); ?></a>
				<div style="content: url('<?php the_field('promo_mini-img'); ?>');" class="promo__butterfly"></div>
			</div>

			<div style="content: url('<?php the_field('promo_img'); ?>');" class="promo__main"></div>
		</div>
	</section>

	<section class="about">
		<div class="container">
			<div class="about__wrapper">
				<img src="<?php the_field('welcome_img'); ?>" alt="about_img" class="about__img">

				<div class="about__descr">
					<h2 class="title"><?php the_field('welcome_title'); ?></h2>
					<div class="about__text"><?php the_field('welcome_descr'); ?></div>
				</div>
			</div>
		</div>
	</section>

	<section style="background: url('<?php the_field('popular_bg'); ?>') center center/cover no-repeat" class="services">
		<div class="container">
			<h2 class="title title_center"><?php the_field('popular_title'); ?></h2>

			<div class="services__wrapper">
				<?php 
					$posts = get_posts( array(
						'numberposts' => -1,
						'category_name'    => 'popular_services',
						'orderby'     => 'date',
						'order'       => 'ASC',
						'post_type'   => 'post',
						'suppress_filters' => true, 
					) );

					foreach( $posts as $post ){
						setup_postdata($post);
						?>
						<div class="services__card">
							<img src="<?php the_field('service_img'); ?>" alt="wardrobe" class="services__img">
							<div class="services__descr">
								<h3 class="services__subtitle"><?php the_title(); ?></h3>
								<div class="services__text"><?php the_field('service_descr'); ?></div>
							</div>
							<hr>
							<div class="services__footer">
								<div class="services__price"><?php the_field('service_price'); ?>€</div>
								<a href="<?php echo get_permalink(); ?>" class="button button_mini"><?php the_field('service_btn'); ?></a>
							</div>
						</div>
						<?php
					}

					wp_reset_postdata($post);
				?>
			</div>
		</div>
	</section>

	<section class="carousel">
		<h2 class="title title_center">Examples of my work</h2>

		<div class="container">
			<div class="carousel__inner">
				<div>
					<img src="<?php the_field('slider_img1'); ?>" alt="style1">
				</div>
				<div>
					<img src="<?php the_field('slider_img2'); ?>" alt="style2">
				</div>
				<div>
					<img src="<?php the_field('slider_img3'); ?>" alt="style3">
				</div>
				<div>
					<img src="<?php the_field('slider_img4'); ?>" alt="style4">
				</div>
				<div>
					<img src="<?php the_field('slider_img5'); ?>" alt="style5">
				</div>
				<div>
					<img src="<?php the_field('slider_img6'); ?>" alt="style6">
				</div>
			</div>

			<button type="button" class="prev"><img src="<?php echo bloginfo('template_url'); ?>/assets/img2/arrows/left.svg" alt="arrow"></button>
			<button type="button" class="next"><img src="<?php echo bloginfo('template_url'); ?>/assets/img2/arrows/right.svg" alt="arrow"></button>
		</div>
	</section>

	<section style="background: url('<?php the_field('form_bg', 2); ?>') center center/cover no-repeat" class="form" id="form">
		<div class="container">
			<h2 class="title title_left"><?php the_field('form_title', 2); ?></h2>
			<h3 class="form__subtitle"><?php the_field('form_subtitle', 2); ?></h3>

			<form id="contact-form" class="form__area" action="#">
                <input autocomplete="on" class="form__input" name="name" required placeholder="<?php the_field('input_name', 2); ?>" type="text"> 
                <input autocomplete="on" class="form__input" name="phone" required placeholder="<?php the_field('input_phone', 2); ?>"> 
                <input autocomplete="on" class="form__input" name="email" required placeholder="<?php the_field('input_email', 2); ?>" type="email"> 
				<textarea required class="form__textarea" name="textarea" placeholder="<?php the_field('input_text', 2); ?>"></textarea>
				<div class="form__privacy">
					<input name="checkbox" class="form__checkbox" required type="checkbox">
					<span><?php the_field('privacy_text', 2); ?> <a target="_blank" href="/privacy"><?php the_field('privacy_link', 2); ?></a></span>
				</div>
                <button class="button button_submit">Send message</button>
            </form>
		</div>
	</section>

	<?php 
		get_footer();
	?>
