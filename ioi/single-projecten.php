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
		<!--
		<div class="row">
			<div class="breadcrumb">
			<a href="/" title="Home">Home</a> / <a href="/nieuws" title="Niews">Nieuws</a> / <?php the_title(); ?>
			</div>
		</div>
		-->

		<div class="row content">

			

			<div class="projecten twelvecol">

				<h2><?php the_title(); ?></h2>
				<?php the_post_thumbnail('projectNormal'); ?>
				<div class="meta">
				 
				</div>
				

			</div>
			
			
	
		</div>
		<div class="row">
			<div class="sevencol">
				<?php the_content(); ?>			

				

				<?php comments_template( '', true ); ?>
			</div>
			<div class="onecol"></div>
			<div class="fourcol last">
				<?php
				// Find connected pages
				$connected = new WP_Query( array(
				  'connected_type' => 'projecten_to_medewerkers',
				  'connected_items' => get_queried_object(),
				  'nopaging' => true,
				) );

				// Display connected pages
				if ( $connected->have_posts() ) :

				?>
				<?php if (qtrans_getLanguage() == 'nl' ): ?>
				<h3>Gerelateerde medewerkers</h3>
				<?php else : ?>
				<h3> Related Workers</h3>
				<?php endif;  ?>
				<ul class="related_workers">
				<?php while ( $connected->have_posts() ) : $connected->the_post(); ?>
					<li><?php if(has_post_thumbnail()): ?>
					    <a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
					        <?php the_post_thumbnail('featuredImageProfile') ?>
					    </a> 
					<?php else: ?>
					    <a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
					        <img src="../wp-content/themes/ioi/images/default_profile.png" />
					    </a>
					<?php endif ?>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						
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
				  'connected_type' => 'projecten_to_publicaties',
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
				<ul class="related_workers">
				<?php while ( $connected->have_posts() ) : $connected->the_post(); ?>
					<li>
					
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						
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
				  'connected_type' => 'projecten_to_onderzoek',
				  'connected_items' => get_queried_object(),
				  'nopaging' => true,
				) );

				// Display connected pages
				if ( $connected->have_posts() ) :

				?>
				<?php if (qtrans_getLanguage() == 'nl' ): ?>
				<h3>Gerelateerde onderzoekslijn</h3>
				<?php else : ?>
				<h3>Related researchfield</h3>
				<?php endif;  ?>
				<ul class="related_workers">
				<?php while ( $connected->have_posts() ) : $connected->the_post(); ?>
					<li>
					
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						
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
				<h3>Gerelateerde presentaties</h3>
				<?php else : ?>
				<h3>Related presentations</h3>
				<?php endif;  ?>
				<ul class="related_workers">
				<?php while ( $connected->have_posts() ) : $connected->the_post(); ?>
					<li>
					
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						
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
				  'connected_type' => 'nieuws_to_projecten',
				  'connected_items' => get_queried_object(),
				  'nopaging' => true,
				) );

				// Display connected pages
				if ( $connected->have_posts() ) :

				?>
				<?php if (qtrans_getLanguage() == 'nl' ): ?>
				<h3>Gerelateerde nieuwsberichten</h3>
				<?php else : ?>
				<h3>Related news</h3>
				<?php endif;  ?>
				<ul class="related_workers">
				<?php while ( $connected->have_posts() ) : $connected->the_post(); ?>
					<li>
					
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						
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
		<?php endwhile; ?>
	</div>

<div class="row">
	
</div>



<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>