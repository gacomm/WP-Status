<?php
/**
 * Plugin Name: WP Status
 * Description: Reports back to console about health and status of WP Site
 * Version: 0.1
 * Author: Jason Jozwiak
 * Author URI: http://jasonjozwiak.com
 * License: A short license name. Example: GPL2
 */

if ( ! function_exists( 'get_plugins' ) ) {
  require_once ABSPATH . 'wp-admin/includes/plugin.php';
}

$plugins = get_plugins();

echo '<pre>';
print_r($plugins);
echo '</pre>';

$plugin_array = array();

foreach($plugins as $key => $value){
  $plugin_array[] = array('plugin_name' => $value['Name'],
                          'status' => is_plugin_active($key),
  );

}

echo '<pre>';
print_r($plugin_array);
echo '</pre>';


//get active plugins and put them in an array

//loop through each plugin and check if it is in the active array

//otherwise it's inactive and may be able to be deleted
exit();


