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
					'label' => __('Imagem de fundo do slider/logo','odin'),
					'type' => 'image',
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
		'geral_section' => array(
			'tab'   => 'geral_cfg', // Sessão da aba odin_general
			'title' => __('Configurações da página inicial','odin'),
			'fields' => array(
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
			)
		),
	)
);
?>
