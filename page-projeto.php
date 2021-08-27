<?php get_header('projeto'); ?>
<div class="area-conteudo">
    <main>
        <section class="postagens">
            <div class="container-fluid text-center">
                <div class="row posts-lista text-center">
                                    
                    <?php $postsprojeto = new WP_Query( 'post_type=projeto' ); 
                        if( $postsprojeto->have_posts() ):
                            while( $postsprojeto->have_posts() ): $postsprojeto->the_post();
                        ?>
                    <?php get_template_part( 'template-parts/content' ); ?>
                    <?php 
                            endwhile;
                        ?>
                    <?php
                        else:
                        ?>
                    <p>Não há posts para serem exibidos no momento...</p>
                    <?php endif; ?>
                </div>
                <div class="row">
                    <div class="pages col-12">
                        <?php
                                    global $wp_query;

                                    $big = 999999999; // need an unlikely integer

                                    echo paginate_links( array(
                                    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                    'format' => '?paged=%#%',
                                    'current' => max( 1, get_query_var('paged') ),
                                    'total' => $wp_query->max_num_pages
                                    ) );
                                    ?>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
<?php get_footer(); ?>