<?php
/*
Plugin Name: TX Team
Plugin URI: http://themexpert.com/wordpress-plugins/xpert-team
Version: 1.0
Author: ThemeXpert
Authro URI : http://www.themexpert.com
Description: Supercharge your WordPress team plugin
License: GPLv2 or later
Text Domain: xt
*/



add_action('init',function(){
	register_post_type('products',[
		'label'=> 'Products',
		'show_ui' => true,
		'has_archive' => true
		]);

});


add_action('add_meta_boxes',function(){
	add_meta_box(
		'more-details',
		'More Details',
		function(){},
		'products'
		);
});


// function prfx_custom_meta() {
//     add_meta_box( 

//     	'custom_meta_box_id',
//     	'Product Section',
//     	'meta_box_callback_funct',
//     	'post',
//     	'normal'
//      );
// }
// add_action( 'add_meta_boxes', 'prfx_custom_meta' );

// function meta_box_callback_funct(){
	
// }







?>