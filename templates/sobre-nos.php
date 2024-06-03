<?php
/*
Template Name: Sobre Nós
*/

get_header();
?>

<div class="content" style="padding: 2rem">
    <div class="container">
        <div class="row">
            <div class="col-20">
                <?php include(get_template_directory() . "/includes/sobre-nos/nossa-historia.php"); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-20">
                <?php include(get_template_directory() . "/includes/sobre-nos/vantagens-e-beneficios.php"); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-20">
                <?php include(get_template_directory() . "/includes/sobre-nos/missao-visao-valores.php"); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-20">
                <?php include(get_template_directory() . "/includes/sobre-nos/parceiros.php"); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-20">
                <?php include(get_template_directory() . "/includes/inicio/entre-em-contato.php"); ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>