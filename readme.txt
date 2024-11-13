=== Hide Admin Bar from Non-Admins ===
Contributors: strangerstudios
Tags: admin bar, toolbar, adminbar, dashboard, membership
Requires at least: 5.2
Tested up to: 6.4.1
Stable tag: 1.0.1

Hides the WordPress toolbar (admin bar) for all non-admin users. Simple plugin with no settings to configure.

== Description ==

### Install, activate, and you're done.

This plugin hides the WordPress Toolbar (admin bar) for all visitors and users without the 'administrator' role. It's a very simple plugin with no settings to configure.

* Use this plugin for sites with only one admin who needs access to the dashboard and the admin bar.
* This plugin is super lightweight, with just a few lines of code.
* If you need to show the toolbar for other user roles, use the filter `habfna_show_admin_bar_roles`.

This plugin is a tweak of the code by Yoast to hide the admin bar for non-admins only.

== Installation ==

### Install Hide Admin Bar from Non-Admins from within WordPress

1. Visit the plugins page within your dashboard and select "Add New"
1. Search for "Hide Admin Bar from Non-Admins"
1. Locate this plugin and click "Install"
1. Activate "Hide Admin Bar from Non-Admins" through the "Plugins" menu in WordPress
1. That's it. There are no settings.

### Install Hide Admin Bar from Non-Admins Manually

1. Upload the `hide-admin-bar-from-non-admins` folder to the `/wp-content/plugins/` directory
1. Activate "Hide Admin Bar from Non-Admins" through the "Plugins" menu in WordPress
1. That's it. There are no settings.

== Changelog ==

= 1.0.1 - 2022-04-11 =
* ENHANCEMENT: Added `habfna_show_admin_bar_roles` filter to show the admin toolbar for additional roles.
* BUG FIX: Fixed code to hide the admin bar from non-admins when viewing the Edit Profile WordPress admin page.

= 1.0 =
* Initial version of the plugin.
