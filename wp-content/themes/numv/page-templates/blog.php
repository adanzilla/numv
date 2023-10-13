<?php
/**
 * Template Name: Blog
 *
 * Description: Muestra el contenido de Blog
 *
 * @package WordPress
 * @subpackage numv
 * @since numv 1.0
 */

get_header('dashboard'); ?>

<section class="blog header mb-5 my-md-5">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-12 col-md-8 mt-5 mt-md-0">
                <p class="mb-0">
                    <a href="<?php echo site_url( "/" ); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/left-arrow-primary.svg" alt=""> Regresar
                    </a>
                </p>
                <h1 class="mb-0">
                    Blog
                </h1>
            </div>
        </div>
    </div>
</section> 

<section class="blog grid">
    <div class="container">


        <?php
        
        $blog = new WP_Query( 'posts_per_page=-1' );
        
        if ( $blog->have_posts() ) :

            /* Start the Loop */
            while ( $blog->have_posts() ) :
                $blog->the_post(); 
                $cats = get_the_category( get_the_ID() );
                ?>

            <!-- BLOG CARD ITERABLE -->
            <div class="row no-gutters mb-3">
                <div class="col-12">
                    <div class="card p-3">
                        <div class="row no-gutters">
                            <div class="col-12 col-md-4">
                                <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>" class="w-100">
                            </div>
                            <div class="col-12 col-md-8 pl-md-5 mt-3 mt-md-0 d-flex flex-column">
                                <div class="row no-gutters my-auto">
                                    <div class="col-12">
                                        <p class="date"><?php the_date(); ?></p>
                                        <p class="title"><?php the_title( ); ?></p>
                                        <p class="excerpt"><?php echo get_the_excerpt(); ?></p>
                                        <p class="categories">
                                            <?php foreach ($cats as $cat) : ?>
                                                <a href="" class="badge badge-primary <?php echo $cat->slug ?>">
                                                    <?php echo $cat->name ?>
                                                </a>
                                            <?php endforeach; ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col-10 d-flex flex-column">
                                        <a href="<?php echo get_the_permalink( get_the_ID() ) ?>" class="permalink my-auto">
                                            Leer más
                                        </a>
                                    </div>
                                    <div class="col-1">
                                        <a href="<?php echo get_the_permalink( get_the_ID() ) ?>" class="btn btn-block btn-primary mt-3 transparent">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/right-arrow-dark.svg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="row no-gutters">
                                    <div class="col-12">
                                        <hr class="mt-0 mb-0">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php 
            endwhile;
        endif;
        ?>
        
        
        
    </div>
</section>


<?php get_footer();