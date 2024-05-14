<?php 
function navbar_javascript() {
    // Enfileira o script JavaScript personalizado
    wp_enqueue_script('navbar', get_template_directory_uri() . '/assets/javascript/navbar.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'navbar_javascript');
