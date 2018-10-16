<?php
/*
Plugin Name: PROFFIX Taxonomy Plugin
Plugin URI: https://github.com/Modeso/proffix-taxonomy-plugin/
GitHub Plugin URI: https://github.com/Modeso/proffix-taxonomy-plugin/
Description: Add PROFFIX Fields as Taxonomy for better filtering.
Version: 1.0.0
Author: Modeso
Author URI:   https://www.modeso.ch/
*/

/*Tested up to: 4.9*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'Proffix_Taxonomy_VERSION', '1.0.0' );
/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-proffix-taxonomy-activator.php
 */
function activate_Proffix_Taxonomy() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-proffix-taxonomy-activator.php';
	Proffix_Taxonomy_Activator::activate();
}
/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-proffix-taxonomy-deactivator.php
 */
function deactivate_Proffix_Taxonomy() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-proffix-taxonomy-deactivator.php';
	Proffix_Taxonomy_Deactivator::deactivate();
}
register_activation_hook( __FILE__, 'activate_Proffix_Taxonomy' );
register_deactivation_hook( __FILE__, 'deactivate_Proffix_Taxonomy' );
/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-proffix-taxonomy.php';
/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_Proffix_Taxonomy() {
	$plugin = new Proffix_Taxonomy();
	$plugin->run();
}
run_Proffix_Taxonomy();
?>