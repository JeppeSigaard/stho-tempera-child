<?php 

add_filter( 'rwmb_meta_boxes', 'smamo_add_boxes' );

function smamo_add_boxes(){

    // Your boxes or requires here
    require_once 'meta-box/venteliste.php';
    require_once 'meta-box/erhvervsliste.php';
    
return $mb;

}




?>