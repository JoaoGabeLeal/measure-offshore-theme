<?php 
function scroll_javascript() {
    // Enfileira o script JavaScript personalizado
    wp_enqueue_script('scroll', get_template_directory_uri() . '/assets/javascript/scroll.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'scroll_javascript');

function navbar_javascript() {
    // Enfileira o script JavaScript personalizado
    wp_enqueue_script('navbar', get_template_directory_uri() . '/assets/javascript/navbar.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'navbar_javascript');

function video_javascript() {
    // Enfileira o script JavaScript personalizado
    wp_enqueue_script('video', get_template_directory_uri() . '/assets/javascript/video.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'video_javascript');