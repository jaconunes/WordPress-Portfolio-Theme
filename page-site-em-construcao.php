<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
</head>


<body <?php body_class('page-vh'); ?>>
    <header id="header" class="com-slider">
    </header>
    <main>
        <section class=" position-center" style="height: 600px;">
            <div class="container">
                <div class="row">
                    <div class="construcao col-12">
                        <div class="logo pb-3" style="width: 30%;text-align: center;margin: auto;"><?php the_custom_logo(); ?></div>
                        <h1><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="bg-azul">
        <section class="info-footer p-3">
            <div class="rodape-container container">

                <div class="row">
                    <div class="copyright col-12 text-center mt-5">
                        <p>© <?php echo date('Y'); ?> <?php echo get_bloginfo ( 'name' ) ?>. Todos os direitos reservados. Desenvolvido por <spam><a href="https://jackwebdesign.dev.br">Jack Web Design</a></spam>.</p>
                    </div>
                </div>
            </div>
        </section>
    </footer>
    <?php wp_footer(); ?>
</body>

</html>