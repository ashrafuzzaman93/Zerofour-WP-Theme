<?php
/**
 * Template for displaying search forms in zerofour
 *
 * @package WordPress
 * @subpackage zerofour
 * @since 1.0
 * @version 1.0
 */

?>
<?php $uniq_id = uniqid('search-form-'); ?>
<form class="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="search" id="<?php echo esc_attr( $uniq_id ); ?>" name="s" placeholder="<?php _e( 'Search', 'zerofour' ); ?>" value="<?php get_search_query(); ?>" />
</form>