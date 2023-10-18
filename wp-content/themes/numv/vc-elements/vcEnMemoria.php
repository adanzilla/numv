<?php
/*
Element Description: VC EnMemoria
*/

// Element Class

class vcEnMemoria extends WPBakeryShortCode {

    
    function __construct() {
        
        add_action( 'init', [ $this, 'vc_en_memoria_map' ] );
        add_shortcode( 'vc_en_memoria', [ $this, 'vc_en_memoria' ] );
        $this->template = get_template_directory_uri();

    }

    
    public function vc_en_memoria_map() {

        
        if ( !defined( 'WPB_VC_VERSION' ) ) {
            return;
        }

        
        vc_map(
            [
                'name'        => "En Memoria",
                'base'        => 'vc_en_memoria',
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
                        'type' => 'param_group',
                        'value' => '',
                        'param_name' => 'slides',
                        'params' => [

                            [
                                'type'        => 'textfield',
                                'value'       => '',
                                'heading'     => 'Nombre',
                                'param_name'  => 'name',
                                'admin_label' => true
                            ],
                            
                            [
                                'type'       => 'textfield',
                                'value'      => '',
                                'heading'    => 'Label',
                                'param_name' => 'label',
                            ],
                            
                            [
                                'type'       => 'textfield',
                                'value'      => '',
                                'heading'    => 'Texto',
                                'param_name' => 'text',
                            ],

                            [
                                "type"        => "attach_image",
                                "heading"     => "Imagen",
                                "description" => "Imagen",
                                "param_name"  => "image",
                                "value"       => "",
                            ]

                        ]
                    ],

                ]
            ]
        );

    }

    
    public function vc_en_memoria( $atts, $content ) {

        global $post;
        
        extract(
            shortcode_atts(
                [
                    'animation' => '',
                    'slides'    => ''
                ],
                $atts
            )
        ); 

        //$slides = vc_param_group_parse_atts( $slides );

        $html_slides = '';

        $last_four_incidents = last_four_incidents();


        foreach ($last_four_incidents as $slide) {

            $image_src = $this->template . "/img/PeatOn.svg";

            if( $slide['submodo'] == 'Motociclista' ){
                $image_src = $this->template . "/img/Motociclista.svg";
            }

            if( $slide['submodo'] == 'Peatón' ){
                $image_src = $this->template . "/img/Peaton.svg";
            }

            if( $slide['submodo'] == 'Ciclista' ){
                $image_src = $this->template . "/img/Ciclista.svg";
            }


            $string_edad = ( $slide['edad'] ) ? ' de '. $slide['edad'] .' años' : '';


            $municipio = $slide['municipio'];
            $conurbacion = $slide['conurbacion'];

            $html_slides .= '
                <div class="swiper-slide">
                    <div class="card p-2">
                        <div class="row no-gutters">
                            <div class="col-4 px-3 text-center">
                                <img src="'. $image_src .'" alt="" class="img-fluid">
                                <!--<p class="name">'. $slide['municipio'] .'</p>-->
                                <!--<p class="position">'. $slide['conurbacion'] .'</p>-->
                            </div>
                            <div class="col-8 d-flex flex-column">
                                <p class="text my-auto">
                                    En memoria de '. $slide['nombre'] .', '. $slide['submodo'] . $string_edad .'  de '. $municipio .', '. $conurbacion .'
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            ';
        }

        $html = '
            <section class="mt-0 mb-5 my-md-5" id="en-memoria">
                <div class="container for-mobile">
                    <div class="row no-gutters">
                        <div class="col-12 col-sm-10 col-lg-11 mx-auto">
                            <div class="row no-gutters">
                                <div class="col-12">
                                    <h2 class="text-center mb-4">En memoria de las personas</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col-12">
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    '. $html_slides .'
                                    

                                  
                                </div>
                            </div>
                                  <div class="swiper-button-prev">
                                      <img src="'. $this->template .'/img/rounded-left-arrow-dark.svg" alt="">
                                  </div>
                                  <div class="swiper-button-next">
                                      <img src="'. $this->template .'/img/rounded-right-arrow-dark.svg" alt="">
                                  </div>
                        </div>
                    </div>
                </div>

            </section>
            ';

        return $html;

    }

}

new vcEnMemoria();

?>
