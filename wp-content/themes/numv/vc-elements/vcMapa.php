<?php
/*
Element Description: VC Mapa
*/

// Element Class

class vcMapa extends WPBakeryShortCode {

    
    function __construct() {
        
        add_action( 'init', [ $this, 'vc_mapa_map' ] );
        add_shortcode( 'vc_mapa', [ $this, 'vc_mapa' ] );
        $this->template = get_template_directory_uri();

    }

    
    public function vc_mapa_map() {

        
        if ( !defined( 'WPB_VC_VERSION' ) ) {
            return;
        }

        
        vc_map(
            [
                'name'        => "Mapa",
                'base'        => 'vc_mapa',
                'heading'     => "heading",
                'category'    => 'NUMV',
                'value'       => "Descripción",
                'description' => "Descripción",
                'icon'        => get_stylesheet_directory_uri() . '/img/numv-imagotipo.png',
                'params' => [
                    
                    [
                        'type'        => 'animation_style',
                        'heading'     => 'Animación',
                        'param_name'  => 'animation',
                        'description' => 'Escoge una animación',
                        'admin_label' => false,
                        'weight'      => 0
                    ],

                    [
                        'type'        => 'textfield',
                        'value'       => '',
                        'heading'     => 'Latitud',
                        'param_name'  => 'latitud',
                        'admin_label' => false
                    ],

                    [
                        'type'        => 'textfield',
                        'value'       => '',
                        'heading'     => 'Longitud',
                        'param_name'  => 'longitud',
                        'admin_label' => false
                    ],

                    [
                        'type'        => 'textfield',
                        'value'       => '',
                        'heading'     => 'ZOOM',
                        'param_name'  => 'zoom',
                        'admin_label' => false
                    ]

                ]
            ]
        );

    }

    public function locations(){

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

    
    public function vc_mapa( $atts, $content ) {

        global $post;
        
        extract(
            shortcode_atts(
                [
                    'animation' => '',
                    'latitud'   => '24.04383302971051',
                    'longitud'  => '-102.43125243880371',
                    'zoom'      => '5',
                ],
                $atts
            )
        ); 

        $center_map = new stdClass;
        $center_map->lat = (float) $latitud;
        $center_map->lng = (float) $longitud;
        $zoom = intval( $zoom );

        $locations = self::locations();

        wp_enqueue_script( "googlemap", get_template_directory_uri() . "/js/googlemap.js", ["jquery"], _S_VERSION, true );
        wp_localize_script( "googlemap", 'googlemap_data', [ "center_map" => $center_map, "zoom" => $zoom,  "locations" => $locations, 'template' =>  get_template_directory_uri() ] );
        wp_enqueue_script( "google_maps_script", "//maps.googleapis.com/maps/api/js?key=AIzaSyCv85b3Q9XtooyVVEsp_0GRrJNz7CoeyhU&callback=initMap&libraries", [], _S_VERSION, true );

        $html = '
            <section class="mt-0 mb-5 my-md-5 p" id="mapa">
                <div class="container for-mobile">
                    <div class="row no-gutters">
                        <div class="col-12 col-sm-10 col-lg-11 mx-auto">
                            <div class="row no-gutters">
                                <div class="col-12">
                                    <div class="col-12">
                                        <h2 class="text-center">Las vialidades más peligrosas</h2>
                                        <p class="text-center">Explora todos los siniestros de tránsito navegando el mapa</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row no-gutters my-0 my-md-3">
                                
                                <div class="col-12 text-center">
                                    <!-- <img src="'. $this->template .'/img/mapa.png" alt="" class="img-fluid"> -->
                                    <div id="map" style="height: 65vh; width: 100%;"></div>
                                    <div id="map-filters">
                                        <div class="row no-gutters">
                                            <div class="col-12">
                                                <div class="card p-3">
                                                    <form id="filters">
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" value="Peatón" name="peatones" checked>
                                                          <label class="form-check-label" for="flexCheckDefault">
                                                            <img src="'. $this->template .'/img/icon-amarillo.svg" alt=""> Peatones
                                                          </label>
                                                        </div>
                                                        
                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" value="Motociclista" name="motociclistas" checked>
                                                          <label class="form-check-label" for="flexCheckDefault">
                                                            <img src="'. $this->template .'/img/icon-verde.svg" alt=""> Motociclistas
                                                          </label>
                                                        </div>

                                                        <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" value="Ciclista" name="ciclistas" checked>
                                                          <label class="form-check-label" for="flexCheckDefault">
                                                            <img src="'. $this->template .'/img/icon-morado.svg" alt=""> Ciclistas
                                                          </label>
                                                        </div>

                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            ';

        return $html;

    }

}

new vcMapa();

?>
