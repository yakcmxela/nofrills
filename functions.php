<?php
// Deregister old Jquery and get New. Load website scripts/styles enqueues.
	function get_nofrills_jquery() {
		wp_deregister_script('jquery');
		wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.2.1.min.js', array(), null, true);
	}
	function get_nofrills_scripts() {
		wp_register_script('main', get_template_directory_uri() . '/js/main.js', array('jquery'), true);	
		wp_register_script('leaflet-js', get_template_directory_uri() . '/leaflet/leaflet.js', array('jquery'), true);	
		wp_register_script('mapbox-js', 'https://api.tiles.mapbox.com/mapbox-gl-js/v0.43.0/mapbox-gl.js', array('jquery'), true);
		wp_register_script('mapbox-geocoder-js', 'https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v2.1.1/mapbox-gl-geocoder.min.js', true);
		wp_register_script('turf-js', 'https://npmcdn.com/@turf/turf/turf.min.js', true);
		wp_register_script('tether',  'https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js', false, '1.4.0', true);	
		wp_register_script('bootstrap-js', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js', false, '4.0.0-alpha.6', true);
		wp_register_script('jquery-validate-js', 'https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js', true);
		wp_enqueue_script('tether');
		wp_enqueue_script('bootstrap-js');
		wp_enqueue_script('mapbox-geocoder-js');
		wp_enqueue_script('mapbox-js');
		wp_enqueue_script('main');
		wp_enqueue_script('turf-js');
		wp_enqueue_script('jquery-validate-js');
	}
	function get_nofrills_styles() {
		wp_enqueue_style('Roboto', 'https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,900,900i');
		wp_enqueue_style('mapbox', 'https://api.tiles.mapbox.com/mapbox-gl-js/v0.43.0/mapbox-gl.css');
		wp_enqueue_style('mapbox-geocoder', 'https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v2.1.1/mapbox-gl-geocoder.css');
		wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap/bootstrap.min.css');
		wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');
		wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css');
	}
	add_action('wp_enqueue_scripts', 'get_nofrills_jquery');
	add_action('wp_enqueue_scripts', 'get_nofrills_scripts');
	add_action('wp_enqueue_scripts', 'get_nofrills_styles');
// WordPress Title
    function theme_slug_setup() {
        add_theme_support( 'title-tag' );
    }
    add_action( 'after_setup_theme', 'theme_slug_setup' );
// Advanced Custom Fields
    // Options Page
	    if( function_exists('acf_add_options_page') ) {
	            acf_add_options_page();
	            acf_add_options_sub_page('Sidebar');
	            acf_add_options_sub_page('Header');
	            acf_add_options_sub_page('Footer');

	            acf_add_options_page(array(
	                  'page_title'      => 'Theme Options',
	                  'menu_title'      => 'Theme Options',
	                  'menu-slug'       => 'theme-options',
	                  'capability'      => 'edit_posts',
	                  'parent-slug'     => '',
	                  'position'        => false,
	                  'icon_url'        => false,
	                  'redirect'        => false
	            ));
	            acf_add_options_sub_page(array(
	                  'page_title'      => 'Sidebar',
	                  'menu_title'      => 'Sidebar',
	                  'menu-slug'       => 'theme-options-sidebar',
	                  'capability'      => 'edit_posts',
	                  'parent-slug'     => 'theme-options',
	                  'position'        => false,
	                  'icon_url'        => false,
	            ));
	            acf_add_options_sub_page(array(
	                  'page_title'      => 'Header',
	                  'menu_title'      => 'Header',
	                  'menu-slug'       => 'theme-options-header',
	                  'capability'      => 'edit_posts',
	                  'parent-slug'     => 'theme-options',
	                  'position'        => false,
	                  'icon_url'        => false,
	            ));
	            acf_add_options_sub_page(array(
	                  'page_title'      => 'Footer',
	                  'menu_title'      => 'Footer',
	                  'menu-slug'       => 'theme-options-footer',
	                  'capability'      => 'edit_posts',
	                  'parent-slug'     => 'theme-options',
	                  'position'        => false,
	                  'icon_url'        => false,
	            ));
	    }
?>