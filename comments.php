<?php 
/**
 * 
 * Área de comentários e exibição do formulário de comentários
 * 
 * @package wp-ion
 * @since 1.0.0
 * 
 */

/**
 * Retorna em caso de post com senha
 */
if( post_password_required() ):
    return;
endif;?>

<?php if( have_comments() ):?>
    <div class="row comments-line">
        <?php 
        wp_list_comments(
            array(
                'callback'          => 'ion_comments',
                'type'              => 'comment',
                'style'             => 'div',
                'avatar_size'       => 32,
                'format'            => 'html5',
                'reverse_top_level' => true
            )
        );
        ?>
    </div>
<?php endif;?>