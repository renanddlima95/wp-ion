<?php 
/**
 * 
 * Barra de navegação Lateral
 * 
 * @package wp-ion
 * @since 1.0.0
 * 
 */?>
<aside class="col-md-2">
    <?php 
    if( has_nav_menu( 'side' ) ):
        wp_nav_menu(
            array(
                'theme_location' => 'side'
            )
        );
    endif;
    ?>
</aside>
