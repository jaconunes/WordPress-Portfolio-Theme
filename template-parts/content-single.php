<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="content container">
        <div class="row">
            <!-- CONTEÚDO POST -->
            <div class="conteudo-post-single col-12">
                <div class="conteudo-single">
                    <?php the_content(); ?>
                </div>

                <div class="tags-post-single">
                    <p>Tags:</p>
                    <p id="tags-post"><?php the_tags( '', '  ' ); ?></p>
                </div>

                <div class="social-share">
                    <p>Compartilhe!</p>
                    <ul style="font-size: 25px;">
                        <li style="display: inline-block;padding: 0 15px;">
                            <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" title="Facebook" style="margin: 2px;"><i class="fab fa-facebook"></i></a>
                        </li>
                        <li style="display: inline-block;padding: 0 15px;">
                            <a target="_blank" href="https://twitter.com/share?ref_src=<?php the_title(); ?> - <?php the_permalink(); ?>" title="Twitter" style="margin: 2px;"><i class="fab fa-twitter"></i></a>
                            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </li>
                        <li style="display: inline-block;padding: 0 15px;">
                            <a target="_blank" href="whatsapp://send?text=Olha só o que encontrei no site do <?php echo get_bloginfo ( 'name' )?>: <?php the_title(); ?> - <?php the_permalink(); ?>" title="Whatsapp" style="margin: 2px;"><i class="fab fa-whatsapp"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="botao-voltar">
                    <a href="<?php echo get_bloginfo ( 'url' ) . '/blog/' ?>" class="botao-voltar-single"><i class="fas fa-long-arrow-alt-left" style="padding-right: 5px;"></i>Voltar ao Blog</a>
                </div>
                <div class="pages-row row col-12">
                    <div class="pages cor-verde text-uppercase text-left col-6">
                        <?php next_post_link( '<i class="fas fa-long-arrow-alt-left"></i> %link' ); ?>
                    </div>
                    <div class="pages cor-verde text-uppercase text-right col-6">
                        <?php previous_post_link( '%link <i class="fas fa-long-arrow-alt-right"></i>' ); ?>
                    </div>
                </div>
            </div>
            <!-- BARRA LATERAL -->
            <aside class="barra-post-single col-12 h-100">
                <h3 class="widget-title cor-verde text-center">Últimos Posts</h3>
                <div class="container">
                    <div class="row">
                        <?php 
                        $destaques5 = new WP_Query( 'post_type=post&posts_per_page=3' );
                       if ( $destaques5->have_posts() ): 
                            while( $destaques5->have_posts() ): $destaques5->the_post();
                       ?>
                        <?php get_template_part( 'template-parts/content', 'featured' ); ?>
                        <?php   
                            endwhile;
                            wp_reset_postdata();
                       endif;
                       ?>
                    </div>
                </div>
                <?php get_sidebar( 'single' ); ?>
            </aside>
        </div>
    </div>
</article>