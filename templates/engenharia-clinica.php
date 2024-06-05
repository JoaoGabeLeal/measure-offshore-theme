<?php
/*
Template Name: Engenharia Clinica
*/

get_header();
?>

<div class="content" style="padding-top: 2rem">
    <div class="container">
        <div class="row">
            <div class="col">
                <?php include(get_template_directory() . "/includes/engenharia-clinica/engenharia-clinica-titulo.php"); ?>
            </div>
        </div>
        <?php include(get_template_directory() . "/includes/engenharia-clinica/solucoes-personalizadas-equipamentos-medicos.php"); ?>
    </div>
    <?php include(get_template_directory() . "/includes/engenharia-clinica/norma-abnt.php"); ?>
    <div class="container">
        <?php include(get_template_directory() . "/includes/engenharia-clinica/equipamentos-que-efetuamos-calibracao.php"); ?>
        <?php include(get_template_directory() . "/includes/engenharia-clinica/especificacoes.php"); ?>
    </div>
    <?php include(get_template_directory() . "/includes/engenharia-clinica/nossas-solucoes.php"); ?>
    <?php include(get_template_directory() . "/includes/engenharia-clinica/medical-chest.php"); ?>

</div>

<?php get_footer(); ?>