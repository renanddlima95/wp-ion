<?php 
/**
 * 
 * Template Name: Página de Apps Mobile
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
            Apps para Android e IOS
        </h1>
        <p class="header-text">
            Solução pensada para trazer uma melhor experiência para o seu cliente
        </p>
    </div>
</header>
<main class="mobile-container py-5">
    <div class="container">
        <div class="row py-5">
            <h2 class="contact-title text-center mb-2">
                Aplicativos Mobile para Android e IOS
            </h2>
            <p class="contact-text text-center">
                Publique seu aplicativo nas bibliotecas Google Play e Apple Store
            </p>
        </div>
    </div>
    <div class="container pb-5 mb-5">
        <div class="row">
            <div class="col-md-4">
                <img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/img-mobile.png" class="img-fluid" alt="Imagem ilustrando um casal de programadores desenvolvendo uma view para smartphone"/>
                <p class="img-info-text text-center">
                    <a href="https://br.freepik.com/vetores-gratis/desenvolvimento-de-aplicativos-moveis-linguagens-de-programacao-css-html-ti-iu-site-de-desenvolvimento-de-personagem-de-desenho-animado-masculino-codificacao_11669139.htm#fromView=search&page=1&position=0&uuid=b3140e3c-3844-4aab-af14-deaba76ee561" target="_blank" rel="noopener noreferrer">
                        Imagem de vectorjuice no Freepik
                    </a>
                </p>
            </div>
            <div class="col-md-8 d-md-flex flex-column">
                <div class="my-auto">
                <h2 class="comercial-title pb-2">
                    Aplicativos com interface fluida e funcional
                </h2>
                <p class="contact-text">
                    Nossos aplicativos são desenvolvidos para o cliente final, com um layout interativo na medida certa, com clareza nas informações e ações, garantindo uma melhor experiência do usuário 
                </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-2">
        <div class="row text-center py-3">
            <h2 class="contact-title">
                Quais as etapas do projeto?
            </h2>
        </div>
        <div class="row">
            <div class="col-md">
                <div class="card border-0 ion-bg-gradient text-white">
                    <div class="card-body">
                        <h3 class="contact-subtitle pb-2 card-title">
                            1ª Etapa</br>Análise do Projeto
                        </h3>
                        <p class="contact-subtext card-text">
                            É realizado um briefing inicial para entender quais as necessidades e dores da sua empresa
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card border-0 ion-bg-gradient text-white">
                    <div class="card-body">
                        <h3 class="contact-subtitle pb-2 card-title">
                            2ª Etapa</br>Prototipagem
                        </h3>
                        <p class="contact-subtext card-text">
                            Criamos um protótipo de demonstração para você e os envolvidos no projeto aprovarem
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card border-0 ion-bg-gradient text-white">
                    <div class="card-body">
                        <h3 class="contact-subtitle pb-2 card-title">
                            3ª Etapa</br>Execução do Projeto
                        </h3>
                        <p class="contact-subtext card-text">
                            Munidos de todos os requisitos do projeto, vamos criar a aplicação e cuidar de toda a configuração
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card border-0 ion-bg-gradient text-white">
                    <div class="card-body">
                        <h3 class="contact-subtitle pb-2 card-title">
                            4ª Etapa</br>Documentação do Projeto
                        </h3>
                        <p class="contact-subtext card-text">
                            Criamos toda a docuemntação do projeto para ter um fácil aprendizado e manuseio
                        </p>
                    </div>
                </div>
            </div>
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
