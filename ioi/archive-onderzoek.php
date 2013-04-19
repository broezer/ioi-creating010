<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * Please see /external/starkers-utilities.php for info on get_template_parts() 
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php if ( have_posts() ): ?>

<div class="container">
	<div class="row">
	<?php if (qtrans_getLanguage() == 'nl' ): ?>
		
		    <div class="sevencol">
				<h4>Onderzoekslijnen</h4>
				
			</div>
			
	

		<?php else : ?>
			
			 <div class="sevencol">
				<h4>Research Fields</h4>
				
			</div>

		<?php endif;  ?>
	</div>
	<div class="row">
	<ol>
		<?php 	
			  	$i = 0;
				$projecten = array( 'post_type' => 'onderzoek', 'showposts' => "20", "paged", 'orderby' => 'title', 'order'=> 'ASC');
			    $loop = new WP_Query( $projecten );
			 ?>
	<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
		<li>
			<article>
				<h2><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			
			</article>
		</li>
	<?php endwhile; ?>
	<div class="navigation">
				<div class="alignleft sixcol last"><?php previous_posts_link(' &laquo; Newer Entries ') ?></div>
				<div class="alignright sixcol"><?php next_posts_link('Older Entries &raquo;') ?></div>
	</div>
	</ol>
	<?php else: ?>
	<h2>No posts to display</h2>	
	<?php endif; ?>
	</div>
</div>



<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>