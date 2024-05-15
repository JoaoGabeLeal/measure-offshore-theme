<?php get_header(); ?>

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-20">
                <?php include(get_template_directory() . '/includes/inicio/catalogo.php') ?>
            </div>
        </div>
        <div class="row">
            <div class="col-20">
                <?php include(get_template_directory() . '/includes/inicio/principais-servicos.php') ?>
            </div>
        </div>
        <div class="row">
            <div class="col-20">
                <?php include(get_template_directory() . '/includes/inicio/quem-somos.php') ?>
            </div>
        </div>
        <div class="row">
            <div class="col-20">
                <?php include(get_template_directory() . '/includes/inicio/noticias.php') ?>
            </div>
        </div>
        <div class="row">
            <div class="col-20">
                <?php include(get_template_directory() . '/includes/inicio/entre-em-contato.php') ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>