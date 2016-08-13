<?php

/*
Plugin name: Mordavia Plugin
Plugin URI: http://www.teddyblanchard.com
Description: This plugin allows Mordavia LARP staff members to easily administrate a Mordavia game. 
Author: Teddy Blanchard
Author URI: http://www.teddyblanchard.com
Version: Alpha
*/

/*********************************************************************************************************************************************
---------------------------------------------------------------------------------------------------------------------------------------Global
**********************************************************************************************************************************************/
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

require('require.php');




/*********************************************************************************************************************************************
------------------------------------------------------------------------------------------------------------------------------------Activation
**********************************************************************************************************************************************/

register_activation_hook( __FILE__, 'mv_activate_plugin_script');

function mv_activate_plugin_script(){

	// Make Mordavia Settings Top-level menu and submenus
	add_action('admin_menu', 'make_mordavia_settings_menu');
		add_action('admin_menu', 'make_game_settings_submenu');
		add_action('admin_menu', 'make_events_submenu');
		add_action('admin_menu', 'make_checkin_submenu');
		add_action('admin_menu', 'make_rulebook_submenu');

	// Make Characters Top-level menu and submenus
	add_action('admin_menu', 'make_characters_menu');
		add_action('admin_menu', 'make_mychar_submenu');
		add_action('admin_menu', 'make_addnewchar_submenu');
		add_action('admin_menu', 'make_assignedchar_submenu');
	/*
	// Make Factions Top-level menu and submenus
	add_action('admin_menu', 'make_factions_menu');
		add_action('admin_menu', 'make_myfac_submenu');
		add_action('admin_menu', 'make_addnewfac_submenu');
	
	// Make Interlude Top-level menu and submenus
	add_action('admin_menu', 'make_ia_menu');
		add_action('admin_menu', 'make_oldia_submenu');
	
	//Check for pages, if they aren't created, create them
		//my characters (player)
			//interlude actions
			//update
			//backhistory
			//journal
		//rsvp form 
		
	//Check for mv_* database entries and make them if they don't match
		//advantages
		//advantage points
		//attendance
		//characters
		//interlude actions
		//journal
		//lives		
		
	*/
}


?>