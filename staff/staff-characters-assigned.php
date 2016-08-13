<?php

/*
View Assigned Characters
Shows characters assigned to the currently logged-in staff member

Functions of this page: 
-View/Modify Assigned Character Sheets

*/

/*********************************************************************************************************************************************
---------------------------------------------------------------------------------------------------------------------------------------Global
**********************************************************************************************************************************************/
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

function make_assignedchar_submenu() {
add_submenu_page( 'assignedchar_submenu', 'Check-In', 'Check-In', 'delete_pages', 'assignedchar_submenu', 'assignedchar_submenu_page');
}

// display the admin options page
function assignedchar_submenu_page() {
?>
<div>
<h2>My Assigned Characters</h2>
Player Characters assigned to you.
<form action="options.php" method="post">
<?php settings_fields('plugin_options'); ?>
<?php do_settings_sections('plugin'); ?>
 
<input name="Submit" type="submit" value="<?php esc_attr_e('Save Changes'); ?>" />
</form></div>
<?php
}



?>