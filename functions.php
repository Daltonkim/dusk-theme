<?php
/*

Environment set up

 */
if (!defined('ABSPATH')) {
    exit;
}
function load_scripts()
{
    wp_enqueue_style('matel', get_template_directory_uri() . '/assets/css/main.css', '', '1.0', 'all');
    wp_enqueue_style('material', get_template_directory_uri() . '/assets/css/material-kit.css', '', '1.0', 'all');
    wp_enqueue_style('rial', get_template_directory_uri() . '/assets/demo/demo.css', '', '1.0', 'all');
    wp_enqueue_style('mincss', get_template_directory_uri() . '/assets/css/material-kit.css.map', '', '1.0', 'all');
    wp_enqueue_style('map', get_template_directory_uri() . '/assets/css/material-kit.min.css', '', '1.0', 'all');
    wp_enqueue_style('main-styles', get_template_directory_uri() . '/style.css', '', '1.0', 'all');
 
    //js enqueue
}

add_action('wp_enqueue_scripts', 'load_scripts');

//register nav menus one in the footer another in main menu
register_nav_menus(
    array(
        'my_main_menu' => 'Main Menu',
        'my_footer_menu' =>'Footer Menu'
    )
);
function theme_prefix_setup(){
add_theme_support('custom-logo', array(
      'height'=> 52,
      'width' => 52,
      'flex-height'=> true,
      'flex-width'->true,
));
}
/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
function new_excerpt_more( $more ) {
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');
add_action( 'after_setup_theme', 'theme_prefix_setup' );