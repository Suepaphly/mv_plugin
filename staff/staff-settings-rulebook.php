<?php

/*
Rulebook
The sub-menu for moderating the mordavia advantages rules

Functions of this page: 
-view/modify advantages

*/

/*********************************************************************************************************************************************
---------------------------------------------------------------------------------------------------------------------------------------Global
**********************************************************************************************************************************************/
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

function make_rulebook_submenu() {
add_submenu_page( 'rulebook_submenu', 'Check-In', 'Check-In', 'delete_pages', 'rulebook_submenu', 'rulebook_submenu_page');
}

// display the admin options page
function rulebook_submenu_page() {
?>
<div>
<h2>Rulebook Settings</h2>
Use this page to view/modify advantages. 
<form action="options.php" method="post">
<?php settings_fields('plugin_options'); ?>
<?php do_settings_sections('plugin'); ?>
 
<input name="Submit" type="submit" value="<?php esc_attr_e('Save Changes'); ?>" />
</form></div>
<?php
}


?>