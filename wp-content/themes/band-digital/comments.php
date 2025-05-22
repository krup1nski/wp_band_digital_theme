<?php

if (post_password_required()) {
    return;
}
?>

<div id="comments" class="comments my-4">

    <?php
    // You can start editing here -- including this comment!
    if (have_comments()) :
        ?>
        <h3 class="mb-5">Comments :</h3>

        <?php the_comments_navigation(); ?>

        <ol class="comment-list p-0">
            <?php
            wp_list_comments(
                [
                    'walker' => new Bootstrap_Walker_Comment(),
                    'max_depth' => '2',
                    'style' => 'ol',

                    'type' => 'all',
                    'reply_text' => __('Ответить <i class="fa fa-reply"></i>'),

                    'per_page' => '10',
                    'avatar_size' => 80,

                    'format' => 'html5', // или xhtml, если HTML5 не поддерживается темой
                    'short_ping' => false,    // С версии 3.6,
                    'echo' => true,     // true или false
                ]
            );
            ?>
        </ol><!-- .comment-list -->

        <?php
        the_comments_navigation();

        // If comments are closed and there are comments, let's leave a little note, shall we?
        if (!comments_open()) :
            ?>
            <p class="no-comments"><?php esc_html_e('Comments are closed.', 'band-digital'); ?></p>
        <?php
        endif;

    endif; // Check for have_comments().

    $defaults = [
        'fields' => [

            'author' => '<div class="row"><div class="col-lg-6">
			<input id="author" name="author" class="form-control" placeholder="Имя" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" />
		</div>',

            'email' => '<div class="col-lg-6">
			<input id="email" name="email" class="form-control" placeholder="e-mail" type="email" value="' . esc_attr($commenter['comment_author_email']) . '" size="30" aria-describedby="email-notes"/>
		</div></div>',


        ],
        'comment_field' => '<div class="comment-form-comment mb-3">
		
		<textarea id="comment" name="comment" class="form-control" cols="45" rows="8"  aria-required="true" required="required"></textarea>
	</div>',
        'must_log_in' => '<p class="must-log-in">' .
            sprintf(__('You must be <a href="%s">logged in</a> to post a comment.'), wp_login_url(apply_filters('the_permalink', get_permalink($post->id)))) . '
	 </p>',
        'logged_in_as' => '<p class="logged-in-as">' .
            sprintf(__('<a href="%1$s" aria-label="Logged in as %2$s. Edit your profile.">Logged in as %2$s</a>. <a href="%3$s">Log out?</a>'), get_edit_user_link(), $user_identity, wp_logout_url(apply_filters('the_permalink', get_permalink($post->id)))) . '
	 </p>',
        'comment_notes_before' => '<p class="comment-notes">
		<span id="email-notes">' . __('Your email address will not be published.') . '</span>
	</p>',
        'comment_notes_after' => '',
        'id_form' => 'commentform',
        'id_submit' => 'submit',
        'class_container' => 'comment-respond',
        'class_form' => 'comment-form',
        'class_submit' => 'btn btn-hero btn-circled',
        'name_submit' => 'submit',
        'title_reply' => __('Leave a Reply'),
        'title_reply_to' => __('Leave a Reply to %s'),
        'title_reply_before' => '<h3 id="reply-title" class="comment-reply-title">',
        'title_reply_after' => '</h3>',
        'cancel_reply_before' => ' <small>',
        'cancel_reply_after' => '</small>',
        'cancel_reply_link' => __('Cancel reply'),
        'label_submit' => __('Post Comment'),
        'submit_button' => '<button name="%1$s" type="submit" id="%2$s" class="%3$s"/>%4$s</button>',
        'submit_field' => '<p class="form-submit">%1$s %2$s</p>',
        'format' => 'html5',
    ];

    comment_form($defaults);
    ?>

</div><!-- #comments -->
