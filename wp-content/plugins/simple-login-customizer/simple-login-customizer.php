<?php
/**
 * Plugin Name:       Simple Login Customizer
 * Plugin URI:        https://github.com/thatryan
 * Description:       A developer oriented plugin for creating a custom login screen.
 * Version:           1.0.0
 * Author:            Ryan Olson
 * Author URI:        http://thatryan.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       simple-login-customizer
 *
 * @link              http://thatryan.com
 * @since             1.0.0
 * @package           Simple_Login_Customizer
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-simple-login-customizer.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_simple_login_customizer() {

	$plugin = new Simple_Login_Customizer();
	$plugin->run();

}
run_simple_login_customizer();
