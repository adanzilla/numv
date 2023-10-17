<?php
/*
Element Description: VC Graficas
*/

// Element Class

class vcGraficas extends WPBakeryShortCode {

    
    function __construct() {
        
        add_action( 'init', [ $this, 'vc_graficas_map' ] );
        add_shortcode( 'vc_graficas', [ $this, 'vc_graficas' ] );
        $this->template = get_template_directory_uri();

    }

    
    public function vc_graficas_map() {

        
        if ( !defined( 'WPB_VC_VERSION' ) ) {
            return;
        }

        
        vc_map(
            [
                'name'        => "Graficas",
                'base'        => 'vc_graficas',
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

    
    public function vc_graficas( $atts, $content ) {

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
            <section class="mt-0 mb-5 my-md-5" id="graficas">
                <div class="container">
                    <div class="row no-gutters">
                        <div class="col-12 col-md-8 pr-md-2">
                            <div class="card p-3">
                                <h3>Top 10 Estados con más incidentes</h3>
                                <canvas id="top10-estados-mas-incidentes"></canvas>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 pl-md-2 mt-3 mt-md-0 d-flex">
                            <div class="card p-3 w-100">
                                <h3>Factores de riesgo</h3>
                                <canvas id="pie-chart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            ';

        return $html;

    }

}

new vcGraficas();

?>
