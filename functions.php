<?php
/**
 * Theme functions.
 * @package ultimatetravel
 * 
 */

 function ultimatetravel_enqueue_scripts() { 
     //Register styles
    wp_register_style( 'style-css' , get_stylesheet_uri(), [], filemtime( get_template_directory() . '/style.css'), 'all');
    wp_register_style( 'bootstrap-css' , get_template_directory_uri() .  '/assets/src/library/css/bootstrap.min.css' , [], false , 'all');

    //Register scripts
    wp_register_script( 'main-js' , get_template_directory_uri() . '/assets/main.js' , [] ,filemtime( get_template_directory() . '/assets/main.js'), true );
    wp_register_script( 'bootstrap-js' , get_template_directory_uri() . '/assets/src/library/js/bootstrap.min.js' , [ 'jquery' ] ,false , true );

    //function name (wp_eqnueue__script)
    //Enqueue styles
    wp_enqueue_style ('style-css' );
    wp_enqueue_style ('bootstrap-css' );

    // Enqueue scripts
    wp_enqueue_script( 'main-js' );
    wp_enqueue_script( 'bootstrap-js' );

}
 //hook name (wp_eqnueue__scripts)
 add_action( 'wp_eqnueue_scripts', 'ultimatetravel_enqueue_scripts' );

 ?>