<?php 
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style/main.css' );
    
    global $post;
    
    if(has_shortcode( $post->post_content, 'list_form') || has_shortcode( $post->post_content, 'list_form_erhverv')){ 
        wp_enqueue_script( 'form_shortcode', get_stylesheet_directory_uri() . '/scripts/form_shortcode.min.js', array('jquery'), '1.0.0', true );
    }
}