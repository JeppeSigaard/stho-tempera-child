<?php 
if(class_exists( 'WACC' ) ){
    add_action('admin_init','add_columns');
    function add_columns(){
    
        $liste_arr = array(
            'defaults' => array(
                'title' => true,
                'author' => false,
                'date' => false,
                'comments' => false,
            ),
            
            'columns' => array(
                
                'list_id' => array(
                    'slug' => 'list_id',
                    'output' => 'ID',
                    'data_type' => 'post_meta',
                    'meta_key' => 'list_id',
                ),

                'list_name' => array(
                    'slug' => 'list_name',
                    'output' => 'Navn',
                    'data_type' => 'post_meta',
                    'meta_key' => 'list_name',
                    'link' => 'post',
                ),

                'list_email' => array(
                    'slug' => 'list_email',
                    'output' => 'Email',
                    'data_type' => 'post_meta',
                    'meta_key' => 'list_email',
                ),
                
                'list_phone' => array(
                    'slug' => 'list_phone',
                    'output' => 'Telefon',
                    'data_type' => 'post_meta',
                    'meta_key' => 'list_phone',
                ),
                
                'list_address' => array(
                    'slug' => 'list_address',
                    'output' => 'Adresse',
                    'data_type' => 'post_meta',
                    'meta_key' => 'list_address',
                ),
                
                'list_post' => array(
                    'slug' => 'list_post',
                    'output' => 'Postnummer',
                    'data_type' => 'post_meta',
                    'meta_key' => 'list_post',
                ),
                
                'list_city' => array(
                    'slug' => 'list_city',
                    'output' => 'By',
                    'data_type' => 'post_meta',
                    'meta_key' => 'list_city',
                ),
                
            ),
        );
        
        $liste_arr['post_type'] = 'boligliste';
        $liste = new WACC($liste_arr);
        
        
        // Registrer erhverv
        $liste_arr['post_type'] = 'erhvervsliste';
        $liste_arr['columns']['list_name']['output'] = 'Kontaktperson';
        
        $liste_arr['columns']['list_company'] = array(
            'slug' => 'list_company',
            'output' => 'Firma',
            'data_type' => 'post_meta',
            'meta_key' => 'list_company',
        );
        
        $liste_arr['columns']['list_cvr'] = array(
            'slug' => 'list_cvr',
            'output' => 'CVR - nummer',
            'data_type' => 'post_meta',
            'meta_key' => 'list_cvr',
        );
        
        $ervhvervsliste = new WACC($liste_arr);
        
        $sync_post_columns = new WACC(array(
            
            'post_type' => 'sync_post',
            'columns' => array(
                
                'origin' => array(
                    'slug' => 'origin',
                    'output' => 'Kilde',
                    'data_type' => 'post_meta',
                    'meta_key' => 'origin',
                ),
                
                'origin_id' => array(
                    'slug' => 'origin_id',
                    'output' => 'Kilde ID',
                    'data_type' => 'post_meta',
                    'meta_key' => 'origin_id',
                ),
            )
        ));
    }
}