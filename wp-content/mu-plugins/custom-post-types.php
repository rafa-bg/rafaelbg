<?php 

function rafaelbg_post_types() {

register_post_type('proyectos', array(
		'supports' =>array('title', 'editor', 'thumbnail'),
		'public' => true,
		'labels' => array(
			'name' => 'Proyectos',
			'all_items' => 'Ver proyectos',
			'singular_name' => 'Proyecto',
			'add_new' => 'Nuevo Proyecto',
		),
		'rewrite' => array(
			'slug' => 'portafolio',
		),
		'menu_icon' => 'dashicons-star-filled',
		'show_ui' => true,
		'has_archive' => true,
	));
}
add_action('init', 'rafaelbg_post_types');
?>