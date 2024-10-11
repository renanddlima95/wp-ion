<?php 
/**
 * 
 * Modelo de banner para página inicial
 * 
 * @package wp-ion
 * @since 1.0.0
 * 
 */?>
<header class="card rounded-0 border-0 bg-banner-top" role="banner">
    <div class="container py-5">
        <div class="row banner-row">
            <div class="col my-auto text-white">
                <h1 class="banner-top-title fpage-title mr-auto">Sua empresa mereçe o melhor!</h1>
                <p class="banner-top-text fpage-text">Com as ferramentas certas, a sua marca tem melhores resultados. Ter um bom site é essencial para suas vendas crescerem.</p>
            </div>
            <div class="col mobile-none">
                <img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/computer-banner.svg" alt="Icone de um computador e um copo de café fazendo alusão de ser uma ferramenta de trabalho de um programador" class="card-img img-banner-top pulse"/>
            </div>
        </div>
    </div>
</header>
