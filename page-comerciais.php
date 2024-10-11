<?php 
/**
 * 
 * Template Name: Página de Sites Comerciais
 * Template Post Type: page
 * 
 * Modelo de página de serviços
 * 
 * @package wp-ion
 * @since 1.0.0
 * 
 */?>
<?php wp_ion_request_part( 'header', 'default' );?>
<header class="container-fluid ion-bg-gradient py-5" role="banner">
    <div class="container text-center text-white my-5">
        <h1 class="header-title">
            Sites Comerciais de Alta Conversão
        </h1>
        <p class="header-text">
            Sites para empresas prestadoras de serviços que buscam alavancar a sua presença online 
        </p>
    </div>
</header>
<main class="comercial-container py-5">
    <div class="container">
        <h2 class="contact-title pb-2">
            Tudo o que a sua empresa precisa em um site comercial
        </h2>
        <p class="info-text">
            
        </p>
    </div>
    <div class="ion-bg-gradient py-5">
        <div class="container">
            <div class="card border-0 rounded-0 bg-transparent text-white text-center card-cta">
                <div class="card-body">
                    <h2 class="card-title pb-1">
                        Quer receber um orçamento sem compromisso?
                    </h2>
                    <p class="card-text pb-2">
                        Solicite um contato hoje mesmo, ficaremos felizes em coversar com você
                    </p>
                    <a class="btn ion-btn-cta" href="<?php echo esc_url( home_url( '/contato' ) );?>">Entre em contato</a>
                </div>
            </div>
        </div>
    </div>
</main>
<?php wp_ion_request_part( 'footer', 'default' );
