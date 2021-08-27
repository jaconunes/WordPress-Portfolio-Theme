<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="content container">
        <div class="row">
            <!-- CONTEÚDO POST -->
            <div class="conteudo-post-single col-12">
                <header class="titulo-single mb-5">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="img-projeto col-sm-6 col-12">
                               <a href="<?php echo get_the_post_thumbnail_url(); ?>"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" style="border: solid 5px #a8dba8;"></a>                                
                            </div>
                            <div class="info-projeto p-3 col-sm-6 col-12">
                                <div class="meta-info">
                                    <p id="categoria-post" style="text-transform: uppercase;font-size: 12px;"><?php the_category( '   |   ' ); ?></p>
                                </div>
                                <h3 class="text-left text-white"><?php the_title(); ?></h3>
                                <p><strong>Tecnologias:</strong> <?php echo get_post_meta($post->ID, 'tecnologias', true); ?></p>
                                <p><strong>Localização:</strong> <?php echo get_post_meta($post->ID, 'localizacao', true); ?></p>
                                <p><strong>Ao Vivo:</strong> <a href="<?php echo get_post_meta($post->ID, 'link', true); ?>" target="_blank"><?php echo get_post_meta($post->ID, 'link', true); ?></a></p>
                                <a href="<?php echo get_theme_mod( 'set_endereco_whatsapp'); ?>" class="btn btn-sm animated-button dark thar-one">Solicitar um Orçamento <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                </header>
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
                    <a href="<?php echo get_category_link(4); ?>" class="botao-voltar-single"><i class="fas fa-long-arrow-alt-left" style="padding-right: 5px;"></i>Ver Todos os Projetos</a>
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
                <h3 class="widget-title cor-verde text-center">Últimos Projetos</h3>
                <div class="container">
                    <div class="row">
                        <?php 
                        $destaques5 = new WP_Query( 'post_type=post&posts_per_page=3&cat=4' );
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