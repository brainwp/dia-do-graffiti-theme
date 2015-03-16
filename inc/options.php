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
			'title' => __('Home','litoral-sustentavel'), // Título da aba.
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
			)
		),
	)
);
