<section class="noticias">
    <h1 class="noticias-titulo">Notícias</h1>
    <div class="noticias-loop">
        <?php
        $args = array(
            'category_name' => 'noticias',
            'posts_per_page' => -1, 
        );
        $query = get_posts($args);

        if (!empty($query)) {
            foreach ($query as $post) : setup_postdata($post);
            ?>
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="noticias-item">
                    <?php if (has_post_thumbnail()) : ?>
                        <img class="noticias-img" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title_attribute(); ?>">
                    <?php else : ?>
                        <img class="noticias-img" src="https://www.peacemakersnetwork.org/wp-content/uploads/2019/09/placeholder.jpg" alt="Notícia placeholder">
                    <?php endif; ?>
                        <div class="noticias-conteudo">
                            <h1 class="noticias-titulo"><?php the_title(); ?></h1>
                            <p class="noticias-descricao"><?php echo get_the_excerpt(); ?></p>
                        <button class="noticias-saiba-mais">Saiba mais</button>
                    </div>
                </a>
            <?php
            endforeach;
            wp_reset_postdata();
        } else {
            // Exibe um placeholder se não houver postagens
            ?>
            <div class="noticias-item">
                <img class="noticias-img" src="https://www.peacemakersnetwork.org/wp-content/uploads/2019/09/placeholder.jpg" alt="Notícia placeholder">
                <div class="noticias-conteudo">
                    <h1 class="noticias-titulo">Em breve - mantenha-se atento!</h1>
                    <p class="noticias-descricao">
                        Lamentamos, mas não encontramos nenhuma publicação neste momento. Por favor, verifique novamente mais tarde, pois novos conteúdos podem ser adicionados em breve. Se você tiver alguma informação relevante para compartilhar, sinta-se à vontade para entrar em contato conosco. Agradecemos sua compreensão e paciência.
                    </p>
                    <button class="noticias-saiba-mais">Saiba mais</button>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</section>