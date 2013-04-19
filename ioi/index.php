<?php
/**
 *	Template Name: Index 
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<div class="container featured">
	<div class="row ">
		<div class="twocol">
			
		</div>
		<div class="eightcol">
			<iframe src="http://player.vimeo.com/video/49372734?title=0&amp;byline=0&amp;portrait=0" width="1140" height="641" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
		</div>
	</div>
</div>
<div class="containter tagline">
	<div class="row">
		<div class="twelvecol">
			<h1 class="main_title">Kenniscentrum <?php bloginfo( 'name' ); ?></h1>
			<?php if (qtrans_getLanguage() == 'nl' ): ?>
			<h2 class="tag_line"><?php	echo of_get_option('about_nl', 'no entry');?></h2><br />	
			<?php else : ?>
			<h2 class="tag_line"><?php	echo of_get_option('about_en', 'no entry');?></h2><br />
			<?php endif;  ?>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		
		<?php if ( have_posts() ): ?>
		
		<div class="news sevencol">
		
			<?php if (qtrans_getLanguage() == 'nl' ): ?>

			<h2 class="headings">Nieuws</h2>
			<?php else : ?>
			<h2 class="headings">News</h2>
			<?php endif;  ?>
		<?php $nieuwspost = array( 'post_type' => 'nieuws', );
			      $loop = new WP_Query( $nieuwspost ); ?>
		<?php while ( $loop->have_posts() ) : $loop->the_post();?>
	
				<div class="news_post">
				
				
					<div class="news_excerpt ">
					
							<div class="article_thumb threecol">
							
								<span class="screen">
								<?php 
								if ( has_post_thumbnail() ) {
								the_post_thumbnail('featuredImageCropped');
								} 
								else {
								?>
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/defaultImg.png">
								<?php
								}
								?>
								</span>
								<span class="mobile">
								<?php 
								if ( has_post_thumbnail() ) {
								the_post_thumbnail('featuredImageCroppedContent'); 
								} 
								else {
								?>
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/defaultImg.png">
								<?php
								}
								?>
						
								</span>
							
							
							</div>
					
							<div class="article_title fourcol last">
								<h2><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark" class="title_link"><?php the_title(); ?></a></h2>
								<p class="excerpt">
									<?php
									  // Use function for custom excerpts 	
									  $excerpt = get_the_excerpt();
									  // Limit the words 
									  echo string_limit_words($excerpt,25);
									?> ... 
									
									</p>	
						
							</div>
					
				
							<div class="threecol">
							</div>
						
								<a href="#" class="show_hide">Show</a>
							
					
					
				
					</div>
					<div class="news_content hide">
				    	<a href="#" class="button_hide">Hide</a>
					
						<?php the_post_thumbnail('featuredImageCroppedContent'); ?>
						<div>
							<h2 class"titlebig"><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>



						</div>
						<?php the_content()?>
					</div>
					
					
				</div>
			
		<?php endwhile; ?>
		</div>
		<?php else: ?>
		<h2 class="sevencol">No posts to display</h2>
		<?php endif; ?>
	
	


		<div class="onecol"></div>
		
		<div class="fourcol last">
			<?php if ( have_posts() ): ?>
			<?php if (qtrans_getLanguage() == 'nl' ): ?>
			
			<h2 class="headings">Onderzoekslijnen</h2>
			<?php else : ?>
			<h2 class="headings">Research Fields</h2>
			<?php endif;  ?>
			<div class="onderzoekslijn">
				<ul class="onderzoekslijn">
			<?php 	
				  	$i = 0;
					$medewerkers = array( 'post_type' => 'onderzoek', );
				    $loop = new WP_Query( $medewerkers ); ?>
			<?php while ( $loop->have_posts() ) : $loop->the_post();?>

							
						
						
								<li>
									<a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
									<?php the_title(); ?>
									</a>
								</li>
								
							

		

			<?php endwhile; ?>
				</ul>
			<?php else: ?>
			<h2 class="twelve"></h2>
			<?php endif; ?>
			
			<?php if ( have_posts() ): ?>
			
				<?php if (qtrans_getLanguage() == 'nl' ): ?>

				<h2 class="headings workers">Medewerkers</h2>
				<?php else : ?>
				<h2 class="headings workers">Workers</h2>
				<?php endif;  ?>
					
			<div class="workers">
			<?php 	
				  	$i = 0;
					$medewerkers = array( 'post_type' => 'medewerkers', 'showposts' => "100", "paged", "orderby" => "title", 'order' => 'ASC');
				    $loop = new WP_Query( $medewerkers );
				 ?>
			<?php while ( $loop->have_posts() ) : $loop->the_post();?>

							<div class="worker onecol <?php 

							//while stuff
							    $i++;
							    if( 4 == $i ) {
							        $i = 0;
							        echo 'lastonecol';
							    } 
															?> ">
															
							<?php //the_post_thumbnail('featuredImageProfile');
							 	// Old Code - Bruce 14/02/13 ?>
							
							<?php if(has_post_thumbnail()): ?>
							    <a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
							        <?php the_post_thumbnail('featuredImageProfile') ?>
							    </a> 
							<?php else: ?>
							    <a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
							        <img src="../wp-content/themes/ioi/images/default_profile.png" />
							    </a>
							<?php endif ?>
							
						
								<div class="myqtip-content"  style="display:none">
									<?php the_title(); ?>
								</div>
								
							</div>

		

			<?php endwhile; ?>

			<?php else: ?>
			<h2 class="twelve">No Workers to display</h2>
			<?php endif; ?>
			
			</div>
		
	
		</div>
	</div>
</div>
<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>