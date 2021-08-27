<?php get_header('single'); ?>
<div id="primary">
    <div id="main">
        <div class="container-fluid post-single">
            <?php 
                if( get_post_format() ):{
                    $post_format = get_post_format();
                    get_template_part( 'template-parts/content', $post_format );             }
                    else: {                
                    get_template_part( 'template-parts/content', 'single' ); 
                    } 
                    endif; 
                        ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>