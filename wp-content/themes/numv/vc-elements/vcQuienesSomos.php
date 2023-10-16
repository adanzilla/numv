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
                    ]

                ]
            ]
        );

    }

    
    public function vc_quienes_somos( $atts, $content ) {

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
            <section class="mt-0 mb-5 my-md-5" id="quienes-somos">
                <div class="container for-mobile">
                    <div class="row no-gutters">
                        <div class="col-12 col-sm-10 col-lg-9 mx-auto">
                    
                            <div class="row no-gutters">
                                <div class="col-12">
                                    
                                    <h2 class="text-center">Quiénes somos</h2>
                                    <p class="text-center">Céntrico es un equipo de especialistas apasionadas de las ciudades, la movilidad, y la seguridad vial. Nos enfocamos en la implementación de proyectos de movilidad sustentable, así como en el desarrollo de políticas públicas que eleven las condiciones de la movilidad en el país.</p>
                                    <p class="text-center">Si deseas saber más sobre Céntrico, visita <a href="https://www.centrico.mx">www.centrico.mx</a></p>
                                </div>
                            </div>

                        </div>

                        <div class="col-12 col-sm-10 col-lg-12 mx-auto">

                            <div class="row no-gutters my-0 my-md-5">
                                <div class="col-12">
                                    <div class="swiper mySwiperTeam">
                                       
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="card py-4 px-3">
                                                    <p class="name">
                                                        Alejandra
                                                        Leal
                                                    </p>
                                                    <p class="position">
                                                        Codirectora<br>
                                                        Coordinadora política pública
                                                    </p>
                                                    <img src="'. $this->template .'/img/alejandra-leal.png" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card py-4 px-3">
                                                    <p class="name">
                                                        Xavier
                                                        Treviño
                                                    </p>
                                                    <p class="position">
                                                        Co-director<br>
                                                        Coordinador análisis de datos
                                                    </p>
                                                    <img src="'. $this->template .'/img/xavier-trevino.png" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card py-4 px-3">
                                                    <p class="name">
                                                        Patricio
                                                        Ruiz
                                                    </p>
                                                    <p class="position">
                                                        Coordinador de diseño
                                                    </p>
                                                    <img src="'. $this->template .'/img/patricio-ruiz.png" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card py-4 px-3">
                                                    <p class="name">
                                                        Héctor
                                                        Garrido
                                                    </p>
                                                    <p class="position">
                                                        Consultor de datos
                                                    </p>
                                                    <img src="'. $this->template .'/img/hector-garrido.png" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card py-4 px-3">
                                                    <p class="name">
                                                        Norber
                                                        Sánchez
                                                    </p>
                                                    <p class="position">
                                                        Datos
                                                    </p>
                                                    <img src="'. $this->template .'/img/norber-sanchez.png" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card py-4 px-3">
                                                    <p class="name">
                                                        Sara
                                                        Miranda
                                                    </p>
                                                    <p class="position">
                                                        Diseño
                                                    </p>
                                                    <img src="'. $this->template .'/img/sara-miranda.png" alt="" class="img-fluid">
                                                </div>
                                            </div>
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
