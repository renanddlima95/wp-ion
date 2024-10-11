<?php 
/**
 * 
 * Barra de navegação superior
 * 
 * @package wp-ion
 * @since 1.0.0
 * 
 */?>
<nav class="navbar navbar-expand-md fixed-top" id="navbarTop">
    <div class="container">
        <a href="<?php echo esc_url( home_url( '/' ) );?>" class="top-logo font-brand">
            <i class="bi bi-r-square" id="topLogoIcon"></i>
            <span class="the-logo"><?php echo esc_html( get_bloginfo( 'name' ) );?></span>
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-three-dots-vertical"></i>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <?php 
            if( has_nav_menu( 'top' ) ):
                wp_nav_menu(
                    array(
                        'theme_location' => 'top',
                        'menu_class'     => 'navbar-nav text-center menu-top',
                        'menu_id'        => 'menuTop',
                        'container'      => false
                    )
                );
            endif;
            ?>
        </div>
    </div>
</nav>
