<?php
/*
Element Description: VC Cifras
*/

// Element Class

class vcCifras extends WPBakeryShortCode {

    
    function __construct() {
        
        add_action( 'init', [ $this, 'vc_cifras_map' ] );
        add_shortcode( 'vc_cifras', [ $this, 'vc_cifras' ] );
        $this->template = get_template_directory_uri();
        $this->cifras = cifras();

    }

    
    public function vc_cifras_map() {

        
        if ( !defined( 'WPB_VC_VERSION' ) ) {
            return;
        }

        
        vc_map(
            [
                'name'        => "Cifras",
                'base'        => 'vc_cifras',
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
                        'heading'     => 'Título',
                        'param_name'  => 'title',
                        'admin_label' => true
                    ],

                    [
                        'type' => 'param_group',
                        'value' => '',
                        'param_name' => 'cards',
                        'params' => [

                            [
                                'type'        => 'textfield',
                                'value'       => '',
                                'heading'     => 'Total',
                                'param_name'  => 'total',
                                'admin_label' => true
                            ],
                            
                            [
                                'type'       => 'textfield',
                                'value'      => 'DD4040',
                                'heading'    => 'Color',
                                'param_name' => 'color',
                            ],
                            
                            [
                                'type'       => 'textfield',
                                'value'      => '',
                                'heading'    => 'Tasa',
                                'param_name' => 'rate',
                            ]

                        ]
                    ],

                    [
                        'type'        => 'textfield',
                        'value'       => '',
                        'heading'     => 'Descripción',
                        'param_name'  => 'excerpt',
                        'admin_label' => false
                    ]

                ]
            ]
        );

    }

    
    public function vc_cifras( $atts, $content ) {

        global $post;
        
        extract(
            shortcode_atts(
                [
                    'animation' => '',
                    'title' => 'Cifras recolectadas de personas fallecidas en 2023',
                    'cards' => '',
                    'excerpt' => "Estás cifras son extraídas de medios de comunicación digitales y redes sociales, y validadas por nuestro equipo"

                ],
                $atts
            )
        ); 

        $cards = vc_param_group_parse_atts( $cards );



        $html = '
            <section class="mt-0 mb-5 my-md-5" id="cifras">
                <div class="container for-mobile">
                    <div class="row no-gutters">
                        <div class="col-12 col-sm-11 col-lg-10 mx-auto">

                            <div class="row no-gutters">
                                <div class="col-12">
                                    <div class="col-12">
                                        <h2 class="text-center">'. $title .'</h2>
                                        <p class="text-center">'. $excerpt .'</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row no-gutters justify-content-center cards my-0 my-md-3">
                                <div class="col-6 pr-2 pr-md-0 col-md  mx-md-2 mb-0 mb-md-0">
                                    <div class="card py-3 px-3 px-md-4">
                                        <div class="row no-gutters">
                                            <div class="col">
                                                <img src="'. $this->template .'/img/muertes-totales.png">
                                            </div>
                                            <div class="col-9 d-flex flex-column">
                                                <p class="my-auto">
                                                    Muertes totales
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col-12">
                                                <p class="cifras" id="muertes-totales">
                                                    <em>'. $this->cifras['totales'] .'</em> <!--<span style="color:#'. $cards[0]['color'] .'"><i class="fa fa-arrow-up"></i> '. $cards[0]['rate'] .'%</span>-->
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 pl-2 pl-md-0 col-md  mx-md-2 mb-3 mb-md-0">
                                    <div class="card py-3 px-3 px-md-4">
                                        <div class="row no-gutters">
                                            <div class="col">
                                                <img src="'. $this->template .'/img/ciclistas.png">
                                            </div>
                                            <div class="col-9 d-flex flex-column">
                                                <p class="my-auto">
                                                    Ciclistas
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col-12">
                                                <p class="cifras" id="ciclistas">
                                                    <em>'. $this->cifras['Ciclista']->total .'</em> <!--<span style="color:#'. $cards[1]['color'] .'"><i class="fa fa-arrow-up"></i> '. $cards[1]['rate'] .'%</span>-->
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md pr-2 pr-md-0 mx-md-2 mb-md-3 mb-md-0">
                                    <div class="card py-3 px-3 px-md-4">
                                        <div class="row no-gutters">
                                            <div class="col">
                                                <img src="'. $this->template .'/img/peatones.png">
                                            </div>
                                            <div class="col-9 d-flex flex-column">
                                                <p class="my-auto">
                                                    Peatones
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col-12">
                                                <p class="cifras" id="peatones">
                                                    <em>'. $this->cifras['Peatón']->total .'</em> <!--<span style="color:#'. $cards[2]['color'] .'"><i class="fa fa-arrow-up"></i> '. $cards[2]['rate'] .'%</span>-->
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md pl-2 pl-md-0 mx-md-2 mb-md-3 mb-md-0">
                                    <div class="card py-3 px-3 px-md-4">
                                        <div class="row no-gutters">
                                            <div class="col">
                                                <img src="'. $this->template .'/img/motociclistas.png">
                                            </div>
                                            <div class="col-9 d-flex flex-column">
                                                <p class="my-auto">
                                                    Motociclistas
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col-12">
                                                <p class="cifras" id="motociclistas">
                                                    <em>'. $this->cifras['Motociclista']->total .'</em> <!--<span style="color:#'. $cards[3]['color'] .'"><i class="fa fa-arrow-up"></i> '. $cards[3]['rate'] .'%</span>-->
                                                </p>
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

new vcCifras();

?>
