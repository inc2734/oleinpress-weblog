<?php
/**
 * Created by PhpStorm.
 * User: kojikuno
 * Date: 2019-02-27
 * Time: 11:47
 */

use Inc2734\WP_Customizer_Framework\Framework;

if ( ! is_customize_preview() ) {
	return;
}

Framework::panel(
	'seo',
	[
		'title' => __( 'SEO', 'op-weblog' ),
		'priority' => 1030,
	]
);

/**
 * section : Google Analytics
 */
Framework::section(
	'google-analytics',
	[
		'title' => __( 'Google Analytics', 'op-weblog' ),
		'description' => __( '', 'op-weblog' ),
		'priority' => 130,
	]
);

/**
 * control : Tracking ID
 */
Framework::control(
	'text',
	'op-google-analytics-tracking-id',
	[
		'label' => __( 'Tracking ID', 'op-weblog' ),
		'description' => __( 'e.g. UA-1234567-89', 'op-weblog' ),
		'priority' => 100,
	]
);

$panel   = Framework::get_panel( 'seo' );
$section = Framework::get_section( 'google-analytics' );
$control = Framework::get_control( 'op-google-analytics-tracking-id' );
$control->join( $section )->join( $panel );

/**
 * section : Google Search Console
 */
Framework::section(
	'google-search-console',
	[
		'title' => __( 'Google Search Console', 'op-weblog' ),
		'description' => __( '', 'op-weblog' ),
		'priority' => 150,
	]
);

/**
 * control : Search console site verification code
 */
Framework::control(
	'text',
	'op-google-search-console-verification',
	[
		'label' => __( 'Google site verification', 'op-weblog' ),
		'description' => sprintf(
			__( 'Please enter part %1$s of %2$s', 'op-weblog'),
			'<code>xxxxxxx</code>',
			'<code>&lt;meta name="google-site-verification" content="xxxxxxx" /&gt;</code>'
		),
	]
);

$panel   = Framework::get_panel( 'seo' );
$section = Framework::get_section( 'google-search-console' );
$control = Framework::get_control( 'op-google-search-console-verification' );
$control->join( $section )->join( $panel );