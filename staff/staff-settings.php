<?php

/*
Staff Settings
Main page of the "Settings" menu tab

Functions of this page: 
-Assign un-assigned Characters to accounts
-Assign Staff Members
-Assign Characters to Staff Members



*/

/*********************************************************************************************************************************************
---------------------------------------------------------------------------------------------------------------------------------------Global
**********************************************************************************************************************************************/
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

function make_mordavia_settings_menu() {
	//create new top-level menu
	add_menu_page(
		'Mordavia Plugin Settings', 
		'Mordavia Plugin Settings', 
		'delete_pages', 
		'mordavia_settings_menu', 
		'mordavia_settings_page',
		'', 
		1
	);
}


function mordavia_settings_page() {
?>
<div class="wrap">
<h1>Mordavia Plugin - Game Settings</h1>

</div>
<?php
} 
?>