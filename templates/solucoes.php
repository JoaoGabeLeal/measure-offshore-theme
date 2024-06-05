<?php
/*
Template Name: Soluções
*/

get_header();
?>

<div class="content" style="padding-top: 2rem">
    <div class="container">
        <div class="row">
            <div class="col-20">
                <?php include(get_template_directory() . "/includes/solucoes/solucoes-titulo.php"); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-20">
                <?php include(get_template_directory() . "/includes/solucoes/conformidade-legal.php"); ?>
            </div>
        </div>
        <div class="row" style="margin-top: 2rem">
            <div class="col-20">
                <?php include(get_template_directory() . "/includes/solucoes/engenharia.php"); ?>
            </div>
        </div>
        <div class="row" style="margin-top: 2rem">
            <div class="col-20">
                <?php include(get_template_directory() . "/includes/solucoes/ensaios-e-calibracao.php"); ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>