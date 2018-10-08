<?php
/*

Environment set up

*/
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
function load_scripts(){
    wp_enqueue_style('matel', get_template_directory_uri(). '/assets/css/main.css', '', '1.0', 'all');

    wp_enqueue_style('material', get_template_directory_uri(). '/assets/css/material-kit.css', '', '1.0', 'all');
    wp_enqueue_style('rial', get_template_directory_uri(). '/assets/css/demo/demo.css', '', '1.0', 'all');
    wp_enqueue_style('mincss', get_template_directory_uri(). '/assets/css/material-kit.css.map', '', '1.0', 'all');

    wp_enqueue_style('map', get_template_directory_uri(). '/assests/css/material-kit.min.css', '', '1.0', 'all');
     //js enqueue
     wp_enqueue_script( 'material-js', get_template_directory_uri(). '/assets/js/material-kit.min.js', 'jquery', '','all' );
}

add_action('wp_enqueue_scripts', 'load_scripts');