<?php
function enqueue_custom_styles() {
    // Registrar o arquivo CSS personalizado
    wp_enqueue_style('measure', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');