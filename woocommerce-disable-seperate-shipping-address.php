<?php
/**
* Plugin Name: WooCommerce disable seperate Shipping Address 
* Plugin URI: https://github.com/tdjong/
* Description: A plugin to disable a seperate shipping address in WooCommerce.
* Version: 1.0
* Author: Tiemco de Jong
* Author URI: http://tiemcoreflex.nl/
**/

add_filter( 'woocommerce_ship_to_different_address_checked', '__return_false' );
