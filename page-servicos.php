<?php 
/**
 * 
 * Template Name: Página de Serviços
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
           Serviços RenanDev
        </h1>
        <p class="header-text">
            Nossos sistemas são focados em funcionalidades e a experiência do usuário
        </p>
    </div>
</header>
<main class="mobile-container py-5">
    <div class="container my-5">
        <div class="row pb-5 text-center">
            <h2 class="contact-title">
                Não são somentes serviços, mais soluções!
            </h2>
            <p class="sub-text">
                Veja o que cada serviço tem a oferecer para a sua empresa
            </p>
        </div>
        <div class="row w-100">
            <a href="<?php echo esc_url( home_url( '/servicos/sites-comerciais' ) );?>" target="_blank" rel="noopener noreferrer" class="card col-md my-2 px-md-4 py-3 mx-2 text-center border-0 rounded-0 pop-services">
                <div class="card-body">
                    <i class="bi bi-window-stack services-ion-icon mb-2"></i>
                    <h2 class="card-title py-2">
                        Sites Comerciais para Empresas Prestadoras de Serviços
                    </h2>
                    <p class="card-text">
                        Sites focados em otimização de SEO, funcionalidades e atratividade para o seu usuário. Com uma boa semântica e estrutura da informação, o seu novo site comercial te ajuda a ultrapassar a concorrência
                    </p>
                </div>
            </a>
            <a href="<?php echo esc_url( home_url( '/servicos/lojas-virtuais' ) );?>" target="_blank" rel="noopener noreferrer" class="card col-md my-2 px-md-4 py-3 mx-2 text-center border-0 rounded-0 pop-services">
                <div class="card-body">
                    <i class="bi bi-cart4 services-ion-icon mb-2"></i>
                    <h2 class="card-title py-2">
                        Lojas Virtuais Criadas com Foco em Experiência do Usuário
                    </h2>
                    <p class="card-text">
                        Lojas projetadas de acordo com a necessidade e o tamanho da sua empresa, entregando segurança e fluidez para o seu cliente comprar cada vez mais produtos da sua marca
                    </p>
                </div>
            </a>
        </div>
        <div class="row w-100">
            <a href="<?php echo esc_url( home_url( '/servicos/apps-mobile' ) );?>" target="_blank" rel="noopener noreferrer" class="card col-md my-2 px-md-4 py-3 mx-2 text-center border-0 rounded-0 pop-services">
                <div class="card-body">
                    <i class="bi bi-phone services-ion-icon mb-2"></i>
                    <h2 class="card-title py-2">
                        Aplicativos Mobile Desenvolvidos para Android e IOS
                    </h2>
                    <p class="card-text">
                        Aplicativos projetados para suprir a demanda da sua empresa, com banco de dados próprio ou compartilhado com seu site ou loja virtual, comunicando assim, as duas ferramentas.
                    </p>
                </div>
            </a>
            <a href="<?php echo esc_url( home_url( '/servicos/integracoes' ) );?>" target="_blank" rel="noopener noreferrer" class="card col-md my-2 px-md-4 py-3 mx-2 text-center border-0 rounded-0 pop-services">
                <div class="card-body">
                    <i class="bi bi-diagram-3 services-ion-icon mb-2"></i>
                    <h2 class="card-title py-2">
                        Integrações de Sistemas via API's
                    </h2>
                    <p class="card-text">
                        São integrações desenvolvidas para a comunicação entre diversos sistemas de outros proprietários, com a finalidade de realizar a transição de informações importantes de serem compartilhadas no dia-a-dia da sua empresa
                    </p>
                </div>
            </a>
        </div>
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
