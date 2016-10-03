<?php 
/*
Plugin Name: Mani Portfolio Plugin
Plugin URI:https://github.com/jcasabona/wp-portfolio
Description: A simple plugin that creates and display a projects portfolio in WP using custom post types.
Author: Oryginal Joe Casabona
Version:1.0
Author USI:http://www.casabona.org
*/
define('MANIP_PATH',WP_PLUGIN_URL.'/'.plugin_basename(
	dirname(__FILE__)).'/');
	define('MANIP_NAME',"Mani Portfolio Plugin");
	require_once('manip-project-ctp.php');
	if( function_exist('add_theme_support')) {
	add_theme_support('post-thumbnails');
	add_image_size('manip_project', 1100,640,true) 
	}
	?>
