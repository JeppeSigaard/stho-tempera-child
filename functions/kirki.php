<?php 

Kirki::add_config( 'smamo_feed_get', array(
        'capability'    => 'edit_theme_options',
        'option_type'   => 'theme_mod',
    ) );

Kirki::add_section( 'feed_get', array(
    'title'          => __( 'Hent blogs fra andre sider' ),
    'description'    => __( 'Hent nye indlæg til denne hjemmeside. kræver plugin installeret på afsendersiden' ),
    'panel'          => '', // Not typically needed.
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Kirki::add_field( 'smamo_feed_get', array(
    'settings' => 'feed_urls',
    'label'    => __( 'Sider', 'smamo' ),
    'type'          => 'repeater',
    'section'       => 'feed_get',
    'priority'      => 10,
    'default'       => null,
    'fields'   => array(
        
        'name' => array(
            'type'        => 'text',
            'label'       => 'Navn',
            'description' => '',
            'default'     => ''
        ),
        
        'url' => array(
            'type'        => 'text',
            'label'       => 'URL',
            'description' => '',
            'default'     => ''
        ),
    )
) );


Kirki::add_config( 'smamo_front_boxes', array(
        'capability'    => 'edit_theme_options',
        'option_type'   => 'theme_mod',
    ) );

Kirki::add_section( 'front_boxes', array(
    'title'          => __( 'Kasser på forsiden' ),
    'description'    => __( 'OPret forsidekasser' ),
    'panel'          => '', // Not typically needed.
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Kirki::add_field( 'smamo_front_boxes', array(
    'settings' => 'front_boxes',
    'label'    => __( 'Kasser', 'smamo' ),
    'type'          => 'repeater',
    'section'       => 'front_boxes',
    'priority'      => 11,
    'default'       => null,
    'fields'   => array(
        
        'title' => array(
            'type'        => 'text',
            'label'       => 'Titel',
            'description' => '',
            'default'     => ''
        ),
        
        'url' => array(
            'type'        => 'text',
            'label'       => 'Link',
            'description' => '',
            'default'     => ''
        ),
        
        'description' => array(
            'type'        => 'textarea',
            'label'       => 'tekst',
            'description' => '',
            'default'     => ''
        ),
        
        'image' => array(
            'type'        => 'image',
            'label'       => 'Billede',
            'description' => '',
            'default'     => ''
        ),
        
        
    )
) );

