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

    public function get_data( $mode = 'normal' ) {
        
        if( $mode == 'next-three-posts' ){

            $args = [
                'post_type'      => 'post',
                'offset'         => 2,
                'orderby'        => 'id',
                'order'          => 'DESC',
                'posts_per_page' => 3
            ];

        }else{

            $args = [
                'post_type'      => 'post',
                'orderby'        => 'id',
                'order'          => 'DESC',
                'posts_per_page' => 2
            ];

        }


        $query = new WP_Query( $args );

        return $query;
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

        $last_two_posts = self::get_data();
        $next_three_posts = self::get_data('next-three-posts');

        
        if( $last_two_posts->have_posts() ){

            $i = 1;
            while ( $last_two_posts->have_posts() ) {
                $last_two_posts->the_post();

                $class = ( $i == 1 ) ? 'pr-1' :' pl-1 mt-3 mt-md-0';

                $html_last_two_posts .= '
                    <div class="col-12 col-md-6 '. $class .'">
                        <div class="card p-3">
                            <a href="'. get_the_permalink( get_the_ID() ) .'">
                                <img src="'. get_the_post_thumbnail_url( get_the_ID(), 'blog-grid' ) .'" alt="" class="w-100 mb-3">
                            </a>
                            <p class="tag mb-1">'. get_the_date() .'</p>
                            <p class="title">'. get_the_title() .'</p>
                            <p class="extract">
                                '. get_the_excerpt( get_the_ID() ) .'
                            </p>
                            <p>
                                <a href="'. get_the_permalink( get_the_ID() ) .'" class="btn btn-block btn-primary mt-3">
                                    Ver más <img src="'. $this->template .'/img/right-arrow.svg" alt="">
                                </a>
                            </p>
                        </div>      
                    </div>
                ';

                $i++;
            }
        }

        if( $next_three_posts->have_posts() ){

            $i = 1;
            while ( $next_three_posts->have_posts() ) {
                $next_three_posts->the_post();

                $class = ( $i == 1 ) ? 'pr-1' :' pl-1 mt-3 mt-md-0';

                $html_next_three_posts .= '
                    <div class="row no-gutters bordered">
                        <div class="col-10 d-flex flex-column">
                            <p class="title my-auto">
                                <a href="'. get_the_permalink( get_the_ID() ) .'">
                                    '. get_the_title() .'
                                    <span class="d-block mt-2">'. get_the_excerpt( get_the_ID() ) .'</span>
                                </a>
                            </p>
                        </div>
                        <div class="col-2 d-flex flex-column text-right">
                            <a href="'. get_the_permalink( get_the_ID() ) .'" class="my-auto">
                                <img src="'. $this->template .'/img/right-arrow-dark.svg" alt="">
                            </a>
                        </div>
                    </div>
                ';

                $i++;
            }
        }
        

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
                                '. $html_last_two_posts .'
                            </div>
                        </div>
                        <div class="col-12 col-md-6 pl-md-5 mx-auto mt-5 mt-md-0">
                            
                           
                            <div class="row no-gutters">
                                <div class="col-12">
                                    <h4>Blog</h4>
                                </div>
                            </div>

                            '. $html_next_three_posts .'

                            <div class="row no-gutters ver-todos">
                                <div class="col-4 d-flex flex-column text-right pr-0 ml-auto">
                                    <a href="'. site_url( "blog" ) .'" class="btn btn-block btn-primary mt-3 transparent">
                                        Ver todo <img src="'. $this->template .'/img/right-arrow-primary.svg" alt="">
                                    </a>
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
