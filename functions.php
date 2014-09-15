<?php
function header_scripts() {
    wp_enqueue_style( 'style-name', get_stylesheet_uri() );
    wp_enqueue_style( 'style-name', get_template_directory_uri() . '/css/reset.css' );
    wp_enqueue_style( 'style-name', get_template_directory_uri() . '/css/text.css');
    wp_enqueue_style( 'style-name', get_template_directory_uri() . '/css/960_24_col.css');
    wp_enqueue_style( 'style-name', get_template_directory_uri() . '/css/sytles.css');
    wp_enqueue_style( 'style-name', get_template_directory_uri() . '/css/colorpicker.css');
    wp_enqueue_style( 'style-name', get_template_directory_uri() . '/css/jquery.lightbox-0.5.css');
    wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/scroll-startstop.events.jquery.js', array('jquery'));

} 
add_action( 'wp_head', 'header_scripts' ); 
 function footer_scripts() {
    wp_enqueue_style( 'style-name', get_stylesheet_uri() );
   	wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/jquery-1.7.1.min.js', array('jquery'));
    wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/jquery.tips.js', array('jquery'));
    wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/jquery.tipTip.js', array('jquery'));
    wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/colorpicker.js', array('jquery')); 
    wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/jquery.lightbox-0.5.js', array('jquery'));

}
add_action( 'wp_footer', 'footer_scripts' );
?>
       