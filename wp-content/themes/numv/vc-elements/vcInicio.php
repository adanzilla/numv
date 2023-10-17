<?php
/*
Element Description: VC Inicio
*/

// Element Class

class vcInicio extends WPBakeryShortCode {

    
    function __construct() {
        
        add_action( 'init', [ $this, 'vc_inicio_map' ] );
        add_shortcode( 'vc_inicio', [ $this, 'vc_inicio' ] );
        $this->template = get_template_directory_uri();

    }

    
    public function vc_inicio_map() {

        
        if ( !defined( 'WPB_VC_VERSION' ) ) {
            return;
        }

        
        vc_map(
            [
                'name'        => "Inicio",
                'base'        => 'vc_inicio',
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
                                'heading'     => 'Título',
                                'param_name'  => 'title',
                                'admin_label' => true
                            ],
                            
                            [
                                'type'       => 'textfield',
                                'value'      => '',
                                'heading'    => 'Subtítulo',
                                'param_name' => 'subtitle',
                            ]

                        ]
                    ],

                    [
                        'type'        => 'textfield',
                        'value'       => '',
                        'heading'     => 'Descripción',
                        'param_name'  => 'excerpt',
                        'admin_label' => false
                    ],

                    [
                        "type"        => "vc_link",                 
                        "class"       => "",                       
                        "heading"     => "Link",                 
                        'admin_label' => false,
                        "param_name"  => "link",              
                        "value"       => '',                       
                        "description" => "Link para la ficha"
                    ],

                ]
            ]
        );

    }

    
    public function vc_inicio( $atts, $content ) {

        global $post;
        
        extract(
            shortcode_atts(
                [
                    'animation' => '',
                    'title' => 'Conoce los índices de muertes viales en peatones, ciclistas y motociclistas en México',
                    'cards' => '',
                    'link' => '',
                    'excerpt' => "Este es un proyecto dedicado a reunir cifras de manera independiente para visibilizar a las víctimas de siniestros de tránsito."
                ],
                $atts
            )
        ); 

        $cards = vc_param_group_parse_atts( $cards );
        $link = vc_build_link( $link );

        $html = '
            <section class="mt-3 mb-5" id="inicio">
                <div class="container">
                    <div class="row no-gutters">
                        <div class="col-12 col-md-5">
                            
                            <div class="row no-gutters">
                                <div class="col-12">
                                    <h1>
                                        '. $title .'
                                    </h1>
                                </div>
                            </div>

                            <div class="row no-gutters">
                                <div class="col pr-2 d-flex">
                                    <div class="card px-1 py-3">
                                        <p class="title">'. $cards[0]['title'] .'</p>
                                        <p class="subtitle">'. $cards[0]['subtitle'] .'</p>
                                    </div>
                                </div>
                                <div class="col d-flex">
                                    <div class="card px-1 py-3">
                                        <p class="title">'. $cards[1]['title'] .'</p>
                                        <p class="subtitle">'. $cards[1]['subtitle'] .'</p>
                                    </div>
                                </div>
                                <div class="col pl-2 d-flex">
                                    <div class="card px-1 py-3">
                                        <p class="title">'. $cards[2]['title'] .'</p>
                                        <p class="subtitle">'. $cards[2]['subtitle'] .'</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row no-gutters mt-4">
                                <div class="col-12">
                                    <p class="excerpt">
                                        '. $excerpt .'
                                    </p>
                                </div>
                            </div>
                            <div class="row no-gutters my-2">
                                <div class="col-12">
                                    <a href="'. $link['url'] .'" class="btn btn-primary">
                                        '. $link['title'] .' <img src="'. $this->template .'/img/right-arrow.svg" alt="">
                                    </a>
                                </div>
                            </div>

                        </div>
                        <div class="col-12 col-md-7 pl-4 mt-5 mt-md-0 d-flex flex-column">
                            <img src="'. $this->template .'/img/hero.svg" alt="" class="w-100 my-auto">
                        </div>
                    </div>
                </div>
            </section>
            ';

        return $html;

    }

}

new vcInicio();

?>
