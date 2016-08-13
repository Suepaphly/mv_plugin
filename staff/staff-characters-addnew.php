<?php

/*
Add Staff Characters
Adds a new Staff Character

Functions of this page: 
-Creates a new Character without player restrictions

*/

/*********************************************************************************************************************************************
---------------------------------------------------------------------------------------------------------------------------------------Global
**********************************************************************************************************************************************/
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

function make_addnewchar_submenu() {
add_submenu_page( 'addnewchar_submenu', 'Check-In', 'Check-In', 'delete_pages', 'addnewchar_submenu', 'addnewchar_submenu_page');
}

// display the admin options page
function addnewchar_submenu_page() {
?>
<div>
<h2>My Characters</h2>
Your created Characters
<form action="options.php" method="post">
<?php settings_fields('plugin_options'); ?>
<?php do_settings_sections('plugin'); ?>
 
<input name="Submit" type="submit" value="<?php esc_attr_e('Save Changes'); ?>" />
</form></div>
<?php
}



?>