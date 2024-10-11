<?php 
/**
 * 
 * Conteúdo de exibição para modelo de páginas
 * 
 * @package wp-ion
 * @since 1.0.0
 * 
 */?>
<main class="container py-5">
    <?php 
    if( have_posts() ):
        while( have_posts() ):
            the_post();
            the_content();
        endwhile;
    endif;
    ?>
</main>
