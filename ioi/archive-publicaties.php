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
				<h2 class="headings">Publicaties</h2>
				
			</div>

		<?php else : ?>
			
			 <div class="sevencol">
				<h2 class="headings">PublicationS</h2>
				
			 </div>

		<?php endif;  ?>
	</div>
	<div class="row">
		<div class="fourcol">
			
			<?php if (qtrans_getLanguage() == 'nl' ): ?>
				<?php	echo of_get_option('pub_nl', 'no entry');?>
			<?php else : ?>
				<?php	echo of_get_option('pub_en', 'no entry');?>
			<?php endif;  ?>
		</div>
		
		<div class="eightcol last">
			<div class="accordion" id="publicaties-accordion">
			<div class="accordion-group">	
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#publicaties-accordion" href="#collapseOne"><h2>2013</h2></a> <!-- Take note of "href=#collapseOne" -->
				</div>
				<div id="collapseOne" class="accordion-body collapse in">
				      <div class="accordion-inner">
							<ol class="list_projecten">
				
				<?php 	

						$publicaties = array( 'post_type' => 'publicaties', 'showposts' => "999", 'paged' => get_query_var( 'paged' ), 'orderby' => 'date', 'order'=> 'DESC', 'caller_get_posts' =>1, 'year'=>'2013');

					    $loop = new WP_Query( $publicaties );
					 ?>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

			<li>	
			<p><?php echo get_the_content(); ?></p>
			</li>

			<?php endwhile;  ?>


							</ol>
			
					  </div>
				</div>
			</div>
			
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#publicaties-accordion" href="#collapseTwo"><h2>2012</h2></a>
				</div>
				<div id="collapseTwo" class="accordion-body collapse in ">
				      <div class="accordion-inner">
							<ol class="list_projecten">
				
				<?php 	

						$publicaties = array( 'post_type' => 'publicaties', 'showposts' => "999", 'paged' => get_query_var( 'paged' ), 'orderby' => 'date', 'order'=> 'DESC', 'caller_get_posts' =>1, 'year'=>'2012');

					    $loop = new WP_Query( $publicaties );
					 ?>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

			<li>	
			<p><?php echo get_the_content(); ?></p>
			</li>

			<?php endwhile;  ?>
		

							</ol>
					  </div>
				</div>
			</div>
			
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#publicaties-accordion" href="#collapseThree"><h2>2011</h2></a>
				</div>
				<div id="collapseThree" class="accordion-body collapse in">
				      <div class="accordion-inner">
							<ol class="list_projecten">
				<?php 	
			  
						$publicaties = array( 'post_type' => 'publicaties', 'showposts' => "999", 'paged' => get_query_var( 'paged' ), 'orderby' => 'date', 'order'=> 'DESC', 'caller_get_posts' =>1, 'year'=>'2011');
				
					    $loop = new WP_Query( $publicaties );
					 ?>
			
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
		
			<li>	
			<p><?php echo get_the_content(); ?></p>
			</li>	
			
			<?php endwhile;  ?>
	
	
							</ol>
					  </div>
				</div>
			</div>
			
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#publicaties-accordion" href="#collapseFour"><h2>2010</h2></a>
				</div>
				<div id="collapseFour" class="accordion-body collapse in ">
				      <div class="accordion-inner">
							<ol class="list_projecten">
				<?php 	
			  
						$publicaties = array( 'post_type' => 'publicaties', 'showposts' => "999", 'paged' => get_query_var( 'paged' ), 'orderby' => 'date', 'order'=> 'DESC', 'caller_get_posts' =>1, 'year'=>'2010');
				
					    $loop = new WP_Query( $publicaties );
					 ?>
			
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
		
			<li>	
			<p><?php echo get_the_content(); ?></p>
			</li>	
			
			<?php endwhile;  ?>
	
	
						 	</ol>
					 </div>
				</div>
			</div>
			
			
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#publicaties-accordion" href="#collapseFive"><h2>2009</h2></a>
				</div>
				<div id="collapseFive" class="accordion-body collapse in">
				      <div class="accordion-inner">
							<ol class="list_projecten">
				<?php 	
			  
						$publicaties = array( 'post_type' => 'publicaties', 'showposts' => "999", 'paged' => get_query_var( 'paged' ), 'orderby' => 'date', 'order'=> 'DESC', 'caller_get_posts' =>1, 'year'=>'2009');
				
					    $loop = new WP_Query( $publicaties );
					 ?>
			
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
		
			<li>	
			<p><?php echo get_the_content(); ?></p>
			</li>	
			
			<?php endwhile;  ?>
	
	
							</ol>
					  </div>
				</div>
			</div>
			
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#publicaties-accordion" href="#collapseSix"><h2>2008</h2></a>
				</div>
				
				<div id="collapseSix" class="accordion-body collapse in ">
			      	<div class="accordion-inner">
							<ol class="list_projecten">
				<?php 	
			  
						$publicaties = array( 'post_type' => 'publicaties', 'showposts' => "999", 'paged' => get_query_var( 'paged' ), 'orderby' => 'date', 'order'=> 'DESC', 'caller_get_posts' =>1, 'year'=>'2008');
				
					    $loop = new WP_Query( $publicaties );
					 ?>
			
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
		
			<li>	
			<p><?php echo get_the_content(); ?></p>
			</li>	
			
			<?php endwhile;  ?>
	
	
			</ol>
				  	</div>
				</div>
			</div>
		</div>
		</div>
		
	</div>
		
	<?php endif; ?>
	
</div>



<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>