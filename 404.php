<?php get_header(); ?>
<div class="page-404">
    <div class="opacidade-azul-linear h-100">
    <main>
        <section class="middle-area">
            <div class="container">
                <div class="row">
                    <div class="erro-404 text-left col-12">
                        <h1 class="titulo-404 text-left cor-verde mb-5">Page Not<br>Found!</h1>
                        <p>Infelizmente a página que você tentou acessar não existe em nosso site!</p>
                        <div class="error">
                            <p>Volte para a <spam><a href="/">Página Inicial</a></spam> ou confira os últimos posts do Blog:</p>
                            <h2 class="mt-5 text-white">Últimos Posts</h2>
                            <?php
                             $ultimosposts = new WP_Query( 'post_type=post&posts_per_page=3' );
                                       if ( $ultimosposts->have_posts() ): ?>
                            <div class="container">
                                <div class="row">
                                    <?php      while( $ultimosposts->have_posts() ): $ultimosposts->the_post();?>
                                    <?php get_template_part( 'template-parts/content', 'featured' ); ?>
                                    <?php  endwhile;
                                            wp_reset_postdata(); ?>
                                </div>
                            </div>
                            <?php  endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    </div>    
</div>
<?php get_footer(); ?>