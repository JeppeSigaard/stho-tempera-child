<?php 

add_action( 'pre_get_posts', 'smamo_pre_get_posts' );
function smamo_pre_get_posts($query){
    
    if ( $query->is_home() && $query->is_main_query() ) {
        $query->set( 'post_type', array('post','sync_post') );
    }
}