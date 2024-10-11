<?php 
/**
 * 
 * Conteúdo de exibição para página de busca
 * 
 * @package wp-ion
 * @since 1.0.0
 * 
 */

/**
 * Salva a string de busca e cria um objeto para ser usado no Loop
 */
$search   = get_search_query();
$args     = array( 's' => $search );
$s_query  = new WP_Query( $args );
$s_number = $s_query->post_count
?>
<header class="container-fluid py-5 ion-bg-gradient" role="banner">
    <div class="container py-5 text-center text-white">
        <h1 class="header-title">
        <?php 
            /**
             * Lógica para o título de resultados
             */
            if( $s_number < '1' ):
                echo 'Não encontramos resultados para "' . esc_html( $search ) . '"';
            elseif( $s_number == '1' ):
                echo 'Encontramos 1 resultado para "' . esc_html( $search ) . '"';
            elseif( $s_number > 1 ):
                echo 'Encontramos ' . $s_number . ' resultados para "' . esc_html( $search ) .'"';
            endif;
            ?>
        </h1>
    </div>
</header>
<div class="container py-5">
    <div class="row py-5">
        <main class="col-md-8">
            <div class="row">
                <?php 
                if( $s_query->have_posts() ):
                    while( $s_query->have_posts() ):
                        $s_query->the_post();
                        wp_ion_request_snippet( 'card', 'post' );
                    endwhile;
                endif;
                ?>
            </div>
        </main>
        <?php wp_ion_request_snippet( 'nav', 'side' );?>
    </div>
</div>
