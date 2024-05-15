<div class="container">
    <div class="descricao-separador">
        <?php if(is_front_page()) : ?>
            <section class="descricao">
                <h1 class="descricao-titulo">Uma empresa de engenharia <br />especializada em atender<br /> clientes offshore</h1>
                <a class="descricao-link" href="#" title="acessar a página sobre nós">Conheça</a>
            </section>
        <?php elseif(!is_front_page()): ?>
            <section class="descricao" style="left: 50%; transform: translate( -50%);">
                <h1 class="descricao-titulo" style="margin-top: 0.5rem; text-align: center;"><?php echo get_the_title(); ?></h1>
            </section>
        <?php endif; ?>
    </div>
</div>