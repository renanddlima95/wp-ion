<?php 
/**
 * 
 * Conteúdo de exibição para página de tags e arquivamentos
 * 
 * @package wp-ion
 * @since 1.0.0
 * 
 */?>
<div class="container py-5">
    <div class="row py-2">
        <?php 
        /**
         * Código do Breadcrumb Yoast SEO
         */
        if( function_exists( 'yoast_breadcrumb' ) ):

            yoast_breadcrumb( '<span id="breadcrumbs">','</span>' );

        endif;
        ?>
    </div>
    <div class="row py-5">
        <main class="col-md-8 py-3">
            <?php 
            if( have_posts() ):
                while( have_posts() ):
                    the_post();
                    the_content();
                endwhile;
            endif;

            /**
             * Request da seção de cometários
             */
            if( comments_open() && get_comments_number() ):
                comment_form();
            else:
                echo '<p class="text-danger">Comentários Fechados</p>';
            endif;
            ?>
        </main>
        <?php wp_ion_request_snippet( 'nav', 'side' );?>
    </div>
</div>
