<?php 

add_filter('the_title','smamo_labeled_title');
function smamo_labeled_title($title){
   if(is_main_query() && 'sync_post' === get_post_type(get_the_ID())){ 
       $title = '<span class="origin-label">'.esc_attr(get_post_meta(get_the_ID(),'origin',true)).'</span>' . $title; 
   }
    return $title; 
}