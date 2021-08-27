<div class="bloco-posts col-lg-4 col-md-6 col-12">
    <div class="bg-bloco zoom">
        <div class="destaque-posts" style="background: url(<?php echo get_the_post_thumbnail_url()?> ); background-repeat: no-repeat; background-attachment: scroll; background-position: center; background-size: cover;">
            <div class="opacity"></div>
        </div>
        <div class="texto-post">
            <div class="post-titulo">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            </div>
            <div class="data-posts">
                <p><?php echo get_the_date( 'j . M . y' ); ?></p>
            </div>
            <div class="resumo-posts">
                <p><?php the_excerpt(); ?></p>
                <spam>
                    <p><a href="<?php the_permalink(); ?>">Leia Mais  <i class="fa fa-arrow-right" style="font-size: 16px;"></i> </a></p>
                </spam>
            </div>
        </div>
    </div>
</div>