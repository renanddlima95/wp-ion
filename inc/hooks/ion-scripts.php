<?php 
/**
 * 
 * Arquivo responsável pelas requests de aruivos de estilos css e scripts js
 * 
 * @package wp-ion
 * @since 1.0.0
 * 
 */

function ion_styles_and_scripts(){

    /**
     * Registro de estilos e scripts
     */
    wp_register_script( 'ionJs', get_template_directory_uri() . '/assets/js/wp-ion.js', array(), '1.0.0', true );
    wp_register_style( 'IonCss', get_template_directory_uri() . '/assets/css/wp-ion.css', array(), '1.0.0', 'all' );

    /**
     * Request dos estilos e sripts
     */
    wp_enqueue_script( 'IonJs' );
    wp_enqueue_style( 'IonCss' );

}

add_action( 'wp_enqueue_scripts', 'ion_styles_and_scripts' );
