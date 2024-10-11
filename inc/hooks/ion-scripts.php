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
     * Seção de registro de estilos e scripts
     * 
     * @since 1.0.0
     */

    /**
     * Regitro de scripts
     */

    // Registro do script para a barra de navegação superior
    wp_register_script( 'ion-navbar-script', get_template_directory_uri() . '/assets/js/ion-navbar-script.js', array(), '1.0.0', true );

    /**
     * Registro de estilos
     */

    // Registro do estilo de banners
    wp_register_style( 'ion-headers', get_template_directory_uri() . '/assets/css/ion-headers.css', array(), '1.0.0', 'all' );

    // Registro do estilo para contents
    wp_register_style( 'ion-contents', get_template_directory_uri() . '/assets/css/ion-contents.css', array(), '1.0.0', 'all' );

    // Registro do estilo do rodapé
    wp_register_style( 'ion-footers', get_template_directory_uri() . '/assets/css/ion-footers.css', array(), '1.0.0', 'all' );


    /**
     * Request de scripts
     */
 
    wp_enqueue_script( 'ion-navbar-script' );

    /**
     * Request de styles
     */

    // Barra de navegação superior
    wp_enqueue_style( 'ion-headers' );

    // Banner de topo das páginas
    wp_enqueue_style( 'ion-contents' );

    // Rodapé padrão
    wp_enqueue_style( 'ion-footers' );

}

add_action( 'wp_enqueue_scripts', 'ion_styles_and_scripts' );
