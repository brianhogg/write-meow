<?php
/*
Plugin Name: Write Meow
Plugin URI: https://wordpress.org/plugins/write-meow/
Description: Write it right meow!
Version: 0.1.0
Author: Brian Hogg
Text Domain: write-meow
*/

function write_meow( $content ) {
	return str_ireplace( 'now', 'meow', $content );
}
add_filter( 'the_content', 'write_meow' );
