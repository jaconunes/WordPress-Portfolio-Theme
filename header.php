<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header id="header" class="com-slider">
        <section class="menu-area">
            <?php get_template_part( 'template-parts/content', 'menu' ); ?>
        </section>
    </header>