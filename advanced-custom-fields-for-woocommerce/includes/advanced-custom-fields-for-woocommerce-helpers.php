<?php
/**
 * Advanced Custom Fields for WooCommerce 辅助工具函数。
 *
 * @package Advanced_Custom_Fields_for_WooCommerce
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function advanced_custom_fields_for_woocommerce_helper_defaults() {
	return array(
		'cache'      => true,
		'debug'      => false,
		'version'    => '1.0.0',
	);
}
