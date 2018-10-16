<?php 
register_activation_hook( __FILE__, 'mo_proffix_taxonomy_activate' );

function mo_proffix_taxonomy_activate() {
	//register the uninstall function
	register_uninstall_hook( __FILE__, 'mo_proffix_taxonomy_uninstaller' );
}

function mo_proffix_taxonomy_uninstaller() {
	//delete any options, tables, etc the plugin created
}
?>