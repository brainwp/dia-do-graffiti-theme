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
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_equipe',
		'title' => 'Equipe',
		'fields' => array (
			array (
				'key' => 'field_551023f29db56',
				'label' => 'Link',
				'name' => 'team_link',
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
					'value' => 'curadores',
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
/*
* Kirk / Customize API
*/
include_once get_template_directory() . '/inc/kirki/kirki.php';
/**
 * Create the customizer panels and sections
 */
function brasa_kirki_add_panel( $wp_customize ) {

	/**
	 * Add sections
	 */

	// This section will be inside the "typography" panel
	$wp_customize->add_section( 'visual', array(
		'title'       => __( 'Visual', 'odin' ),
		'priority'    => 10,
	) );
	$wp_customize->add_panel( 'home', array(
		'title'       => __( 'Front Page Options', 'odin' ),
		'priority'    => 10,
	) );

	$wp_customize->add_section( 'home_site_info', array(
		'title'       => __( 'Site Info', 'odin' ),
		'priority'    => 10,
	) );
	$wp_customize->add_section( 'home_links', array(
		'title'       => __( 'Fast Links', 'odin' ),
		'priority'    => 10,
	) );

}
add_action( 'customize_register', 'brasa_kirki_add_panel' );
/**
 * Create the setting
 */
function brasa_kirki_fields( $fields ) {

	$fields[] = array(
		'type'     => 'color',
		'setting'  => 'main_color',
		'label'    => __( 'Main site color', 'odin' ),
		'section'  => 'visual',
		'default'  => '#25AED1',
		'priority' => 1,
		'output' => array(
			array(
            	'element'  => '.bg-cor',
            	'property' => 'background-color',
            ),
			array(
            	'element'  => '.css-cor',
            	'property' => 'color',
            ),
            array(
            	'element' 	=> '#infos-home .site-description h3',
            	'property' 	=> 'color'
            ),
            array(
            	'element' => '.content-noticias h3',
            	'property' => 'color',
            ),
    	),
	);
	$fields[] = array(
		'type'        => 'background',
		'setting'     => 'header_bg',
		'label'       => __( 'Header Background', 'odin' ),
		'section'     => 'visual',
		'default'     => array(
			'color'    => 'rgba(25,170,141,0.7)',
        	'image'    => '',
        	'repeat'   => 'no-repeat',
        	'size'     => 'cover',
        	'attach'   => 'fixed',
        	'position' => 'left-top',
        	'opacity'  => 100
    	),
    	'priority'    => 1,
    	'output'      => '.bg-slider',
	);
	$fields[] = array(
		'type'     => 'image',
		'setting'  => 'logo',
		'label'    => __( 'Site logo image', 'odin' ),
		'section'  => 'visual',
		'default'  => '',
		'priority' => 1,
	);
	$fields[] = array(
		'type'     => 'color',
		'setting'  => 'menu_color',
		'label'    => __( 'Top menu links color', 'odin' ),
		'section'  => 'visual',
		'default'  => '',
		'priority' => 1,
		'output' => array(
			array(
            	'element'  => 'nav#menu-top li a',
            	'property' => 'color',
            ),
    	),
	);
	$fields[] = array(
		'type'        => 'background',
		'setting'     => 'top_menu_bg',
		'label'       => __( 'Top menu background', 'odin' ),
		'section'     => 'visual',
		'default'     => array(
			'color'    => '#1F1F1F',
        	'image'    => '',
        	'repeat'   => 'no-repeat',
        	'size'     => 'cover',
        	'attach'   => 'fixed',
        	'position' => 'left-top',
        	'opacity'  => 100
    	),
    	'priority'    => 1,
    	'output'      => 'nav#menu-top',
	);
	$fields[] = array(
		'type'        => 'background',
		'setting'     => 'archive_bg',
		'label'       => __( 'Background for Content Display', 'odin' ),
		'section'     => 'visual',
		'default'     => array(
			'color'    => '',
        	'image'    => get_template_directory_uri() . '/assets/images/bg-noticias.jpg',
        	'repeat'   => 'no-repeat',
        	'size'     => 'cover',
        	'attach'   => 'fixed',
        	'position' => 'left-top',
        	'opacity'  => 100
    	),
    	'priority'    => 1,
    	'output'      => '#noticias-home',
	);
	$fields[] = array(
		'type'     => 'textarea',
		'setting'  => 'slider_home',
		'label'    => __( 'Shortcode of slider in home', 'odin' ),
		'section'  => 'visual',
		'default'  => '[brasa_slider name="Header"]',
		'priority' => 1,
	);

	$fields[] = array(
		'type'     => 'text',
		'setting'  => 'home_site_name',
		'label'    => __( 'Site name to show in Front Page', 'odin' ),
		'section'  => 'home_site_info',
		'default'  => get_bloginfo( 'name' ),
		'priority' => 1,
	);
	$fields[] = array(
		'type'     => 'textarea',
		'setting'  => 'home_site_description',
		'label'    => __( 'Site description to show in Front Page', 'odin' ),
		'section'  => 'home_site_info',
		'default'  => get_bloginfo( 'name' ),
		'priority' => 1,
	);

	$fields[] = array(
		'type'     => 'text',
		'setting'  => 'fast_link_1_title',
		'label'    => __( 'Fast Link 1 - Title', 'odin' ),
		'help'	   => __( 'Leave empty to hide', 'odin' ),
		'section'  => 'home_links',
		'priority' => 1,
	);
	$fields[] = array(
		'type'     => 'text',
		'setting'  => 'fast_link_1',
		'label'    => __( 'Fast Link 1 - URL', 'odin' ),
		'section'  => 'home_links',
		'priority' => 1,
	);
	$fields[] = array(
		'type'     => 'text',
		'setting'  => 'fast_link_2_title',
		'label'    => __( 'Fast Link 2 - Title', 'odin' ),
		'help'	   => __( 'Leave empty to hide', 'odin' ),
		'section'  => 'home_links',
		'priority' => 1,
	);
	$fields[] = array(
		'type'     => 'text',
		'setting'  => 'fast_link_2',
		'label'    => __( 'Fast Link 2 - URL', 'odin' ),
		'section'  => 'home_links',
		'priority' => 1,
	);
	$fields[] = array(
		'type'     => 'text',
		'setting'  => 'fast_link_3_title',
		'label'    => __( 'Fast Link 3 - Title', 'odin' ),
		'help'	   => __( 'Leave empty to hide', 'odin' ),
		'section'  => 'home_links',
		'priority' => 1,
	);
	$fields[] = array(
		'type'     => 'text',
		'setting'  => 'fast_link_3',
		'label'    => __( 'Fast Link 3 - URL', 'odin' ),
		'section'  => 'home_links',
		'priority' => 1,
	);
	return $fields;
}
add_filter( 'kirki/fields', 'brasa_kirki_fields' );
