<?php 
/**
 * 
 * Barra de navegação de rodapé
 * 
 * @package wp-ion
 * @since 1.0.0
 * 
 */?>
<nav class="row nav-footer" role="complementary">
    <div class="col-md nf-section">
        <?php 
        if( has_nav_menu() ):
            wp_nav_menu(
                array(
                    'theme_location' => 'first'
                )
            );
        endif;
        ?>
    </div>
    <div class="col-md nf-section">
        <?php 
        if( has_nav_menu() ):
            wp_nav_menu(
                array(
                    'theme_location' => 'second'
                )
            );
        endif;
        ?>
    </div>
    <div class="col-md nf-section">
        <?php 
        if( has_nav_menu() ):
            wp_nav_menu(
                array(
                    'theme_location' => 'third'
                )
            );
        endif;
        ?>
    </div>
    <div class="col-md nf-section brand-footer">

    </div>
</nav>
