<?php
// Register Custom Navigation Walker 
require_once get_template_directory() . '/assets/inc/class-wp-bootstrap-navwalker.php';
// Requerendo o arquivo do Campos Personalizados
require get_template_directory() . '/assets/inc/custom-fields.php';
// Requerendo o arquivo do Customizer
require get_template_directory() . '/assets/inc/customizer.php';
// Carrega scripts e folhas de estilo
function load_scripts(){
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ), '4.3.1', true );
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.3.1', 'all' );
    wp_enqueue_script( 'aos-js', get_template_directory_uri() . '/assets/js/aos.js', array( 'jquery' ), '2.3.1', true );
    wp_enqueue_script( 'aosinit-js', get_template_directory_uri() . '/assets/js/aosinit.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_style( 'aos-css', get_template_directory_uri() . '/assets/css/aos.css', array(), '2.3.1', 'all' );
    wp_enqueue_style( 'template', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'fontawesome-css', get_template_directory_uri() . '/assets/css/all.css', array(), '5.0.7', 'all' );
    wp_enqueue_script( 'rellax-js', get_template_directory_uri() . '/assets/js/rellax.min.js', array( 'jquery' ), '1.11.0', true );
    wp_enqueue_script( 'rellaxinit-js', get_template_directory_uri() . '/assets/js/rellaxinit.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'parallax-js', get_template_directory_uri() . '/assets/js/parallax.min.js', array( 'jquery' ), '1.5.0', true );
}
add_action( 'wp_enqueue_scripts', 'load_scripts' );


// Função de configuração do tema
function wpxzinho_config(){
    
    // Registro do Menu
    register_nav_menus(
        array(
            'menu_principal' => 'Menu Principal',
            'menu_rodape' => 'Menu Rodapé',
        )

    );
    // Formatos de Posts
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'post-formats', array( 'video', 'image' ) );
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo', array() );
    
    //Shortcodes
    add_shortcode( 'menu' , 'shortcode_menu' );
    add_shortcode( 'orcamento_webdesign' , 'shortcode_orcamento_webdesign' );
    
    
    // Personalização de backgrounds
    $defaults = array(
   'default-color'          => '',
   'default-image'          => get_template_directory_uri() . '',
   'default-repeat'         => 'no-repeat',
   'default-position-x'     => 'center',
   'default-attachment'     => 'fixed',
);
    add_theme_support( 'custom-background', $defaults );
    
    //Suporte ao Gutemberg
    add_theme_support( 'align-wide' );
    
}

function shortcode_menu(){
    get_template_part( 'template-parts/content', 'nav-menu-wp' );
}
function shortcode_orcamento_webdesign(){
    get_template_part( 'template-parts/content', 'single-orcamentos' );
}

add_action( 'after_setup_theme', 'wpxzinho_config', 0 );

// Widgets
add_action( 'widgets_init', 'wpxzsite_widgets' );

function wpxzsite_widgets(){
        register_sidebar(
        array(
            'name' => 'Texto Widget Quem Somos',
            'id' => 'widget-texto-quem-somos',
            'description' => 'Widget de Texto para a sessão Quem Somos.',
            'before_widget' => '<div class="widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h2 id="widget-title-home" class="widget-title">',
			'after_title' => '</h2>'
        )
    );
            register_sidebar(
        array(
            'name' => 'Barra Lateral Post Único',
            'id' => 'widget-post-single',
            'description' => 'Espação de Widget dos Posts Únicos.',
            'before_widget' => '<div class="widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h2 id="widget-title-single" class="widget-title">',
			'after_title' => '</h2>'
        )
    );
}