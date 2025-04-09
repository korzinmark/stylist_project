<?php 
/*
Template Name: Services
*/
?>

<?php 
    get_header();
?>

<section class="services">
    <div class="container">
        <h2 class="title title_center">All my services</h2>

        <div class="services__wrapper">
				<?php 
					$posts = get_posts( array(
						'numberposts' => -1,
						'category_name'    => 'services',
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

<?php 
    get_footer();
?>