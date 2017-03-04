<?php
// Register Custom Post Types
function create_post_type() {
	register_post_type( 'events',
		array(
			'labels' 					=> array(
				'name' 					=> __( 'Events', 'mst' ),
		        'singular_name' 		=> __( 'Event', 'mst' ),
		        'menu_name' 			=> __( 'Events', 'mst' ),
		        'all_items' 			=> __( 'All Events', 'mst' ),
		        'view_item' 			=> __( 'View Event', 'mst' ),
		        'add_new_item' 			=> __( 'Add New Event', 'mst' ),
		        'add_new' 				=> __( 'Add New', 'mst' ),
		        'edit_item' 			=> __( 'Edit Event', 'mst' ),
		        'update_item' 			=> __( 'Update Event', 'mst' ),
		        'search_items' 			=> __( 'Search Event', 'mst' ),
		        'not_found' 			=> __( 'Sorry, we couldn\'t find the event you are looking for.', 'mst' ),
		        'not_found_in_trash'  	=> __( 'Event Not found in Trash', 'mst' ),
			),
		'menu_icon' 					=> 'dashicons-grid-view',
		'hierarchical'          		=> false,
		'public'                		=> true,
		'show_ui'               		=> true,
		'show_in_menu'          		=> true,
		'menu_position'         		=> 14,
		'show_in_admin_bar'     		=> true,
		'show_in_nav_menus'     		=> true,
		'can_export'            		=> true,
		'has_archive'           		=> true,		
		'exclude_from_search'   		=> false,
		'publicly_queryable'    		=> true,
		'capability_type'       		=> 'page',
		'rewrite' 						=> array( 
			'slug' 						=> 'events' 
		),
		'supports' 						=> array( 'title' )
		)
	);
}
add_action( 'init', 'create_post_type' );


// Register Custom Taxonomy stores
function stores_taxonomy_register() {

	$labels = array(
		'name'                       	=> _x( 'Stores', 'Taxonomy General Name', 'mst' ),
		'singular_name'              	=> _x( 'Store', 'Taxonomy Singular Name', 'mst' ),
		'menu_name'                  	=> __( 'Stores', 'mst' ),
		'all_items'                  	=> __( 'Stores', 'mst' ),
		'parent_item'                	=> __( 'Store Parent', 'mst' ),
		'parent_item_colon'          	=> __( 'Store Parent:', 'mst' ),
		'new_item_name'              	=> __( 'New Store Name', 'mst' ),
		'add_new_item'               	=> __( 'Add New Store', 'mst' ),
		'edit_item'                  	=> __( 'Edit Store', 'mst' ),
		'update_item'                	=> __( 'Update Store', 'mst' ),
		'view_item'                  	=> __( 'View Store', 'mst' ),
		'separate_items_with_commas' 	=> __( 'Separate Stores with commas', 'mst' ),
		'add_or_remove_items'        	=> __( 'Add or remove stores', 'mst' ),
		'choose_from_most_used'      	=> __( 'Choose from the most used stores', 'mst' ),
		'popular_items'              	=> __( 'Popular stores', 'mst' ),
		'search_items'               	=> __( 'Search stores', 'mst' ),
		'not_found'                  	=> __( 'Stores Not Found', 'mst' ),
		'no_terms'                   	=> __( 'No stores', 'mst' ),
		'items_list'                 	=> __( 'Stores list', 'mst' ),
		'items_list_navigation'      	=> __( 'Stores list navigation', 'mst' ),
	);
	$args = array(
		'labels'                     	=> $labels,
		'hierarchical'               	=> true,
		'public'                     	=> true,
		'show_ui'                    	=> true,
		'show_admin_column'          	=> true,
		'show_in_nav_menus'          	=> true,
		'show_tagcloud'              	=> true,
	);
	register_taxonomy( 'stores', array( 'events' ), $args );

}
add_action( 'init', 'stores_taxonomy_register', 0 );