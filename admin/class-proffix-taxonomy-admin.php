<?php
/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Proffix_Taxonomy
 * @subpackage Proffix_Taxonomy/admin
 */
class Proffix_Taxonomy_Admin {
	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $Proffix_Taxonomy    The ID of this plugin.
	 */
	private $Proffix_Taxonomy;
	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;
	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $Proffix_Taxonomy       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $Proffix_Taxonomy, $version ) {
		$this->Proffix_Taxonomy = $Proffix_Taxonomy;
		$this->version = $version;
	}
	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {
		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Proffix_Taxonomy_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Proffix_Taxonomy_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		wp_enqueue_style( $this->Proffix_Taxonomy, plugin_dir_url( __FILE__ ) . 'css/proffix-taxonomy-admin.css', array(), $this->version, 'all' );
	}
	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {
		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Proffix_Taxonomy_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Proffix_Taxonomy_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		wp_enqueue_script( $this->Proffix_Taxonomy, plugin_dir_url( __FILE__ ) . 'js/proffix-taxonomy-admin.js', array( 'jquery' ), $this->version, false );
	}


	public function add_admin_menu() {
		add_menu_page( __( 'PROFFIX Taxonomy', 'proffix'), __( 'PROFFIX', 'proffix'), 'manage_options', PROFFIX_TAXONOMY_PREFIX . 'general', array($this, 'general_page_template'));
		add_submenu_page( PROFFIX_TAXONOMY_PREFIX . 'general', __( 'General', 'proffix'), __( 'General', 'proffix'), 'manage_options', PROFFIX_TAXONOMY_PREFIX . 'general');
	}

	public function general_page_template() {
		include PLUGIN_PATH . "admin/partials/proffix-taxonomy-admin-display.php";
	}
}