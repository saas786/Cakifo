<?php
/**
 * Attachment Template
 *
 * This is the default attachment template.  It is used when visiting the singular view of a post attachment
 * page (images, videos, audio, etc.).
 *
 * @package Cakifo
 * @subpackage Template
 * @since Cakifo 1.0.0
 */

get_header(); // Loads the header.php template ?>

	<?php do_atomic( 'before_main' ); // cakifo_before_main ?>

	<div id="main">

		<?php do_atomic( 'open_main' ); // cakifo_open_main ?>

		<?php get_template_part( 'loop-meta' ); // Loads the loop-meta.php template ?>

		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'loop', 'attachment' ); ?>

		<?php endwhile; ?>

		<?php do_atomic( 'close_main' ); // cakifo_close_main ?>

		<?php get_template_part( 'loop-nav' ); // Loads the loop-nav.php template ?>

	</div> <!-- #main -->

	<?php do_atomic( 'after_main' ); // cakifo_after_main ?>

<?php get_footer(); // Loads the footer.php template ?>
