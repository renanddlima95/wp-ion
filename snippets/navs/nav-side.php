<?php 
/**
 * 
 * Barra de navegação Lateral
 * 
 * @package wp-ion
 * @since 1.0.0
 * 
 */?>
<aside class="col-md-4">
    <?php wp_ion_request_snippet( 'form', 'search' );?>
    <div class="py-5 px-2">
        <h3 class="side-title">
            Assuntos Relevantes
        </h3>
        <?php 
        if( has_nav_menu( 'side' ) ):
            wp_nav_menu(
                array(
                    'theme_location' => 'side',
                    'menu_class'     => 'nav flex-column ion-nav-side',
                    'container'      => false
                )
            );
        endif;
        ?>
    </div>
</aside>
