<?php 
/**
 * 
 * Card de exibição padrão de post
 * 
 * @package wp-ion
 * @since 1.0.0
 * 
 */?>
<div class="card card-post">
    <div class="card-body">
        <h5 class="card-title"><?php echo esc_html( the_title() );?></h5>
        <p class="card-text"><?php echo esc_html( the_excerpt() );?></p>
        <a href="">Continue Lendo</a>
    </div>
</div>