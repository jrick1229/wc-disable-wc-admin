<?php
/*
 * Plugin Name: WooCommerce - Disable WooCommerce Admin
 * Plugin URI: https://github.com/jrick1229/wc-disable-wc-admin/
 * Description: Disables the core WooCommerce integration of WooCommerce Admin (eg, the Analytics tab, etc.)
 * Author: jrick1229
 * Author URI: https://joeyrr.com/
 * License: GPLv3
 * Version: 1.0.0
 * Version: 1.0.0
 * Requires at least: 4.0
 * Tested up to: 4.8
 *
 * GitHub Plugin URI: jrick1229/wc-disable-wc-admin
 * GitHub Branch: master
 *
 * @package		Disable WooCommerce Admin
 * @author		jrick1229
 * @since		1.0
 */

add_filter( 'woocommerce_admin_disabled', '__return_true' );