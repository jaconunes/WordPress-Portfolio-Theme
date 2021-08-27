<?php 

function wpxzsite_customizer( $wp_customize ){

	
    // Endereço Redes Sociais
    $wp_customize->add_section( 
		'sec_endereco_redessociais', array(
			'title' => 'Link Redes Sociais',
			'description' => 'Mapa Google exibido no Footer.'
		)
	);
    // Facebook
	$wp_customize->add_setting(
		'set_endereco_facebook', array(
			'type' => 'theme_mod',
			'default' => 'Link do Facebook aqui',
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);

	$wp_customize->add_control(
		'set_endereco_facebook', array(
			'label' => 'Facebook',
			'description' => 'Insira o link aqui...',
			'section' => 'sec_endereco_redessociais',
			'type' => 'text'
		)
	);
    //Intagram
    $wp_customize->add_setting(
		'set_endereco_instagram', array(
			'type' => 'theme_mod',
			'default' => 'Link do Instagram aqui',
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);

	$wp_customize->add_control(
		'set_endereco_instagram', array(
			'label' => 'Instagram',
			'description' => 'Insira o link aqui...',
			'section' => 'sec_endereco_redessociais',
			'type' => 'text'
		)
	);
    //Behance
    $wp_customize->add_setting(
		'set_endereco_behance', array(
			'type' => 'theme_mod',
			'default' => 'Link do Behance aqui',
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);

	$wp_customize->add_control(
		'set_endereco_behance', array(
			'label' => 'Behance',
			'description' => 'Insira o link aqui...',
			'section' => 'sec_endereco_redessociais',
			'type' => 'text'
		)
	);
    // Whatsapp
    $wp_customize->add_setting(
		'set_endereco_whatsapp', array(
			'type' => 'theme_mod',
			'default' => 'Link do Whatsapp aqui',
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);

	$wp_customize->add_control(
		'set_endereco_whatsapp', array(
			'label' => 'Whatsapp',
			'description' => 'Insira o link aqui...',
			'section' => 'sec_endereco_redessociais',
			'type' => 'text'
		)
	);
    
}
add_action( 'customize_register', 'wpxzsite_customizer' );