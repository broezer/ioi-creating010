<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file 
 *
 * Please see /external/starkers-utilities.php for info on get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<div class="container featured">
	<div class="row ">
		<div class="featuredcol">
			<div class="big-01" style="background:url('http://creating010.brucemoerdjiman.nl/wp-content/themes/ioi/images/defaults/foto_1_b.jpg') center top">
				<!--<img src="http://creating010.brucemoerdjiman.nl/wp-content/themes/ioi/images/defaults/foto_1_b.jpg"/>
				<!--
				<iframe class="video" src="http://player.vimeo.com/video/49372734?badge=0" width="854" height="480" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>-->
			</div>
			<div class="big-02">
			     <img src="http://creating010.brucemoerdjiman.nl/wp-content/themes/ioi/images/defaults/foto_2.png"/>
			</div>

			<div class="big-03">
			      <img src="http://creating010.brucemoerdjiman.nl/wp-content/themes/ioi/images/defaults/foto_3.png"/>
			</div>

			<div class="big-04">
			   <img src="http://creating010.brucemoerdjiman.nl/wp-content/themes/ioi/images/defaults/foto_4.png"/>
			</div>
		</div>
		<div class="featuredthumbcol">
			<div class="small-01">
			        Test01
			        </div>

			        <div class="small-02">
			        Test02
			        </div>

			        <div class="small-03">
			        Test03
			        </div>

			        <div class="small-04">
			        Test04
			        </div>
		</div>
	</div>
</div>
<div class="containter tagline">
	<div class="row">
		<div class="twelvecol">
		
			<?php echo ' ' . get_bloginfo ( 'description' );  ?><br />
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		
		<?php if ( have_posts() ): ?>
		
		<div class="news sevencol">
		
		<h2 class="headings">News</h2>
		<?php $nieuwspost = array( 'post_type' => 'nieuws', );
			      $loop = new WP_Query( $nieuwspost ); ?>
		<?php while ( $loop->have_posts() ) : $loop->the_post();?>
	
				<div class="news_post">
				
				
					<div class="news_excerpt ">
					
							<div class="article_thumb threecol">
							
								<span class="screen">
								<?php the_post_thumbnail('featuredImageCropped'); ?>
								</span>
								<span class="mobile">
								<?php the_post_thumbnail('featuredImageCroppedContent'); ?>
								</span>
							
							
							</div>
					
							<div class="article_title fourcol_last">
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
			<h2 class="headings">Onderzoekslijnen</h2>
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
			<h2 class="twelve">No Workers to display</h2>
			<?php endif; ?>
			
			<?php if ( have_posts() ): ?>
			
			<h2 class="headings">Workers</h2>	
			<div class="workers">
			<?php 	
				  	$i = 0;
					$medewerkers = array( 'post_type' => 'medewerkers', 'showposts' => "100", "paged");
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