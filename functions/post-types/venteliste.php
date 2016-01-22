<?php 

add_action( 'init', 'smamo_add_venteliste' );

function smamo_add_venteliste() {
	register_post_type( 'boligliste', array(
		
        'menu_icon' 		 => 'dashicons-editor-ol',
		'public'             => false,
		'publicly_queryable' => false,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'boligliste' ),
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => 999,
		'supports'           => array( 'title'),
        'labels'             => array(
            
            'name'               => _x( 'Venteliste', 'post type general name', 'smamo' ),
            'singular_name'      => _x( 'Venteliste', 'post type singular name', 'smamo' ),
            'menu_name'          => _x( 'Venteliste', 'admin menu', 'smamo' ),
            'name_admin_bar'     => _x( 'Venteliste', 'add new on admin bar', 'smamo' ),
            'add_new'            => _x( 'Tilføj ny ', 'til listen', 'smamo' ),
            'add_new_item'       => __( 'Tilføj ny', 'smamo' ),
            'new_item'           => __( 'Ny til listen', 'smamo' ),
            'edit_item'          => __( 'Rediger', 'smamo' ),
            'view_item'          => __( 'Se til listen', 'smamo' ),
            'all_items'          => __( 'Se alle', 'smamo' ),
            'search_items'       => __( 'Find til listen', 'smamo' ),
            'parent_item_colon'  => __( 'Forældre:', 'smamo' ),
            'not_found'          => __( 'Start med at oprette et nyt emne.', 'smamo' ),
            'not_found_in_trash' => __( 'Papirkurven er tom.', 'smamo' ),
            ),
	   )
    );
}