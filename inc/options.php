<?php
/* Theme options */
$odin_theme_options = new Odin_Theme_Options(
	'odin-options', // Slug/ID da página (Obrigatório)
	'Opções do tema', // Titulo da página (Obrigatório)
	'manage_options' // Nível de permissão (Opcional) [padrão é manage_options]
);
$odin_theme_options->set_tabs(
	array(
		array(
			'id' => 'home_cfg', // ID da aba e nome da entrada no banco de dados.
			'title' => __('Home','odin'), // Título da aba.
		),
		array(
			'id' => 'geral_cfg', // ID da aba e nome da entrada no banco de dados.
			'title' => __('Configurações gerais','odin'), // Título da aba.
		),
	)
);
$odin_theme_options->set_fields(
	array(
		'home_section' => array(
			'tab'   => 'home_cfg', // Sessão da aba odin_general
			'title' => __('Configurações da página inicial','odin'),
			'fields' => array(
				array(
					'id' => 'logo',
					'label' => __('Logo','odin'),
					'type' => 'image',
				),
				array(
					'id' => 'slider_bg',
					'label' => __('Background image header','odin'),
					'type' => 'image',
				),
				array(
					'id' => 'short_slider',
					'label' => __('Shortcode of slider in home','odin'),
					'type' => 'text',
				),
				array(
					'id' => 'content_title',
					'label' => __('Titulo da descrição do site na home','odin'),
					'type' => 'text',
				),
				array(
					'id' => 'content_text',
					'label' => __('Texto da descrição do site na home','odin'),
					'type' => 'textarea',
				),
			)
		),
		'links_section' => array(
			'tab'   => 'home_cfg', // Sessão da aba odin_general
			'title' => __('Fast links','odin'),
			'fields' => array(
				array(
					'id' => 'link_1_title',
					'label' => __('Titulo do primeiro link rápido na home','odin'),
					'type' => 'text',
				),
				array(
					'id' => 'link_1_url',
					'label' => __('Link do primeiro link rápido na home','odin'),
					'type' => 'text',
				),
				array(
					'id' => 'link_2_title',
					'label' => __('Titulo do segundo link rápido na home','odin'),
					'type' => 'text',
				),
				array(
					'id' => 'link_2_url',
					'label' => __('Link do segundo link rápido na home','odin'),
					'type' => 'text',
				),
				array(
					'id' => 'link_3_title',
					'label' => __('Titulo do terceiro link rápido na home','odin'),
					'type' => 'text',
				),
				array(
					'id' => 'link_3_url',
					'label' => __('Link do terceiro link rápido na home','odin'),
					'type' => 'text',
				),
			)
		),
		'geral_section' => array(
			'tab'   => 'geral_cfg', // Sessão da aba odin_general
			'title' => __('Configurações visuais','odin'),
			'fields' => array(
				array(
					'id' => 'logo',
					'label' => __('Logo nas páginas internas','odin'),
					'type' => 'image',
				),
				array(
					'id' => 'cor_principal',
					'label' => __('Cor principal','odin'),
					'type' => 'color',
					'default' => '#2c989a',
				),
				array(
					'id' => 'cor_barra',
					'label' => __('Cor das barras','odin'),
					'type' => 'color',
					'default' => '#1f1f1f',
				),
				array(
					'id' => 'code_analytics',
					'label' => __('Tracking Code Google Analytics','odin'),
					'type' => 'text',
					'default' => '',
				),
			)
		),
		'geral_section_newsletter' => array(
			'tab'   => 'geral_cfg', // Sessão da aba odin_general
			'title' => __('Configurações do Newsletter','odin'),
			'fields' => array(
				array(
					'id' => 'newsletter_title',
					'label' => __('Titulo do newsletter','odin'),
					'type' => 'text',
					'default' => 'Assine nosso Newsletter',
				),
				array(
					'id' => 'newsletter_text',
					'label' => __('Texto do newsletter','odin'),
					'type' => 'textarea',
					//'default' => '',
				),
			)
		),
		'geral_section_social' => array(
			'tab'   => 'geral_cfg', // Sessão da aba odin_general
			'title' => __('Configurações de redes sociais','odin'),
			'fields' => array(
				array(
					'id' => 'hashtag_url',
					'label' => __('URL da página de visualização da hashtag','odin'),
					'type' => 'text',
					//'default' => 'Assine nosso Newsletter',
				),
			)
		),
		'geral_section_equipe' => array(
			'tab'   => 'geral_cfg', // Sessão da aba odin_general
			'title' => __('Configurações da página equipe','odin'),
			'fields' => array(
				array(
					'id' => 'equipe_title',
					'label' => __('Título da página equipe','odin'),
					'type' => 'text',
					//'default' => 'Assine nosso Newsletter',
				),
			)
		),
	)
);
?>
