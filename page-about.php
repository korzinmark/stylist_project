<?php 
/*
Template Name: About me
*/
?>

<?php 
    get_header();
?>

<section class="about">
    <div class="container">
        <div class="about__wrapper about__wrapper_me">
            <img src="<?php the_field('about_img'); ?>" alt="about" class="about__img about__img_me">

            <div class="about__descr">
                <h2 class="title"><?php the_field('about_title'); ?></h2>
                <div class="about__text about__text_me">
                    <?php the_field('about_descr'); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php 
    get_footer();
?>