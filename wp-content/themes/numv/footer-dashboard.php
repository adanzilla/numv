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

    <footer id="footer" class="mt-5 dashboard">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-12 col-md-4 mt-4 mt-md-0">
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
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <p class="mb-0">Otras fuentes</p>
                    <p class="mb-0">Mortalidad: Secretaría de Salud recopilado por INEGI</p>
                    <p class="mb-0">Incidencia delictiva:Secretaría Nacional de Seguridad Pública</p>
                    <p class="mb-0">Accidentes de tránsito terrestre en zonas urbanas y suburbanas: INEGI</p>
                    <p class="mb-0">Informes sobre la situación de la seguridad vial: CONAPRA</p>
                </div>
                <div class="col-12 col-md-2 text-right">
                    <a href="javascript:void(0);" id="scroll-top">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/rounded-top-arrow-dark.svg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
    

</body>

</html>