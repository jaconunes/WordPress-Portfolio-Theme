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
                        if( get_the_post_thumbnail_url() ):
                                    $header_special = $header_special = 'class="menu-area-special" style="background: url(' . get_the_post_thumbnail_url() . ');background-attachment: fixed;background-position: center left;background-repeat: no-repeat;background-size: cover;"';
                                    $overlay = 'class="overlay-header position-center"';
        ?>
        <section id="header-special-<?php the_ID(); ?>" <?php echo $header_special ?>>
            <div <?php echo $overlay ?>>
                <div class="titulo-paginas text-white">
                    <div class="infos-pagina p-3">
                        <h1 class="titles"><?php the_title(); ?></h1>
                    </div>
                </div>
            </div>
        </section>
        <?php
                                else:
                                    $header_special = 'class="menu-area-special" style="background:#A8DBA8;margin-top:122px;"';
                                    $overlay = 'position-center';
        ?>
        <section id="header-special-<?php the_ID(); ?>" <?php echo $header_special ?>>
            <div <?php echo $overlay ?>>
                <div class="titulo-paginas text-white">
                    <div class="infos-pagina p-3">
                        <h1 class="titles">Ops! Página Não Encontrada!</h1>
                    </div>
                </div>
            </div>
        </section>
        <?php endif; ?>
    </header>