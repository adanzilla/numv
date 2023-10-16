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
                    'animation' => ''
                ],
                $atts
            )
        ); 

        

        $html = '
            <section class="mt-0 mb-5 my-md-5" id="cifras">
                <div class="container for-mobile">
                    <div class="row no-gutters">
                        <div class="col-12 col-sm-11 col-lg-10 mx-auto">

                            <div class="row no-gutters">
                                <div class="col-12">
                                    <div class="col-12">
                                        <h2 class="text-center">Cifras recolectadas de personas fallecidas en 2023</h2>
                                        <p class="text-center">Estás cifras son extraídas de medios de comunicación digitales y redes sociales, y validadas por nuestro equipo</p>
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
                                                    <em>2917</em> <span><i class="fa fa-arrow-up"></i> 12%</span>
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
                                                    <em>308</em> <span><i class="fa fa-arrow-up"></i> 12%</span>
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
                                                    <em>1623</em> <span><i class="fa fa-arrow-up"></i> 12%</span>
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
                                                    986 <span><i class="fa fa-arrow-up"></i> 12%</span>
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
