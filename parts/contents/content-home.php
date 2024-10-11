<?php 
/**
 * 
 * Conteúdo de exibição para página inicial
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
    <div clas="row py-5">
        <main class="col-md-8">
            <?php 
            if( have_posts() ):
                while( have_posts() ):
                    the_post();
                    wp_ion_request_snippet( 'card', 'post' );
                endwhile;
            endif;
            ?>
        </main>
        <?php wp_ion_request_snippet( 'nav', 'side' );?>
    </div>
</div>
