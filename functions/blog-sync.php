<?php 


add_action( 'wp', 'smamo_activate_blogsync' );
add_action( 'smamo_blogsync_event', 'smamo_do_blogsyc' );

function smamo_activate_blogsync() {
    if ( !wp_next_scheduled( 'smamo_blogsync_event' ) ) {
        wp_schedule_event( time(), 'hourly', 'smamo_blogsync_event' );
    }
}
function smamo_do_blogsyc() { 
  

    $urls = get_theme_mod('feed_urls');

    foreach($urls as $link){
        $request = wp_remote_get($link['url'] .'/wp-admin/admin-ajax.php?action=get_feed');
        if (!is_wp_error($request) && isset($request['response']) && $request['response']['code'] === 200){

            if (isset($request['body'])){

                $post_array = json_decode($request['body'], true);

                foreach($post_array as $feed){

                    $post_array = array(
                        'post_content'   => $feed['post_content'],
                        'post_title'     => $feed['post_title'],
                        'post_status'    => 'publish',
                        'post_date'      => $feed['post_date'],
                        'post_date_gmt'  => $feed['post_date_gmt'],
                        'post_type'      => 'sync_post',
                    );

                    $post_check = get_posts(array(
                        'post_type'     => 'sync_post',
                        'meta_key'      => 'origin_id',
                        'meta_value'    => $feed['ID'],
                    ));

                    if(isset($post_check[0]->ID)){$post_array['ID'] = $post_check[0]->ID;}

                    $update = wp_insert_post($post_array,true);
                    if(!is_wp_error($update)){

                        update_post_meta($update,'origin_id',$feed['ID']);
                        update_post_meta($update,'origin',$link['name']);
                    }
                }
            }
        }
    }    
}