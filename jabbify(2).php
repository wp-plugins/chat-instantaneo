<?php
/*
Plugin Name: Jabbify
Plugin URI: http://wordpress.org/#
Description: Adds the Jabbify chat script to all of your pages.
Author: Justin Meyer
Version: 0.1
Author URI: http://jupiterit.com/
*/ 

// These are the lyrics to Hello Dolly
// We need some CSS to position the paragraph
function jabbify() {
    echo "
	<script src=\"https://jabbify.com/side.js\" type=\"text/javascript\">\n
	</script>\n
	";
}
add_action('wp_footer', 'jabbify');
add_action('bb_foot', 'jabbify');
?>