<?php
/**
 * Plugin Name: Theme customizer.
 * Plugin URI: https://LoneStarWP.com/
 * Description: A sample customizer to show how its done - for Wordcamp DFW 2019
 * Version: 1.0.0
 * Author: Nick Batik
 * Author URI: https://LoneStarWP.com/plugins/
 * License: GPLv2 or later
 * Text Domain: customize
 */

function mytheme_register_customizer( $wp_customize ) {
      
	$wp_customize->add_section('mytheme_wordcamp_text', array(
        'title'    => __('Wordcamp DFW Custom Text', 'mytheme'),
        'priority' => 120,
    ));
    
	$wp_customize-> add_setting(
	   'mytheme_sample_first_text',
	   array(
		  'default'    => 'My Sample First Text',
		  'transport'  => 'refresh',
	   )
	);
	
	$wp_customize-> add_control(
	   'mytheme_first_text',
	   array(
		  'label'    => 'First Text',
		  'section'  => 'mytheme_wordcamp_text',
		  'settings' => 'mytheme_sample_first_text',
	   )
	);
	
	// Special thanks to Abban Dunne https://gist.github.com/Abban/2968549
	
	//  =============================
    //  = Text Input                =
    //  =============================
    $wp_customize->add_setting('themename_theme_options[text_test]', array(
        'default'        => 'Ahoy!',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
    ));
    $wp_customize->add_control('themename_text_test', array(
        'label'      => __('Text Test', 'themename'),
        'section'    => 'mytheme_wordcamp_text',
        'settings'   => 'themename_theme_options[text_test]',
    ));
    //  =============================
    //  = Radio Input               =
    //  =============================
    $wp_customize->add_setting('themename_theme_options[color_scheme]', array(
        'default'        => 'value2',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
    ));
    $wp_customize->add_control('themename_color_scheme', array(
        'label'      => __('Color Scheme', 'themename'),
        'section'    => 'mytheme_wordcamp_text',
        'settings'   => 'themename_theme_options[color_scheme]',
        'type'       => 'radio',
        'choices'    => array(
            'value1' => 'Choice 1',
            'value2' => 'Choice 2',
            'value3' => 'Choice 3',
        ),
    ));
    //  =============================
    //  = Checkbox                  =
    //  =============================
    $wp_customize->add_setting('themename_theme_options[checkbox_test]', array(
        'capability' => 'edit_theme_options',
        'type'       => 'option',
    ));
    $wp_customize->add_control('display_header_text', array(
        'settings' => 'themename_theme_options[checkbox_test]',
        'label'    => __('Display Header Text'),
        'section'  => 'mytheme_wordcamp_text',
        'type'     => 'checkbox',
    ));
    //  =============================
    //  = Select Box                =
    //  =============================
     $wp_customize->add_setting('themename_theme_options[header_select]', array(
        'default'        => 'value2',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
    ));
    $wp_customize->add_control( 'example_select_box', array(
        'settings' => 'themename_theme_options[header_select]',
        'label'   => 'Select Something:',
        'section' => 'mytheme_wordcamp_text',
        'type'    => 'select',
        'choices'    => array(
            'value1' => 'Choice 1',
            'value2' => 'Choice 2',
            'value3' => 'Choice 3',
        ),
    ));
    //  =============================
    //  = Image Upload              =
    //  =============================
    $wp_customize->add_setting('themename_theme_options[image_upload_test]', array(
        'default'           => 'image.jpg',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'image_upload_test', array(
        'label'    => __('Image Upload Test', 'themename'),
        'section'  => 'mytheme_wordcamp_text',
        'settings' => 'themename_theme_options[image_upload_test]',
    )));
    //  =============================
    //  = File Upload               =
    //  =============================
    $wp_customize->add_setting('themename_theme_options[upload_test]', array(
        'default'           => 'arse',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
    ));
    $wp_customize->add_control( new WP_Customize_Upload_Control($wp_customize, 'upload_test', array(
        'label'    => __('Upload Test', 'themename'),
        'section'  => 'mytheme_wordcamp_text',
        'settings' => 'themename_theme_options[upload_test]',
    )));
    //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('themename_theme_options[link_color]', array(
        'default'           => '000',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'link_color', array(
        'label'    => __('Link Color', 'themename'),
        'section'  => 'mytheme_wordcamp_text',
        'settings' => 'themename_theme_options[link_color]',
    )));
    //  =============================
    //  = Page Dropdown             =
    //  =============================
    $wp_customize->add_setting('themename_theme_options[page_test]', array(
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
    ));
    $wp_customize->add_control('themename_page_test', array(
        'label'      => __('Page Test', 'themename'),
        'section'    => 'mytheme_wordcamp_text',
        'type'    => 'dropdown-pages',
        'settings'   => 'themename_theme_options[page_test]',
    ));
}

add_action('customize_register', 'mytheme_register_customizer');
