<?php 

function get_custom_page_title() {
    // Verifica se é a página inicial
    if (is_front_page()) {
        return get_bloginfo('name'); // Retorna o título do site
    } else {
            return get_the_title() . " | Measure Offshore"; // Retorna o título da página atual
        }
}

echo get_custom_page_title(); // Exibe o título da página atual