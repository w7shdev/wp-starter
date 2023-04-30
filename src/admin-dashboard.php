<?php
/**
* Adding Admin dashboard functionality to the plugin
* if you need this feature then you have to include it in wp-starter.php
*/


function add_wp_starter_menu() # replace the function name with your plugin name
{
    add_menu_page(
        __('plugin title wordpress starter plugin', "wp-starter"),
        __('plugin title wordpress starter plugin', "wp-starter"),
        'permission_level',
        'menu_key',
        'path/to/template.php',
        'dashboard_template'],
        null, #icon if you need to add one
        10
        );
}
// replace the second param if you are going to rename the function
// above
add_action('admin_menu', 'add_wp_starter_menu');
