<?php 
/**
 * 
 * Conteúdo de exibição para página inicial
 * 
 * @package wp-ion
 * @since 1.0.0
 * 
 */?>
<main class="py-5">
    <div class="container fpage-content py-5">
        <div class="row text-center py-4">
            <h2 class="contact-title">
                Tenha ainda mais sucesso na conversão de vendas da sua empresa
            </h2>
            <p class="sec-text pb-3">
                Nossos serviços são estratégicamente implementados para auxiliar a sua empresa a alcançar bons resultados de conversão em vendas
            </p>
        </div>
        <div class="row">
            <a href="<?php echo esc_url( home_url( '/servicos/sites-comerciais' ) );?>" target="_blank" rel="noopener noreferrer" class="card col-md my-2 px-4 py-3 mx-2 text-center border-0 rounded-0 pop-services">
                <div class="card-body">
                    <i class="bi bi-window-stack ion-card-icon"></i>
                    <h2 class="card-title">
                        Sites Comerciais
                    </h2>
                    <p class="card-text">
                        Sites com carregamento rápido e eficiente quando o assunto é SEO
                    </p>
                </div>
            </a>
            <a href="<?php echo esc_url( home_url( '/servicos/lojas-virtuais' ) );?>" target="_blank" rel="noopener noreferrer" class="card col-md my-2 px-4 py-3 mx-2 text-center border-0 rounded-0 pop-services">
                <div class="card-body">
                    <i class="bi bi-cart4 ion-card-icon"></i>
                    <h2 class="card-title">
                        E-commerces Seguros
                    </h2>
                    <p class="card-text">
                        Lojas online atrativas, criadas para trazer mais oportunidades de negócio
                    </p>
                </div>
            </a>
            <a href="<?php echo esc_url( home_url( '/servicos/apps-mobile' ) );?>" target="_blank" rel="noopener noreferrer" class="card col-md my-2 px-4 py-3 mx-2 text-center border-0 rounded-0 pop-services">
                <div class="card-body">
                    <i class="bi bi-phone ion-card-icon"></i>
                    <h2 class="card-title">
                        Aplicativos Mobile
                    </h2>
                    <p class="card-text">
                        Apps para Android e Ios que vai garantir uma melhor experiência para o seu público
                    </p>
                </div>
            </a>
            <a href="<?php echo esc_url( home_url( '/servicos/integracoes' ) );?>" target="_blank" rel="noopener noreferrer" class="card col-md my-2 px-4 py-3 mx-2 text-center border-0 rounded-0 pop-services">
                <div class="card-body">
                    <i class="bi bi-diagram-3 ion-card-icon"></i>
                    <h2 class="card-title">
                        Integrações via API's
                    </h2>
                    <p class="card-text">
                        Plugins que se encaixam para compartilhamento de informações <em>Consultar viabilidade</em>
                    </p>
                </div>
            </a>
        </div>
    </div>
    <div class="ion-bg-gradient py-5">
        <div class="container">
            <div class="card border-0 rounded-0 bg-transparent text-white text-center card-cta">
                <div class="card-body">
                    <h2 class="card-title pb-2">
                        Não perca a oportunidade de ter uma ferramenta alavancadora de vendas!
                    </h2>
                    <a class="btn ion-btn-cta" href="<?php echo esc_url( home_url( '/contato' ) );?>">Entre em contato</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <h2 class="contact-title text-center py-5">Confira alguns artigos que preparamos para você</h2>
        <?php 
        /**
         * Exibe posts recentes
         * 
         * @since 1.0.0
         */
        $args = array( 'numerposts' => '6' );
        $recent_posts = wp_get_recent_posts( $args );

        foreach( $recent_posts as $recent ):?>
        <a href="<?php echo esc_url( get_permalink() );?>" class="card card-post border-0 col-md-4 bg-transparent">
                    <?php 
                    if( has_post_thumbnail( $recent['ID'] ) ):
                        get_the_post_thumbnail( array( 'class' => 'card-img-top' ) );
                    else:?>
                        <img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/thumb-default.jpg" class="card-img-top"/>
                    <?php 
                    endif;?>
                    <div class="card-body card-post-body text-center text-white ion-bg-gradient py-4">
                        <h4 class="card-title card-post-title pb-1">
                            <?php echo esc_html( the_title() );?>
                        </h4>
                        <p class="card-text card-post-text">
                            <?php echo esc_html( get_the_excerpt() );?>
                        </p>
                    </div>
        <?php endforeach;?>
        </a>
    </div>
</main>
