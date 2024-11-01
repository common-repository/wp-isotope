<?php 


add_action('init', 'sp_magic_support');

if( ! function_exists('sp_magic_support')){

	function sp_magic_support(){

	    register_post_type('sp_magic_isotop', array(
	        'label'     => 'Isotops',
	        'labels'    => array(
	                'name'  => 'Istops',
	                'add_new'   => 'Add New Isotop',
	                'add_new_item'  => 'Add New Isotop'
	            ),
	        'public'    => true,
	        'menu_icon' => 'dashicons-schedule',
	        'supports'  => array('title', 'thumbnail')
	    ));


	    register_taxonomy('sp_isotop_cat', 'sp_magic_isotop', array(
	        'label'     => 'Categorys',
	        'labels'    => array(
	                'name'  => 'Categorys',
	                'add_new'=> 'Add New Category',
	                'add_new_item'  => 'Add New Category'
	            ),
	        'public'    => true,
	        'hierachical' => true
	    ));


	}
}

