<?php

add_action( 'init', 'smamo_add_sync_post' );

function smamo_add_sync_post() {
	register_post_type( 'sync_post', array(
		
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'artikler' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 22,
		'supports'           => array( 'title', 'thumbnail','editor'),
        'labels'             => array(
            
            'name'               => _x( 'Synk. indlæg', 'post type general name', 'smamo' ),
            'singular_name'      => _x( 'Synkroniseret indlæg', 'post type singular name', 'smamo' ),
            'menu_name'          => _x( 'Synk. indlæg', 'admin menu', 'smamo' ),
            'name_admin_bar'     => _x( 'Synk. indlæg', 'add new on admin bar', 'smamo' ),
            'add_new'            => _x( 'Tilføj ny ', 'indlæg', 'smamo' ),
            'add_new_item'       => __( 'Tilføj ny', 'smamo' ),
            'new_item'           => __( 'Ny indlæg', 'smamo' ),
            'edit_item'          => __( 'Rediger', 'smamo' ),
            'view_item'          => __( 'Se indlæg', 'smamo' ),
            'all_items'          => __( 'Se alle', 'smamo' ),
            'search_items'       => __( 'Find indlæg', 'smamo' ),
            'parent_item_colon'  => __( 'Forældre:', 'smamo' ),
            'not_found'          => __( 'Start med at oprette et nyt indlæg.', 'smamo' ),
            'not_found_in_trash' => __( 'Papirkurven er tom.', 'smamo' ),
            ),
	   )
    );
}