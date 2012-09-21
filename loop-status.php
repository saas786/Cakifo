<?php
/**
 * Status Content Template
 *
 * Template used to show posts with the 'status' post format.
 *
 * This can be overridden in child themes with loop-status.php
 *
 * @package Cakifo
 * @subpackage Template
 * @since Cakifo 1.5
 */

do_atomic( 'before_entry' ); //cakifo_before_entry ?>

<article id="post-<?php the_ID(); ?>" class="<?php hybrid_entry_class(); ?>">

		<?php do_atomic( 'open_entry' ); //cakifo_open_entry ?>

		<?php if ( is_singular() && is_main_query() ) : ?>

			<header class="entry-header clearfix">
				<?php echo get_avatar( get_the_author_meta( 'email' ), apply_atomic( 'status_avatar', 48 ) ); ?>
				<?php echo do_shortcode( '[entry-author before="<h1>" after="</h1>"]' ); ?>
			</header> <!-- .entry-header -->

			<div class="entry-content">
				<?php the_content(); ?>
				<?php wp_link_pages( array( 'before' => '<p class="page-links">' . __( 'Pages:', 'cakifo' ), 'after' => '</p>' ) ); ?>
			</div> <!-- .entry-content -->

			<?php echo apply_atomic_shortcode( 'entry_meta_status', '<footer class="entry-meta">' . __( '[post-format-link] published on [entry-published] [entry-edit-link before="| "]<br />[entry-terms taxonomy="category" before="Posted in "] [entry-terms before="Tagged "]', 'cakifo' ) . '</footer>' ); ?>

			<?php
				// Loads the sidebar-after-single.php template
				get_sidebar( 'after-single' );

				// Loads the sidebar-after-singular.php template
				get_sidebar( 'after-singular' );

				do_atomic( 'after_singular' ); // cakifo_after_singular

				// Loads the loop-nav.php template
				get_template_part( 'loop-nav' );

 				// Loads the comments.php template
				comments_template( '/comments.php', true );
			?>

		<?php else: ?>

			<header class="entry-header clearfix">
				<?php echo get_avatar( get_the_author_meta( 'ID' ), apply_atomic( 'status_avatar', 48 ) ); ?>

				<?php echo do_shortcode( '[entry-author before="<h1>" after="</h1>"]' ); ?>

				<h2>
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
						<?php echo do_shortcode( '[entry-published]' ); ?>
					</a>
				</h2>

				<?php echo apply_atomic_shortcode( 'post_format_link', '[post-format-link]' ); ?>
			</header> <!-- .entry-header -->

			<div class="entry-content">
				<?php the_content(); ?>
				<?php wp_link_pages( array( 'before' => '<p class="page-links">' . __( 'Pages:', 'cakifo' ), 'after' => '</p>' ) ); ?>
			</div> <!-- .entry-content -->

			<footer class="entry-meta">
				<?php echo apply_atomic_shortcode( 'entry_meta_status', '<footer class="entry-meta">' . __( '[entry-edit-link]', 'cakifo' ) . '</footer>' ); ?>
			</footer> <!-- .entry-meta -->

		<?php endif; ?>

</article> <!-- #post-<?php the_ID(); ?> -->

<?php do_atomic( 'after_entry' ); //cakifo_after_entry ?>