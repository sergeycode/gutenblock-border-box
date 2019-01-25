<?php

/**
 * Plugin Name: Border Box
 * Plugin URI: https://github.com/sergeycode/gutenblock-border-box
 * Author: Sergey Ovcharenko
 * Version: 1.0.0
 * 
 */

if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there, hacker! Sorry, but direct access is not allowed.';
	exit;
}

 function loadMyBlockFiles(){
   wp_enqueue_script(
     'border-box',
     plugin_dir_url(__FILE__ ) . 'border-box-block.js',
     array('wp-blocks', 'wp-i18n', 'wp-editor'),
     true
   );
 }

 add_action('enqueue_block_editor_assets', 'loadMyBlockFiles');