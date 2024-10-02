<?php 
/**
 * 
 * Conteúdo de exibição para página de tags e arquivamentos
 * 
 * @package wp-ion
 * @since 1.0.0
 * 
 */?>
<div class="container-fluid">
    <main class="col-md-10">
        <?php 
        if( have_posts() ):
            while( have_posts() ):
                the_post();
                the_content();
            endwhile;
        endif;
        ?>
    </main>
    <?php wp_ion_request_snippet( 'nav', 'side' );?>
</div>
