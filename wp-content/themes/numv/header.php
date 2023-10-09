<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package NUMV
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="utf-8">
    <title>Ni una muerte vial</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/site.webmanifest">
    <link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:wght@400;500;700&family=Figtree:wght@400;700&family=Inter:wght@400;700&display=swap" rel="stylesheet">

    <?php wp_head(); ?>

    <meta name="theme-color" content="#fafafa">
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
    <header id="masthead" class="site-header">
        <nav class="navbar navbar-expand-sm navbar-light">
            <div class="container">
                <div class="row no-gutters mx-auto w-100">
                    <div class="col-12 col-sm-3 col-lg-4 col-xl-3 pl-0 d-flex flex-column z-index-movil">
                        <div class="row my-auto">
                            <div class="col-9">
                                <a href="<?php echo site_url( "/" ); ?>" class="logo primary">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" class="img-fluid">
                                </a>
                            </div>
                            <div class="col-3 d-flex flex-column p-0">
                                <button class="navbar-toggler my-auto p-0" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/hamburguesa.svg" alt="">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-9 col-lg-8 col-xl-9 d-flex flex-column">
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <div id="menu-primary" class="ml-auto">
                                <ul id="main-menu" class="navbar-nav mx-auto pt-0">
                                    <li class="menu-item active">
                                        <a href="#inicio" class="nav-link">Inicio</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="#cifras" class="nav-link">Cifras</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="#mapa" class="nav-link">Mapa</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="#reportes" class="nav-link">Reportes</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="#quienes-somos" class="nav-link">Quiénes somos</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="#footer" class="nav-link">Contacto</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header><!-- #masthead -->