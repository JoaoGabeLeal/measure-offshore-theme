<?php
/*
Template Name: Engenharia Naval
*/

get_header();
?>

<div class="content" style="padding-top: 2rem">
    <div class="container">
        <div class="row">
            <div class="col">
                <?php include(get_template_directory() . "/includes/engenharia-naval/engenharia-naval-titulo.php"); ?>
            </div>
        </div>
        <?php include(get_template_directory() . "/includes/engenharia-naval/sensores-de-hms.php"); ?>
    </div>
    <?php include(get_template_directory() . "/includes/engenharia-naval/especializados.php"); ?>
    <div class="container">
        <?php include(get_template_directory() . "/includes/engenharia-naval/equipamentos-calibrados.php"); ?>
    </div>
</div>

<?php get_footer(); ?>