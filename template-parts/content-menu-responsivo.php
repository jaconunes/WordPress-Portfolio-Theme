<nav class="navbar navbar-expand-md index-nav" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <button class="navbar-toggler bg-nav" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
            <span class="navbar-toggler-icon">
                <i class="fa fa-bars" style="color:#fff; font-size:28px;"></i>
            </span>
        </button>
        <?php
        wp_nav_menu( array(
            'theme_location'    => 'menu_princial',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse bg-nav',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav m-auto',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
    </div>
</nav>