<div class="container-fluid">
    <div class="row mb-5">
        <div class="info-destaque position-center col-lg-6 col-12">
            <div class="bloco-info-destaque bg-bege p-5">
                <h3 class="title-destaque cor-marrom text-uppercase"><?php the_title(); ?></h3>
                <?php the_excerpt(); ?>
                <div class="wp-block-buttons botao-post-canyon d-block text-center">
                    <div><a class="wp-block-button__link has-background" style="background-color:#6a3d31;color:#fff" href="<?php the_permalink(); ?>">Saiba Mais <i class="fa fa-arrow-right"></i></a></div>
                </div>
            </div>
        </div>
        <div class="img-destaque col-lg-6 col-12">
            <figure class="aligncenter size-large sombra-bege">
                <img loading="lazy" width="800" src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php the_title(); ?>">
            </figure>
        </div>
    </div>
</div>