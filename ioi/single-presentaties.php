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
	<div class="row">
		<div class="sevencol">
		<h2><?php the_title(); ?></h2>
		<?php the_post_thumbnail('featuredImageProfile') ?>
		<?php the_content(); ?>			
		</div>
		
		<div class="onecol">
		</div>
		
		<div class="fourcol last">
			<?php
			// Find connected pages
			$connected = new WP_Query( array(
			  'connected_type' => 'presentaties_to_medewerkers',
			  'connected_items' => get_queried_object(),
			  'nopaging' => true,
			) );

			// Display connected pages
			if ( $connected->have_posts() ) :

			?>
			<?php if (qtrans_getLanguage() == 'nl' ): ?>
			<h3>Gerelateerde medewerkers</h3>
			<?php else : ?>
			<h3>Related workers</h3>
			<?php endif;  ?>
			<ul class="related_projects">
			<?php while ( $connected->have_posts() ) : $connected->the_post(); ?>
				<li>
				    <a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
				        <?php the_title() ?>
				    </a>	
				</li>
			<?php endwhile; ?>
			</ul>

			<?php 
			// Prevent weirdness
			wp_reset_postdata();

			endif;

			?>
			
			<?php
			// Find connected pages
			$connected = new WP_Query( array(
			  'connected_type' => 'presentaties_to_onderzoek',
			  'connected_items' => get_queried_object(),
			  'nopaging' => true,
			) );

			// Display connected pages
			if ( $connected->have_posts() ) :

			?>
			<?php if (qtrans_getLanguage() == 'nl' ): ?>
			<h3>Onderzoekslijn</h3>
			<?php else : ?>
			<h3>Research Field</h3>
			<?php endif;  ?>
			<ul class="related_projects">
			<?php while ( $connected->have_posts() ) : $connected->the_post(); ?>
				<li>
				    <a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
				        <?php the_title() ?>
				    </a>	
				</li>
			<?php endwhile; ?>
			</ul>

			<?php 
			// Prevent weirdness
			wp_reset_postdata();

			endif;

			?>
			
		
			<?php
			// Find connected pages
			$connected = new WP_Query( array(
			  'connected_type' => 'nieuws_to_presentaties',
			  'connected_items' => get_queried_object(),
			  'nopaging' => true,
			) );

			// Display connected pages
			if ( $connected->have_posts() ) :

			?>
			<?php if (qtrans_getLanguage() == 'nl' ): ?>
			<h3>Gerelateerd nieuws</h3>
			<?php else : ?>
			<h3>Related news</h3>
			<?php endif;  ?>
			<ul class="related_projects">
			<?php while ( $connected->have_posts() ) : $connected->the_post(); ?>
				<li>
				    <a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
				        <?php the_title() ?>
				    </a>	
				</li>
			<?php endwhile; ?>
			</ul>

			<?php 
			// Prevent weirdness
			wp_reset_postdata();

			endif;

			?>
			
			
			<?php
			// Find connected pages
			$connected = new WP_Query( array(
			  'connected_type' => 'projecten_to_presentaties',
			  'connected_items' => get_queried_object(),
			  'nopaging' => true,
			) );

			// Display connected pages
			if ( $connected->have_posts() ) :

			?>
		
			
			<?php if (qtrans_getLanguage() == 'nl' ): ?>
			<h3>Gerelateerde projectn</h3>
			<?php else : ?>
			<h3>Related projects</h3>
			<?php endif;  ?>
			<ul class="related_projects">
			<?php while ( $connected->have_posts() ) : $connected->the_post(); ?>
				<li>
				    <a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
				        <?php the_title() ?>
				    </a>	
				</li>
			<?php endwhile; ?>
			</ul>
			
			<?php 
			// Prevent weirdness
			wp_reset_postdata();

			endif;

			?>
			
			
			
			<?php
			// Find connected pages
			$connected = new WP_Query( array(
			  'connected_type' => 'publicaties_to_presentaties',
			  'connected_items' => get_queried_object(),
			  'nopaging' => true,
			) );

			// Display connected pages
			if ( $connected->have_posts() ) :

			?>
		
			
			<?php if (qtrans_getLanguage() == 'nl' ): ?>
			<h3>Gerelateerde publicaties</h3>
			<?php else : ?>
			<h3>Related publications</h3>
			<?php endif;  ?>
			<ul class="related_projects">
			<?php while ( $connected->have_posts() ) : $connected->the_post(); ?>
				<li class="single-publication-title">
				    
				        <?php the_title() ?>
				   	
				</li>
			<?php endwhile; ?>
			</ul>
			
			<?php 
			// Prevent weirdness
			wp_reset_postdata();

			endif;

			?>
			
		
			
		</div>
		
	</div>
</div>
<?php endwhile; ?>







<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>