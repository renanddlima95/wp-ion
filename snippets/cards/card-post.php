<?php 
/**
 * 
 * Card de exibição padrão de post
 * 
 * @package wp-ion
 * @since 1.0.0
 * 
 */?>
<a href="<?php echo esc_url( get_permalink() );?>" class="card card-post border-0 col-md-6 bg-transparent">
    <?php 
    /**
     * Request de thumbnail
     */
    if( has_post_thumbnail() ):
        get_the_post_thumbnail( array( 'class' => 'card-img-top' ) );
    else:
        echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/thumb-default.jpg" class="ion-card-img-top" alt="Miniatura padrão"/>';
    endif;
    ?>
    <div class="card-body card-post-body text-center text-white ion-bg-gradient py-4">
        <h5 class="card-title card-post-title pb-1"><?php echo esc_html( the_title() );?></h5>
        <p class="card-text card-post-text"><?php echo esc_html( get_the_excerpt() );?></p>
    </div>
</a>