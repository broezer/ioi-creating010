		
	
		<div class="container">
			<span class="searchLine">&nbsp;</span>
			<header>
				
				<div class="row">
					
					<div class="fourcol">
						<h1><a href="/"  title="<?php bloginfo( 'name' ); ?>"><img class="logo" src="<?php header_image(); ?>" alt="" /></a></h1>		
						
					</div>
					
					<div class="fourcol">
					</div>
					
					<div class="fourcol last">
						<div id="flaggenmast">
							
						  		<?php echo qtrans_generateLanguageSelectCode('image'); ?>
							
						</div>
						<!--
						<div id="hrSearch screen">
						<?php get_search_form(); ?>
						</div>
						-->
					</div>
					
					
				</div>
				
			
				
			</header>
		
		</div>
		
		<div class="container nav-wrap">
			<div class="row">
				<?php if (qtrans_getLanguage() == 'nl' ): ?>
					
					<?php wp_nav_menu( array( 'container_id' => 'main-menu', 'container_class' => 'twelvecol screen', 'theme_location' => 'primary-nl','menu_id'=>'main' ,'menu_class'=>'sfmenu','fallback_cb'=> 'fallbackmenu' , 'link_before' => '<span>', 'link_after' => '</span>',) ); ?>
					

				<?php else : ?>
					
					<?php wp_nav_menu( array( 'container_id' => 'main-menu', 'container_class' => 'twelvecol screen', 'theme_location' => 'primary','menu_id'=>'main' ,'menu_class'=>'sfmenu','fallback_cb'=> 'fallbackmenu' , 'link_before' => '<span>', 'link_after' => '</span>',) ); ?>
					
					
				<?php endif;  ?>
				
				
			</div>
		</div>
		
		
			
			
			
			
		


	
