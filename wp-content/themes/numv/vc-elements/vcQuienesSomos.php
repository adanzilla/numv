<?php
/*
Element Description: VC QuienesSomos
*/

// Element Class

class vcQuienesSomos extends WPBakeryShortCode {

    
    function __construct() {
        
        add_action( 'init', [ $this, 'vc_quienes_somos_map' ] );
        add_shortcode( 'vc_quienes_somos', [ $this, 'vc_quienes_somos' ] );
        $this->template = get_template_directory_uri();

    }

    
    public function vc_quienes_somos_map() {

        
        if ( !defined( 'WPB_VC_VERSION' ) ) {
            return;
        }

        
        vc_map(
            [
                'name'        => "QuienesSomos",
                'base'        => 'vc_quienes_somos',
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
                        "type"        => 'textarea_html',
                        "class"       => '',
                        "heading"     => 'Contenido',
                        "param_name"  => 'content',
                        "value"       => '', 
                        "description" => "Descripción"
                    ],

                    [
                        'type' => 'param_group',
                        'value' => '',
                        'param_name' => 'cards',
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
                                'heading'    => 'Posición',
                                'param_name' => 'position',
                            ],

                            [
                                'type'       => 'textfield',
                                'value'      => '',
                                'heading'    => 'Etiqueta',
                                'param_name' => 'label',
                            ],

                            [
                                "type"        => "attach_image",
                                "heading"     => "Imagen",
                                "description" => "Imagen para la tarjeta",
                                "param_name"  => "image",
                                "value"       => "",
                            ]



                        ]
                    ],

                ]
            ]
        );

    }

    
    public function vc_quienes_somos( $atts, $content ) {

        global $post;
        
        extract(
            shortcode_atts(
                [
                    'animation' => '',
                    'title'     => '',
                    'cards'     => '',
                ],
                $atts
            )
        ); 

        $cards = vc_param_group_parse_atts( $cards );

        $html_cards = '';

        foreach ($cards as $card) {

            $image = wp_get_attachment_image_src( $card['image'], 'full' );

            $html_cards .= '
                <div class="swiper-slide">
                    <div class="card py-4 px-3">
                        <p class="name">
                            '. $card['name'] .'
                        </p>
                        <p class="position">
                            '. $card['position'] .'<br>
                            '. $card['label'] .'
                        </p>
                        <img src="'. $image[0] .'" alt="" class="img-fluid">
                    </div>
                </div>
            ';
        }

        $html = '
            <section class="mt-0 mb-5 my-md-5" id="quienes-somos">
                <div class="container for-mobile">
                    <div class="row no-gutters">
                        <div class="col-12 col-sm-10 col-lg-9 mx-auto">
                    
                            <div class="row no-gutters">
                                <div class="col-12">
                                    
                                    <h2 class="text-center">'. $title .'</h2>
                                    '. apply_filters( "the_content", $content ) .'
                                </div>
                            </div>

                        </div>

                        <div class="col-12 col-sm-10 col-lg-12 mx-auto">

                            <div class="row no-gutters my-0 my-md-5">
                                <div class="col-12">
                                    <div class="swiper mySwiperTeam">
                                       
                                        <div class="swiper-wrapper">
                                            '. $html_cards .'
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
                    </div>
                </div>
            </section>
            ';

        return $html;

    }

}

new vcQuienesSomos();

?>
