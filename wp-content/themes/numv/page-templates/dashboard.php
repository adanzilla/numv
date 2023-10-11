<?php
/**
 * Template Name: Dashboard
 *
 * Description: Muestra el contenido de Dashboard
 *
 * @package WordPress
 * @subpackage intertec
 * @since Intertec 1.0
 */

get_header('dashboard'); ?>

<section class="dashboard header">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-12 col-md-8">
                <p class="mb-0">
                    <a href="<?php echo site_url( "/" ); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/left-arrow-primary.svg" alt=""> Regresar
                    </a>
                </p>
                <h1 class="mb-0">
                    Tablero de información
                </h1>
            </div>
            <div class="col-12 col-md-4 text-right d-flex">
                <div class="row no-gutters mt-auto ml-auto">
                    <div class="col-12">
                        <a href="javascript:void(0);" class="btn btn-light d-inline-block mr-md-4">
                            Compartir
                        </a>
                        <a href="https://niunamuertevial.mx/wp-content/uploads/2020/11/informe-NUMV-2019.pdf" class="btn btn-primary d-inline-block" download="">
                            Descargar datos
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 

<section class="dashboard controls my-5">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-12">
                <div class="card px-4 py-3">
                    <form id="filters" class="form-inline">
                        <div class="form-group">
                            <select name="filtro-fecha" id="filtro-fecha" class="form-control mr-3">
                                <option value="">Fecha</option>
                                <option value="2023">2023</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select name="filtro-estado" id="filtro-estado" class="form-control mr-3">
                                <option value="">Estado</option>
                                <option value="Acapulco">Acapulco</option>
                                <option value="Aguascalientes">Aguascalientes</option>
                                <option value="Baja California">Baja California</option>
                                <option value="Baja California Sur">Baja California Sur</option>
                                <option value="Campeche">Campeche</option>
                                <option value="CdMx">CdMx</option>
                                <option value="Chiapas">Chiapas</option>
                                <option value="Chihuahua">Chihuahua</option>
                                <option value="Coahuila">Coahuila</option>
                                <option value="Colima">Colima</option>
                                <option value="Durango">Durango</option>
                                <option value="Edomex">Edomex</option>
                                <option value="Guanajuato">Guanajuato</option>
                                <option value="Guerrero">Guerrero</option>
                                <option value="Hidalgo">Hidalgo</option>
                                <option value="Jalisco">Jalisco</option>
                                <option value="Michoacán">Michoacán</option>
                                <option value="Morelos">Morelos</option>
                                <option value="Nayarit">Nayarit</option>
                                <option value="Nuevo León">Nuevo León</option>
                                <option value="Oaxaca">Oaxaca</option>
                                <option value="Puebla">Puebla</option>
                                <option value="Querétaro">Querétaro</option>
                                <option value="Quintana Roo">Quintana Roo</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select name="filtro-municipio" id="filtro-municipio" class="form-control mr-3">
                                <option value="">Municipio</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select name="filtro-vialidad" id="filtro-vialidad" class="form-control mr-3">
                                <option value="">Vialidades</option>
                                <option value="Autopista">Autopista</option>
                                <option value="Avenica con BRT">Avenica con BRT</option>
                                <option value="Avenida">Avenida</option>
                                <option value="Avenida con BRT">Avenida con BRT</option>
                                <option value="Avenida continua">Avenida continua</option>
                                <option value="Calle">Calle</option>
                                <option value="Calle Colectora">Calle Colectora</option>
                                <option value="Calle local">Calle local</option>
                                <option value="Callle local">Callle local</option>
                                <option value="Camino rural">Camino rural</option>
                                <option value="Camino vecinal">Camino vecinal</option>
                                <option value="Carretera">Carretera</option>
                                <option value="Carretera local">Carretera local</option>
                                <option value="Colectora">Colectora</option>
                                <option value="Fuera de calle">Fuera de calle</option>
                                <option value="Fuera de la calle">Fuera de la calle</option>
                                <option value="Gasolinera">Gasolinera</option>
                                <option value="Lateral">Lateral</option>
                                <option value="Patio de maniobras">Patio de maniobras</option>
                                <option value="Playa">Playa</option>
                            </select>
                        </div>
                        <!-- <div class="form-group">
                            <select name="" id="" class="form-control mr-3">
                                <option value="">Siniestros</option>
                            </select>
                        </div> -->
                        <div class="form-group">
                            <select name="filtro-edad" id="filtro-edad" class="form-control mr-3">
                                <option value="">Edad</option>
                                <?php for ($i=0; $i < 100; $i++) : ?>
                                    <option value="<?php echo $i; ?>"><?php echo $i; ?> años</option>
                                <?php endfor; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                Filtrar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="dashboard badges my-3">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-12">
                <p>
                    <span class="d-inline-block mr-3">Filtrado por:</span>
                    <!--<a href="javascript:void(0);" class="badge badge-pill badge-primary px-3 py-1 mr-1 mb-1">Hidalgo <img src="<?php echo get_template_directory_uri(); ?>/img/btn-tache.svg" alt=""></a>-->
                    <!--<a href="javascript:void(0);" class="badge badge-pill badge-primary px-3 py-1 mr-1 mb-1">Hidalgo <img src="<?php echo get_template_directory_uri(); ?>/img/btn-tache.svg" alt=""></a>-->
                    <!--<a href="javascript:void(0);" class="badge badge-pill badge-primary px-3 py-1 mr-1 mb-1">Hidalgo <img src="<?php echo get_template_directory_uri(); ?>/img/btn-tache.svg" alt=""></a>-->
                </p>
            </div>
        </div>
    </div>
</section> 

<section class="my-5" id="cifras">
    <div class="row no-gutters">
        <div class="col-12 col-sm-10 col-lg-10 mx-auto">
    
            <div class="row no-gutters justify-content-center cards my-3">
                <div class="col-5 col-md card py-3 px-3 px-md-4 mx-auto mx-md-2 mb-3 mb-md-0">
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
                                <em>2160</em> <span><i class="fa fa-arrow-up"></i> 12%</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-5 col-md card py-3 px-3 px-md-4 mx-auto mx-md-2 mb-3 mb-md-0">
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
                                <em>2160</em> <span><i class="fa fa-arrow-up"></i> 12%</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-5 col-md card py-3 px-3 px-md-4 mx-auto mx-md-2 mb-3 mb-md-0">
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
                                <em>2160</em> <span><i class="fa fa-arrow-up"></i> 12%</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-5 col-md card py-3 px-3 px-md-4 mx-auto mx-md-2 mb-3 mb-md-0">
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
                                <em>2160</em> <span><i class="fa fa-arrow-up"></i> 12%</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

 <section class="my-5 dashboard graficas" style="max-height: 80vh;">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-12 col-md-9 pr-md-2">
                <div class="card p-3">
                    <h3 class="mb-3">Historial anual  de incidentes</h3>
                    <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/graph/bar-fill-vertical.png" alt="" class="w-100"> -->
                    <canvas id="bars-chart"></canvas>
                </div>
            </div>
            <div class="col-12 col-md-3 pl-md-2 mt-4 mt-md-0 d-flex flex-column">
                <div class="row no-gutters">
                    <div class="col-12">
                        <div class="card p-3">
                            <h3>Muertes por sexo</h3>
                            <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/graph/chart-pie.png" alt="" class="mt-3 w-100"> -->
                            <div class="row no-gutters">
                                <div class="col-9 mx-auto">
                                    <canvas id="pie-chart-ii"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row no-gutters mt-3">
                    <div class="col-12">
                        <div class="card p-3">
                            <h3>Estatus de los responsables</h3>
                            <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/graph/chart-pie.png" alt="" class="mt-3 w-100"> -->
                            <div class="row no-gutters">
                                <div class="col-10 mx-auto">
                                    <canvas id="pie-chart-iii"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer('dashboard');