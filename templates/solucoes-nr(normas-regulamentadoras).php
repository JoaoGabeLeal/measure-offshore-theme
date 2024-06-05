<?php
/*
Template Name: Soluções NR(Normas Regulamentadoras)
*/

get_header();
?>

<div class="content" style="padding-top: 2rem">
    <div class="container">
        <div class="row">
            <div class="col">
                <?php include(get_template_directory() . "/includes/servicos-nr/solucoes-nr-titulo.php"); ?>
            </div>
        </div>
    </div>
    <?php include(get_template_directory() . "/includes/solucoes-nr/solucoes-nr10.php"); ?>
    <?php include(get_template_directory() . "/includes/solucoes-nr/solucoes-nr12.php"); ?>
    <?php include(get_template_directory() . "/includes/solucoes-nr/solucoes-nr13.php"); ?>
    <?php include(get_template_directory() . "/includes/solucoes-nr/solucoes-nr33.php"); ?>
    <?php include(get_template_directory() . "/includes/solucoes-nr/solucoes-nr35.php"); ?>
    <?php include(get_template_directory() . "/includes/solucoes-nr/solucoes-nr37.php"); ?>
</div>

<?php get_footer(); ?>