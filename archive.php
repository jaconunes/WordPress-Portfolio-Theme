<?php get_header('archive'); ?>
<div class="area-conteudo">
    <main>
        <section class="arquivo">
            <div class="container-fluid">
                <div class="row posts-lista text-center">
                    <?php 
                        if( have_posts() ):
                            while( have_posts() ): the_post();
                        ?>
                    <?php get_template_part( 'template-parts/content' ); ?>
                    <?php 
                            endwhile;
                        ?>
                    <?php
                        else:
                        ?>
                    <div class="text-center col-12">
                        <spam>Não há posts para serem exibidos no momento...</spam>
                    </div>
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