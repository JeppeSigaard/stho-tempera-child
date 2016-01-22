<?php 

add_action( 'wp_ajax_submit_form', 'smamo_form_submit' );
add_action( 'wp_ajax_nopriv_submit_form', 'smamo_form_submit' );

function smamo_form_submit(){
    $response = array();
    $post_type;
    $do = $_POST['do'];
    
    if($do === 'add_to_list_erhverv'){$post_type = 'erhvervsliste';}
    elseif($do === 'add_to_list_bolig'){$post_type = 'boligliste';}
    else{
        $response['error'] = 'Please set correct vars for transfer';
        wp_die(json_encode($response));
    }
    
    $vars = array(
        'name'      => (isset($_POST['list_name']) && $_POST['list_name'] !== '' ) ? esc_attr($_POST['list_name']) : 'error',
        'email'     => (isset($_POST['list_email']) && $_POST['list_email'] !== '' ) ? esc_attr($_POST['list_email']) : 'error',
        'phone'     => (isset($_POST['list_phone']) && $_POST['list_phone'] !== '' ) ? esc_attr($_POST['list_phone']) : 'error',
        'address'   => (isset($_POST['list_address']) && $_POST['list_address'] !== '' ) ? esc_attr($_POST['list_address']) : '',
        'post'      => (isset($_POST['list_post']) && $_POST['list_post'] !== '' ) ? esc_attr($_POST['list_post']) : '',
        'city'      => (isset($_POST['list_city']) && $_POST['list_city'] !== '' ) ? esc_attr($_POST['list_city']) : '',
        'cvr'       => (isset($_POST['list_cvr']) && $_POST['list_cvr'] !== '' ) ? esc_attr($_POST['list_cvr']) : 'comperror',
        'company'   => (isset($_POST['list_company']) && $_POST['list_company'] !== '' ) ? esc_attr($_POST['list_company']) : 'comperror',
    );
    
    
    foreach($vars as $var){
        
        if($var === 'error'){
            $response['error'] = 'Udfyld venligst de påkrævede felter';
            wp_die(json_encode($response));
            
        }
        
        elseif($var === 'comperror' && $post_type === 'erhvervsliste'){
            $response['error'] = 'Udfyld venligst de påkrævede felter';
            wp_die(json_encode($response));
        }
    }
    
    
    $new = array(
        'post_title'     => ('boligliste' === $post_type) ? $vars['name'] : $vars['company'],
        'post_status'    => 'publish',
        'post_type'      => $post_type,
    );  
    
    $return = wp_insert_post($new,true);
    if(is_wp_error($return)){
        $response['error'] = $return->get_error_message();
        wp_die(json_encode($response));
    }
    
    update_post_meta($return,'list_name',$vars['name']);
    update_post_meta($return,'list_id', $return);
    update_post_meta($return,'list_email',$vars['email']);
    update_post_meta($return,'list_phone',$vars['phone']);
    update_post_meta($return,'list_address',$vars['address']);
    update_post_meta($return,'list_post',$vars['post']);
    update_post_meta($return,'list_city',$vars['city']);
    
    if('boligliste' === $post_type){
        
        update_post_meta($return,'list_cvr',$vars['cvr']);
        update_post_meta($return,'list_company',$vars['company']);
    }
    
    $response['success'] = '<h3>Tak for din henvendelse</h3><p>Du er nu på ventelisten hos Strømberg Ejendomme.</p>';
    
    wp_die(json_encode($response));
}