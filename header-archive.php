<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header id="header-special" class="com-slider">
        <?php 
                       
                                       
            $header_special = 'class="menu-area-special" style="background: url(' . get_the_post_thumbnail_url() . ');background-attachment: fixed;background-position: center left;background-repeat: no-repeat;background-size: cover;"';
            $overlay = 'class="overlay-header position-center"';
                        ?>
        <section id="header-special-<?php the_ID(); ?>" <?php echo $header_special ?>>
            <?php get_template_part( 'template-parts/content', 'menu' ); ?>            
            <div <?php echo $overlay ?>>
                <div class="titulo-paginas text-white">
                    <div class="infos-pagina p-3 text-center">
                        <?php the_archive_title( '<h1 class="titles">','</h1>' ); ?>
                        <?php the_archive_description('<p class="mt-3">', '</p>' ); ?>
                    </div>
                </div>
            </div>
        </section>
    </header>