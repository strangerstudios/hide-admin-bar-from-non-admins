=== Hide Admin Bar from Non-Admins ===
Contributors: strangerstudios
Tags: admin bar, adminbar, dashboard, membership
Requires at least: 3.1
Tested up to: 3.5.1
Stable tag: 1.0

The WordPress admin bar will be hidden for all non-admin users.

== Description ==

Perfect for sites where there is only one admin who needs access to the dashboard and the admin bar.

When activated only administrators will see the admin bar.

This plugin is just a few lines of code. Specifically the line `if(!current_user_can('administrator'))` determines who the admin bar is hidden for. Feel free to edit this to your needs. E.g. using 
`if(!current_user_can('edit_posts'))` will allow authors to view the admin bar as well.

This plugin has no settings and will not be updated often, so feel free to edit to your needs.

== Installation ==

1. Upload the `hide-admin-bar-from-non-admins` directory to the `/wp-content/plugins/` directory of your site.
1. Activate the plugin through the 'Plugins' menu in WordPress.
1. Tweak the plugin code as needed. There are no settings, and this plugin will not be updated oftne.

