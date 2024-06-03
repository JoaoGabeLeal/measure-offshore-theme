<?php
/*
Template Name: Calibração
*/

get_header();
?>

<div class="content" style="padding-top: 2rem">
    <div class="container">
        <div class="row">
            <div class="col-20">
                <?php include(get_template_directory() . "/includes/calibracao/servicos-de-calibracao-titulo.php"); ?>
            </div>
        </div>
    </div>
    <?php include(get_template_directory() . "/includes/calibracao/massa.php"); ?>
    <?php include(get_template_directory() . "/includes/calibracao/forca-e-torque.php"); ?>
    <?php include(get_template_directory() . "/includes/calibracao/vazao.php"); ?>
    <?php include(get_template_directory() . "/includes/calibracao/dimensional.php"); ?>
    <?php include(get_template_directory() . "/includes/calibracao/pressao.php"); ?>
    <?php include(get_template_directory() . "/includes/calibracao/temperatura-e-umidade.php"); ?>
    <?php include(get_template_directory() . "/includes/calibracao/eletrica.php"); ?>
    <?php include(get_template_directory() . "/includes/calibracao/metrologia-optica.php"); ?>
    <?php include(get_template_directory() . "/includes/calibracao/laboratorio-quimico.php"); ?>
</div>

<?php get_footer(); ?>