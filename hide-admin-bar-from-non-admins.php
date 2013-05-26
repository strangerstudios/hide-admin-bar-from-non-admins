<?php
/*
Plugin Name: Hide Admin Bar From Non-admins
Plugin URI: http://www.paidmembershipspro.com/wp/hide-admin-bar-from-non-admins/
Description: A tweak of the code by Yoast to hide the admin bar for non-admins only.
Version: 1.0
Author: Stranger Studios
Author URI: http://www.strangerstudios.com
*/
/*
	Copyright 2013	Stranger Studios	(email : jason@strangerstudios.com)
	Licensed under the GPLv2 license: http://www.gnu.org/licenses/gpl-2.0.html
*/

function habfna_hide_admin_bar_settings()
{
?>
	<style type="text/css">
		.show-admin-bar {
			display: none;
		}
	</style>
<?php
}
function habfna_disable_admin_bar()
{
	if(!current_user_can('administrator'))
	{
		add_filter( 'show_admin_bar', '__return_false' );
		add_action( 'admin_print_scripts-profile.php', 'habfna_hide_admin_bar_settings' );
	}
}
add_action('init', 'habfna_disable_admin_bar', 9);
