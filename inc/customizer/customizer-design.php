<?php
/**
 * Created by PhpStorm.
 * User: kojikuno
 * Date: 2019-02-27
 * Time: 11:24
 */

use Inc2734\WP_Customizer_Framework\Framework;

if ( ! is_customize_preview() ) {
	return;
}

Framework::panel(
	'design',
	[
		'title' => __( 'Design', 'op-weblog' ),
		'priority' => 1020,
	]
);

Framework::section(
	'basic',
	[
		'title' => __( 'Basic design', 'op-weblog' ),
		'description' => __( '', 'op-weblog' ),
		'priority' => 130,
	]
);

Framework::control(
	'color',
	'op-accent-color',
	[
		'label' => __( 'Accent color', 'op-weblog' ),
		'default' => '#96ceb4',
		'priority' => 100,
	]
);

$panel   = Framework::get_panel( 'design' );
$section = Framework::get_section( 'basic' );
$control = Framework::get_control( 'op-accent-color' );
$control->join( $section )->join( $panel );
