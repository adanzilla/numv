<?php
/**
 * Template Name: Inicio
 *
 * Description: Muestra el contenido de Inicio
 *
 * @package WordPress
 * @subpackage numv
 * @since numv 1.0
 */

get_header(); ?>

<section class="mt-3 mb-5" id="inicio">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-12 col-md-5">
                
                <div class="row no-gutters">
                    <div class="col-12">
                        <h1>
                            Conoce los índices de muertes viales en peatones, ciclistas y motociclistas en México
                        </h1>
                    </div>
                </div>

                <div class="row no-gutters">
                    <div class="col pr-2 d-flex">
                        <div class="card px-1 py-3">
                            <p class="title">16,000</p>
                            <p class="subtitle">Mexicanos fallecidos en 2022</p>
                        </div>
                    </div>
                    <div class="col d-flex">
                        <div class="card px-1 py-3">
                            <p class="title">2 de cada 3</p>
                            <p class="subtitle">Responsables se dan a la fuga</p>
                        </div>
                    </div>
                    <div class="col pl-2 d-flex">
                        <div class="card px-1 py-3">
                            <p class="title">84%</p>
                            <p class="subtitle">de las victimas son peatones</p>
                        </div>
                    </div>
                </div>

                <div class="row no-gutters mt-4">
                    <div class="col-12">
                        <p class="excerpt">
                            Este es un proyecto dedicado a reunir cifras de manera independiente para visibilizar a las víctimas de siniestros de tránsito.
                        </p>
                    </div>
                </div>
                <div class="row no-gutters my-2">
                    <div class="col-12">
                        <a href="<?php echo site_url( "dashboard" ); ?>" class="btn btn-primary">
                            Conoce las cifras <img src="<?php echo get_template_directory_uri(); ?>/img/right-arrow.svg" alt="">
                        </a>
                    </div>
                </div>

            </div>
            <div class="col-12 col-md-7 pl-4 mt-5 mt-md-0 d-flex flex-column">
                <img src="<?php echo get_template_directory_uri(); ?>/img/hero.svg" alt="" class="w-100 my-auto">
            </div>
        </div>
    </div>
</section>

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
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/muertes-totales.png">
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
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/ciclistas.png">
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
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/peatones.png">
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
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/motociclistas.png">
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
                                        <em>986</em> <span><i class="fa fa-arrow-up"></i> 12%</span>
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

<section class="mt-0 mb-5 my-md-5" id="graficas">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-12 col-md-8 pr-md-2">
                <div class="card p-3">
                    <h3>Top 10 Estados con más incidentes</h3>
                    <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/graph/bar-fill-vertical.png" alt="" class="w-100"> -->
                    <canvas id="top10-estados-mas-incidentes"></canvas>
                </div>
            </div>
            <div class="col-12 col-md-4 pl-md-2 mt-3 mt-md-0 d-flex">
                <div class="card p-3 w-100">
                    <h3>Factores de riesgo</h3>
                    <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/graph/chart-pie.png" alt="" class="mt-3 w-100"> -->
                    <canvas id="pie-chart"></canvas>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mt-0 mb-5 my-md-5 pb-md-5" id="banner">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-12 col-md-11 col-lg-10 mx-auto">
                <div class="card px-4 px-md-5 py-4 py-md-2 w-100">
                    <div class="row no-gutters">
                        <div class="col-md-4 text-center d-flex flex-column">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/banner-hero.svg" alt="" class="my-auto img-fluid my-auto">
                        </div>
                        <div class="col-md-8 d-flex flex-column">
                            <p class="my-auto">
                                ¿Estás buscando cifras específicas?  <br>
                                <b>Realiza una consulta personalizada</b><br>
                                <a href="<?php echo site_url( "dashboard" ); ?>" class="btn btn-primary mt-3">
                                    Conoce las cifras <img src="<?php echo get_template_directory_uri(); ?>/img/right-arrow.svg" alt="">
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mt-0 mb-5 my-md-5 p" id="mapa">
    <div class="container for-mobile">
        <div class="row no-gutters">
            <div class="col-12 col-sm-10 col-lg-11 mx-auto">
                <div class="row no-gutters">
                    <div class="col-12">
                        <div class="col-12">
                            <h2 class="text-center">Las vialidades más peligrosas</h2>
                            <p class="text-center">Explora todos los siniestros de tránsito navegando el mapa</p>
                        </div>
                    </div>
                </div>

                <div class="row no-gutters my-0 my-md-3">
                    
                    <div class="col-12 text-center">
                        <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/mapa.png" alt="" class="img-fluid"> -->
                        <div id="map" style="height: 65vh; width: 100%;"></div>
                        <div id="map-filters">
                            <div class="row no-gutters">
                                <div class="col-12">
                                    <div class="card p-3">
                                        <form id="filters">
                                            
                                            <!-- <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="Todos" name="todos" checked>
                                              <label class="form-check-label" for="flexCheckDefault">
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/icon-todos.svg" alt=""> Todos
                                              </label>
                                            </div> -->

                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="Peatón" name="peatones" checked>
                                              <label class="form-check-label" for="flexCheckDefault">
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/icon-amarillo.svg" alt=""> Peatones
                                              </label>
                                            </div>
                                            
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="Motociclista" name="motociclistas" checked>
                                              <label class="form-check-label" for="flexCheckDefault">
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/icon-verde.svg" alt=""> Motociclistas
                                              </label>
                                            </div>

                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="Ciclista" name="ciclistas" checked>
                                              <label class="form-check-label" for="flexCheckDefault">
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/icon-morado.svg" alt=""> Ciclistas
                                              </label>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>

            </div>
        </div>
    </div>
</section>

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
                                    Consultar reporte <img src="<?php echo get_template_directory_uri(); ?>/img/right-arrow.svg" alt="">
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
                                    Consultar reporte <img src="<?php echo get_template_directory_uri(); ?>/img/right-arrow.svg" alt="">
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
                                <img src="<?php echo get_template_directory_uri(); ?>/img/right-arrow-dark.svg" alt="">
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
                                <img src="<?php echo get_template_directory_uri(); ?>/img/right-arrow-dark.svg" alt="">
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
                                <img src="<?php echo get_template_directory_uri(); ?>/img/right-arrow-dark.svg" alt="">
                            </a>
                        </div>
                    </div>


                    <div class="row no-gutters ver-todos">
                        <div class="col-4 d-flex flex-column text-right pr-0 ml-auto">
                            <a href="<?php echo site_url( "blog" ); ?>" class="btn btn-block btn-primary mt-3 transparent">
                                Ver todo <img src="<?php echo get_template_directory_uri(); ?>/img/right-arrow-primary.svg" alt="">
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
            
    </div>
</section>

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
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/alejandra-leal.png" alt="" class="img-fluid">
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
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/xavier-trevino.png" alt="" class="img-fluid">
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
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/patricio-ruiz.png" alt="" class="img-fluid">
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
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/hector-garrido.png" alt="" class="img-fluid">
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
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/norber-sanchez.png" alt="" class="img-fluid">
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
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/sara-miranda.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>

                           

                        </div>
                        <div class="swiper-button-prev">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/rounded-left-arrow-dark.svg" alt="">
                        </div>
                        <div class="swiper-button-next">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/rounded-right-arrow-dark.svg" alt="">
                        </div>
                    </div>
                    
                </div>

            </div>
        </div>
    </div>
</section>

<section class="mt-0 mb-5 my-md-5 pb-md-5" id="nuestra-historia">
    <div class="container">

        <div class="row no-gutters">
            <div class="col-12 col-md-7 left-column pr-md-5">
                
                <h2 class="text-left mb-4">Nuestra historia</h2>
                
                <p>Ni Una Muerte Vial surge en noviembre de 2018, a partir del atropellamiento de Manuel Vara, especialista en movilidad, en Puebla. Decidimos que para honrar la memoria de las víctimas de siniestros de tránsito, nos abocaríamos a reconocer y visibilizar a los peatones y ciclistas atropellados en el país. Eventualmente decidimos integrar datos de motociclistas.</p>
                
                <img src="<?php echo get_template_directory_uri(); ?>/img/nuestra-historia-logo-1.svg" class="logo d-inline-block mr-3">
                <img src="<?php echo get_template_directory_uri(); ?>/img/nuestra-historia-logo-2.svg" class="logo d-inline-block mr-3">
                <img src="<?php echo get_template_directory_uri(); ?>/img/nuestra-historia-logo-3.svg" class="logo d-inline-block mr-3">
            </div>
            <div class="col-12 col-md-5 right-column mt-5 mt-md-0">
                <div class="row no-gutters">
                    <div class="col-12 text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/nuestra-historia-hero.png" class="img-fluid">
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

<section class="mt-0 mb-5 my-md-5" id="en-memoria">
    <div class="row no-gutters">
        <div class="col-12 col-sm-10 col-lg-11 mx-auto">
            <div class="row no-gutters">
                <div class="col-12">
                    <h2 class="text-center mb-4">En memoria de las personas</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="row no-gutters">
        <div class="col-12">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card p-2">
                            <div class="row no-gutters">
                                <div class="col-4 px-3 text-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/manu.png" alt="" class="img-fluid">
                                    <p class="name">Manu</p>
                                    <p class="position">Política Pública</p>
                                </div>
                                <div class="col-8 d-flex flex-column">
                                    <p class="text my-auto">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tristique lorem eget dictum blandit. Donec nec aliquet diam. Praesent hendrerit, ipsum eget condimentum ullamcorper, ante est volutpat turpis, ac ultricies libero lacus ac metus. 
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card p-2">
                            <div class="row no-gutters">
                                <div class="col-4 px-3 text-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/manu.png" alt="" class="img-fluid">
                                    <p class="name">Manu</p>
                                    <p class="position">Política Pública</p>
                                </div>
                                <div class="col-8 d-flex flex-column">
                                    <p class="text my-auto">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tristique lorem eget dictum blandit. Donec nec aliquet diam. Praesent hendrerit, ipsum eget condimentum ullamcorper, ante est volutpat turpis, ac ultricies libero lacus ac metus. 
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card p-2">
                            <div class="row no-gutters">
                                <div class="col-4 px-3 text-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/manu.png" alt="" class="img-fluid">
                                    <p class="name">Manu</p>
                                    <p class="position">Política Pública</p>
                                </div>
                                <div class="col-8 d-flex flex-column">
                                    <p class="text my-auto">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tristique lorem eget dictum blandit. Donec nec aliquet diam. Praesent hendrerit, ipsum eget condimentum ullamcorper, ante est volutpat turpis, ac ultricies libero lacus ac metus. 
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>


                  
                </div>
                  <div class="swiper-button-prev">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/rounded-left-arrow-dark.svg" alt="">
                  </div>
                  <div class="swiper-button-next">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/rounded-right-arrow-dark.svg" alt="">
                  </div>
            </div>
        </div>
    </div>
</section>

<section id="bottom">
    <div class="row no-gutters">
        <div class="col-12">
            <img src="<?php echo get_template_directory_uri(); ?>/img/jumbotron.svg" class="d-none d-md-block w-100">
            <img src="<?php echo get_template_directory_uri(); ?>/img/jumbotron-mobile.svg" class="d-block d-md-none w-100">
        </div>
    </div>
</section>


<?php get_footer();