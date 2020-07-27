<?php
// 1. Define ACF PATH
function configure_path_acf($path) {
 
    // actualizar el path
    $path = get_stylesheet_directory() . '/includes/acf/';
    
    return $path;
    
}

add_filter('acf/settings/path', 'configure_path_acf');
 
// 2. Configure folder
function configure_folder_acf( $dir ) {
 
    // actualizar el directorio
    $dir = get_stylesheet_directory_uri() . '/includes/acf/';
    
    return $dir;
    
}
add_filter('acf/settings/dir', 'configure_folder_acf');
 
// 3. hide from admin
//add_filter('acf/settings/show_admin', '__return_false');

// 4. Include ACF
include_once( get_stylesheet_directory() . '/includes/acf/acf.php' );

// Options page 

add_action('acf/init', 'my_acf_init');

function my_acf_init() {
	
	if( function_exists('acf_add_options_page') ) {
		
		$option_page = acf_add_options_page(array(
			'page_title' 	=> 'Opciones de Mapa',
			'menu_title'	=> 'Opciones de Locación',
			'menu_slug' 	=> 'theme-map-settings',
			'capability'	=> 'edit_posts',
			'redirect'		=> false
		));		
	}	
}