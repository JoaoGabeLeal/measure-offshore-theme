
    <section class="postagem">
        <h1 class="postagem-titulo"><?php the_title(); ?></h1>
        <div class="postagem-info">
            <img class="postagem-info-avatar" src="<?php echo esc_url(get_avatar_url(get_the_author_meta('ID'))); ?>" alt="avatar do autor" />
            <div class="postagem-info-autor-data">
                <span class="postagem-info-autor"><?php the_author_meta('first_name'); ?></span>
                <span class="postagem-info-data"><?php echo get_the_date(); ?></span>
            </div>
        </div>
        <?php the_content(); ?>
        <?php if ( comments_open() || get_comments_number() ) : ?>
        <div class="comments-area">
            <?php comments_template(); ?>
        </div>
    <?php endif; ?>
    </section>
