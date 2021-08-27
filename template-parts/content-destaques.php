<div class="bloco-evento col-12" style="background: url(<?php echo get_the_post_thumbnail_url();?> ); background-repeat: no-repeat; background-attachment: scroll; background-position: center; background-size: cover;">
    <div class="bloco-post-destaque">
        <div class="bloco-destaques bg-marrom text-center p-4 rellax" data-rellax-speed="1" data-aos="zoom-in">
            <h2 class="cor-bege text-uppercase"><?php the_title(); ?></h2>
            <?php the_excerpt(); ?>
            <div class="text-center pt-3 pb-3">
                <spam class="text-white">
                    <a href="<?php the_permalink(); ?>">Ver Mais <i class="fa fa-arrow-right"></i></a>
                </spam>
            </div>
        </div>
    </div>
</div>