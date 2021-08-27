<footer class="bg-azul">
    <section class="info-footer">
        <div class="container">
            <div class="row">
                <div class="logo-rodape mt-4 col-lg-3 col-12">
                    <?php the_custom_logo(); ?>
                    <h4 class="cor-verde pt-3">Jack Web Designer</h4>
                    <p style="font-size: 13px;">Focado em ajudar você ou sua empresa a conquistar o seu espaço na Web, com criação de sites atraentes, com alta performance, conquistando o cliente final.</p>
                    <div class="footer-social">
                        <?php get_template_part( 'template-parts/content', 'lista-redessociais' ); ?>
                    </div>                    
                </div>
                <div class="news-blog mt-4 col-lg-3 col-12 text-left">
                    <h3 class="cor-verde">Blog</h3>
                    <?php get_template_part( 'template-parts/content', 'blog-footer' ); ?>
                </div>
                <div class="menu-rodape mt-4 col-lg-3 col-12 text-left">
                    <h3 class="cor-verde">Links Úteis</h3>
                    <?php wp_nav_menu( array( 'theme_location' => 'menu_rodape' ) ); ?>
                </div>
                <div class="contatos mt-4 col-lg-3 col-12 text-left">
                    <h3 class="cor-verde">Alguma dúvida?</h3>
                    <p><i class="icons-footer cor-verde fab fa-whatsapp-square"></i><a href="https://api.whatsapp.com/send?phone=5548991606544&text=Ol%C3%A1!%20Gostaria%20de%20solicitar%20um%20or%C3%A7amento.">+55 48 9 9160-6544</a></p>
                    <p><i class="icons-footer cor-verde fas fa-envelope-square"></i><a href="mailto:hi@jackwebdesign.dev.br">hi@jackwebdesign.dev.br</a></p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="copyright col-12 text-center mt-5">
                    <p>© <?php echo date('Y'); ?> <?php echo get_bloginfo ( 'name' ) ?>. Todos os direitos reservados. Desenvolvido por <spam><a href="https://jackwebdesign.dev.br"><img src="<?php echo get_template_directory_uri() . '/assets/images/logo-branco.svg' ?>" style="width: 30px;"> Jack Web Design</a></spam>.</p>
                </div>
            </div>
        </div>
    </section>
</footer>
<?php wp_footer(); ?>
</body>

</html>