<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header id="header-special" class="com-slider">
        <?php get_template_part( 'template-parts/content', 'menu' ); ?>
        <?php       
             $header_special = 'class="menu-area-special" style="background: url(' . get_the_post_thumbnail_url() . ');background-attachment: fixed;background-position: center left;background-repeat: no-repeat;background-size: cover;"';
             $overlay = 'class="overlay-header position-center"';
                        ?>
        <section id="header-special-<?php the_ID(); ?>" <?php echo $header_special ?>>
            <div <?php echo $overlay ?>>
                <div class="titulo-paginas text-white">
                    <header class="titulo-single p-3">
                        <h1 class="post-titulo-single titles"><?php the_title(); ?></h1>
                        <div class="meta-info">
                            <div class="data-posts">
                                <p><?php echo get_the_date(); ?></p>
                            </div>
                            <div class="categoria-post">
                                <p id="categoria-post"><?php the_category( '  ' ); ?></p>
                            </div>
                        </div>
                    </header>
                </div>
            </div>
        </section>
    </header>