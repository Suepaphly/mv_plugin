<?php

/*
View Personal Staff Characters
Shows characters created by the logged-in staff member

Functions of this page: 
-View/modify NPC character sheets

*/

/*********************************************************************************************************************************************
---------------------------------------------------------------------------------------------------------------------------------------Global
**********************************************************************************************************************************************/
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

function make_mychar_submenu() {
add_submenu_page( 'mychar_submenu', 'Check-In', 'Check-In', 'delete_pages', 'mychar_submenu', 'mychar_submenu_page');
}

// display the admin options page
function mychar_submenu_page() {
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