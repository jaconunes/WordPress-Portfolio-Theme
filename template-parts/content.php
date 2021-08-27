<div class="bloco-posts col-lg-3 col-md-6 col-12">
    <div class="bg-bloco bg-azul sombra" data-aos="fade-up" data-aos-duration="2000">
        <div class="destaque-posts" style="background: url(<?php echo get_the_post_thumbnail_url()?> ); background-repeat: no-repeat; background-attachment: scroll; background-position: top; background-size: cover;">
            <div class="opacidade-azul-linear">
            </div>
        </div>
        <div class="texto-post position-absolute">
            <div class="post-titulo">
                <p class="categoria-agenda-image"><?php the_category( '  ' ); ?></p>
                <h2 class="cor-verde"><?php the_title(); ?></h2>
            </div>
            <div class="resumo-posts">
                <p><?php the_excerpt(); ?></p>
                <spam>
                    <p><a href="<?php the_permalink(); ?>" class="cor-verde">Saiba Mais<i class="fa fa-long-arrow-alt-right" style="padding-left: 5px;"></i></a></p>
                </spam>
            </div>
        </div>
    </div>
</div>