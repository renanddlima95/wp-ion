<?php 
/**
 * 
 * Barra de navegação superior
 * 
 * @package wp-ion
 * @since 1.0.0
 * 
 */?>
<nav class="navbar navbar-expand-md">
    <?php 
    if( has_nav_menu( 'top' ) ):
        wp_nav_menu(
            array(
                'theme_location' => 'top'
            )
        );
    endif;
    ?>
</nav>
