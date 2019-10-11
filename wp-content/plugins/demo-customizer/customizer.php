<?php
/**
 * Plugin Name: Theme customizer.
 * Plugin URI: https://LoneStarWP.com/
 * Description: A sample customizer to show how its done
 * Version: 4.1.2
 * Author: Nick Batik
 * Author URI: https://LoneStarWP.com/plugins/
 * License: GPLv2 or later
 * Text Domain: customize
 */

function mytheme_register_customizer( $wp_customize ) {
      
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
}

add_action('customize_register', 'mytheme_register_customizer');


