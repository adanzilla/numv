<?php
// Before VC Init
add_action( 'vc_before_init', 'vc_before_init_actions' );

function vc_before_init_actions() {

	// Modulo template
    require_once( get_stylesheet_directory() . '/vc-elements/vcTemplate.php' );
    require_once( get_stylesheet_directory() . '/vc-elements/vcInicio.php' );
    require_once( get_stylesheet_directory() . '/vc-elements/vcCifras.php' );
    require_once( get_stylesheet_directory() . '/vc-elements/vcGraficas.php' );
    require_once( get_stylesheet_directory() . '/vc-elements/vcBanner.php' );
    require_once( get_stylesheet_directory() . '/vc-elements/vcMapa.php' );
    require_once( get_stylesheet_directory() . '/vc-elements/vcReportes.php' );
    require_once( get_stylesheet_directory() . '/vc-elements/vcQuienesSomos.php' );
    require_once( get_stylesheet_directory() . '/vc-elements/vcNuestraHistoria.php' );
    require_once( get_stylesheet_directory() . '/vc-elements/vcEnMemoria.php' );
    require_once( get_stylesheet_directory() . '/vc-elements/vcBottom.php' );
    

}