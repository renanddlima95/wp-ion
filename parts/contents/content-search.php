<?php 
/**
 * 
 * Conteúdo de exibição para página de busca
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
                wp_ion_request_snippet( 'card', 'post' );
            endwhile;
        endif;
        ?>
    </main>
    <?php wp_ion_request_snippet( 'nav', 'side' );?>
</div>
