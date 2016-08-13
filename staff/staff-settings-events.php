<?php

/*
Events
The sub-menu for moderating events

Functions of this page: 
-schedule new event
-view/modify scheduled events


*/

/*********************************************************************************************************************************************
---------------------------------------------------------------------------------------------------------------------------------------Global
**********************************************************************************************************************************************/
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

function make_events_submenu() {
add_submenu_page( 'events_submenu', 'Event Settings', 'Event Settings', 'delete_pages', 'events_submenu', 'events_submenu_page');
}

// display the admin options page
function events_submenu_page() {
?>
<div>
<h2>Event Settings</h2>
DO NOT MODIFY THIS SETTINGS PAGE UNLESS YOU ABSOLUTELY KNOW WHAT YOU'RE DOING. YOU'VE BEEN WARNED.
<form action="options.php" method="post">
<?php settings_fields('plugin_options'); ?>
<?php do_settings_sections('plugin'); ?>
 
<input name="Submit" type="submit" value="<?php esc_attr_e('Save Changes'); ?>" />
</form></div>
<?php
}



?>