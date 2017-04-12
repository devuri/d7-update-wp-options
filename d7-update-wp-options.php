<?php
/**
*---------------------------------------------------------------------------------
*	@package  Update Wp Options by DeVision7.com
*	@copyright  Copyright (c) 2017
*---------------------------------------------------------------------------------
*
*	Plugin Name: Update Wp Options
*	Plugin URI: http://alpha.devision7.com/wordpress-plugins/
*	Description: Update Option by Name.
*	Version: 1.0.0
*	Author: DeVision7.com
*	Author URI: http://devision7.com
*	Contributors: DeVision7.com
*	License: GPLv2 or later
*	License URI: http://www.gnu.org/licenses/gpl-2.0.txt
*	Text Domain: update-wp-options
*	Domain Path: /languages
*	Usage: .
*	Tags:
*
*
*	Requires PHP: 5.2+
*	Tested up to PHP: 7.0
*
*	Copyright 2017 DeVision7.com	(email : uriel.zipteq@gmail.com)
*	License: GNU General Public License
*	GPLv2 Full license details in license.txt
*---------------------------------------------------------------------------------------------------------------------------------------------------------
*
*	Update Wp Options is built using the Dv7 Plugin QuickStarter @ http://wp.deVision7.com/, (C) 2015- 2017 DeVision7.
*
*	Update Wp Options , like WordPress, is licensed under the GPL.
*	Use it to make something cool, have fun, and share.
*
*	Update Wp Options  is free software; you can redistribute it and/or
*	modify it under the terms of the GNU General Public License
*	as published by the Free Software Foundation; either version 2
*	of the License, or (at your option) any later version.
*
*	This program is distributed in the hope that it will be useful,
*	but WITHOUT ANY WARRANTY; without even the implied warranty of
*	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*	GNU General Public License for more details.
*
*	You should have received a copy of the GNU General Public License
*	along with Update Wp Options. If not, see http://www.gnu.org/licenses/
*---------------------------------------------------------------------------------------------------
*/


	// * DIRECT ACCESS DENIED *
	if ( ! defined( "WPINC" ) ) {
		die;
	}


	//plugin directory CONSTANT
	define("D7UPDATEWPOPTIONS_DIR", dirname(__FILE__));

	//PLUGIN URL
	define("D7UPDATEWPOPTIONS_URL", plugins_url( "/",__FILE__ ));


// output input data (to do secure with wp built in filter)
function wpo_get_input($input_name){

	$sanitize_data = sanitize_text_field($_POST[$input_name]);
	return $sanitize_data;

}

// output input data (to do secure with wp built in filter)
function wpo_get_input_numberonly($input_name){

	$sanitize_data = sanitize_text_field($_POST[$input_name]);

	// lets make sure we get back a number
	  if (is_numeric($sanitize_data)) {
			$numeric_value = $sanitize_data;
		}else{
				echo '<div id="message" class=error settings-error notice is-dismissible" ><p>Sorry Sparky <strong>'.$input_name.'   </strong> says we only accept <strong>Numbers</strong> here try again</p></div>';
		}
	return $numeric_value;

}

// display input field
function wpo_input($name, $value){

		echo ' <input name="'.$name.'" type="text" id="'.$name.'" value="'.get_option($value).'" class="regular-text">';

}

/**
					* 	ADMIN MENU * MARKET INDECIES
		*******************************************************************/

		add_action('admin_menu', 'update_wp_options_tools_mindex');

		function update_wp_options_tools_mindex() {
		    add_submenu_page(
		        'tools.php',
		        'Update Wp Options Page',
		        'Update Indices',
		        'edit_posts',
		        'update-wp-options-mindi',
		        'update_wp_options_qpage_mindi' );
		}

		//--------------- Admin MAIN Page ------------------------

				function update_wp_options_qpage_mindi(){

						// header
						require_once(D7UPDATEWPOPTIONS_DIR. "/_admin/head.php");

						// page
						require_once(D7UPDATEWPOPTIONS_DIR."/_admin/admin-mindi.php");

						// footer
						require_once(D7UPDATEWPOPTIONS_DIR. "/_admin/footer.php");

				}

/**
			* 	ADMIN MENU * CAMBIO
******************************/
add_action('admin_menu', 'update_wp_options_toolspage');

function update_wp_options_toolspage() {
    add_submenu_page(
        'tools.php',
        'Update Wp Options Page',
        'Update Cambio',
        'edit_posts',
        'update-wp-options-cambio',
        'update_wp_options_cambio' );
}

//--------------- Admin MAIN Page ------------------------

		function update_wp_options_cambio(){

				// header
				require_once(D7UPDATEWPOPTIONS_DIR. "/_admin/head.php");

				// page
				require_once(D7UPDATEWPOPTIONS_DIR."/_admin/admin-cambio.php");

				// footer
				require_once(D7UPDATEWPOPTIONS_DIR. "/_admin/footer.php");

		}

    /*
    *--------------------------------------------------------------------------
    * Start Plugin Code Here
    *--------------------------------------------------------------------------
    *
    * Ok .
    *
    */
