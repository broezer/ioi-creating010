<?php
	/**
	 * Starkers functions and definitions
	 *
	 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
	 *
 	 * @package 	WordPress
 	 * @subpackage 	Starkers
 	 * @since 		Starkers 4.0
	 */

	/* ========================================================================================================================
	
	Required external files
	
	======================================================================================================================== */

	require_once( 'external/starkers-utilities.php' );
	require_once('class-tgm-plugin-activation.php');
	include ( 'getplugins.php' );
	/* ========================================================================================================================
	
	Theme specific settings

	Uncomment register_nav_menus to enable a single menu with the title of "Primary Navigation" in your theme
	
	======================================================================================================================== */

	add_theme_support('post-thumbnails');
	
	// register_nav_menus(array('primary' => 'Primary Navigation'));

	/* ========================================================================================================================
	
	Actions and Filters
	
	======================================================================================================================== */

	add_action( 'wp_enqueue_scripts', 'script_enqueuer' );

	add_filter( 'body_class', 'add_slug_to_body_class' );

	/* ========================================================================================================================
	
	Custom Post Types - include custom post types and taxonimies here e.g.

	e.g. require_once( 'custom-post-types/your-custom-post-type.php' );
	
	======================================================================================================================== */



	/* ========================================================================================================================
	
	Scripts
	
	======================================================================================================================== */

	/**
	 * Add scripts via wp_head()
	 *
	 * @return void
	 * @author Keir Whitaker
	 */

	function script_enqueuer() {
	/**	wp_register_script( 'site', get_template_directory_uri().'/js/site.js', array( 'jquery' ) );
		wp_enqueue_script( 'site' );

		wp_register_style( 'screen', get_template_directory_uri().'/style.css', '', '', 'screen' );
        wp_enqueue_style( 'screen' );*/
	}	

	/* ========================================================================================================================
	
	Comments
	
	======================================================================================================================== */

	/**
	 * Custom callback for outputting comments 
	 *
	 * @return void
	 * @author Keir Whitaker
	 */
	function starkers_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment; 
		?>
		<?php if ( $comment->comment_approved == '1' ): ?>	
		<li>
			<article id="comment-<?php comment_ID() ?>">
				<?php echo get_avatar( $comment ); ?>
				<h4><?php comment_author_link() ?></h4>
				<time><a href="#comment-<?php comment_ID() ?>" pubdate><?php comment_date() ?> at <?php comment_time() ?></a></time>
				<?php comment_text() ?>
			</article>
		<?php endif;
	}
	/* ========================================================================================================================
	
	Admin
	
	======================================================================================================================== */
	

	// Admin CSS layer
	if ( !function_exists('base_admin_css') ) {
		function base_admin_css()
		{
			wp_enqueue_style('base-admin-css', get_stylesheet_directory_uri() .'/css/admin.css', false, '1.0', 'all');
		}
		add_action('admin_print_styles', 'base_admin_css');
	}
	
	// Replaced "Howdy" 
	function replace_howdy( $wp_admin_bar ) {
	    $my_account=$wp_admin_bar->get_node('my-account');
	    $newtitle = str_replace( 'Howdy,', 'Logged in as', $my_account->title );            
	    $wp_admin_bar->add_node( array(
	        'id' => 'my-account',
	        'title' => $newtitle,
	    ) );
	}
	add_filter( 'admin_bar_menu', 'replace_howdy',25 );
	
	// Remove Help Icon
	function hide_help() {
	    echo '<style type="text/css">
         	#contextual-help-link-wrap { display: none !important; }
	          </style>';
	}
	add_action('admin_head', 'hide_help');
	
	// Create function to limit custom excerpts 
	function string_limit_words($string, $word_limit)
	{
	  $words = explode(' ', $string, ($word_limit + 8));
	  if(count($words) > $word_limit)
	  array_pop($words);
	  return implode(' ', $words);
	}
	
	// Removes Standard Dashboard Widgets
	
	function remove_dashboard_widgets() {
		global $wp_meta_boxes;

		unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
		unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
		unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
		unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
		unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);
		unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
		unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
		unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
		unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_welcome']);

	}

	add_action('wp_dashboard_setup', 'remove_dashboard_widgets' );

	
	
	/* 
	 * Loads the Options Panel
	 *
	 * If you're loading from a child theme use stylesheet_directory
	 * instead of template_directory
	 */

	if ( !function_exists( 'optionsframework_init' ) ) {
		define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/' );
		require_once dirname( __FILE__ ) . '/inc/options-framework.php';
	}
	
	/**
	 * Removes Standard Links / Comments / Media / Users
	 */
	
	function remove_menu_items() {
	  global $menu;
	  $restricted = array(__('Links'), __('Comments'), __('Media'),
	  __(''));
	  end ($menu);
	  while (prev($menu)){
	    $value = explode(' ',$menu[key($menu)][0]);
	    if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){
	      unset($menu[key($menu)]);}
	    }
	  }

	add_action('admin_menu', 'remove_menu_items');
	
	
	/**
	 * Add Custom Post Types
	 */
	
	include ( 'cpt.php' );
	
	/**
	 * Add Custom Post Types Icons
	 */
	
	add_action( 'admin_head', 'cpt_icons' );
	function cpt_icons() {
	    ?>
	    <style type="text/css" media="screen">
			#menu-posts-nieuws .wp-menu-image {
	            background: url(<?php bloginfo('template_url') ?>/images/newspaper--arrow.png) no-repeat 6px -17px !important;
	        }
			#menu-posts-agenda .wp-menu-image {
	            background: url(<?php bloginfo('template_url') ?>/images/calendar.png) no-repeat 6px -17px !important;
	        }
			#menu-posts-projecten .wp-menu-image {
	            background: url(<?php bloginfo('template_url') ?>/images/briefcase.png) no-repeat 6px -17px !important;
	        }
			#menu-posts-publicaties .wp-menu-image {
	            background: url(<?php bloginfo('template_url') ?>/images/document-text.png) no-repeat 6px -17px !important;
	        }
			#menu-posts-presentaties .wp-menu-image {
	            background: url(<?php bloginfo('template_url') ?>/images/projection-screen-presentation.png) no-repeat 6px -17px !important;
	        }
			#menu-posts-medewerkers .wp-menu-image {
	            background: url(<?php bloginfo('template_url') ?>/images/users.png) no-repeat 6px -17px !important;
	        }
			#menu-posts-nieuws:hover .wp-menu-image,
			#menu-posts-agenda:hover .wp-menu-image,
			#menu-posts-projecten:hover .wp-menu-image,
			#menu-posts-publicaties:hover .wp-menu-image,
			#menu-posts-presentaties:hover .wp-menu-image, 
			#menu-posts-medewerkers:hover .wp-menu-image{
	            background-position: 6px 7px!important;
	        }
	    </style>
	<?php }
	
	
	/**
	 * Custom Connection Types
	 */
	function my_connection_types() {
		//p2p_register_connection_type( array(
		//	'name' => 'nieuws_to_agenda',
		//	'from' => 'nieuws',
		//	'to' => 'agenda',
		//	'admin_column' => 'any'
	//	) );
		
		p2p_register_connection_type( array(
			'name' => 'nieuws_to_onderzoek',
			'from' => 'nieuws',
			'to' => 'onderzoek',
		) );
		
		p2p_register_connection_type( array(
			'name' => 'nieuws_to_projecten',
			'from' => 'nieuws',
			'to' => 'projecten',
		) );
		
		p2p_register_connection_type( array(
			'name' => 'nieuws_to_publicaties',
			'from' => 'nieuws',
			'to' => 'publicaties',
		) );
		
		p2p_register_connection_type( array(
			'name' => 'nieuws_to_presentaties',
			'from' => 'nieuws',
			'to' => 'presentaties',
		) );
		
		p2p_register_connection_type( array(
			'name' => 'nieuws_to_medewerkers',
			'from' => 'nieuws',
			'to' => 'medewerkers',
		) );
		
		p2p_register_connection_type( array(
			'name' => 'projecten_to_onderzoek',
			'from' => 'projecten',
			'to' => 'onderzoek',
		) );
		
		
		p2p_register_connection_type( array(
			'name' => 'projecten_to_publicaties',
			'from' => 'projecten',
			'to' => 'publicaties',
		) );
		
		p2p_register_connection_type( array(
			'name' => 'projecten_to_presentaties',
			'from' => 'projecten',
			'to' => 'presentaties',
		) );
		
		p2p_register_connection_type( array(
			'name' => 'projecten_to_medewerkers',
			'from' => 'projecten',
			'to' => 'medewerkers',
		) );
		
		p2p_register_connection_type( array(
			'name' => 'publicaties_to_onderzoek',
			'from' => 'publicaties',
			'to' => 'onderzoek',
		) );
		
		
		p2p_register_connection_type( array(
			'name' => 'publicaties_to_presentaties',
			'from' => 'publicaties',
			'to' => 'presentaties',
		) );
		
		p2p_register_connection_type( array(
			'name' => 'publicaties_to_medewerkers',
			'from' => 'publicaties',
			'to' => 'medewerkers',
		) );
		
		p2p_register_connection_type( array(
			'name' => 'presentaties_to_medewerkers',
			'from' => 'presentaties',
			'to' => 'medewerkers',
		) );
		
		
		p2p_register_connection_type( array(
			'name' => 'presentaties_to_onderzoek',
			'from' => 'presentaties',
			'to' => 'onderzoek',
		) );
		
		p2p_register_connection_type( array(
			'name' => 'medewerkers_to_onderzoek',
			'from' => 'medewerkers',
			'to' => 'onderzoek',
		) );
		
		p2p_register_connection_type( array(
			'name' => 'event_to_onderzoek',
			'from' => 'event',
			'to' => 'onderzoek',
			
		) );
		
		p2p_register_connection_type( array(
			'name' => 'event_to_projecten',
			'from' => 'event',
			'to' => 'projecten',
			
		) );
		
		p2p_register_connection_type( array(
			'name' => 'event_to_publicaties',
			'from' => 'event',
			'to' => 'publicaties',
			
		) );
		
		p2p_register_connection_type( array(
			'name' => 'event_to_presentaties',
			'from' => 'event',
			'to' => 'presentaties',
			
		) );
		
		p2p_register_connection_type( array(
			'name' => 'event_to_medewerkers',
			'from' => 'event',
			'to' => 'medewerkers',
			
		) );
		
	
		

		
		
		
	
	}
	add_action( 'p2p_init', 'my_connection_types' );
	
	/* CUSTOM MENUS */	

	register_nav_menus( array(
			'primary' => __( 'Primary English Navigation', '' ),
			'primary-nl' => __( 'Primair Nederlandse Navigatie', '' ),
		) );

	function fallbackmenu(){ ?>
				<div id="submenu">
					<ul><li> Go to Adminpanel > Appearance > Menus to create your menu. You should have WP 3.0+ version for custom menus to work.</li></ul>
				</div>
	<?php }
	
	
	
	
	/**
	 * Sidebar
	 */

	register_sidebar();
	
	add_theme_support( 'post-thumbnails' );
	add_image_size($name, $width, $height, $cropBoolean);
	add_image_size('featuredImageCropped', 394, 252, true);
	add_image_size('featuredImageCroppedContent', 1292, 576, true);
	add_image_size('featuredImageProfile', 150, 150, true);
	add_image_size('projectBig', 2280, 652, true);
	add_image_size('projectNormal', 1140, 326, true);
	add_image_size('projectThumbBig', 308, 216, true);
	add_image_size('projectThumbSmall', 154, 108, true);
	
	/**
	 * Custom header Image
	 */
	
	$args = array(
		'flex-width'    => true,
		'width'         => 440,
		'flex-height'   => true,
		'height'        => 80,
		'default-image' => get_template_directory_uri() . '/images/header.png',
		'uploads'       => true,
	);
	add_theme_support( 'custom-header', $args );
	
	/**
	 *Required PLugins
	 */
	
	
	