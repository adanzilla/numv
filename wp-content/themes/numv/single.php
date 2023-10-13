<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package NUMV
 */

get_header('blog');
?>

	<section class="blog header mb-5 my-md-5">
	    <div class="container">
	        <div class="row no-gutters">
	            <div class="col-12 col-md-8 mt-5 mt-md-0">
	                <p class="mb-0">
	                    <a href="<?php echo site_url( "/" ); ?>">
	                        <img src="<?php echo get_template_directory_uri(); ?>/img/left-arrow-primary.svg" alt=""> Regresar
	                    </a>
	                </p>
	            </div>
	        </div>
	    </div>
	</section> 

	<section class="blog single">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-12">
					<?php
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content', get_post_type() );

					endwhile; // End of the loop.
					?>
				</div>
			</div>
		</div>
	</section>

<?php
get_footer();
