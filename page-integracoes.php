<?php 
/**
 * 
 * Template Name: Página de Integrações
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
            Integrações via API's
        </h1>
        <p class="header-text">
            Está precisando integrar dois ou mais sistemas? Podemos te ajudar nessa missão!
        </p>
    </div>
</header>
<main class="integration-container py-5">
    <div class="container py-5">
        <div class="row py-5">
            <h2 class="contact-title text-center mb-2">
                Solução de ponta para comunicar seu sistema com outras ferramentas
            </h2>
            <p class="contact-text text-center">
                Tenha uma comunicação correta entre as ferramentas utlizadas pela sua equipe, afinal de contas, informação é algo valioso na era digital! Ter uma comunicação efetiva dentro do seu negócio economiza tempo e dinheiro
            </p>
        </div>
    </div>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-4">
                <img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/img-integration.png" class="img-fluid" alt="Imagem ilustrando pessoas resolvendo um quebra-cabeça, fazendo alusão de uma integração"/>
                <p class="img-info-text text-center">
                    <a href="https://br.freepik.com/vetores-gratis/ilustracao-em-vetor-conceito-abstrato-de-assistencia-mutua-programa-de-assistencia-mutua-ajuda-uns-aos-outros-suporte-de-negocios-banco-movel-trabalho-em-equipe-grupo-de-pessoas-aperto-de-maos-metafora-abstrata_12468706.htm#fromView=search&page=2&position=0&uuid=9c5b499b-1f4c-4e13-896f-09cdb7472322" target="_blank" rel="noopener noreferrer"/>
                        Imagem de vectorjuice no Freepik
                    </a>
                </p>
            </div>
            <div class="col-md-8 d-md-flex flex-column">
                <div class="my-auto">
                <h2 class="comercial-title pb-2">
                    Motivos para integrar sistemas via API
                </h2>
                <ul class="comercial-list">
                    <li class="comercial-item">
                        Melhora a segurança na transação das informações
                    </li>
                    <li class="comercial-item">
                        Comunicação tende a ser mais rápida
                    </li>
                    <li class="comercial-item">
                        Os dados podem ser modelados de formas diferentes
                    </li>
                    <li class="comercial-item">
                        Garante a comunicação, idependente da linguagem usada
                    </li>
                </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="row py-5">
            <h2 class="contact-title text-center mb-2">
                Como é feita essa integração?
            </h2>
            <p class="contact-text text-center">
                Primeiramente ambas as ferramentas a serem integradas são analisadas, para saber se existe viabilidade para a execução do projeto. Identificada a viabilidade, realizamos um briefing para saber quais as suas necessidades e o que espera que a integração entregue. Logo após serem levantados os requisitos do projeto, partimos para a execução e a entrega da sua integração.
            </p>
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
