<?php
if(!class_exists('PLS_Settings'))
{
	class PLS_Settings
	{
		/**
		 * Construct the plugin object
		 */
		public function __construct()
		{
			// register actions
            add_action('admin_init', array(&$this, 'admin_init'));
        	add_action('admin_menu', array(&$this, 'add_menu'));
		}
		
        /**
         * hook into WP's admin_init action hook
         */
        public function admin_init()
        {
        	// register your plugin's settings
        	register_setting('power_level_scan-group', 'icon_true');
        	register_setting('power_level_scan-group', 'icon_false');

        	// add your settings section
        	add_settings_section(
        	    'power_level_scan-section', 
        	    'Power Level Scan Settings', 
        	    array(&$this, 'settings_section_power_level_scan'), 
        	    'power_level_scan'
        	);
        	
        	// add your setting's fields
            add_settings_field(
                'power_level_scan-icon_true', 
                'Icon True', 
                array(&$this, 'settings_field_input_text'), 
                'power_level_scan', 
                'power_level_scan-section',
                array(
                    'field' => 'icon_true'
                )
            );
            add_settings_field(
                'power_level_scan-icon_false', 
                'Icon False', 
                array(&$this, 'settings_field_input_text'), 
                'power_level_scan', 
                'power_level_scan-section',
                array(
                    'field' => 'icon_false'
                )
            );
            // Possibly do additional admin_init tasks
        }
        
        public function settings_section_power_level_scan()
        {
            // Think of this as help text for the section.
            echo 'These settings do things for the Power Level Scan';
        }
        
        /**
         * This function provides text inputs for settings fields
         */
        public function settings_field_input_text($args)
        {
            // Get the field name from the $args array
            $field = $args['field'];
            // Get the value of this setting
            $value = get_option($field);
            // echo a proper input type="text"
            echo sprintf('<input type="text" name="%s" id="%s" value="%s" />', $field, $field, $value);
        }
        
        /**
         * add a menu
         */		
        public function add_menu()
        {
            // Add a page to manage this plugin's settings
        	add_options_page(
        	    'Power Level Scan Settings', 
        	    'Power Level Scan',
        	    'manage_options',
        	    'power_level_scan',
        	    array(&$this, 'plugin_settings_page')
        	);
        }
    
        /**
         * Menu Callback
         */		
        public function plugin_settings_page()
        {
        	if(!current_user_can('manage_options'))
        	{
        		wp_die(__('You do not have sufficient permissions to access this page.'));
        	}
	
        	// Render the settings template
        	include(sprintf("%s/templates/settings.php", dirname(__FILE__)));
        }
    }
}
