<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package NUMV
 */

?>

    <footer id="footer" class="mt-5">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-12 col-md-3">
                    <div class="row no-gutters">
                        <div class="col-12">
                            <h3>¿Quieres colaborar o reportar un incidente?</h3>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col-12">
                            <p class="mensaje d-none">Gracias por enviar tus datos, nos pondremos en contacto a la brevedad</p>
                            <form id="contacto">
                                <div class="form-group">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-primary active">
                                            <input type="radio" name="options" value="Contáctenme" id="option1" autocomplete="off" checked> Contáctanos
                                        </label>
                                        <label class="btn btn-primary">
                                            <input type="radio" name="options" value="Quiero reportar un incidente" id="option2" autocomplete="off"> Reporta un siniestro
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" placeholder="Nombre" name="name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="email" placeholder="Correo electrónico" name="email">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">
                                        Enviar <img src="<?php echo get_template_directory_uri(); ?>/img/right-arrow.svg" alt="">
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3"></div>
                <div class="col-12 col-md-4 mt-5 mt-md-0">
                    <div class="row no-gutters">
                        <div class="col-12">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-footer.png" alt="">
                        </div>
                    </div>
                    <div class="row no-gutters my-2">
                        <div class="col-12">
                            <a href="javascript:void(0):" class="d-inline-block mr-2">
                                <i class="fab fa-facebook fa-2x"></i>
                            </a>
                            <a href="javascript:void(0):" class="d-inline-block mr-2">
                                <i class="fab fa-twitter fa-2x"></i>
                            </a>
                            <a href="javascript:void(0):" class="d-inline-block mr-2">
                                <i class="fab fa-youtube fa-2x"></i>
                            </a>
                            <a href="javascript:void(0):" class="d-inline-block mr-2">
                                <i class="fab fa-linkedin fa-2x"></i>
                            </a>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col-12">
                            <p>
                                <a href="javascript:void(0);">
                                    info@niunamuertevial.mx
                                </a>
                                <a href="javascript:void(0);" class="scroll-top d-block d-md-none">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/rounded-top-arrow-dark.svg" alt="">
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-2 text-right">
                    <a href="javascript:void(0);" class="scroll-top d-none d-md-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/rounded-top-arrow-dark.svg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
    

</body>

</html>