<?php 
/**
 * 
 * Modelo de exibição e formulário de coemntários
 * 
 * @package wp-ion
 * @since 1.0.0
 * 
 */

if( post_password_required() ):
    return;
endif;
?>
<div class="row mt-5 py-3 px-5 bg-light">
    <p class="number-of-comments mt-3 mb-1 pt-5">
        <?php 
        if( get_comments_number() == 1 ):
            echo esc_html( get_comments_number() ) . ' Comentário';
        elseif( get_comments_number() > 1 ):
            echo esc_html( get_comments_number() ) . ' Comentários';
        endif;
        ?>
    </p>
    <ul class="list-single-comments  px-3 pb-2">
        
        <?php 
        if( have_comments() ):
            wp_list_comments(
                array(
                    'callback'          => 'ion_comments_display',
                    'style'             => 'ul',
                    'max_depth'         => 7,
                    'avatar_size'       => 48,
                    'per_page'          => 10,
                    'type'              => 'comment',
                    'reverse_top_level' => true
                )
            );

            /**
             * Cria uma paginação de comentários, quando necessário
             */
            if( function_exists( 'get_the_comment_navigation' ) ):

                get_the_comment_navigation();

            endif;
        endif;
        ?>
    </ul>
    <div class="row px-3 py-2">
        <?php 
        /**
         * Exibe o formulário de comentários
         */
        if( comments_open() ):

            /**
             * Array para fazer um override dos campos padrão
             */
            $comment_fields = array(
                'author' => '<div class="form-group my-1"><label for="author" class="d-none">Nome<span class="text-danger">*</span></label><input type="text" name="author" id="author" class="form-control" placeholder="Digite seu nome*" autocomplete="name" value required/></div>',
                'email'  => '<div class="form-group my-1"><label for="email" class="d-none">E-mail<span class="text-danger">*</span></label><input type="email" name="email" id="email" class="form-control" placeholder="Digite seu e-mail*" autocomplete="email" value required/></div>',
                'cookies' => '<div class="form-check my-3"><input type="checkbox" name="wp-comment-cookies-consent" id="wp-comment-cookies-consent" class="form-check-input" value="yes"/><label for="wp-comment-cookies-consent" class="form-check-label">Salvar meus dados neste navegador</label></div>'
            );

            /**
             * Array para editar atributos dos campos
             */
            $comment_args = array(
                'fields'               => $comment_fields,
                'comment_field'        => '<div class="form-group my-1"><label for="comment" class="d-none">Comentário<span class="text-danger">*</span></label><textarea name="comment" id="comment" class="form-control" placeholder="Escreva seu comentário" required></textarea></div>',
                'must_log_in'          => '<p class="text-danger">Você precisa estar logado para comentar</p>',
                'logged_in_as'         => '<p class="text-primary">Você está logado como %s</p>',
                'comment_notes_before' => '<p class="text-secondary">Seu e-mail não será publicado</p>',
                'comment_notes_after'  => false,
                'class_container'      => 'comment-respond',
                'class_form'           => 'comment-form',
                'class_submit'         => 'submit btn-ion-comment px-2 py-2',
                'title_reply'          => 'Use os campos abaixo para comentar',
                'title_reply_to'       => '<div class="mx-1 link-author">Respondendo à %s</div>',
                'title_reply_before'   => '<div class="d-flex reply-box pb-3">',
                'title_reply_after'    => '</div>',
                'cancel_reply_before'  => '<div class="mr-5 px-2">',
                'cancel_reply_after'   => '</div>',
                'cancel_reply_link'    => 'Cancelar Resposta',
                'label_submit'         => 'Publicar',
                'format'               => 'html5'

            );

            comment_form( $comment_args );
        endif;
        ?>
    </div>
</div>