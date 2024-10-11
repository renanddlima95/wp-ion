<?php 
/**
 * 
 * Arquivo de registro de menus de navegação
 * 
 * @package wp-ion
 * @since 1.0.0
 * 
 */

function wp_ion_register_menus(){

    register_nav_menus(
        array(
            'top'    => 'Menu Principal',
            'side'   => 'Menu Lateral',
            'first'  => 'Primeira Parte do Rodapé',
            'second' => 'Segunda Parte de Rodapé'
        )
    );

}

add_action( 'after_setup_theme', 'wp_ion_register_menus', 0 );
