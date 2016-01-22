<?php 

remove_action('cryout_footer_hook','tempera_site_info',99);
add_action('cryout_footer_hook','tempera_child_site_info',99);
function tempera_child_site_info(){
    ob_start(); ?>
    
    
    <?php  return ob_get_clean();
}