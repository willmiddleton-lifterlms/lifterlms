<?php
/**
 * The main LifterLMS Stylesheet Asset Definition list
 *
 * This file returns an array of stylesheet asset definition arrays.
 *
 * The array key of each definition is the asset's "handle" which
 * is used by both LifterLMS and WordPress to identify the asset
 * during registration and enqueue.
 *
 * The remaining items in each definition are optional and will be
 * automatically populated with default values. See `LLMS_Assets::get_defaults()`
 * for information on the default values of the asset.
 *
 * See `LLMS_Assets::get()` for full documentation on the properties
 * of an asset definition.
 *
 * @package LifterLMS/Assets
 *
 * @since 4.4.0
 * @version 5.0.0
 */

defined( 'ABSPATH' ) || exit;

/**
 * Stylesheets assets list
 *
 * @since 4.4.0
 * @since 4.4.4 Added llms-admin-setup.
 * @since 4.8.0 Added llms-admin-importer.
 * @since 5.0.0 Added llms-select2.
 */
return array(

	// Core.
	'lifterlms-styles'    => array(
		'file_name' => 'lifterlms',
	),
	'certificates'        => array(),

	// Admin.
	'llms-admin-setup'    => array(
		'file_name' => 'admin-setup',
	),
	'llms-admin-importer' => array(
		'file_name' => 'admin-importer',
	),
	'llms-builder-styles' => array(
		'file_name'    => 'builder',
		'dependencies' => array( 'llms-datetimepicker', 'llms-quill-bubble', 'webui-popover' ),
	),

	// Vendor.
	'llms-datetimepicker' => array(
		'file_name' => 'jquery.datetimepicker',
		'path'      => 'assets/vendor/datetimepicker',
		'version'   => '1.3.4',
		'rtl'       => false,
		'suffix'    => '.min', // We only have a minified version of this asset.
	),
	'llms-iziModal'       => array(
		'file_name' => 'iziModal',
		'path'      => 'assets/vendor/izimodal',
		'version'   => '1.5.1',
		'rtl'       => false,
	),
	'llms-select2-styles' => array(
		'file_name' => 'select2',
		'path'      => 'assets/vendor/select2/css',
		'version'   => '4.0.3',
		'rtl'       => false,
	),
	'webui-popover'       => array(
		'file_name' => 'jquery.webui-popover',
		'path'      => 'assets/vendor/webui-popover',
		'version'   => '1.2.15',
		'rtl'       => false,
	),

);
