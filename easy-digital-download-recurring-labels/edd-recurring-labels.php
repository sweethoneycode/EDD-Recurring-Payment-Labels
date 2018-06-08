<?php 

/**
 * Plugin Name: EDD Recurring Payment Labels
 * Plugin URI: http://www.honeycombdesignstudio.com
 * Description: Makes it easier to change the recurring payment labels on payment buttons. Customize: Day, Week, Month, Year.
 * Author: Jonah Brown
 * Author URI: http://www.honeycombdesignstudio.com
 * Version: 1.3
 *
 * @package     EDD Recurring Payment Labels
 * @author      Jonah Brown
 * @since       1.0
 * contributor: Andrew Munro (Sumobi)
 */


// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

        // Plugin Folder Path
        if ( ! defined( 'EDD_RL_PLUGIN_DIR' ) )
            define( 'EDD_RL_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

        // Plugin Folder URL
        if ( ! defined( 'EDD_RL_PLUGIN_URL' ) )
            define( 'EDD_RL_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

        // Plugin Root File
        if ( ! defined( 'EDD_RL_PLUGIN_FILE' ) )
            define( 'EDD_RL_PLUGIN_FILE', __FILE__ );
			

// EDD_Recurring
if ( !class_exists( 'EDD_Recurring' ) ){
	include_once( EDD_RL_PLUGIN_DIR . 'includes/show_labels.php' );
	
	if( is_admin() ) {
		include_once( EDD_RL_PLUGIN_DIR . 'includes/functions.php' );
	}
}

add_action('admin_notices', 'showAdminMessages');

function showAdminMessages()
{
	$plugin_messages = array();

	include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

	// Download the Yoast WordPress SEO plugin
	if(!is_plugin_active( 'edd-recurring/edd-recurring.php' ))
	{
		$plugin_messages[] = 'This theme requires you to install the Recurring Payments plugin, <a href="https://easydigitaldownloads.com/extensions/recurring-payments/">download it from here</a>.';
	}


	if(count($plugin_messages) > 0)
	{
		echo '<div id="message" class="error">';

			foreach($plugin_messages as $message)
			{
				echo '<p><strong>'.$message.'</strong></p>';
			}

		echo '</div>';
	}
}
?>