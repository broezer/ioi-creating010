<?php
//-----------------------------------//
// Create Custom Post Type 'Nieuws'//
//---------------------------------//
add_action('init', 'nieuws_register');

function nieuws_register() {

	$labels = array(
		'name' => _x('Nieuws', 'post type general name'),
		'singular_name' => _x('Nieuws', 'post type singular name'),
		'add_new' => _x('Add New', 'nieuws'),
		'add_new_item' => __('Add New Nieuws'),
		'edit_item' => __('Edit Nieuws'),
		'new_item' => __('New Nieuws'),
		'view_item' => __('View Nieuws'),
		'search_items' => __('Search Nieuws'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => null,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor','thumbnail'),
		'has_archive' => true,
	  ); 

	register_post_type( 'nieuws' , $args );
}

//-----------------------------------//
// Create Custom Post Type 'Agenda'//
//---------------------------------//
//add_action('init', 'agenda_register');

//function agenda_register() {

//	$labels = array(
//		'name' => _x('Agenda', 'post type general name'),
//		'singular_name' => _x('Agenda', 'post type singular name'),
//		'add_new' => _x('Add New', 'event'),
//		'add_new_item' => __('Add New Event'),
//		'edit_item' => __('Edit Event'),
//		'new_item' => __('New Event'),
//		'view_item' => __('View Event'),
//		'search_items' => __('Search Agenda'),
//		'not_found' =>  __('Nothing found'),
//		'not_found_in_trash' => __('Nothing found in Trash'),
//		'parent_item_colon' => ''
//	);
//
//	$args = array(
//		'labels' => $labels,
//		'public' => true,
//		'publicly_queryable' => true,
//		'show_ui' => true,
//		'query_var' => true,
//		'menu_icon' => null,
//		'rewrite' => true,
//		'capability_type' => 'post',
//		'hierarchical' => false,
//		'menu_position' => null,
//		'supports' => array('title','editor','thumbnail')
//	  ); 
//
//	register_post_type( 'agenda' , $args );
//}

//------------------------------------//
// Create Custom Post Type 'Onderzoekslijnen'//
//-----------------------------------//
	
add_action('init', 'onderzoek_register');

function onderzoek_register() {

	$labels = array(
		'name' => _x('Onderzoekslijnen', 'post type general name'),
		'singular_name' => _x('Onderzoekslijn', 'post type singular name'),
		'add_new' => _x('Add New', 'onderzoeklijn'),
		'add_new_item' => __('Add New Onderzoeklijn'),
		'edit_item' => __('Edit Onderzoeklijn'),
		'new_item' => __('New Onderzoeklijn'),
		'view_item' => __('View Onderzoeklijn'),
		'search_items' => __('Search Onderzoeklijnen'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => null,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor','thumbnail'),
		'has_archive' => true,
	  ); 

	register_post_type( 'onderzoek' , $args );
}


//------------------------------------//
// Create Custom Post Type 'Projecten'//
//-----------------------------------//
	
add_action('init', 'projecten_register');

function projecten_register() {

	$labels = array(
		'name' => _x('Projecten', 'post type general name'),
		'singular_name' => _x('Project', 'post type singular name'),
		'add_new' => _x('Add New', 'project'),
		'add_new_item' => __('Add New Project'),
		'edit_item' => __('Edit Project'),
		'new_item' => __('New Project'),
		'view_item' => __('View Project'),
		'search_items' => __('Search Project'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => null,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor','thumbnail'),
		'has_archive' => true,
		
		
	  ); 

	register_post_type( 'projecten' , $args );
}

//--------------------------------------//
// Create Custom Post Type 'Publicaties'//
//-------------------------------------//
add_action('init', 'publicaties_register');

function publicaties_register() {

	$labels = array(
		'name' => _x('Publicaties', 'post type general name'),
		'singular_name' => _x('Publicatie', 'post type singular name'),
		'add_new' => _x('Add New', 'publicaties'),
		'add_new_item' => __('Add New Publicaties'),
		'edit_item' => __('Edit Publicaties'),
		'new_item' => __('New Publicaties'),
		'view_item' => __('View Publicaties'),
		'search_items' => __('Search Publicaties'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => null,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor','thumbnail'),
		'has_archive' => true,
	  ); 

	register_post_type( 'publicaties' , $args );
}

//--------------------------------------//
// Create Custom Post Type 'Presentaties'//
//-------------------------------------//
add_action('init', 'presentaties_register');

function presentaties_register() {

	$labels = array(
		'name' => _x('Presentaties', 'post type general name'),
		'singular_name' => _x('Presentaties', 'post type singular name'),
		'add_new' => _x('Add New', 'presentaties'),
		'add_new_item' => __('Add New Presentaties'),
		'edit_item' => __('Edit Presentaties'),
		'new_item' => __('New Presentaties'),
		'view_item' => __('View Presentaties'),
		'search_items' => __('Search Presentaties'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => null,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor','thumbnail')
	  ); 

	register_post_type( 'presentaties' , $args );
}		

//--------------------------------------//
// Create Custom Post Type 'Medewerkers'//
//-------------------------------------//
add_action('init', 'medewerkers_register');

function medewerkers_register() {

	$labels = array(
		'name' => _x('Medewerkers', 'post type general name'),
		'singular_name' => _x('Medewerker', 'post type singular name'),
		'add_new' => _x('Add New', 'medewerker'),
		'add_new_item' => __('Add New Medewerker'),
		'edit_item' => __('Edit Medewerker'),
		'new_item' => __('New Medewerker'),
		'view_item' => __('View Medewerker'),
		'search_items' => __('Search Medewerker'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => null,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor','thumbnail')
	  ); 

	register_post_type( 'medewerkers' , $args );
}


	function add_functie_taxonomies() {

		register_taxonomy('functies', 'medewerkers', array(
			// Hierarchical taxonomy (like categories)
			'hierarchical' => true,
			// This array of options controls the labels displayed in the WordPress Admin UI
			'labels' => array(
				'name' => _x( 'Functies', 'taxonomy general name' ),
				'singular_name' => _x( 'Functie', 'taxonomy singular name' ),
				'search_items' =>  __( 'Search Functies' ),
				'all_items' => __( 'All Functies' ),
				'parent_item' => __( 'Parent Functies' ),
				'parent_item_colon' => __( 'Parent Functie:' ),
				'edit_item' => __( 'Edit Functie' ),
				'update_item' => __( 'Update Functie' ),
				'add_new_item' => __( 'Add New Functie' ),
				'new_item_name' => __( 'New Functie Name' ),
				'menu_name' => __( 'Functies' ),
			),
			// Control the slugs used for this taxonomy
			'rewrite' => array(
				'slug' => 'filter', // This controls the base slug that will display before each term
				'with_front' => false, // Don't display the category base before "/locations/"
				'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
			),
		));
	}
	add_action( 'init', 'add_functie_taxonomies', 0 );
	
	
	// Create Custom Admin Column
	add_filter( 'manage_edit-medewerkers_columns', 'my_edit_medewerkers_columns' ) ;

	function my_edit_medewerkers_columns( $columns ) {

		$columns = array(
			'cb' => '<input type="checkbox" />',
			'title' => __( 'Medewerker' ),
			'functies' => __( 'Functie' ),
			'date' => __( 'Date' )
		);

		return $columns;
	}
	
	add_action( 'manage_medewerkers_posts_custom_column', 'my_manage_medewerkers_columns', 10, 2 );

	function my_manage_medewerkers_columns( $column, $post_id ) {
		global $post;

		switch( $column ) {

			

			/* If displaying the 'functies' column. */
			case 'functies' :

				/* Get the genres for the post. */
				$terms = get_the_terms( $post_id, 'functies' );

				/* If terms were found. */
				if ( !empty( $terms ) ) {

					$out = array();

					/* Loop through each term, linking to the 'edit posts' page for the specific term. */
					foreach ( $terms as $term ) {
						$out[] = sprintf( '<a href="%s">%s</a>',
							esc_url( add_query_arg( array( 'post_type' => $post->post_type, 'functies' => $term->slug ), 'edit.php' ) ),
							esc_html( sanitize_term_field( 'name', $term->name, $term->term_id, 'functies', 'display' ) )
						);
					}

					/* Join the terms, separating them with a comma. */
					echo join( ', ', $out );
				}

				/* If no terms were found, output a default message. */
				else {
					_e( 'Geen Functie' );
				}

				break;

			/* Just break out of the switch statement for everything else. */
			default :
				break;
		}
	}




?>