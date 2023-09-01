<?php 
/**
 * Убераем слово Рубрика, Архивы, Категория из функции the_title
 */
add_filter( 'get_the_archive_title', 'wp_remove_name_cat' );
function wp_remove_name_cat( $title ){
	if ( is_category() ) {
		$title = single_cat_title( '', false );
	} elseif ( is_tag() ) {
		$title = single_tag_title( '', false );
	} elseif ( is_tax() ) {
		$title = single_tag_title( '', false );
	} elseif ( is_post_type_archive() ) {
		$title = post_type_archive_title( '', false );
	}
	return $title;
}