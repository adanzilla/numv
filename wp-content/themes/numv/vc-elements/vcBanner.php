<?php
/*
Element Description: VC Banner
*/

// Element Class

class vcBanner extends WPBakeryShortCode {

    
    function __construct() {
        
        add_action( 'init', [ $this, 'vc_banner_map' ] );
        add_shortcode( 'vc_banner', [ $this, 'vc_banner' ] );
        $this->template = get_template_directory_uri();

    }

    
    public function vc_banner_map() {

        
        if ( !defined( 'WPB_VC_VERSION' ) ) {
            return;
        }

        
        vc_map(
            [
                'name'        => "Banner",
                'base'        => 'vc_banner',
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
                        'type'        => 'textfield',
                        'value'       => '',
                        'heading'     => 'Título',
                        'param_name'  => 'subtitle',
                        'admin_label' => true
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

    
    public function vc_banner( $atts, $content ) {

        global $post;
        
        extract(
            shortcode_atts(
                [
                    'animation' => '',
                    'title'     => '¿Estás buscando cifras específicas?  ',
                    'subtitle'  => '',
                    'link'      => '',
                ],
                $atts
            )
        ); 

        $link = vc_build_link( $link );
        

        $html = '
            <section class="mt-0 mb-5 my-md-5 pb-md-5" id="banner">
                <div class="container">
                    <div class="row no-gutters">
                        <div class="col-12 col-md-11 col-lg-10 mx-auto">
                            <div class="card px-4 px-md-5 py-4 py-md-2 w-100">
                                <div class="row no-gutters">
                                    <div class="col-md-4 text-center d-flex flex-column">
                                        <img src="'. $this->template .'/img/banner-hero.svg" alt="" class="my-auto img-fluid my-auto">
                                    </div>
                                    <div class="col-md-8 d-flex flex-column">
                                        <p class="my-auto">
                                            '. $title .'<br>
                                            <b>'. $subtitle .'</b><br>
                                            <a href="'. $link['url'] .'" class="btn btn-primary mt-3">
                                                '. $link['title'] .' <img src="'. $this->template .'/img/right-arrow.svg" alt="">
                                            </a>
                                        </p>
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

new vcBanner();

?>
