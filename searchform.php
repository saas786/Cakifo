<?php
/**
 * Search Form Template
 *
 * The search form template displays the search form.
 *
 * @package Cakifo
 * @subpackage Template
 */
?>

<?php
	/**
	 * Set the value on the search input
	 */
	if ( is_search() )
		$value = 'value="' . esc_attr( get_search_query() ) . '"'; // Search query for the search page
	elseif ( is_404() )
		$value = 'value="' . esc_attr( basename($_SERVER['REQUEST_URI']) ) . '"'; // Requested URI for 404 page
	else
		$value = 'placeholder="' . esc_attr_x( 'Search', 'placeholder text', 'cakifo' ) . '"'; // Or "Search" as placeholder
?>

<form method="get" class="search-form" action="<?php echo trailingslashit( home_url() ); ?>" role="search">
	<label>
		<span class="assistive-text"><?php _e( 'Search', 'cakifo' ); ?></span>
		<input class="search-text" type="search" name="s" <?php echo $value; ?> />
	</label>
	<input class="search-submit" type="submit" value="<?php esc_attr_e( 'Search', 'cakifo' ); ?>" />
</form> <!-- .search-form -->
