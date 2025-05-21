 <?php

if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments my-4">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
        <h3 class="mb-5">Comments :</h3>

		<?php the_comments_navigation(); ?>

		<ol class="comment-list p-0">
			<?php
			wp_list_comments(
                [
                    'walker'            => new Bootstrap_Walker_Comment(),
                    'max_depth'         => '2',
                    'style'             => 'ol',

                    'type'              => 'all',
                    'reply_text'        => __('Ответить <i class="fa fa-reply"></i>'),

                    'per_page'          => '10',
                    'avatar_size'       => 80,

                    'format'            => 'html5', // или xhtml, если HTML5 не поддерживается темой
                    'short_ping'        => false,    // С версии 3.6,
                    'echo'              => true,     // true или false
                ]
			);
			?>
		</ol><!-- .comment-list -->

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'band-digital' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().

	comment_form();
	?>

</div><!-- #comments -->
