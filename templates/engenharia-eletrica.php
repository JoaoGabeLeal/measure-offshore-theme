<?php
/*
Template Name: Engenharia Elétrica
*/

get_header();
?>

<div class="content" style="padding-top: 2rem">
    <div class="container">
        <div class="row">
            <div class="col-20">
                <?php get_template_part('includes/engenharia-eletrica/engenharia-eletrica-titulo'); ?>
            </div>
        </div>
        <?php get_template_part('includes/engenharia-eletrica/ensaios-dieletricos-para-epi-epc'); ?>
        <?php get_template_part('includes/engenharia-eletrica/equipamentos-que-efetuamos-ensaio'); ?>
    </div>
    <?php get_template_part('includes/engenharia-eletrica/ensaios'); ?>
    <?php get_template_part('includes/engenharia-eletrica/conformidade-nr10'); ?>

</div>

<?php get_footer(); ?>