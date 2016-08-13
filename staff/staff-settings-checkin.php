<?php

/*
Check-in 
The sub-menu for checking characters in

Functions of this page: 
-retrieve pre-check-in printouts
-check-in a pre-registerd character
-character check-in search
-check-in full character list


*/

/*********************************************************************************************************************************************
---------------------------------------------------------------------------------------------------------------------------------------Global
**********************************************************************************************************************************************/
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

function make_checkin_submenu() {
add_submenu_page( 'checkin_submenu', 'Check-In', 'Check-In', 'delete_pages', 'checkin_submenu', 'checkin_submenu_page');
}

// display the admin options page
function checkin_submenu_page() {
?>
<div>
<h2>Check In</h2>
This is the page for Check-in. 
<form action="options.php" method="post">
<?php settings_fields('plugin_options'); ?>
<?php do_settings_sections('plugin'); ?>
 
<input name="Submit" type="submit" value="<?php esc_attr_e('Save Changes'); ?>" />
</form></div>
<?php
}



?>