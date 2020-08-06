<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div class="comments-area" id="comments">

	<div class="custom-design">

		<h4>Comments: <?php echo $comments_number = get_comments_number(); ?></h4><button id="Leave_a_comment">Write a Comment</button>

		<ol class="comment-list">

			<?php
			wp_list_comments(
				array(
					'style'      => 'ol',
					'short_ping' => false,
				)
			);
			?>

		</ol><!-- .comment-list -->

		

		<div id="comment_form_wrapper" style="display: none;">
			<?php comment_form( '', true ); ?>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script type="text/javascript">
    $(document).ready(function() {
        $('#Leave_a_comment').click(function() {
            $('#comment_form_wrapper').show();
        });
    });
</script>

	</div>

	

	<?php //comment_form(); // Render comments form. ?>

</div><!-- #comments -->
