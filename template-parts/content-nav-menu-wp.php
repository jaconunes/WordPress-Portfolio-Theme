<section class="menu-popup p-3">
    <div class="container-fluid">
        <div class="row">
            <div class="logo text-center mt-4 col-12">
                <div class="logo-menu-popup">
                    <?php the_custom_logo(); ?>
                </div>
                <div class="text-menu-popup">
                    <h1 class="cor-verde">Jack</h1>
                    <h2 class="text-white">Web Design</h2>
                </div>
            </div>
            <div class="menu text-center mt-5 col-12">
                <?php wp_nav_menu( array( 'theme_location' => 'menu_principal' ) ); ?>
            </div>
            <div class="redes-sociais text-center mt-5 col-12">
                <?php get_template_part( 'template-parts/content', 'lista-redessociais' ); ?>
            </div>
        </div>
    </div>
</section>