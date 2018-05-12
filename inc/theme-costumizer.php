<?php


function su_customize_register( $wp_customize ) {
	  // Do stuff with $wp_customize, the WP_Customize_Manager object.

	// Sidebar Options Section
	$wp_customize->add_section( 'sidebar_bg_color_section', array(
		'title'					=> __( 'Theme Sidebar Settings', 'udemy' ),
		'priority'				=> 30					

		));

	// The Settings For Sidebar Options
	$wp_customize->add_setting( 'sidebar_bg_color', array(
		  'default'					=> '#1f1f1f',
		  'transport'				=> 'refresh',	  
	) );

	$wp_customize->add_setting( 'sidebar_rubrik_color', array(
		  'default'					=> '#000',
		  'transport'				=> 'refresh',	  
	) );

	$wp_customize->add_setting( 'sidebar_title_color', array(
		  'default'					=> '#fff',
		  'transport'				=> 'refresh',	  
	) );	

	$wp_customize->add_setting( 'socialMedia_color', array(
		  'default'					=> '#000',
		  'transport'				=> 'refresh',	  
	) );	
	
	//  The Controls For The Settings Of Sidebar Options

	$wp_customize->add_control ( new WP_Customize_Color_Control($wp_customize, 'sidebar_bg_colors', array(
		'label'					=> __( 'Background Color Of The Sidebar', 'udemy' ),
		'section'				=> 'sidebar_bg_color_section',
		'settings'				=> 'sidebar_bg_color', 'sidebar_rubrik_color',
		
		)));

	$wp_customize->add_control ( new WP_Customize_Color_Control($wp_customize, 'sidebar_rubrik_colors', array(
		'label'					=> __( 'Widget Rubrik Font Color', 'udemy' ),
		'section'				=> 'sidebar_bg_color_section',
		'settings'				=> 'sidebar_rubrik_color',
		
		)));

	$wp_customize->add_control ( new WP_Customize_Color_Control($wp_customize, 'sidebar_title_color', array(
		'label'					=> __( 'Title & text Color', 'udemy' ),
		'section'				=> 'sidebar_bg_color_section',
		'settings'				=> 'sidebar_title_color',
		
		)));

	$wp_customize->add_control ( new WP_Customize_Color_Control($wp_customize, 'socialMedia_color', array(
		'label'					=> __( 'SocialMedia Icons Color', 'udemy' ),
		'section'				=> 'sidebar_bg_color_section',
		'settings'				=> 'socialMedia_color',
		
		)));		

	// Pin it Page Layout

	$wp_customize->add_section( 'pinit_page_layout', array(
		'title'					=> __( 'Pin It Page Layout', 'udemy' ),
		'priority'				=> 35					

		));	

	// The Settings For Sidebar Options

	$wp_customize->add_setting( 'post_width_options', array(
		  'transport'				=> 'refresh',	  
	) );	

	$wp_customize->add_setting( 'post_acent_color', array(
		  'default'					=> '#ff007f',
		  'transport'				=> 'refresh',	  
	) );

	// The Controls For The Settings Of Sidebar Options

	$wp_customize->add_control ( new WP_Customize_Color_Control($wp_customize, 'post_acent_color', array(
		'label'					=> __( 'Post Acent Color', 'udemy' ),
		'section'				=> 'pinit_page_layout',
		'settings'				=> 'post_acent_color',
		
		)));

	$wp_customize->add_control ( new WP_Customize_Control($wp_customize, 'post_width_options', array(
		'label'					=> __( 'Post Width Options', 'udemy' ),
		'section'				=> 'pinit_page_layout',
		'settings'				=> 'post_width_options',
		
		)));	


}
add_action( 'customize_register', 'su_customize_register' );


