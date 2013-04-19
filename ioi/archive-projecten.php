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
		
		    <div class="twelvecol">
				<h2 class="headings">Projecten</h2>
				
			</div>
			
	

		<?php else : ?>
			
			 <div class="sevencol">
				<h2 class="headings">Projects</h2>
				
			</div>

		<?php endif;  ?>
	</div>
	<div class="row">
	<ol class="list_projecten">
		<?php 	
			  
				$projecten = array( 'post_type' => 'projecten', 'showposts' => "10", 'paged' => get_query_var( 'paged' ), 'orderby' => 'date', 'order'=> 'DESC', 'caller_get_posts' =>1);
			    $loop = new WP_Query( $projecten );
			 ?>
	<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
		<li>
			<article class="twelvecol projecten">
				<div class="article_thumb threecol">
					<?php 
					if ( has_post_thumbnail() ) {
					the_post_thumbnail('featuredImageCropped');
					} 
					else {
					?>
					
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/defaultImg02.png">
					
					<?php
					}
					?>
				</div>
				<h3 class="title_projecten"><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
				<p class="excerpt projecten_excerpt">
					<?php
					  // Use function for custom excerpts 	
					  $excerpt = get_the_excerpt();
					  // Limit the words 
					  echo string_limit_words($excerpt,35);
					?> ... 
					
					</p>
			</article>
		</li>
	<?php endwhile; ?>
	</div>
	<div class="navigation row">
				<div class="alignleft sixcol last"><?php previous_posts_link(' &laquo; Newer Entries ') ?></div>
				<div class="alignright sixcol"><?php next_posts_link('Older Entries &raquo;') ?></div>
				
	</div>
	</ol>
	<?php else: ?>
	<h2>No posts to display</h2>	
	<?php endif; ?>
	
</div>



<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>