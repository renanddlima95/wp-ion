<?php 
/**
 * 
 * Barra de navegação superior
 * 
 * @package wp-ion
 * @since 1.0.0
 * 
 */?>
<nav class="navbar navbar-expand-md bg-nav-ion">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a href="navbar-brand">
            <img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/logos/em-breve.png" alt="">
        </a>
        <?php 
        if( has_nav_menu( 'top' ) ):
            wp_nav_menu(
                array(
                    'theme_location'       => 'top',
                    'menu_class'           => 'navbar-nav',
                    'container_class'      => 'collapse navbar-collapse',
                    'container_aria_label' => 'navbarSupportedContent'
                )
            );
        endif;

        wp_ion_request_snippet( 'form', 'search' );
        ?>

    </div>
</nav>
