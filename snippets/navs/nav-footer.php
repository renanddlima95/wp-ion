<?php 
/**
 * 
 * Barra de navegação de rodapé
 * 
 * @package wp-ion
 * @since 1.0.0
 * 
 */?>
<nav class="row nav-footer py-5" role="complementary">
    <div class="col-md nf-section text-center text-md-start py-3">
        <h4 class="nf-title">Relacionados</h4>
        <?php 
        if( has_nav_menu( 'first' ) ):
            wp_nav_menu(
                array(
                    'theme_location' => 'first',
                    'menu_class'     => 'nav flex-column nav-footer',
                    'container'      => false
                )
            );
        endif;
        ?>
    </div>
    <div class="col-md nf-section text-center text-md-start py-3">
        <h4 class="nf-title">Conteúdos Ricos</h4>
        <?php 
        if( has_nav_menu( 'second' ) ):
            wp_nav_menu(
                array(
                    'theme_location' => 'second',
                    'menu_class'     => 'nav flex-column  nav-footer',
                    'container'      => false
                )
            );
        endif;
        ?>
    </div>
    <div class="col-md nf-section brand-footer text-center my-auto py-3">
        <span class="font-brand footer-brand nf-title">
            <?php echo esc_html( get_bloginfo( 'name' ) );?>
        </span>
        <p class="footer-text">
            <i class="bi bi-geo-alt-fill"></i> Rua João Simbalista, 11 - Jardim Primavera, Piraqura/PR</br>
            <i class="bi bi-envelope-fill"></i> contato@renandev.com.br</br>
            <i class="bi bi-telephone-fill"></i> (41) 99621-0587
        </p>
        <ul class="nav menu-social justify-content-center">
            <li class="nav-item">
                <a href="https://www.instagram.com/renan_soudev" target="_blank" rel="noopener noreferrer" class="nav-link">
                    <i class="bi bi-instagram"></i>
                </a>
            </li>
            <li class="nav-item">
                <a href="https://www.facebook.com/renan.soudev/" target="_blank" rel="noopener noreferrer" class="nav-link">
                    <i class="bi bi-facebook"></i>
                </a>
            </li>
            <li class="nav-item">
                <a href="https://www.linkedin.com/in/renanddlima95" target="_blank" rel="noopener noreferrer" class="nav-link">
                    <i class="bi bi-linkedin"></i>
                </a>
            </li>
            <li class="nav-item">
                <a href="https://github.com/renanddlima95" target="_blank" rel="noopener noreferrer" class="nav-link">
                    <i class="bi bi-github"></i>
                </a>
            </li>
            <li class="nav-item">
                <a href="https://stackoverflow.com/users/27736978/renandev" target="_blank" rel="noopener noreferrer" class="nav-link">
                    <i class="bi bi-stack-overflow"></i>
                </a>
            </li>
            <li class="nav-item">
                <a href="https://wa.me/+5541996210587" target="_blank" rel="noopener noreferrer" class="nav-link">
                    <i class="bi bi-whatsapp"></i>
                </a>
            </li>
        </ul>
    </div>
</nav>
