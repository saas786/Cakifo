<?php
/**
 * Comment Template
 *
 * The comment template displays an individual comment. This can be overwritten by templates specific
 * to the comment type (comment.php, comment-{$comment_type}.php, comment-pingback.php, 
 * comment-trackback.php) in a child theme.
 *
 * @package Cakifo
 * @subpackage Template
 */

	global $post, $comment;
?>

	<li id="li-comment-<?php comment_ID(); ?>" class="<?php hybrid_comment_class(); ?>">

		<article id="comment-<?php comment_ID(); ?>" class="comment">

		<?php do_atomic( 'before_comment' ); // cakifo_before_comment ?>

			<div class="comment-wrap">

				<?php do_atomic( 'open_comment' ); // cakifo_open_comment ?>

				<footer class="comment-meta">
					<?php echo hybrid_avatar(); ?>

					<?php echo apply_atomic_shortcode( 'comment_meta', '<div class="comment-meta">[comment-author] [comment-published] [comment-permalink before="| "] [comment-edit-link before="| "] [comment-reply-link before="| "]</div>' ); ?>
				</footer> <!-- .comment-meta -->

				<div class="comment-content comment-text">
					<?php if ( '0' == $comment->comment_approved ) : ?>
						<?php echo apply_atomic_shortcode( 'comment_moderation', '<p class="alert comment-awaiting-moderation">' . __( 'Your comment is awaiting moderation.', 'cakifo' ) . '</p>' ); ?>
					<?php endif; ?>

					<?php comment_text( $comment->comment_ID ); ?>
				</div> <!-- .comment-content .comment-text -->

				<?php do_atomic( 'close_comment' ); // cakifo_close_comment ?>

			</div> <!-- .comment-wrap -->

		<?php do_atomic( 'after_comment' ); // cakifo_after_comment ?>

		</article> <!-- #comment-<?php comment_ID(); ?> -->

	<?php /* No closing </li> is needed.  WordPress will know where to add it. */ ?>