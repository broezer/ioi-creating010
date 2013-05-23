</div>
<div class="container footer-wrap">	
	<footer class="row">
		<?php if (qtrans_getLanguage() == 'nl' ): ?>
			
			    <div class="fourcol">
					<h4>Kenniscentrum <?php bloginfo( 'name' ); ?></h4>
					<?php	echo of_get_option('about_nl', 'no entry');?>
				</div>
				
		

			<?php else : ?>
				
				 <div class="fourcol">
					<h4>Researchgroup <?php bloginfo( 'name' ); ?></h4>
					<?php	echo of_get_option('about_en', 'no entry');?>
				</div>
			
			<?php endif;  ?>
		
				<div class="fourcol">
					<h4>Twitter Feed </h4>
					<ul id="twitter_update_list"><li>Twitter feed loading</li></ul>
					
				</div>
			
		
			
	</footer>
</div>
<div class="container footer-wrap-under">	
	<div class="row">
		<div class="fourcol">	&copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.</div>
	</div>
</div>
<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
<script type="text/javascript" src="http://api.twitter.com/1/statuses/user_timeline.json?screen_name=<?php echo of_get_option('twitter_account', 'no entry');?>&include_rts=1&callback=twitterCallback2&count=2"></script
	
	
	
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.qtip-1.0.0.min.js"></script> 
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/superfish.js"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.mobilemenu.js"></script>
	
	
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap-collapse.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.fitvids.js"></script>
	
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/site.js"></script>
	
	<script>
	
	jQuery.noConflict();
	(function($) {
		$(document).ready(function(){
		    // Target your .container, .wrapper, .post, etc.
		    $(".row").fitVids();
		  })
	})(jQuery);
	
	</script> 
	
	