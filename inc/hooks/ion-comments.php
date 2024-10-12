<?php 
/**
 * 
 * Callback modelo para exibição de lista de comentários
 * 
 * @package wp-ion
 * @since 1.0.0
 * 
 */?>

<?php 
function ion_comments_display( $comment, $args, $depth ){?>

    <li class="d-flex py-3 my-3 px-2 <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' );?>" id="comment-<?php comment_ID() ?>">
        <?php 
        if( $args[ 'avatar_size' ] != 0 ):
            echo  get_avatar( $comment, $args[ 'avatar_size' ], 'mm', 'Avavtar do autor do comentário', array( 'class' => 'comment-avatar-img mx-3 border-0 rounded-circle' ) );
        endif;
        ?>
        <div class="comment-box">
            <p class="mb-1 comment-author">
                <?php echo get_comment_author();?>
            </p>
            <p class="text-secondary mb-1 comment-date">
                <?php echo 'Publicado em ' . get_comment_date();?>
            </p>
            <p class="comment-text">
                <?php echo get_comment_text();?>
            </p>
            <?php 
            echo get_comment_reply_link( array( 'reply_text' => 'Responder', 'depth' => 6, 'max_depth' => 7, 'login_text' => 'Faça login para responder' ), get_comment_ID(), get_the_ID() );?>
        </div>
    </li>

<?php 
}
