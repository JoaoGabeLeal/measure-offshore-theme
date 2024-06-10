<?php 

function get_custom_page_title() {
    // Verifica se é a página inicial
    if (is_front_page()) {
        return get_bloginfo('name') . " | " . get_bloginfo('description'); // Retorna o título e a descrição do site
    } 
    elseif (is_category()) {
        return single_cat_title('', false) . " | Measure Offshore"; // Retorna o título da categoria
    } 
    else {
        return get_the_title() . " | Measure Offshore"; // Retorna o título da página atual
    }
}

echo get_custom_page_title(); // Exibe o título da página atual