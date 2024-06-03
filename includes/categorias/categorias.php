<section class="categorias">
    <div class="categorias-loop">
        <?php
        $args = array(
            'category_name' => single_cat_title('', false),
            'posts_per_page' => -1,
        );
        $query = get_posts($args);

        if (!empty($query)) {
            foreach ($query as $post) : setup_postdata($post);
            ?>
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="categorias-item">
                    <?php if (has_post_thumbnail()) : ?>
                        <img class="categorias-img" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title_attribute(); ?>">
                    <?php else : ?>
                        <img class="categorias-img" src="https://www.peacemakersnetwork.org/wp-content/uploads/2019/09/placeholder.jpg" alt="Notícia placeholder">
                    <?php endif; ?>
                        <div class="categorias-conteudo">
                            <h1 class="categorias-titulo"><?php the_title(); ?></h1>
                            <p class="categorias-descricao"><?php the_excerpt(); ?></p>
                        <button class="categorias-saiba-mais">Saiba mais</button>
                    </div>
                </a>
            <?php
            endforeach;
            wp_reset_postdata();
        } else {
            // Exibe um placeholder se não houver postagens
            ?>
            <div class="categorias-item">
                <img class="categorias-img" src="https://www.peacemakersnetwork.org/wp-content/uploads/2019/09/placeholder.jpg" alt="Notícia placeholder">
                <div class="categorias-conteudo">
                    <h1 class="categorias-titulo">Em breve - mantenha-se atento!</h1>
                    <p class="categorias-descricao">
                        Lamentamos, mas não encontramos nenhuma publicação neste momento. Por favor, verifique novamente mais tarde, pois novos conteúdos podem ser adicionados em breve. Se você tiver alguma informação relevante para compartilhar, sinta-se à vontade para entrar em contato conosco. Agradecemos sua compreensão e paciência.
                    </p>
                    <button class="categorias-saiba-mais">Saiba mais</button>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
    <?php if (function_exists('pagination_funtion')) pagination_funtion(); ?>
</section>