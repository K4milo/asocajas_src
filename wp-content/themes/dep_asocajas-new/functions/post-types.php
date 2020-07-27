<?php

// Custom post types creation
function create_posttype() {

	 ////////////////////
	// POST TYPES
	///////////////////

	//Post Type Investigaciones

	register_post_type( 'investigaciones',
	// CPT Options
	    array(
	        'labels' => array(
	            'name' => __( 'investigaciones' ),
	            'singular_name' => __( 'investigacion' )
	        ),
	        'rewrite' => array('slug' => 'investigacion'),
	        'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields'),
	        'public' => true,
	        'hierarchical'        => false,
	        'show_ui'             => true,
	        'show_in_menu'        => true,
	        'show_in_nav_menus'   => true,
	        'show_in_admin_bar'   => true,
	        'menu_position'       => 5,
	        'can_export'          => true,
	        'has_archive'         => true,
	        'exclude_from_search' => false,
	        'publicly_queryable'  => true,
	        'capability_type'     => 'post'
	    )
	);

	//Post Type Videos

	register_post_type( 'videos',
	// CPT Options
	    array(
	        'labels' => array(
	            'name' => __( 'Videos' ),
	            'singular_name' => __('Video')
	        ),
	        'rewrite' => array('slug' => 'video'),
	        'supports' => array( 'title', 'thumbnail', 'custom-fields'),
	        'public' => true,
					'taxonomies'          => array( 'category', 'post_tag' ),
	        'hierarchical'        => false,
	        'show_ui'             => true,
	        'show_in_menu'        => true,
	        'show_in_nav_menus'   => true,
	        'show_in_admin_bar'   => true,
	        'menu_position'       => 6,
	        'can_export'          => true,
	        'has_archive'         => true,
	        'exclude_from_search' => true,
	        'publicly_queryable'  => true,
	        'capability_type'     => 'post'
	    )
	);

	//Post Type Galería

	register_post_type( 'items-galeria',
	// CPT Options
	    array(
	        'labels' => array(
	            'name' => __( 'Item Galería' ),
	            'singular_name' => __('Item Galería')
	        ),
	        'rewrite' => array('slug' => 'item-galeria'),
	        'supports' => array( 'title', 'thumbnail', 'custom-fields', 'revisions'),
	        'public' => true,
	        'hierarchical'        => false,
	        'show_ui'             => true,
	        'show_in_menu'        => true,
	        'show_in_nav_menus'   => true,
	        'show_in_admin_bar'   => true,
	        'menu_position'       => 7,
	        'can_export'          => true,
	        'has_archive'         => true,
	        'exclude_from_search' => true,
	        'publicly_queryable'  => true,
	        'capability_type'     => 'post'
	    )
	);

	register_post_type( 'recursos',
	// CPT Options
	    array(
	        'labels' => array(
	            'name' => __( 'Recursos' ),
	            'singular_name' => __( 'Recurso' )
	        ),
	        'rewrite' => array('slug' => 'recursos'),
	        'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields'),
	        'public' => true,
	        'hierarchical'        => false,
	        'show_ui'             => true,
	        'show_in_menu'        => true,
	        'show_in_nav_menus'   => true,
	        'show_in_admin_bar'   => true,
	        'menu_position'       => 8,
	        'can_export'          => true,
	        'has_archive'         => true,
	        'exclude_from_search' => false,
	        'publicly_queryable'  => true,
	        'capability_type'     => 'post'
	    )
	);

	//Post Type Eventos

	register_post_type( 'eventos',
	// CPT Options
	    array(
	        'labels' => array(
	            'name' => __( 'Eventos' ),
	            'singular_name' => __( 'Evento' )
	        ),
	        'rewrite' => array('slug' => 'evento'),
	        'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields'),
	        'public' => true,
	        'hierarchical'        => false,
	        'show_ui'             => true,
	        'show_in_menu'        => true,
	        'show_in_nav_menus'   => true,
	        'show_in_admin_bar'   => true,
	        'menu_position'       => 9,
	        'can_export'          => true,
	        'has_archive'         => true,
	        'exclude_from_search' => false,
	        'publicly_queryable'  => true,
	        'capability_type'     => 'post'
	    )
	);

	//Post Type Eventos

	register_post_type( 'revistas',
	// CPT Options
	    array(
	        'labels' => array(
	            'name' => __( 'Revistas' ),
	            'singular_name' => __( 'Revista' )
	        ),
	        'rewrite' => array('slug' => 'revista'),
	        'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields'),
	        'public' => true,
	        'hierarchical'        => false,
	        'show_ui'             => true,
	        'show_in_menu'        => true,
	        'show_in_nav_menus'   => true,
	        'show_in_admin_bar'   => true,
	        'menu_position'       => 10,
	        'can_export'          => true,
	        'has_archive'         => true,
	        'exclude_from_search' => false,
	        'publicly_queryable'  => true,
	        'capability_type'     => 'post'
	    )
	);


	////////////////////
	// TAXONOMIAS
	///////////////////


	// Tipos de recurso

	$media_labels_ubic = array(
	    'name' => _x( 'Tipo de recurso', 'Tipos de recurso' ),
	    'singular_name' => _x( 'Tipo', 'tipo' ),
	    'search_items' =>  __( 'Buscar Tipo de recurso' ),
	    'all_items' => __( 'Todas los tipo de recurso' )
	);

	register_taxonomy('tipo-recurso',array('recursos'), array(
	    'hierarchical' => true,
	    'labels' => $media_labels_ubic,
	    'show_ui' => true,
	    'show_admin_column' => true,
	    'show_in_rest' => true,
	    'rest_base' => 'recursos',
	    'rest_controller_class' => 'WP_REST_Terms_Controller',
	    'query_var' => true,
	    'rewrite' => array( 'slug' => 'tipo-recurso')
	));

	flush_rewrite_rules();
}

// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );
