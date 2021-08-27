<article <?php post_class( array( 'class' => 'featured col-md-4 col-12' ) ); ?>>
    <div class="destaque-posts-featured sombra" style="background: url(<?php echo get_the_post_thumbnail_url()?> ); background-repeat: no-repeat; background-attachment: scroll; background-position: center; background-size: cover;">
        <div class="opacity"></div>
    </div>
    <div class="title-eventos-bar bg-azul">
        <h2 class="text-white text-uppercase"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="data-eventos-bar text-center">
            <p style="color: #929292;text-transform: uppercase;font-size: 12px;letter-spacing: 2px;">
                <?php echo get_the_date( 'j . M . y' ); ?>
            </p>
        </div>
    </div>
</article>