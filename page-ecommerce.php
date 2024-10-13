<?php 
/**
 * 
 * Template Name: Página de Lojas Virtuais
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
            Lojas Virtuais criadas com base na sua necessidade
        </h1>
        <p class="header-text">
            Criamos a loja ideal para o momento do seu negócio, trazendo mais oportunidade de vendas
        </p>
    </div>
</header>
<main class="ecommerce-container py-5">
    <div class="container">
        <div class="row py-5">
            <h2 class="contact-title text-center mb-2">
                Solução ideal para empresas que vendem produtos físicos ou digitais
            </h2>
            <p class="contact-text text-center">
                Empresas que atuam com vendas de produtos necessitam de uma plataforma que realmente traga conversão. Nossas lojas virtuais são criadas utilizando este princípio
            </p>
        </div>
    </div>
    <div class="container pb-5 mb-5">
        <div class="row">
            <div class="col-md-4">
                <img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/img-shop.png" class="img-fluid" alt="Imagem ilustrando um proprietário de um negócio vendendo através de uma loja virtual"/>
                <p class="img-info-text text-center">
                    <a href="https://br.freepik.com/vetores-gratis/e-comercial-icone-de-desenho-animado-da-web-loja-online-servico-de-cashback-devolucao-de-dinheiro-ideia-de-reembolso-financeiro-retorno-do-investimento-receita-da-internet_11669046.htm#fromView=search&page=1&position=35&uuid=4d2f8ad6-0345-49c8-8fe0-409db71a233e" target="_blank" rel="noopener noreferrer">
                        Imagem de vectorjuice no Freepik
                    </a>
                </p>
            </div>
            <div class="col-md-8 d-md-flex flex-column">
                <div class="my-auto">
                <h2 class="comercial-title pb-2">
                    Temos um formato de projeto para cada realidade empresarial
                </h2>
                <p class="contact-text">
                    Criamos a loja virtual que vai de encontro com a necessidade da sua empresa, trazendo as funcionalidades esperadas de acordo com o tamanho do projeto. Você ainda pode escolher o formato do projeto de acordo com o posicionamento estratégico da sua marca para o longo prazo, escolhendo uma solução com pouca ou grande possibilidade de escalonamento, por exemplo
                </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-5">
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