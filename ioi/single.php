<?php
/**
 * The Template for displaying all single posts
 *
 * Please see /external/starkers-utilities.php for info on get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<div class="container">
		<div class="row content">

			

			<div class="news sevencol">

				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>			

			
			</div>
	<?php endwhile; ?>
		</div>
	</div>




<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>