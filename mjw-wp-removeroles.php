<?php
/**
 * Plugin Name: MJW Remove Roles
 * Plugin URI: https://mjw.pt
 * Description: Remove the Author and Contributor roles
 * Author: MJW Consulting
 * Version: 1.0
 * Author URI: https://mjw.pt
 * License: AGPL3
 */

function wps_remove_role() {
    remove_role( 'author' );
    remove_role( 'contributor' );
}
add_action( 'init', 'wps_remove_role' );
