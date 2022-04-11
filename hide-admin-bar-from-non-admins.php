<?php
/*
Plugin Name: Hide Admin Bar From Non-Admins
Plugin URI: https://www.paidmembershipspro.com/add-ons/hide-admin-bar-from-non-admins/
Description: Hides the WordPress toolbar (admin bar) for all non-admin users.
Version: 1.0.1
Author: Stranger Studios
Author URI: https://www.strangerstudios.com
*/
/*
	Copyright 2013	Stranger Studios	(email : jason@strangerstudios.com)
	Licensed under the GPLv2 license: http://www.gnu.org/licenses/gpl-2.0.html
*/

function habfna_show_admin_bar() {
	$user = wp_get_current_user();
	$habfna_show_admin_bar_roles = apply_filters( 'habfna_show_admin_bar_roles', array( 'administrator' ) );
	if ( ! array_intersect( $habfna_show_admin_bar_roles, $user->roles ) ) {
		return true;
	} else {
		return false;
	}
}

function habfna_disable_frontend_admin_bar() {
	if ( habfna_show_admin_bar() ) {
		add_filter( 'show_admin_bar', '__return_false' );
	}
}
add_action( 'wp', 'habfna_disable_frontend_admin_bar' );

function habfna_disable_backend_admin_bar() {
	if ( habfna_show_admin_bar() ) { ?>
		<style type="text/css" media="screen">html.wp-toolbar { padding-top: 0; } #wpadminbar { display: none; }</style>
		<?php
	}
}
add_action( 'admin_print_scripts-profile.php', 'habfna_disable_backend_admin_bar' );
