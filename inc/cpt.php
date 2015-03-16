<?php
if ( ! function_exists('custom_post_types') ) {

// Register Custom Post Type
function custom_post_types() {

	$labels = array(
		'name'                => _x( 'Eventos', 'Post Type General Name', 'odin' ),
		'singular_name'       => _x( 'Agenda', 'Post Type Singular Name', 'odin' ),
		'menu_name'           => __( 'Agenda', 'odin' ),
		'parent_item_colon'   => __( 'Parente', 'odin' ),
		'all_items'           => __( 'Todos eventos', 'odin' ),
		'view_item'           => __( 'Ver evento', 'odin' ),
		'add_new_item'        => __( 'Adicionar novo Evento', 'odin' ),
		'add_new'             => __( 'Adicionar novo', 'odin' ),
		'edit_item'           => __( 'Editar evento', 'odin' ),
		'update_item'         => __( 'Atualizar Evento', 'odin' ),
		'search_items'        => __( 'Buscar Evento', 'odin' ),
		'not_found'           => __( 'Não encontrado', 'odin' ),
		'not_found_in_trash'  => __( 'Não encontrado na lixeira', 'odin' ),
	);
	$args = array(
		'label'               => __( 'agenda', 'odin' ),
		'description'         => __( 'Agenda de Eventos', 'odin' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', ),
		'taxonomies'          => array( 'category' ),
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-calendar-alt',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'agenda', $args );

}

// Hook into the 'init' action
add_action( 'init', 'custom_post_types', 0 );

}
