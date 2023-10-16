<?php
/*
Element Description: VC Template
*/

// Element Class

class vcTemplate extends WPBakeryShortCode {

    
    function __construct() {
        
        add_action( 'init', [ $this, 'vc_template_map' ] );
        add_shortcode( 'vc_template', [ $this, 'vc_template' ] );
        $this->template = get_template_directory_uri();

    }

    
    public function vc_template_map() {

        
        if ( !defined( 'WPB_VC_VERSION' ) ) {
            return;
        }

        
        vc_map(
            [
                'name'        => "Template",
                'base'        => 'vc_template',
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
                        'param_name' => 'slides',
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
                            ],

                            [
                                "type"        => "attach_image",
                                "heading"     => "Imagen",
                                "description" => "Imagen para el módulo ( proporción recomendada 16:9 )",
                                "param_name"  => "single-image",
                                "value"       => "",
                            ]

                        ]
                    ],

                    [
                        'type'           => 'dropdown',
                        'heading'        => "Tipo de contenedor",
                        'param_name'     => 'tipo',
                        'value'          => [
                            "Opción" => 'opcion',
                            "Opción" => 'opcion'
                        ],
                        "description"    => "Decide la opción"
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

                    [
                        "type"        => "attach_image",
                        "heading"     => "Imagen",
                        "description" => "Imagen para el módulo ( proporción recomendada 16:9 )",
                        "param_name"  => "single-image",
                        "value"       => "",
                    ],

                    [
                        "type"        => "attach_images",
                        "heading"     => "Imágenes",
                        "description" => "Imagenes para el módulo ( proporción recomendada 16:9 )",
                        "param_name"  => "images",
                        "value"       => "",
                    ],

                ]
            ]
        );

    }

    
    public function vc_template( $atts, $content ) {

        global $post;
        
        extract(
            shortcode_atts(
                [
                    'animation' => ''
                ],
                $atts
            )
        ); 

        $image = wp_get_attachment_image_src( $image, 'full' );
        $link = vc_build_link( $link );
        $slides = vc_param_group_parse_atts( $slides );

        $html = '
            <div class="row no-gutters navegacion-interna py-4 py-md-2 py-lg-0 justify-content-center">
                <div class="col-12 col-md-6 px-3 px-md-0 mx-lg-auto d-flex flex-column align-items-center justify-content-center">
                    '. apply_filters( "the_content", $content ) .'
                </div>                       
            </div>  
            ';

        return $html;

    }

}

new vcTemplate();

?>
