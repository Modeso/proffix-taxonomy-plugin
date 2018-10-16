<?php
/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Proffix_Taxonomy
 * @subpackage Proffix_Taxonomy/public
 */
/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Proffix_Taxonomy
 * @subpackage Proffix_Taxonomy/public
 * @author     Your Name <email@example.com>
 */
class Proffix_Taxonomy_Public {
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
	 * @param      string    $Proffix_Taxonomy       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $Proffix_Taxonomy, $version ) {
		$this->Proffix_Taxonomy = $Proffix_Taxonomy;
		$this->version = $version;
	}
	/**
	 * Register the stylesheets for the public-facing side of the site.
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
		wp_enqueue_style( $this->Proffix_Taxonomy, plugin_dir_url( __FILE__ ) . 'css/proffix-taxonomy-public.css', array(), $this->version, 'all' );
	}
	/**
	 * Register the JavaScript for the public-facing side of the site.
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
		wp_enqueue_script( $this->Proffix_Taxonomy, plugin_dir_url( __FILE__ ) . 'js/proffix-taxonomy-public.js', array( 'jquery' ), $this->version, false );
	}
}
?>