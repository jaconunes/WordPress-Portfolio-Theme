<?php 
        $link_facebook = get_theme_mod( 'set_endereco_facebook');
        $link_instagram = get_theme_mod( 'set_endereco_instagram');
        $link_behance = get_theme_mod( 'set_endereco_behance');
        $link_tripadvisor = get_theme_mod( 'set_endereco_whatsapp');
?>
<div class="text-center d-inline">
    <a class="social-icons p-3" target="_blank" href="<?php echo $link_facebook ?>" title="Facebook"><i class="fab fa-facebook-f"></i></a>
    <a class="social-icons p-3" target="_blank" href="<?php echo $link_instagram ?>" title="Instagram"><i class="fab fa-instagram"></i></a>
    <a class="social-icons p-3" target="_blank" href="<?php echo $link_behance ?>" title="Behance"><i class="fab fa-behance"></i></a>
    <a class="social-icons p-3" target="_blank" href="<?php echo $link_tripadvisor ?>" title="Whatsapp"><i class="fab fa-whatsapp"></i></a>
</div>