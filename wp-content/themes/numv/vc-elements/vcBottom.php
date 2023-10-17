<?php
/*
Element Description: VC Bottom
*/

// Element Class

class vcBottom extends WPBakeryShortCode {

    
    function __construct() {
        
        add_action( 'init', [ $this, 'vc_bottom_map' ] );
        add_shortcode( 'vc_bottom', [ $this, 'vc_bottom' ] );
        $this->template = get_template_directory_uri();

    }

    
    public function vc_bottom_map() {

        
        if ( !defined( 'WPB_VC_VERSION' ) ) {
            return;
        }

        
        vc_map(
            [
                'name'        => "Bottom",
                'base'        => 'vc_bottom',
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

    
    public function vc_bottom( $atts, $content ) {

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
            <section id="bottom">
                <div class="row no-gutters">
                    <div class="col-12">
                        <img src="'. $this->template .'/img/jumbotron.svg" class="d-none d-md-block w-100">
                        <img src="'. $this->template .'/img/jumbotron-mobile.svg" class="d-block d-md-none w-100">
                    </div>
                </div>
            </section>
            ';

        return $html;

    }

}

new vcBottom();

?>
