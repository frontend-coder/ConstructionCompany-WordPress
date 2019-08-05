<?php
if ( ! function_exists( 'inspiration_comment' ) ) :
function inspiration_comment( $comment, $args, $depth ) {
    $GLOBALS['comment'] = $comment;
    switch ( $comment->comment_type ) :
        case '' :
    ?>
    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">

        <div class="comment-box" id="comment-<?php comment_ID(); ?>">

<div class="c-head">
<?php printf( __( '%s ', 'construction' ), sprintf( '<cite class="url">%s</cite>', get_comment_author_link() ) ); ?>
/ <span><?php printf( __( '%1$s', 'construction' ), comment_date('F j Y')); ?>
</span>
</div>

<div class="comment-content-box">
<div class="c-grav"><?php echo get_avatar( $current_user->user_email, 58, '', '', array('class'=>'') ); ?> </div>
<div class="c-body"> <?php comment_text(); ?>
      </div>

        <?php if ( $comment->comment_approved == '0' ) : ?>
            <em><?php _e( 'Ваш комментарий ожидает проверки.', 'construction' ); ?></em>
            <br />
        <?php endif; ?>
</div>
        <div class="reply">
            <?php edit_comment_link( __( 'Редактировать', 'construction' ), ' ' ); ?>  <?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
        </div><!-- .reply -->
    </div><!-- #comment-##  -->

    <?php
            break;
        case 'pingback'  :
        case 'trackback' :
    ?>
    <li class="post pingback">
        <p><?php _e( 'Пинбэк:', 'construction' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __('(Редактировать)', 'construction'), ' ' ); ?></p>
    <?php
            break;
    endswitch;
}
endif;