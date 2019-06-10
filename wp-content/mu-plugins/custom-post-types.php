<?php 

function rafaelbg_post_types() {

register_post_type('proyectos', array(
		'supports' =>array('title', 'thumbnail'),
		'public' => true,
		'labels' => array(
			'name' => 'Proyectos',
			'all_items' => 'Ver proyectos',
			'singular_name' => 'Proyecto',
			'add_new' => 'Nuevo Proyecto',
		),
		'menu_icon' => 'dashicons-star-filled',
		'show_ui' => true,
		'has_archive' => true,
	));
}
add_action('init', 'rafaelbg_post_types');

////////////////////////////////////

function rafaelbg_taxonomies() {

	$labels = array(
		'name'          => 'Servicios',
		'singular_name' => 'Servicios',
		'edit_item'     => 'Editar Servicio',
	);

	$args = array(
		'labels' => $labels,
		'hierarchical' => true,
		'query_var'    => true,
		'show_in_quick_edit' => true,
		'show_in_menu'  => true,
		'show_ui' => true,
		'show_admin_column' => true,
		'show_in_nav_menus' => true,
	);

	register_taxonomy('servicios', 'proyectos', $args);
}

add_action( 'init', 'rafaelbg_taxonomies' );

?>