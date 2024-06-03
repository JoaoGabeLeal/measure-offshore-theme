<?php
/*
Template Name: Manutenção
*/

get_header();
?>

<div class="content" style="padding-top: 2rem">
    <div class="container">
        <div class="row">
            <div class="col-20">
                <?php include(get_template_directory() . "/includes/manutencao/servicos-de-manutencao-titulo.php"); ?>
            </div>
        </div>
    </div>
    <?php include(get_template_directory() . "/includes/manutencao/alpinismo-irata-pintura.php"); ?>
    <?php include(get_template_directory() . "/includes/manutencao/gestao-almoxarifado.php"); ?>

</div>

<?php get_footer(); ?>