<?php
/*
Plugin Name: Disable Default REST Routes
Plugin URI: https://github.com/bond-agency/bond-disable-default-rest-routes
Description: This plugin disables the built in REST routes.
Version: 1.0.0
Author: Bond
Author URI: https://bond-agency.com
*/

// Disable default rest routes
remove_action( 'rest_api_init', 'create_initial_rest_routes', 99 );