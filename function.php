 <?php
        function theme_name_scripts() {
    wp_enqueue_style( 'style-name', get_stylesheet_uri() );
    wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/jquery.lightbox-0.5.js', array('jquery') );
}

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
        ?>
       