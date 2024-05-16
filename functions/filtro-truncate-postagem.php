<?php
function custom_excerpt_length( $length ) {
    return 40; // Altere este número para o número de palavras que você quer
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );