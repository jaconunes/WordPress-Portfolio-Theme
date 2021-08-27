<?php get_header(); ?>
<section class="page-vh sec-elementos">
    <div class="container-fluid">
        <div class="row">
            <div class="texto-home text-center p-4">
                <h1 class="cor-verde">Jack</h1>
                <h2 class="text-white">Web Design</h2>
                <p>Sites de sucesso para pessoas ou empresas de sucesso.
                    Faça o seu negócio decolar com sites de alta conversão e performance.
                    Seja a DIFERÊNÇA no seu nicho.</p>
                <a href="#vamos-conversar" class="btn btn-sm animated-button dark thar-one">Solicitar Orçamento <i class="fas fa-long-arrow-alt-right"></i></a>
            </div>
        </div>
    </div>
    <div class="elementos-float d-none d-xl-block">
        <img class="position-absolute w-100 rellax" data-rellax-speed="1" style="right: 0;bottom: 0;left: 0;" src="<?php echo get_template_directory_uri() . '/assets/images/fundo-2.png' ?>" alt="">
        <img class="position-absolute rellax" data-rellax-speed="7" style="width: 90%;left: 5%;bottom: 0;" src="<?php echo get_template_directory_uri() . '/assets/images/foguete.png' ?>" alt="">
        <img class="position-absolute rellax" data-rellax-speed="-5" style="width: 74%;top: 15%;" src="<?php echo get_template_directory_uri() . '/assets/images/lua.png' ?>" alt="">
        <img class="position-absolute w-100" style="bottom: 0" src="<?php echo get_template_directory_uri() . '/assets/images/fundo-divisor.png' ?>" alt="">
    </div>
    <div class="indicador text-white text-center"><a href="#webdesigner"><i class="seta white fas fa-chevron-down"></i></a></div>
</section>
<section id="webdesigner" class="webdesigner page-vh">
    <div class="container">
        <div class="row mt-5" data-aos="fade-up" data-aos-duration="2000">
            <div class="workstation mt-4 col-lg-8 col-12" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images/work-station.jpg' ?>);background-repeat: no-repeat;background-size: cover;background-position: bottom;">
            </div>
            <div class="info-webdesigner sombra bg-verde h-auto p-5 col-lg-4 col-12">
                <h2 class="cor-azul" style="line-height: 1;">Web Designer Freelancer</h2>
                <p class="cor-azul-claro font-weight-bold">Web Designer engajado na criação de sites de alta performance e designer voltado a melhor experiência e conversão do usuário final, de pequenas e médias empresas.
                    Sites institucionais, blogs, e-commerces, com designs modernos e responsivos, utilizando a plataforma Wordpress.</p>
                <a href="#vamos-conversar" class="btn btn-sm animated-button thar-one">Solicitar Orçamento <i class="fas fa-long-arrow-alt-right"></i></a>
            </div>
        </div>
    </div>
    <div class="d-none d-xl-block">
        <img class="position-absolute rellax" data-rellax-speed="6" style="z-index: 0;right: 100px;" src="<?php echo get_template_directory_uri() . '/assets/images/elemento-retangulo.png' ?>" alt="">
        <img class="position-absolute rellax" data-rellax-speed="-3" style="width: 10%;left: 185px;bottom: -300px;" src="<?php echo get_template_directory_uri() . '/assets/images/cursor.png' ?>" alt="">
    </div>
</section>
<section id="portfolio" class="page-vh bg-verde pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="portfolio cor-azul text-left col-12 p-3" data-aos="fade-right" data-aos-duration="2000">
                <div class="d-inline portifolio-titulos">
                    <h1>Últimos<br>Projetos</h1>
                </div>
                <p class="position-absolute portifolio-decor d-none d-xl-block">Portfólio</p>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <?php 
        
        $args = array(
                
            'post_type'      => 'projeto',            
            'orderby'        => 'rand',
            'posts_per_page' => 3
        
        );
        ?>
            <?php $postslide = new WP_Query( $args );
                       if ( $postslide->have_posts() ): 
                            while( $postslide->have_posts() ): $postslide->the_post();
                       ?>
            <!-- INICIO LOOP -->
            <?php get_template_part( 'template-parts/content' ); ?>
            <!-- FIM LOOP -->
            <?php   
                            endwhile;
                            wp_reset_postdata();
                       endif;
                       ?>
            <div class="bloco-posts col-lg-3 col-md-6 col-12">
                <a href="<?php echo get_bloginfo ( 'url' ) . '/projeto' ?>">
                    <div class="bg-bloco sombra" data-aos="fade-up" data-aos-duration="2000">
                       <div class="bloco-ver-todos position-center">
                           <h3 class="ver-todos cor-verde text-center">Ver Todos <br><i class="fas fa-long-arrow-alt-right"></i></h3>
                       </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<section id="perfil" class="perfil page-vh position-center parallax-window" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri() . '/assets/images/bg-code.jpg' ?>">
    <div class="container">
        <div class="row">
            <div class="img-perfil col-lg-6 col-12" data-aos="fade-right" data-aos-duration="2000">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/perfil.jpg' ?>" alt="">
            </div>
            <div class="info-perfil col-lg-6 col-12" data-aos="fade-left" data-aos-duration="2000">
                <h1>Jackson Nunes</h1>
                <div class="divisor-line"></div>
                <h2>Web Designer apaixonado por tecnologia e fotografia.</h2>
                <p>Focado em ajudar você ou sua empresa a conquistar o seu espaço na Web, com criação de sites atraentes, com alta performance, conquistando o cliente final.</p>
            </div>
        </div>
    </div>
</section>
<section id="vamos-conversar" class="sec-vamos-conversar page-vh position-center bg-azul">
    <div class="container" data-aos="fade-up" data-aos-duration="2000">
        <div class="row">
            <div class="text-contact position-center col-lg-8 col-12">
                <div>
                    <h1 class="vamos-conversar cor-verde">Vamos conversar?</h1>
                    <p>Envie uma mensagem com alguma dúvida e em breve retorno.</p>
                </div>
            </div>
            <div class="form-contact col-lg-4 col-12">
                <?php echo do_shortcode( '[contact-form-7 id="183" title="Contato Home"]' ); ?>
            </div>
        </div>
    </div>
    <div class="d-none d-xl-block">
        <img class="position-absolute rellax" data-rellax-speed="-2" style="z-index: 0;left: 200px;bottom: 1030px;" src="<?php echo get_template_directory_uri() . '/assets/images/elemento-retangulo.png' ?>" alt="">
        <img class="position-absolute rellax" data-rellax-speed="4" style="z-index: 0;bottom: -900px;right: 85px;width: 10%;" src="<?php echo get_template_directory_uri() . '/assets/images/cursor.png' ?>" alt="">
    </div>
</section>
<?php get_footer(); ?>