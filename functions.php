<?php
function load_css(){
    wp_register_style('styles', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style('styles');
}

add_action('wp_enqueue_scripts', 'load_css');

function load_js(){
    wp_register_script('javascript', get_template_directory_uri() . '/js/myscript.js');
    wp_enqueue_style('javascript');
}

add_action('wp_enqueue_scripts', 'load_js');
?>