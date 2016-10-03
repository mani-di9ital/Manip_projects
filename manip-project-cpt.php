<?php
add_action('init','manip_projects_register');
function manip_projects_register(){
	$args = array (
		'label' => __('Portfolio'),
		'singular_label' => __('Project'),
		'public' => true,
		'show_ui' => true,
		'capability_type' => 'post',
		'hierarchical' => true,
		'has_archive' => true,
		'supports' =>array('title','editor','thumbnail'),
		'rewrite' => array('slug' => 'portfolio','with_front' => false)
		);
	register_post_type('portfolio', $args);
	register_taxonomy("manis-project-type", array('portfolio'),
		array("hierarchical" =>true,"label" =>"Project Type","singular_label" =>"Project Type", "rewrite" => true));
}