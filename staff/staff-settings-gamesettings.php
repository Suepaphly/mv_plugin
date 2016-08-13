<?php

/*
Game Settings
The sub-menu for moderating game settings

Functions of this page: 
-view/modify the calculations of stat-advantages
-view/modify the requirements of each advantage list

*/

/*********************************************************************************************************************************************
---------------------------------------------------------------------------------------------------------------------------------------Global
**********************************************************************************************************************************************/
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

function make_game_settings_submenu() {
add_submenu_page( 'game_settings_submenu', 'Game Settings', 'Game Settings', 'manage_options', 'game_settings_submenu', 'game_settings_page');
}

// display the admin options page
function game_settings_page() {
?>
<div>
<h2>Mordavia Game Settings</h2>
DO NOT MODIFY THIS SETTINGS PAGE UNLESS YOU ABSOLUTELY KNOW WHAT YOU'RE DOING. YOU'VE BEEN WARNED.
<form action="options.php" method="post">
<?php settings_fields('plugin_options'); ?>
<?php do_settings_sections('plugin'); ?>
 
<input name="Submit" type="submit" value="<?php esc_attr_e('Save Changes'); ?>" />
</form></div>
<?php
}


?>