<?php


function su_customize_register( $wp_customize ) {
	  // Do stuff with $wp_customize, the WP_Customize_Manager object.

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

	$wp_customize->add_section( 'sidebar_bg_color_section', array(
		'title'					=> __( 'Theme Sidebar Settings', 'udemy' ),
		'priority'				=> 30					

		));
	

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
}
add_action( 'customize_register', 'su_customize_register' );


