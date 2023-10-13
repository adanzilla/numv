<?php
/**
 * NUMV functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package NUMV
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function numv_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on NUMV, use a find and replace
		* to change 'numv' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'numv', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'numv' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'numv_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);

	add_image_size( 'blog-grid', 300, 200, true );

	// disable for posts
	add_filter('use_block_editor_for_post', '__return_false', 10);

	// disable for post types
	add_filter('use_block_editor_for_page', '__return_false', 10);

}
add_action( 'after_setup_theme', 'numv_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function numv_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'numv_content_width', 640 );
}
add_action( 'after_setup_theme', 'numv_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function numv_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'numv' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'numv' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'numv_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function numv_scripts() {

	$locations = locations();

	wp_enqueue_style( "bootstrap", "//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css", [], _S_VERSION );
	wp_enqueue_style( "font-awesome", get_template_directory_uri() . "/bower_components/components-font-awesome/css/all.css", [], _S_VERSION );
	wp_enqueue_style( "swiper", "https://unpkg.com/swiper@8/swiper-bundle.min.css", [], _S_VERSION );
	wp_enqueue_script( 'jquery-validate', get_template_directory_uri() . '/bower_components/jquery-validation/dist/jquery.validate.min.js', [], _S_VERSION, true );
	wp_enqueue_script( 'chartjs', get_template_directory_uri() . '/node_modules/chart.js/dist/chart.umd.js', [], _S_VERSION, true );
	
	wp_enqueue_style( "numv", get_template_directory_uri() . "/css/numv.css", [], _S_VERSION );
	wp_enqueue_style( "responsive", get_template_directory_uri() . "/css/responsive.css", [], _S_VERSION );


	wp_enqueue_script( "bootstrap", "//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js", ["jquery"], _S_VERSION, true );
	wp_enqueue_script( "swiper", "https://unpkg.com/swiper@8/swiper-bundle.min.js", ["jquery"], _S_VERSION, true );
	wp_enqueue_script( 'numeral', '//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js', ["jquery"], '20200606', true );
	
	wp_enqueue_script( "plugins", get_template_directory_uri() . "/js/plugins.js", ["jquery"], _S_VERSION, true );
	wp_enqueue_script( "googlemap", get_template_directory_uri() . "/js/googlemap.js", ["jquery"], _S_VERSION, true );
	wp_localize_script( "googlemap", 'googlemap_data', [ "locations" => $locations, 'template' =>  get_template_directory_uri() ] );
	wp_enqueue_script( "google_maps_script", "//maps.googleapis.com/maps/api/js?key=AIzaSyCv85b3Q9XtooyVVEsp_0GRrJNz7CoeyhU&callback=initMap&libraries", [], _S_VERSION, true );
	wp_enqueue_script( "filters", get_template_directory_uri() . "/js/filters.js", ["jquery"], _S_VERSION, true );

	wp_enqueue_script( "main", get_template_directory_uri() . "/js/main.js", ["jquery"], _S_VERSION, true );
	wp_localize_script('main', 'numv_ajax', [ 'ajax_url' => admin_url( 'admin-ajax.php'), 'site_url' => site_url( "/" ) ,'template' =>  get_template_directory_uri() ] );
}
add_action( 'wp_enqueue_scripts', 'numv_scripts' );


function locations(){

	global $wpdb;
	$locations = $wpdb->get_results("SELECT * FROM incidentes");

	if( ! empty( $locations ) ){
		foreach ($locations as &$location) {

			$location->longitud = (float) $location->longitud;
            $location->latitud = (float) $location->latitud;

			switch ( $location->submodo ) {
				case 'Peatón':
					$location->pin = "/img/pin-amarillo.svg";
					$location->icon = "/img/icon-amarillo.svg";
					break;

				case 'Ciclista':
					$location->pin = "/img/pin-morado.svg";
					$location->icon = "/img/icon-morado.svg";
					break;

				case 'Motociclista':
					$location->pin = "/img/pin-verde.svg";
					$location->icon = "/img/icon-verde.svg";
					break;
				
				default:
					$location->pin = "/img/pin-amarillo.svg";
					$location->icon = "/img/icon-amarillo.svg";
					break;
			}
		}
	}

	return $locations;
}

add_action( 'wp_ajax_nopriv_municipios', "municipios" );
function municipios(){
	$response = new stdClass();
	$response->result = false;

	
	$response->estado = $_POST['estado'];

	if( !empty( $_POST['estado'] ) ){

		global $wpdb;
		$response->municipios = $wpdb->get_results("SELECT DISTINCT municipio FROM `incidentes` WHERE conurbacion = '". $_POST['estado'] ."'");

	}


	
	echo json_encode( $response );
	wp_die();
}

add_action( 'wp_ajax_nopriv_grafica_dinamica', "grafica_dinamica" );
function grafica_dinamica(){
	$response = new stdClass();
	$response->result = false;

	parse_str( $_POST['data'], $data);
	$response->data = $data;

	//filtro-fecha
	//filtro-estado
	//filtro-municipio
	//filtro-vialidad
	//filtro-edad
	
	$query = "SELECT * FROM `incidentes` WHERE latitud <> ''";

	if( $data['filtro-fecha'] != ''){
		$query .= " AND ano = '". $data['filtro-fecha'] ."'";
	}
	if( $data['filtro-estado'] != ''){
		$query .= " AND conurbacion = '". $data['filtro-estado'] ."'";
	}
	if( $data['filtro-municipio'] != ''){
		$query .= " AND municipio = '". $data['filtro-municipio'] ."'";
	}
	if( $data['filtro-vialidad'] != ''){
		$query .= " AND tipo = '". $data['filtro-vialidad'] ."'";
	}
	if( $data['filtro-edad'] != ''){
		$query .= " AND edad = '". $data['filtro-edad'] ."'";
	}

	$response->query = $query;

	if( ! empty( $data['filtro-municipio'] ) ){

		$response->grafica = 'por-municipio';
		$response->result = true;

		global $wpdb;
		$resultados = $wpdb->get_results( $query );

		$response->Peatones = 0;
		$response->Motociclistas = 0;
		$response->Ciclistas = 0;
		$response->totales = count( $resultados );

		$response->h = 0;
		$response->m = 0;

		foreach ($resultados as $resultado) {

			if( $resultado->submodo == "Peatón" ){ $response->Peatones++; } 
			if( $resultado->submodo == "Motociclista" ){ $response->Motociclistas++; } 
			if( $resultado->submodo == "Ciclista" ){ $response->Ciclistas++; } 
			
			if( $resultado->genero == "H" ){ $response->h++; } 
			if( $resultado->genero == "M" ){ $response->m++; } 
			
		}

		$response->labels = [ $data['filtro-municipio'] ];

	}

	if( ! empty( $data['filtro-estado'] ) && $data['filtro-municipio'] == '' ){

		$response->grafica = 'por-estado';
		$response->result = true;

		global $wpdb;
		$resultados_por_estado = $wpdb->get_results( $query );


		$query_labels = "SELECT DISTINCT municipio FROM `incidentes` WHERE latitud <> '' AND conurbacion = '". $data['filtro-estado'] ."'";

		$labels = $wpdb->get_results( $query_labels, ARRAY_A );

		if( $labels ){
			$response->labels = [];
			
			$response->datasetPeatones = [];
			$response->datasetMotociclistas = [];
			$response->datasetCiclistas = [];

			foreach ($labels as $label) {
				array_push( $response->labels , $label['municipio'] );

				$peatones_por_municipio = 0;
				$motociclistas_por_municipio = 0;
				$ciclistas_por_municipio = 0;

				$query_por_municipio = "SELECT * FROM `incidentes` WHERE latitud <> '' AND conurbacion = '". $data['filtro-estado'] ."' AND municipio = '" . $label['municipio']. "'";
				$totales_por_municipio = $wpdb->get_results( $query_por_municipio, ARRAY_A );

				
				$response->h = 0;
				$response->m = 0;

				foreach ($totales_por_municipio as $resultado_por_municipio) {
					if( $resultado_por_municipio['submodo'] == "Peatón" ){ $peatones_por_municipio++; }
					if( $resultado_por_municipio['submodo'] == "Ciclista" ){ $ciclistas_por_municipio++; }
					if( $resultado_por_municipio['submodo'] == "Motociclista" ){ $motociclistas_por_municipio++; }
					
				}

				array_push($response->datasetPeatones, $peatones_por_municipio);
				array_push($response->datasetMotociclistas, $motociclistas_por_municipio);
				array_push($response->datasetCiclistas, $ciclistas_por_municipio);
				

			}
		}

		$response->Peatones = 0;
		$response->Motociclistas = 0;
		$response->Ciclistas = 0;
		$response->totales = count( $resultados_por_estado );

		foreach ($resultados_por_estado as $resultado) {

			if( $resultado->submodo == "Peatón" ){ $response->Peatones++; } 
			if( $resultado->submodo == "Motociclista" ){ $response->Motociclistas++; } 
			if( $resultado->submodo == "Ciclista" ){ $response->Ciclistas++; } 
			if( $resultado->genero == "H" ){ $response->h++; } 
			if( $resultado->genero == "M" ){ $response->m++; } 
			
		}

		
		$response->query_labels = $query_labels;

	}

	if( ! empty( $data['filtro-fecha'] ) && $data['filtro-municipio'] == '' && $data['filtro-estado'] == '' ){

		$response->grafica = 'por-ano';
		$response->result = true;

		global $wpdb;
		$resultados_por_estado = $wpdb->get_results( $query );


		$query_labels = "SELECT DISTINCT conurbacion FROM `incidentes` WHERE latitud <> '' AND ano = '". $data['filtro-fecha'] ."'";

		$labels = $wpdb->get_results( $query_labels, ARRAY_A );

		if( $labels ){
			$response->labels = [];
			
			$response->datasetPeatones = [];
			$response->datasetMotociclistas = [];
			$response->datasetCiclistas = [];

			foreach ($labels as $label) {
				array_push( $response->labels , $label['conurbacion'] );

				$peatones_por_estado = 0;
				$motociclistas_por_estado = 0;
				$ciclistas_por_estado = 0;

				$query_por_estado = "SELECT * FROM `incidentes` WHERE latitud <> '' AND conurbacion = '". $label['conurbacion'] ."'";
				$totales_por_estado = $wpdb->get_results( $query_por_estado, ARRAY_A );

				$response->h = 0;
				$response->m = 0;
				

				foreach ($totales_por_estado as $resultado_por_estado) {
					if( $resultado_por_estado['submodo'] == "Peatón" ){ $peatones_por_estado++; }
					if( $resultado_por_estado['submodo'] == "Ciclista" ){ $ciclistas_por_estado++; }
					if( $resultado_por_estado['submodo'] == "Motociclista" ){ $motociclistas_por_estado++; }

				}

				array_push($response->datasetPeatones, $peatones_por_estado);
				array_push($response->datasetMotociclistas, $motociclistas_por_estado);
				array_push($response->datasetCiclistas, $ciclistas_por_estado);
				

			}
		}

		$response->Peatones = 0;
		$response->Motociclistas = 0;
		$response->Ciclistas = 0;
		$response->totales = count( $resultados_por_estado );

		foreach ($resultados_por_estado as $resultado) {

			if( $resultado->submodo == "Peatón" ){ $response->Peatones++; } 
			if( $resultado->submodo == "Motociclista" ){ $response->Motociclistas++; } 
			if( $resultado->submodo == "Ciclista" ){ $response->Ciclistas++; } 
			if( $resultado->genero == "H" ){ $response->h++; } 
			if( $resultado->genero == "M" ){ $response->m++; } 
			
		}

		
		$response->query_labels = $query_labels;

	}

	if( $data['filtro-fecha'] == '' && $data['filtro-municipio'] == '' && $data['filtro-estado'] == '' ){

		$response->grafica = 'todos';
		$response->result = true;

		global $wpdb;
		$resultados_por_estado = $wpdb->get_results( $query );


		$query_labels = "SELECT DISTINCT conurbacion FROM `incidentes` WHERE latitud <> ''";

		$labels = $wpdb->get_results( $query_labels, ARRAY_A );

		if( $labels ){
			$response->labels = [];
			
			$response->datasetPeatones = [];
			$response->datasetMotociclistas = [];
			$response->datasetCiclistas = [];

			foreach ($labels as $label) {
				array_push( $response->labels , $label['conurbacion'] );

				$peatones_por_estado = 0;
				$motociclistas_por_estado = 0;
				$ciclistas_por_estado = 0;

				$query_por_estado = "SELECT * FROM `incidentes` WHERE latitud <> '' AND conurbacion = '". $label['conurbacion'] ."'";
				$totales_por_estado = $wpdb->get_results( $query_por_estado, ARRAY_A );

				foreach ($totales_por_estado as $resultado_por_estado) {
					if( $resultado_por_estado['submodo'] == "Peatón" ){ $peatones_por_estado++; }
					if( $resultado_por_estado['submodo'] == "Ciclista" ){ $ciclistas_por_estado++; }
					if( $resultado_por_estado['submodo'] == "Motociclista" ){ $motociclistas_por_estado++; }
				}

				array_push($response->datasetPeatones, $peatones_por_estado);
				array_push($response->datasetMotociclistas, $motociclistas_por_estado);
				array_push($response->datasetCiclistas, $ciclistas_por_estado);
				

			}
		}

		$response->Peatones = 0;
		$response->Motociclistas = 0;
		$response->Ciclistas = 0;
		$response->totales = count( $resultados_por_estado );
		$response->h = 0;
		$response->m = 0;
		

		foreach ($resultados_por_estado as $resultado) {

			if( $resultado->submodo == "Peatón" ){ $response->Peatones++; } 
			if( $resultado->submodo == "Motociclista" ){ $response->Motociclistas++; } 
			if( $resultado->submodo == "Ciclista" ){ $response->Ciclistas++; } 
			if( $resultado->genero == "H" ){ $response->h++; } 
			if( $resultado->genero == "M" ){ $response->m++; } 
			
		}

		
		$response->query_labels = $query_labels;

	}


	
	echo json_encode( $response );
	wp_die();
}

add_action( 'wp_ajax_nopriv_form_submit', "form_submit" );
function form_submit(){
	$response = new stdClass();
	$response->result = false;

	parse_str( $_POST['data'], $data);
	$response->data = $data;

	$body = '';
		
	foreach ($data as $key => $value) {
		$body .= '<p><b>'. strtoupper( $key ) .'</b>: '.$value.'</p>';
	}

	$template = '<p>Nos han contactado</p>'. $body ;

	$post_id = wp_insert_post(
		array(
			'post_title'=> $data['name'].' - '.$data['email'],
			'post_type'=> 'form-submit',
			'post_content'=> $body,
			'post_status'=> 'publish'
		)
	);

	if( $post_id ){
		$response->result = true;
	}
	
	$headers = array('Content-Type: text/html; charset=UTF-8');
	$response->mail = wp_mail( "adan.serrano@gmail.com", "Nuevo registro", $template, $headers);

	echo json_encode( $response );
	wp_die();
}

$labels = array(
	'name' => _x( 'Submit', 'post type general name', 'xpats' ),
	'singular_name' => _x( 'Submit', 'post type singular name', 'xpats' ),
	'menu_name' => _x( 'Submit', 'admin menu', 'xpats' ),
	'name_admin_bar' => _x( 'Submit', 'add new on admin bar', 'xpats' ),
	'add_new' => _x( 'Add New', 'Submit', 'xpats' ),
	'add_new_item' => __( 'Add New submit', 'xpats' ),
	'new_item' => __( 'New submit', 'xpats' ),
	'edit_item' => __( 'Edit submit', 'xpats' ),
	'view_item' => __( 'View submit', 'xpats' ),
	'all_items' => __( 'All submit', 'xpats' ),
	'search_items' => __( 'Search submit', 'xpats' ),
	'parent_item_colon' => __( 'Parent submit:', 'xpats' ),
	'not_found' => __( 'No submit found.', 'xpats' ),
	'not_found_in_trash' => __( 'No submit found in Trash.', 'xpats' )
);

$args = array(
	'labels' => $labels,
	'description' => "",
	'public' => false,
	'publicly_queryable' => false,
	'show_ui' => true,
	'show_in_menu' => true,
	'query_var' => true,
	'capability_type' => 'post',
	'has_archive' => false,
	'hierarchical' => true,
	'menu_position' => null,
	'supports' => array( 'title', 'editor', 'author' )
);

register_post_type( 'form-submit', $args );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

