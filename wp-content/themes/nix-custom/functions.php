<?php
	
	$defaults = array(
		'default-image'          => 'https://cdn.pixabay.com/photo/2015/09/21/14/45/banner-header-949928_960_720.jpg',
		'width'                  => '1250px',
		'height'                 => '350px',
		'flex-height'            => true,
		'flex-width'             => true,
		'uploads'                => true,
		'random-default'         => false,
		'header-text'            => 'Test',
		'default-text-color'     => '',
		'wp-head-callback'       => '',
		'admin-head-callback'    => '',
		'admin-preview-callback' => '',
	);
	add_theme_support( 'custom-header', $defaults );

?>