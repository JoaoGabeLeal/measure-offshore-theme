<?php
/*
Template Name: Contatos
*/

get_header();
?>

<div class="content" style="padding: 0">
    <div class="container">
        <div class="row">
            <div class="col-20">
                <?php include(get_template_directory() . "/includes/contatos/mapa.php"); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-10">
                <?php include(get_template_directory() . "/includes/contatos/formas-de-contato.php"); ?>
            </div>
            <div class="col-10">
                <?php include(get_template_directory() . "/includes/contatos/formulario-de-contato.php"); ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>