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
    <div class="container text-center py-5">
        <h2 class="contact-title pb-2">
            Tudo o que a sua empresa precisa em um site comercial
        </h2>
        <p class="content-text">
            Os sites desenvolvidos conosco possuem uma ótima taxa de indexação dos principais mecanismos de pesquisa, o Google e o Bing. As boas práticas de implementação são essenciais para que o seu domínio não sofra penalidades no decorrer do tempo.
        </p>
    </div>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-4">
                <img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/img-success.png" class="img-fluid" alt="Imagem ilustrando um site de sucesso"/>
                <p class="img-info-text text-center">
                    <a href="https://br.freepik.com/vetores-gratis/lider-empresarial-de-pe-na-seta-e-segurando-a-ilustracao-em-vetor-plana-bandeira-desenhos-animados-pessoas-treinando-e-fazendo-plano-de-negocios-conceito-de-lideranca-vitoria-e-desafio_10606192.htm#fromView=image_search_similar&page=1&position=0&uuid=c6147fe8-a56d-4da6-8eed-d20f8336e8ea" target="_blank" rel="noopener noreferrer">
                        Imagem de pch.vector no Freepik
                    </a>
                </p>
            </div>
            <div class="col-md-8 d-md-flex flex-column">
                <div class="my-auto">
                <h2 class="comercial-title pb-2">
                    Veja alguns dos pontos fortes dos nossos sites
                </h2>
                <ul class="comercial-list">
                    <li class="comercial-item">
                        Velocidade no carregamento inicial
                    </li>
                    <li class="comercial-item">
                        Proteção SSL/TLS
                    </li>
                    <li class="comercial-item">
                        Interface amigável ao usuário
                    </li>
                    <li class="comercial-item">
                        Uptime de até 99% do tempo
                    </li>
                    <li class="comercial-item">
                        CDN sevindo todo o Brasil
                    </li>
                    <li class="comercial-item">
                        Backup de segurança
                    </li>
                    <li class="comercial-item">
                        Ferramentas plugadas para a gestão
                    </li>
                </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="row text-center py-3">
            <h2 class="contact-title">
                Como funciona o processo de criação?
            </h2>
        </div>
        <div class="row">
            <div class="col-md">
                <div class="card border-0 ion-bg-gradient text-white">
                    <div class="card-body">
                        <h3 class="contact-subtitle pb-2 card-title">
                            1º Passo</br>Criação do Modelo
                        </h3>
                        <p class="contact-subtext card-text">
                            Criamos o layout modelo que será utilizado na etapa de execução do site
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card border-0 ion-bg-gradient text-white">
                    <div class="card-body">
                        <h3 class="contact-subtitle pb-2 card-title">
                            2º Passo</br>Criação do Conteúdo
                        </h3>
                        <p class="contact-subtext card-text">
                            Geramos os conteúdos das páginas e do formulário de contato
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card border-0 ion-bg-gradient text-white">
                    <div class="card-body">
                        <h3 class="contact-subtitle pb-2 card-title">
                            3º Passo</br>Execução do Projeto
                        </h3>
                        <p class="contact-subtext card-text">
                            Neste passo vamos por a mão na massa, criando todo o código do site
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card border-0 ion-bg-gradient text-white">
                    <div class="card-body">
                        <h3 class="contact-subtitle pb-2 card-title">
                            4º Passo</br>Entrega do Projeto
                        </h3>
                        <p class="contact-subtext card-text">
                            Entregamos o seu site e... Pronto! Agora é só começar a atrair clientes
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-5 my-5">
        <div clas="row py-5 my-5">
            <p class="comercial-info-text text-center">
                Você também pode plugar ao CMS do seu site várias soluções de terceiros para ajudar nos processos diários, por exemplo, ferramentas para campanhas de Marketing Digital, de análise de SEO, de monitoramento do desempenho do site, entre outros apps que te auxiliam nas decisões importantes
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
