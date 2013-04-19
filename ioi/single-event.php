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

			

			<div class="news sevencol">

				<h2><?php the_title(); ?></h2>
				<?php the_post_thumbnail('featuredImageCroppedContent'); ?>
				<div class="meta">
					<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date('d F Y'); ?></time> 
				</div>
				<?php the_content(); ?>			

				<?php if ( get_the_author_meta( 'description' ) ) : ?>
				<?php echo get_avatar( get_the_author_meta( 'user_email' ) ); ?>
				<h3>About <?php echo get_the_author() ; ?></h3>
				<?php the_author_meta( 'description' ); ?>
				<?php endif; ?>

				<?php //comments_template( '', true ); ?>

			</div>
			<div class="fourcol last">
					<?php
					// Find connected pages
					$connected = new WP_Query( array(
					  'connected_type' => 'event_to_medewerkers',
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
					  'connected_type' => 'event_to_onderzoek',
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
					  'connected_type' => 'event_to_projecten',
					  'connected_items' => get_queried_object(),
					  'nopaging' => true,
					) );

					// Display connected pages
					if ( $connected->have_posts() ) :

					?>
					<?php if (qtrans_getLanguage() == 'nl' ): ?>
					<h3>Gerelateerde projecten</h3>
					<?php else : ?>
					<h3>Related projects</h3>
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
			
	<?php endwhile; ?>
		</div>
	</div>





<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>