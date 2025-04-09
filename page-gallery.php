<?php 
/*
Template Name: Gallery
*/
?>

<?php 
    get_header();
?>

<section class="gallery">
    <div class="container">
        <h2 class="title title_center">Gallery</h2>

        <div class="gallery__wrapper">
            <img src="<?php the_field('gallery_img1'); ?>" alt="1" class="gallery__item">
            <img src="<?php the_field('gallery_img2'); ?>" alt="2" class="gallery__item">
            <img src="<?php the_field('gallery_img3'); ?>" alt="3" class="gallery__item">
            <img src="<?php the_field('gallery_img4'); ?>" alt="4" class="gallery__item">
            <img src="<?php the_field('gallery_img5'); ?>" alt="5" class="gallery__item">
            <img src="<?php the_field('gallery_img6'); ?>" alt="6" class="gallery__item">
            <img src="<?php the_field('gallery_img7'); ?>" alt="7" class="gallery__item">
            <img src="<?php the_field('gallery_img8'); ?>" alt="8" class="gallery__item">
            <img src="<?php the_field('gallery_img9'); ?>" alt="9" class="gallery__item">
        </div>
    </div>
</section>

<?php 
    get_footer();
?>