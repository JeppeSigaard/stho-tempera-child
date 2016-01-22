<?php 
$mb[] = array(
    'id' => 'info',
    'title' => __( 'Kontaktinfo', 'rwmb' ),
    'post_types' => array('erhvervsliste'),
    'context' => 'normal',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(
        
        array(
            'name'  => __( 'Firma / Organisation', 'rwmb' ),
            'id'    => "list_company",
            'type' => 'text',
        ),
        
        array(
            'name'  => __( 'CVR', 'rwmb' ),
            'id'    => "list_cvr",
            'type' => 'text',
        ),
        
        array(
            'name'  => __( 'Kontaktperson', 'rwmb' ),
            'id'    => "list_name",
            'type' => 'text',
        ),
        
        array(
            'name'  => __( 'Email', 'rwmb' ),
            'id'    => "list_email",
            'type' => 'text',
        ),
        
        array(
            'name'  => __( 'Telefonnummer', 'rwmb' ),
            'id'    => "list_phone",
            'type' => 'text',
        ),
        
        array(
            'name'  => __( 'Adresse', 'rwmb' ),
            'id'    => "list_address",
            'type' => 'text',
        ),
        
        array(
            'name'  => __( 'Postnummer', 'rwmb' ),
            'id'    => "list_post",
            'type' => 'text',
        ),
        
        array(
            'name'  => __( 'by', 'rwmb' ),
            'id'    => "list_city",
            'type' => 'text',
        ),
    ),
);