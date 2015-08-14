<?php 
/**
 * ------------------------------------------------------------------------------------------------- 
 * Enhance the tag cloud widget
 *
 * The standard WordPress tag cloud wiget is shocking. 
 * It adds inline CSS font sizing and offers no way to alter or add to 
 * the class attribute of the tag link. This is an attempt to fix that.
 * 
 * - Adding callback to replace the link title attribute for better CSS access
 * - Removing the inline style attribute
 * 
 * Only thing left to do is adding custom styles in CSS using the title attribute for targetting
 * -------------------------------------------------------------------------------------------------
 */

// Adding callback to replace the link title attribute
function jdw_tag_cloud_widget($args) {
	$args = array(
		'number' => 0, // All the tags
		'topic_count_text_callback' => 'jdw_alter_title_attr',
		'format' => 'flat',
	);

	return $args;
}
add_filter( 'widget_tag_cloud_args', 'jdw_tag_cloud_widget' );

// The callback function
function jdw_alter_title_attr($weight) {
	$new_attr = 'size-' . $weight;
	return $new_attr;
}

// Remove inline style
function jdw_remove_style_tag_cloud($tag_string) {
   return preg_replace("/style='font-size:.+pt;'/", '', $tag_string);
}
add_filter( 'wp_tag_cloud', 'jdw_remove_style_tag_cloud' );
?>