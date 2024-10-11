<?php 
/**
 * 
 * Template Name: Política de Privacidade
 * Template Post Type: page
 * 
 * Modelo de página de Política de Privacidade
 * 
 * @package wp-ion
 * @since 1.0.0
 * 
 */?>
<?php wp_ion_request_part( 'header', 'default' );?>
<header class="container-fluid ion-bg-gradient py-5" role="banner">
    <div class="container my-5 text-center text-white my-5">
        <h1 class="header-title">
            Políticas de Privacidade
        </h1>
        <p class="header-text">
            Todas as regras de coleta e tratameno de dados do site RenanDev
        </p>
    </div>
</header>
<main class="container my-5">
    <p class="privacy-text">
        Esta página tem por objetivo esclarecer dúvidas provenientes sobre a coleta, tratamento e armazenamento de dados. Todas as ações quais necessitem de tais dados, são realizadas em observância à <em>Lei Geral de Proteção de Dados (LGPD)</em> nº 13.853 de 14 de Agosto de 2018, em toda sua totatalidade, visando a total transparência de nossas atividades.
    </p>
    <h3 class="privacy-title py-1">
        Sobre a coleta de dados
    </h3>
    <p class="privacy-text">
        Nossa coleta de dados pode ser observada em dois cenários distintos, cada qual com sua carga de dados e objetivos. Abaixo será demosntrado cada cenário e os tipos de dados solicitados e sua finalidade
    </p>
    <h3 class="privacy-title py-1">
        Primeiro cenário - Público Alvo
    </h3>
    <p class="privacy-text">
        Geralmente os dados coletados neste cenário não são considerados como sensíveis, pois se tratam de informações de contato, salvo em ocasiões especiais, como por exemplo, publicações de comentários em artigos publicados em nosso blog oficial, onde será feita uma conexão com um perfil cadastrado pelo usuário na plataforma <a href="https://br.gravatar.com" target="_blank" rel="noopener noreferrer">Gravatar</a>, usada como perfil padrão entre sites WordPress, funcionando como uma espécie de rede social, facilitando o cadastro de novos usuários. Fora estes casos excepcionais, normalmente são coletados os seguintes dados:
    </p>
    <ul class="privacy-list pt-1">
        <li class="privacy-item">
            Nome completo: Solicitado em formulários de contato ou landing pages promocionais
        </li>
        <li class="privacy-item">
            Endereço de e-mail: Em formulários de contato, landing Pages e newsletter
        </li>
        <li class="privacy-item">
            Telefone e/ou WhatsApp: Também para fins de contato 
        </li>
        <li class="privacy-item">
            Nome fantasia: Para podermos identificar de qual organização você faz parte
        </li>
        <li class="privacy-item">
            Porte empresarial: Para entender melhor a realidade da empresa solicitante do contato
        </li>
    </ul>
    <h3 class="privacy-title py-1">
        Segundo Cenário - Prestação de Serviço
    </h3>
    <p class="privacy-text">
        Este cenário é mais complexo, pois para realizar os serviços contratados, uma série de informações, sensíveis ou não, poderão ser solicitados para a perfeita execução do projeto. Segue uma breve lista de dados e finalidades que poderão ser solicitados neste contexto:
    </p>
    <ul class="privacy-list pt-1">
        <li class="privacy-item">
            Dados da pessoa jurídica e física: Para elaboração do contrato de prestação de serviços        
        </li>
        <li class="privacy-item">
            Dados visuais sobre a marca: Utilizados para a elaboração de prototipagens e para a execução do projeto
        </li>
        <li class="privacy-item">
            Acessos à ferramentas e aplicativos: Para execução do projeto
        </li>
        <li class="privacy-item">
            Links de redes sociais: Para execução do projeto
        </li>
    </ul>
    <h3 class="privacy-title py-1">
        Sobre o cancelamento de envio de campanhas e exclusão de dados
    </h3>
    <p class="privacy-text">
        Em qualquer momento você pode solicitar o cancelamento de campanhas de marketing, idenpedente de qual veículo particular de comunicação esteja utilizando (exceto campanhas de tráfego pago e comerciais em plataformas com políticas próprias as quais não temos controle sobre o fluxo de informações). Alguns exemplos de veículos os quais poderá solicitar, diretamente por nós, o cancelamento de envio de publicidade e campanha de marketing são: envios de emails, newsletters, mensagens via whatsapp e chats de redes sociais. Caso esteja vendo propagandas em plataformas que não possuimos controle do fluxo de exibição, por exemplo: Google Ads, Facebook Ads, Instagram Ads, etc... Sugerimos que entre em contato como setor responsável da plataforma para solicitar tal cancelamento (sujeito a política da plataforma).
    </p>
    <h3 class="privacy-title py-1">
        Mudanças na Política de Privacidade
    </h3>
    <p class="privacy-text">
        Essa Política de Privacidade pode passar por atualizações. Desta forma, recomendamos visitar periodicamente esta página para que você tenha conhecimento sobre as modificações. Antes de usar informações para outros fins que não os definidos nesta Política de Privacidade, solicitaremos sua autorização.
    </p>
    <h3 class="privacy-title py-1">
        Entre em contato em caso de dúvidas
    </h3>
    <p class="privacy-text">
        Qualquer dúvida em relação à nossa política de privacidade pode ser esclarecida entrando em contato conosco.
    </p>
    <ul class="privacy-list py-1">
        <li class="privacy-item">
            E-mail para contato: comercial@renandev.com.br
        </li>
        <li class="privacy-item">
            WhatsApp para contato: (41) 99621-0587
        </li>
    </ul>
</main>
<?php wp_ion_request_part( 'footer', 'default' );
