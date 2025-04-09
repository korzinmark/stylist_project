<?php 
add_action('wp_enqueue_scripts', 'stylist_styles'); 
add_action('wp_enqueue_scripts', 'stylist_scripts'); 

function stylist_styles() {
    wp_enqueue_style('stylist-style', get_stylesheet_uri() );
};

function stylist_scripts() {
    wp_enqueue_script('tiny-slider-scripts', 'https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js');
    wp_enqueue_script('jquery-scripts', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js');
    wp_enqueue_script('stylist-scripts', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), null, true);
};

add_theme_support('custom-logo');
add_theme_support('menus');

add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 3);
function filter_nav_menu_link_attributes($atts, $item, $args) {
    if ($args->menu === 'Main') {
        $atts['class'] = 'header__link';

        if($item->current) {
            $atts['class'] .= ' header__link-active';            
        }
    };

    return $atts;
}
?>