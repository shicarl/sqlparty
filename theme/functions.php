<?php
/**
 * SQLParty 自定义函数
 * 
 * @package WordPress
 * @subpackage SQLParty
 * @since 2013-06-29
 */
 
function remove_more_link_scroll( $link ) {
	$link = preg_replace( '|#more-[0-9]+|', '', $link );
	return $link;
}
add_filter( 'the_content_more_link', 'remove_more_link_scroll' );

remove_action ( 'pre_post_update', 'wp_save_post_revision' );

?>