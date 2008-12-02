<?php
/*
Plugin Name: GitHub Gist Shortcode
Plugin URI: http://www.entropytheblog.com/blog/2008/12/wordpress-github-gist-shortcode-plugin/
Description: Allows the use of a simple shortcode [gist id="12345"] to embed <a href="http://gist.github.com">GitHub Gists</a> in a post or page.
Version: 0.1
Author: Paul William
Author URI: http://www.entropytheblog.com/blog/
*/

// [gist id="gist-id-number"]
function gist_shortcode_func($atts) {
	extract(shortcode_atts(array(
		'id' => '30948'
	), $atts));

	return "<script src=\"http://gist.github.com/".trim($id).".js\"></script>";
}
add_shortcode('gist', 'gist_shortcode_func');