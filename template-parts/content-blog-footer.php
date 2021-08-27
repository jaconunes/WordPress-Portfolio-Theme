<div class="container-fluid">
    <?php 
        $args = array(
                
            'post_type'      => 'post',
            'posts_per_page' => 2
        
        );
        ?>
    <?php $postslide = new WP_Query( $args );
                       if ( $postslide->have_posts() ): 
                            while( $postslide->have_posts() ): $postslide->the_post();
                       ?>
    <!-- INICIO LOOP -->
    <div class="row mt-3">
        <div class="img-post-footer col-5" style="height:80px;background:url(<?php echo get_the_post_thumbnail_url();?>);background-size:cover;background-position: center;background-repeat: no-repeat;">
        </div>
        <div class="info-post-footer col-7">
            <h4 class="cor-verde"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            <p style="color: #929292;text-transform: uppercase;font-size: 12px;letter-spacing: 2px;">
                <?php echo get_the_date( 'j . M . y' ); ?>
            </p>
        </div>
    </div>
    <!-- FIM LOOP -->
    <?php   
                            endwhile;
                            wp_reset_postdata();
                       endif;
                       ?>
</div>