<?php
/*
Plugin Name: Power Level Scan
Plugin URI: http://www.blueside.nl
Description: A simple wordpress plugin template
Version: 0.1
Author: Marlon Peeters
Author URI: http://www.blueside.nl
*/

if(!class_exists('PLS_Main'))
{
	class PLS_Main
	{
		/**
		 * Construct the plugin object
		 */
		public function __construct()
		{
			// Initialize Settings
			require_once(sprintf("%s/settings.php", dirname(__FILE__)));
			$PLS_Settings = new PLS_Settings();
            
			// Register custom post types
			require_once(sprintf("%s/post-types/post_type_template.php", dirname(__FILE__)));
			$Post_Type_Template = new Post_Type_Template();

			$plugin = plugin_basename(__FILE__);
            add_filter("plugin_action_links_$plugin", array( $this, 'plugin_settings_link' ));
		}

		/**
		 * Activate the plugin
		 */
		public static function activate()
		{
			// Do nothing
		} // END public static function activate

		/**
		 * Deactivate the plugin
		 */
		public static function deactivate()
		{
			// Do nothing
		} // END public static function deactivate

		// Add the settings link to the plugins page
		function plugin_settings_link($links)
		{
			$settings_link = '<a href="options-general.php?page=wp_plugin_template">Settings</a>';
			array_unshift($links, $settings_link);
			return $links;
		}
	}
}

if(class_exists('PLS_Main'))
{
	// Installation and uninstallation hooks
	register_activation_hook(__FILE__, array('PLS_Main', 'activate'));
	register_deactivation_hook(__FILE__, array('PLS_Main', 'deactivate'));

	// instantiate the plugin class
	$wp_plugin_template = new PLS_Main();
    
}