<?php get_header(); ?>

<div class="content" style="padding: 2rem">
    <div class="container">
        <div class="row">
            <div class="col-14">
                <?php include(get_template_directory() . "/includes/categorias/categorias.php"); ?>
            </div>
            <div class="col-6">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>