<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package NUMV
 */

$cats = get_the_category( get_the_ID() );

?>


<div class="row no-gutters">
	<div class="col-12">
		<img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' ) ?>" alt="" class="w-100">
	</div>
</div>
<div class="row no-gutters mt-3 mt-md-5">
	<div class="col-12">
		<p>
			<?php foreach ($cats as $cat) : ?>
		        <a href="javascript:void(0);" class="">
		            <?php echo $cat->name ?>
		        </a>
		    <?php endforeach; ?>
		</p>
	</div>
</div>
<div class="row no-gutters">
	<div class="col-12">
		<h1>
			<?php the_title(); ?>
		</h1>
		<p class="text-muted">
			<?php echo get_the_excerpt( get_the_ID() ); ?>
		</p>
		<hr class="mb-3 mb-md-5">
	</div>
</div>

<?php the_content(); ?><!-- #post-<?php the_ID(); ?> -->
