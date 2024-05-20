<div id="comments" class="comments-area">

    <?php
    // Se os comentários estão abertos ou temos pelo menos um comentário, carrega o formulário de comentários.
    if ( comments_open() || get_comments_number() ) :
        comment_form();
    endif;
    ?>

    <?php
    // Verifique se há comentários para listar.
    if ( have_comments() ) : ?>

        <h2 class="comments-title">
            <?php
            $comments_number = get_comments_number();
            if ( '1' === $comments_number ) {
                /* translators: %s: post title */
                printf( _x( 'One thought on &ldquo;%s&rdquo;', 'comments title', 'textdomain' ), get_the_title() );
            } else {
                printf(
                    /* translators: 1: number of comments, 2: post title */
                    _nx(
                        '%1$s thought on &ldquo;%2$s&rdquo;',
                        '%1$s thoughts on &ldquo;%2$s&rdquo;',
                        $comments_number,
                        'comments title',
                        'textdomain'
                    ),
                    number_format_i18n( $comments_number ),
                    get_the_title()
                );
            }
            ?>
        </h2>

        <ol class="comment-list">
            <?php
                wp_list_comments( array(
                    'style'      => 'ol',
                    'short_ping' => true,
                ) );
            ?>
        </ol>

    <?php endif; ?>

</div><!-- .comments-area -->