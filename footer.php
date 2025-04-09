        <footer style="background: url('<?php the_field('footer_bg', 2); ?>') no-repeat top/cover" class="footer">
            <div class="container">
                <div class="footer__wrapper">
                    <div class="footer__logo">
						<?php the_custom_logo(); ?>
					</div>
                    <div class="footer__rights"><span><?php the_field('year', 2); ?></span> <?php the_field('rights', 2); ?></div>
                    <div class="footer__location"><?php the_field('location', 2); ?></div>
                    <a href="tel:<?php the_field('phone', 2); ?>" class="footer__contact">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img2/phone.svg" alt="phone">
                        <?php the_field('phone', 2); ?>
                    </a>
                    <div class="footer__social">
                        <a target="_blank" href="<?php the_field('instagram-link', 2); ?>" class="footer__social-item">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img2/social/instagram.svg" alt="instagram">
                        </a>
                        <a target="_blank" href="<?php the_field('facebook-link', 2); ?>" class="footer__social-item">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img2/social/facebook.svg" alt="facebook">
                        </a>
                        <a target="_blank" href="<?php the_field('telegram-link', 2); ?>" class="footer__social-item">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img2/social/telegram.svg" alt="telegram">
                        </a>
                    </div>
                </div>
            </div>
        </footer>

        <div class="overlay">
            <div class="modal" id="thanks">
                <div class="modal__close">&times;</div>
                <div class="modal__title">Thank you for your message!</div>
                <div class="modal__descr">I will contact you shortly!</div>
            </div>
        </div> 

        <?php 
            wp_footer();
        ?>
    </body>
</html> 