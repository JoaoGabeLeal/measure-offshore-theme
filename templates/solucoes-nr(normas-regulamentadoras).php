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
                <?php include(get_template_directory() . "/includes/servicos-nr/servicos-nr-titulo.php"); ?>
            </div>
        </div>
    </div>
    <?php include(get_template_directory() . "/includes/servicos-nr/servicos-nr10.php"); ?>
    <?php include(get_template_directory() . "/includes/servicos-nr/servicos-nr12.php"); ?>
    <?php include(get_template_directory() . "/includes/servicos-nr/servicos-nr13.php"); ?>
    <?php include(get_template_directory() . "/includes/servicos-nr/servicos-nr33.php"); ?>
    <?php include(get_template_directory() . "/includes/servicos-nr/servicos-nr35.php"); ?>
    <?php include(get_template_directory() . "/includes/servicos-nr/servicos-nr37.php"); ?>
</div>

<?php get_footer(); ?>