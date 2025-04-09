<?php 
/*
Template Name: Connect
*/
?>

<?php 
    get_header();
?>

<section class="contacts">
    <div class="container">
        <div class="contacts__wrapper">
            <div class="contacts__descr">
                <h2 class="title title_contact"><?php the_field('contacts_title'); ?></h2>

                <div class="contacts__text">
                    <?php the_field('contacts_descr'); ?>
                </div>

                <div class="contacts__email">E-mail: <a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a></div>
                <div class="contacts__phone">Phone number: <a href="tel:<?php the_field('phone', 2); ?>"><?php the_field('phone', 2); ?></a></div>
                <div class="contacts__social">
                    <div class="contacts__social-text">My social networks:</div>
                    <div class="contacts__icons">
                        <a href="<?php the_field('instagram-link', 2); ?>" class="contacts__social-item">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img2/social/instagram.svg" alt="instagram">
                        </a>
                        <a href="<?php the_field('facebook-link', 2); ?>" class="contacts__social-item">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img2/social/facebook.svg" alt="facebook">
                        </a>
                        <a href="<?php the_field('telegram-link', 2); ?>" class="contacts__social-item">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img2/social/telegram.svg" alt="telegram">
                        </a>
                    </div>
                </div>
            </div>

            <img src="<?php the_field('contacts_img'); ?>" alt="contacts" class="contacts__img">
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

<?php 
    get_footer();
?>