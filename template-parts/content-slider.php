<div id="carouselPostsEventos" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner height-800">
        <?php 
        $categorias = get_theme_mod( 'set_id_cat_posts_nvt'); 
        $args = array(
                
            'post_type'      => 'post',
            'cat'            => $categorias,
            'orderby'        => 'rand',
            'posts_per_page' => 3
        
        );
        ?>
        <?php $postslide = new WP_Query( $args );
                       
                       if ( $postslide->have_posts() ): 
                            $c = 0;
                            while( $postslide->have_posts() ): $postslide->the_post();
                       ?>
        <!-- INICIO LOOP -->
        <div class="h-100 carousel-item <?php $c++; if($c == 1) { echo 'active'; } ?>" style="background: url(<?php echo get_the_post_thumbnail_url()?> ); background-repeat: no-repeat; background-position: center center; background-size: cover;">
            <div class="bloco-info-destaque bg-bege text-left p-5 mt-15 d-none d-xl-block">
                <h3 class="title-destaque cor-marrom text-left"><?php the_title(); ?></h3>
                <div style="border-top: solid 2px #e09f6c;width: 20%;margin: 20px;"></div>
                <?php the_excerpt(); ?>
                <div class="m-auto">
                <div>
                    <a class="botao-padrao" href="<?php the_permalink(); ?>">Saiba Mais <i class="fa fa-long-arrow-alt-right"></i></a>
                </div>
            </div>
            </div>
        </div>
        <!-- FIM LOOP -->
        <?php   
                            endwhile;
                            wp_reset_postdata();
                       endif;
                       ?>
    </div>
</div>