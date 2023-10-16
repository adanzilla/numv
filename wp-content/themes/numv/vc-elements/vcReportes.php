<?php
/*
Element Description: VC Reportes
*/

// Element Class

class vcReportes extends WPBakeryShortCode {

    
    function __construct() {
        
        add_action( 'init', [ $this, 'vc_reportes_map' ] );
        add_shortcode( 'vc_reportes', [ $this, 'vc_reportes' ] );
        $this->template = get_template_directory_uri();

    }

    
    public function vc_reportes_map() {

        
        if ( !defined( 'WPB_VC_VERSION' ) ) {
            return;
        }

        
        vc_map(
            [
                'name'        => "Reportes",
                'base'        => 'vc_reportes',
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

    
    public function vc_reportes( $atts, $content ) {

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
            <section class="mt-0 mb-5 my-md-5" id="reportes">
                <div class="container">
                    
                    
                    <div class="row no-gutters">
                        <div class="col-12">
                            
                            <h2 class="text-center">Reportes anuales</h2>
                            <p class="text-center">Compilación de resultados y datos relevantes de años previos</p>
                        
                        </div>
                    </div>

                    <div class="row no-gutters my-md-5">
                        <div class="col-12 col-md-6 mx-auto">
                            
                            <div class="row no-gutters">
                                <div class="col-12">
                                    <h4>Últimas publicaciones</h4>
                                </div>
                            </div>

                            <div class="row no-gutters">
                                <div class="col-12 col-md-6 pr-1">
                                    <div class="card p-3">
                                        <img src="http://niunamuertevial.mx/wp-content/uploads/2023/10/las150-300x200.jpeg" alt="" class="mb-3">
                                        <p class="tag mb-1">Datos 2020-2021</p>
                                        <p class="title">Las 150 vías más peligrosas</p>
                                        <p class="extract">
                                            El desafío de convertir zonas de riesgo en entornos seguros
                                        </p>
                                        <p>
                                            <a href="https://niunamuertevial.mx/las-150-vias-mas-peligrosas/" class="btn btn-block btn-primary mt-3">
                                                Consultar reporte <img src="'. $this->template .'/img/right-arrow.svg" alt="">
                                            </a>
                                        </p>
                                    </div>      
                                </div>
                                <div class="col-12 col-md-6 pl-1 mt-3 mt-md-0">
                                    <div class="card p-3">
                                        <img src="https://niunamuertevial.mx/wp-content/uploads/2023/10/placeholder-blog-single-300x200.png" alt="" class="mb-3">
                                        <p class="tag mb-1">Datos 2020-2021</p>
                                        <p class="title">Reporte anual 2019-2020</p>
                                        <p class="extract">
                                            El desafío de convertir zonas de riesgo en entornos seguros
                                        </p>
                                        <p>
                                            <a href="https://niunamuertevial.mx/reporte-anual-2019-2020/" class="btn btn-block btn-primary mt-3">
                                                Consultar reporte <img src="'. $this->template .'/img/right-arrow.svg" alt="">
                                            </a>
                                        </p>
                                    </div>      
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 pl-md-5 mx-auto mt-5 mt-md-0">
                            
                            <div class="row no-gutters">
                                <div class="col-12">
                                    <h4>Blog</h4>
                                </div>
                            </div>

                            
                                <div class="row no-gutters bordered">
                                    <div class="col-10 d-flex flex-column">
                                        <p class="title my-auto">
                                            <a href="javascript:void(0);">
                                                Reporte anual 2019-2020
                                                <span class="d-block mt-2">Texto sobre</span>
                                            </a>
                                        </p>
                                    </div>
                                    <div class="col-2 d-flex flex-column text-right">
                                        <a href="javascript:(0);" class="my-auto">
                                            <img src="'. $this->template .'/img/right-arrow-dark.svg" alt="">
                                        </a>
                                    </div>
                                </div>

                                <div class="row no-gutters bordered">
                                    <div class="col-10 d-flex flex-column">
                                        <p class="title my-auto">
                                            <a href="javascript:void(0);">
                                                Reporte anual 2019-2020
                                                <span class="d-block mt-2">Texto sobre</span>
                                            </a>
                                        </p>
                                    </div>
                                    <div class="col-2 d-flex flex-column text-right">
                                        <a href="javascript:(0);" class="my-auto">
                                            <img src="'. $this->template .'/img/right-arrow-dark.svg" alt="">
                                        </a>
                                    </div>
                                </div>

                                <div class="row no-gutters bordered">
                                    <div class="col-10 d-flex flex-column">
                                        <p class="title my-auto">
                                            <a href="javascript:void(0);">
                                                Reporte anual 2019-2020
                                                <span class="d-block mt-2">Texto sobre</span>
                                            </a>
                                        </p>
                                    </div>
                                    <div class="col-2 d-flex flex-column text-right">
                                        <a href="javascript:(0);" class="my-auto">
                                            <img src="'. $this->template .'/img/right-arrow-dark.svg" alt="">
                                        </a>
                                    </div>
                                </div>


                                <div class="row no-gutters ver-todos">
                                    <div class="col-4 d-flex flex-column text-right pr-0 ml-auto">
                                        <a href="<?php echo site_url( "blog" ); ?>" class="btn btn-block btn-primary mt-3 transparent">
                                            Ver todo <img src="'. $this->template .'/img/right-arrow-primary.svg" alt="">
                                        </a>
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

new vcReportes();

?>
