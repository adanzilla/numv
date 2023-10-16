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
                    ]

                ]
            ]
        );

    }

    
    public function vc_mapa( $atts, $content ) {

        global $post;
        
        extract(
            shortcode_atts(
                [
                    'animation' => ''
                ],
                $atts
            )
        ); 

        

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
                                                        
                                                        <!-- <div class="form-check">
                                                          <input class="form-check-input" type="checkbox" value="Todos" name="todos" checked>
                                                          <label class="form-check-label" for="flexCheckDefault">
                                                            <img src="'. $this->template .'/img/icon-todos.svg" alt=""> Todos
                                                          </label>
                                                        </div> -->

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
