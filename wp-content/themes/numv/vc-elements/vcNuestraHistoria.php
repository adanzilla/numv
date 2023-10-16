<?php
/*
Element Description: VC NuestraHistoria
*/

// Element Class

class vcNuestraHistoria extends WPBakeryShortCode {

    
    function __construct() {
        
        add_action( 'init', [ $this, 'vc_nuestra_historia_map' ] );
        add_shortcode( 'vc_nuestra_historia', [ $this, 'vc_nuestra_historia' ] );
        $this->template = get_template_directory_uri();

    }

    
    public function vc_nuestra_historia_map() {

        
        if ( !defined( 'WPB_VC_VERSION' ) ) {
            return;
        }

        
        vc_map(
            [
                'name'        => "Nuestra Historia",
                'base'        => 'vc_nuestra_historia',
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

    
    public function vc_nuestra_historia( $atts, $content ) {

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
            <section class="mt-0 mb-5 my-md-5 pb-md-5" id="nuestra-historia">
                <div class="container">

                    <div class="row no-gutters">
                        <div class="col-12 col-md-7 left-column pr-md-5">
                            
                            <h2 class="text-left mb-4">Nuestra historia</h2>
                            
                            <p>Ni Una Muerte Vial surge en noviembre de 2018, a partir del atropellamiento de Manuel Vara, especialista en movilidad, en Puebla. Decidimos que para honrar la memoria de las víctimas de siniestros de tránsito, nos abocaríamos a reconocer y visibilizar a los peatones y ciclistas atropellados en el país. Eventualmente decidimos integrar datos de motociclistas.</p>
                            
                            <img src="'. $this->template .'/img/nuestra-historia-logo-1.svg" class="logo d-inline-block mr-3">
                            <img src="'. $this->template .'/img/nuestra-historia-logo-2.svg" class="logo d-inline-block mr-3">
                            <img src="'. $this->template .'/img/nuestra-historia-logo-3.svg" class="logo d-inline-block mr-3">
                        </div>
                        <div class="col-12 col-md-5 right-column mt-5 mt-md-0">
                            <div class="row no-gutters">
                                <div class="col-12 text-center">
                                    <img src="'. $this->template .'/img/nuestra-historia-hero.png" class="img-fluid">
                                </div>
                            </div>

                            <div class="row no-gutters caption-box">
                                <div class="col-10 mx-auto caption-body p-4">

                                    <div class="row no-gutters">
                                        <div class="col-4 d-flex flex-column pr-md-3">
                                            <p class="years my-auto text-center">
                                                +4
                                                <span>Años de datos</span>
                                            </p>
                                        </div>
                                        <div class="col-8 d-flex flex-column pl-2 pl-md-0">
                                            <p class="my-auto">
                                                Luchando y esperando a que nunca más muera nadie en las calles y para que algún día ese dato sea CERO. 
                                            </p>
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

new vcNuestraHistoria();

?>
