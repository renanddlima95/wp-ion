<?php 
/**
 * 
 * Conteúdo de exibição para página de erro 404
 * 
 * @package wp-ion
 * @since 1.0.0
 * 
 */
$search = basename( parse_url( $url, PHP_URL_PATH ) );
$s_query = new WP_Query( array( 's' => $search ) );
?>
<div class="container py-5">
    <div class="row py-5">
        <main class="col-md-8">
            <?php 
            if( $s_query->have_posts() ):
                while( $s_query->have_posts() ):
                    $s_query->the_post();
                    wp_ion_request_snippet( 'card', 'post' );
                endwhile;
            endif;
            ?>
        </main>
        <?php wp_ion_request_snippet( 'nav', 'side' );?>
    </div>
</div>
