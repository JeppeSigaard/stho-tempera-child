<?php 

add_action( 'init', 'smamo_add_erhvervsliste' );

function smamo_add_erhvervsliste() {
	register_post_type( 'erhvervsliste', array(
		
        'menu_icon' 		 => 'dashicons-editor-ol',
		'public'             => false,
		'publicly_queryable' => false,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'erhvervsliste' ),
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => 1000,
		'supports'           => array( 'title'),
        'labels'             => array(
            
            'name'               => _x( 'Erhvervsliste', 'post type general name', 'smamo' ),
            'singular_name'      => _x( 'Erhvervsliste', 'post type singular name', 'smamo' ),
            'menu_name'          => _x( 'Erhvervsliste', 'admin menu', 'smamo' ),
            'name_admin_bar'     => _x( 'Erhvervsliste', 'add new on admin bar', 'smamo' ),
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