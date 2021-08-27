<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="content">
       <div class="container-fluid">
           <div class="row image-cartaz">
            <!-- CONTEÚDO POST -->
            <div class="conteudo-post-single col-12">
                <header class="post-single-image" style="background: url(<?php echo get_the_post_thumbnail_url()?>);background-repeat: no-repeat; background-attachment: scroll; background-position: center; background-size: cover;">
                    <div class="conteudo-post-agenda opacidade">
                        <div class="div-bg-image"></div>
                        <div class="info-post-image">
                            <p class="text-uppercase" style="color: #fff;text-align: center;letter-spacing: 8px;"><?php echo get_post_meta($post->ID, 'dia_da_semana', true); ?>.<?php echo get_post_meta($post->ID, 'dia_do_mes', true); ?>.<?php echo get_post_meta($post->ID, 'mes', true); ?></p>
                            <p class="categoria-agenda-image"><?php the_category( '  ' ); ?></p>
                            <h1 class="title-agenda"><?php the_title(); ?></h1>
                            <div class="conteudo-single-image">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- Tags do Post -->
                <div class="tags-post-single">
                    <p>Tags:</p>
                    <p id="tags-post"><?php the_tags( '', '  ' ); ?></p>
                </div>
                <!-- Botões de Compartilhamento -->
                <div class="social-share">
                    <p>Compartilhe!</p>
                    <ul style="margin-right: 40px;font-size: 35px;">
                        <li style="display: inline-block;padding: 0 15px;">
                            <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" title="Facebook" style="margin: 2px;"><i class="fa fa-facebook-f"></i></a>
                        </li>
                        <li style="display: inline-block;padding: 0 15px;">
                            <a target="_blank" href="https://twitter.com/share?ref_src=<?php the_title(); ?> - <?php the_permalink(); ?>" title="Twitter" style="margin: 2px;"><i class="fa fa-twitter"></i></a>
                            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </li>
                        <li style="display: inline-block;padding: 0 15px;">
                            <a target="_blank" href="whatsapp://send?text=<?php the_title(); ?> - <?php the_permalink(); ?>" title="Whatsapp" style="margin: 2px;"><i class="fa fa-whatsapp"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="botao-voltar">
                    <a href="/blog/" class="botao">Voltar ao Blog</a>
                </div>
                <!-- Navegação de Posts -->
                <div class="pages-row row col-12">
                    <div class="pages text-left col-6">
                        <?php next_post_link( '&laquo; %link' ); ?>
                    </div>
                    <div class="pages text-right col-6">
                        <?php previous_post_link( '%link &raquo;' ); ?>
                    </div>
                </div>
            </div>
            <!-- BARRA LATERAL -->
            <aside class="barra-post-single col-12 h-100">
                <h2 class="widget-title">Últimos Eventos</h2>
                <div class="container">
                    <div class="row">
                            <?php 
                        $destaques5 = new WP_Query( 'post_type=post&posts_per_page=3&cat=7,8,9' );
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
    </div>
</article>