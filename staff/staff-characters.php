<?php

/*
Staff Characters
Main page of the "Characters" menu tab

Functions of this page: 
-View/modify all character sheets by name
-View/modify character sheets by active
-View/modify character sheets by inactive
-View/modify character sheets by level
-View/modify character sheets by race
-View/modify character sheets by player
-character search feature


*/

/*********************************************************************************************************************************************
---------------------------------------------------------------------------------------------------------------------------------------Global
**********************************************************************************************************************************************/
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

function make_characters_menu() {

	//create new top-level menu
	add_menu_page('Characters', 'Characters', 'delete_pages', 'characters_menu', 'characters_menu_page');

	//call register settings function
	add_action( 'admin_init', 'register_characters_options' );
}


function register_characters_options() {
	/*register our settings
	register_setting( 'mordavia_settings_group', 'new_option_name' );
	register_setting( 'mordavia_settings_group', 'some_other_option' );
	register_setting( 'mordavia_settings_group', 'option_etc' );
	*/
}

function characters_menu_page() {
?>
<div class="wrap">
<h1>Mordavia Plugin - Game Settings</h1>

<form method="post" action="options.php">
    <?php settings_fields( 'mordavia_settings_group' ); ?>
    <?php do_settings_sections( 'mordavia_settings_group' ); ?>
    <table class="form-table">
        <tr valign="top">
        <th scope="row">New Option Name</th>
        <td><input type="text" name="new_option_name" value="<?php echo esc_attr( get_option('new_option_name') ); ?>" /></td>
        </tr>
         
        <tr valign="top">
        <th scope="row">Some Other Option</th>
        <td><input type="text" name="some_other_option" value="<?php echo esc_attr( get_option('some_other_option') ); ?>" /></td>
        </tr>
        
        <tr valign="top">
        <th scope="row">Options, Etc.</th>
        <td><input type="text" name="option_etc" value="<?php echo esc_attr( get_option('option_etc') ); ?>" /></td>
        </tr>
    </table>
    
    <?php submit_button(); ?>

</form>
</div>
<?php 
} 


?>