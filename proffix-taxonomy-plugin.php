<?php
/*
Plugin Name: PROFFIX Taxonomy Plugin
Plugin URI: https://github.com/Modeso/proffix-taxonomy-plugin/
Description: Add PROFFIX Fields as Taxonomy for better filtering.
Version: 1.0.0
Author: Modeso
Author URI:   https://www.modeso.ch/
*/

/*Tested up to: 4.9*/


if ( !class_exists( 'PROFFIX_Taxonomy_Plugin' ) ) {
    Class PROFFIX_Taxonomy_Plugin {
        static function mo_proffix_tax_init() {
        
            global $errors, $inputs;
            $errors = [];
            $inputs = [];
            
            define('PLUGIN_PATH', plugin_dir_path(__FILE__));
            define('PLUGIN_URL', plugins_url('', __FILE__ ));
            define('PROFFIX_TAX_PLUGIN_PREFIX', 'mo_proffix_taxonomy');

            // this function will after when plugin activated
            // https://developer.wordpress.org/reference/functions/register_activation_hook/
            register_activation_hook( __FILE__, array(new self, 'mo_proffix_taxonomy_activate') );

            // TODO: https://developer.wordpress.org/reference/functions/register_deactivation_hook/
            // TODO: https://developer.wordpress.org/reference/functions/register_uninstall_hook/
            
        }

        
        /**
         * Initialization of Plugin
         * 
         * (usually only called on activation)
         */
        function mo_proffix_taxonomy_activate() {
            //TODO
        }
    }
    PROFFIX_Taxonomy_Plugin::mo_proffix_taxonomy_init();
}

?>