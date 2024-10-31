<?php
/*
Plugin Name: Read More Expander Inline 
Plugin URI: http://nkjskj.com
Description: Read more expanson inline for posts.
Version: 1.0
Author: NkjSkj
Author URI: http://nkjskj.com
License: GPL
*/



// Read More Link
function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '" >' . __('Read More', 'your-text-domain') . '</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );
