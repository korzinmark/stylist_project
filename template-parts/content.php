<section class="about">
    <div class="container">
        <div class="about__wrapper about__wrapper_service">
            <img src="<?php the_field('service_img'); ?>" alt="about" class="about__img about__img_service">

            <div class="about__descr about__descr_service">
                <h2 class="title"><?php the_title(); ?></h2>
                <div class="about__text">
                    <p><?php the_field('service-full_descr'); ?></p>

                    <h3 class="about__subheader"><?php the_field('service_title-1'); ?></h3>

                    <div class="about__list">
                        <?php the_field('service_title-1-descr'); ?>
                    </div>
                </div>
            </div>

            <div class="about__getting <?php the_field('service_margin'); ?>">
                <h3 class="about__subheader"><?php the_field('service_title-2'); ?></h3>

                <div class="about__list">
                    <?php the_field('service_title-2-descr'); ?>
                </div>
            </div>

            <div class="about__footer <?php the_field('service_margin'); ?>">
                <div class="about__price">
                    <p>Duration - <span><?php the_field('service_time'); ?></span> hours. <span><?php the_field('service_price'); ?>€</span> <br> If necessary, the next hour is <span><?php the_field('service_price_next'); ?>€</span></p>
                </div>

                <div class="about__btn-wrapper">
                    <a href="#form" class="button button_about"><?php the_field('service_btn1'); ?></a>
                    <a href="#form" class="button button_about button_ask"><?php the_field('service_btn2'); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section style="background: url('<?php the_field('other-services_bg'); ?>') center center/cover no-repeat" class="services">
    <div class="container">
        <h2 class="title title_center"><?php the_field('other-services_title'); ?></h2>

        <div class="services__wrapper">
				<?php 
					$posts = get_posts( array(
						'numberposts' => 3,
						'category_name'    => 'services',
						'orderby'     => 'rand',
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