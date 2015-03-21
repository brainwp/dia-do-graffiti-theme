<?php
/*
* ACF Fields
*/
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_agenda',
		'title' => 'Agenda',
		'fields' => array (
			array (
				'key' => 'field_55072638fe1e7',
				'label' => 'Data de inicio',
				'name' => 'data_inicio',
				'type' => 'date_picker',
				'date_format' => 'yymmdd',
				'display_format' => 'dd/mm/yy',
				'first_day' => 1,
			),
			array (
				'key' => 'field_550707a2432b4',
				'label' => 'Data de termino',
				'name' => 'data_fim',
				'type' => 'date_picker',
				'date_format' => 'yymmdd',
				'display_format' => 'dd/mm/yy',
				'first_day' => 1,
			),
			array (
				'key' => 'field_550707d9432b5',
				'label' => 'Horario',
				'name' => 'horario',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5507081c432b6',
				'label' => 'Local',
				'name' => 'local',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => 5,
				'formatting' => 'br',
			),
			array (
				'key' => 'field_55070853432b7',
				'label' => 'Endereço',
				'name' => 'endereco',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => 5,
				'formatting' => 'br',
			),
			array (
				'key' => 'field_55070870432b8',
				'label' => 'Valor',
				'name' => 'valor',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'agenda',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
