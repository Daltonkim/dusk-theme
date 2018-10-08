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
    wp_enqueue_style('rial', get_template_directory_uri() . '/assets/css/demo/demo.css', '', '1.0', 'all');
    wp_enqueue_style('mincss', get_template_directory_uri() . '/assets/css/material-kit.css.map', '', '1.0', 'all');
    wp_enqueue_style('sass', get_template_directory_uri() . '/scss/material-kit.scss', '', '1.0', 'all');

    wp_enqueue_style('map', get_template_directory_uri() . '/assests/css/material-kit.min.css', '', '1.0', 'all');
     //js enqueue
    wp_enqueue_script('material-js', get_template_directory_uri() . '/incentro-v10-05.wdgt.hyperesources/incentrov1005_hype_generated_script.js?29907', 'jquery', '', 'all');
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

add_action( 'after_setup_theme', 'theme_prefix_setup' );