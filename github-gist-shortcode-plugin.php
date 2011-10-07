<?php
/*
Plugin Name: GitHub Gist Shortcode
Plugin URI: http://www.entropytheblog.com/blog/2008/12/wordpress-github-gist-shortcode-plugin/
Description: Allows the use of a simple shortcode [gist id="12345"] to embed <a href="http://gist.github.com">GitHub Gists</a> in a post or page.
Version: 0.2
Author: Paul William
Author URI: http://www.entropytheblog.com/blog/

Copyright 2008 Paul William

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


// [gist id="gist-id-number"]
function gist_shortcode_func($atts, $content = null) {
	extract(shortcode_atts(array(
		'id' => '30948',
		'file' => ''
	), $atts));

	$src = 'https://gist.github.com/'.trim($id).'.js';
	if($file != '') {
		$src = $src.'?file='.trim($file);
	}
	$html =  "<script src=\"$src\"></script>";
	
	if($content != null){
		$html = $html."<noscript><code class=\"gist\"><pre>".$content."</pre></code></noscript>";
	}
	
	return $html;
	
}
add_shortcode('gist', 'gist_shortcode_func');

?>
