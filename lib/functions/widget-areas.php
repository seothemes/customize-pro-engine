<?php
/**
 * Customize Pro.
 *
 * WARNING: This file should never be modified under any circumstances.
 * Customizations should be made in the form of a core-functionality
 * plugin so that the theme can be updated without losing changes.
 *
 * @package   CustomizePro
 * @author    SEO Themes
 * @copyright 2019 SEO Themes
 * @license   GPL-2.0-or-later
 */

namespace CustomizePro;

\add_action( 'genesis_setup', __NAMESPACE__ . '\unregister_widget_areas', 19 );
/**
 * Unregister widget areas (registered manually for custom ordering).
 *
 * @since 1.0.0
 *
 * @return void
 */
function unregister_widget_areas() {
	\unregister_sidebar( 'sidebar' );
	\unregister_sidebar( 'sidebar-alt' );
	\unregister_sidebar( 'header-right' );
}

\add_action( 'genesis_setup', __NAMESPACE__ . '\register_widget_areas', 20 );
/**
 * Register widget areas.
 *
 * Pro widgets registered here for correct ordering. Can be enabled/disabled
 * with module key.
 *
 * @since 1.0.0
 *
 * @return void
 */
function register_widget_areas() {
	$widget_areas = \apply_filters(
		'customize_pro_widget_areas',
		[
			'above-header'        => [
				'name'        => __( 'Above Header', 'customize-pro' ),
				'description' => __( 'This is the Above Header widget area.', 'customize-pro' ),
			],
			'header-left-widget'  => [
				'name'        => __( 'Header Left', 'customize-pro' ),
				'description' => __( 'This is the Header Left widget area. It typically appears next to the site title or logo. This widget area is not suitable to display every type of widget, and works best with a custom menu, a search form, or possibly a text widget.', 'customize-pro' ),
			],
			'header-right-widget' => [
				'name'        => __( 'Header Right', 'customize-pro' ),
				'description' => __( 'This is the Header Right widget area. It typically appears next to the site title or logo. This widget area is not suitable to display every type of widget, and works best with a custom menu, a search form, or possibly a text widget.', 'customize-pro' ),
			],
			'mobile-menu'         => [
				'name'        => __( 'Mobile Menu', 'customize-pro' ),
				'description' => __( 'This is the Mobile Menu widget area. It is displayed inside the responsive mobile menu on smaller screens.', 'customize-pro' ),
			],
			'mega-menu'           => [
				'name'        => __( 'Mega Menu', 'customize-pro' ),
				'description' => __( 'This is the Mega Menu widget area.', 'customize-pro' ),
			],
			'below-header'        => [
				'name'        => __( 'Below Header', 'customize-pro' ),
				'description' => __( 'This is the Below Header widget area.', 'customize-pro' ),
			],
			'above-content'       => [
				'name'        => __( 'Above Content', 'customize-pro' ),
				'description' => __( 'This is the Above Content widget area.', 'customize-pro' ),
			],
			'after-entry'         => [
				'name'        => __( 'After Entry', 'customize-pro' ),
				'description' => __( 'Widgets in this widget area will display after single entries.', 'customize-pro' ),
			],
			'sidebar'             => [
				'name'        => __( 'Primary Sidebar', 'customize-pro' ),
				'description' => __( 'This is the sidebar widget area if you are using a two column site layout option.', 'customize-pro' ),
			],
			'sidebar-alt'         => [
				'name'        => __( 'Secondary Sidebar', 'customize-pro' ),
				'description' => __( 'This is the sidebar widget area if you are using a three column site layout option.', 'customize-pro' ),
			],
			'below-content'       => [
				'name'        => __( 'Below Content', 'customize-pro' ),
				'description' => __( 'This is the Below Content widget area.', 'customize-pro' ),
			],
			'above-footer'        => [
				'name'        => __( 'Above Footer', 'customize-pro' ),
				'description' => __( 'This is the Above Footer widget area.', 'customize-pro' ),
			],
			'below-footer'        => [
				'name'        => __( 'Below Footer', 'customize-pro' ),
				'description' => __( 'This is the Below Footer widget area.', 'customize-pro' ),
			],
		]
	);

	foreach ( $widget_areas as $id => $args ) {
		\genesis_register_sidebar(
			[
				'id'          => $id,
				'name'        => $args['name'],
				'description' => $args['description'],
			]
		);
	}
}

\add_action( 'genesis_setup', __NAMESPACE__ . '\register_footer_widgets', 20 );
/**
 * Register footer widget areas depending on selected option.
 *
 * @since 1.0.0
 *
 * @return void
 */
function register_footer_widgets() {
	$setting = _get_value( 'footer_widgets_columns' );
	$columns = \count( explode( '-', $setting ) );
	$count   = \is_customize_preview() ? 4 : $columns;

	for ( $i = 1; $i <= $count; $i++ ) {
		\genesis_register_sidebar(
			[
				'id'          => 'footer-' . $i,
				'name'        => __( 'Footer ', 'customize-pro' ) . $i,
				'description' => __( 'This is the Footer ', 'customize-pro' ) . $i . __( ' widget area.', 'customize-pro' ),
			]
		);
	}
}

\add_action( 'genesis_setup', __NAMESPACE__ . '\register_footer_credits', 20 );
/**
 * Display footer credits widget area.
 *
 * @since 1.0.0
 *
 * @return void
 */
function register_footer_credits() {
	$footer_credits = _get_value( 'footer_credits_type' );

	if ( 'widget' === $footer_credits || \is_customize_preview() ) {
		\genesis_register_sidebar(
			[
				'id'          => 'footer-credits',
				'name'        => __( 'Footer Credits', 'customize-pro' ),
				'description' => __( 'This is the Footer Credits widget area.', 'customize-pro' ),
			]
		);
	}
}

\add_action( 'genesis_after_title_area', __NAMESPACE__ . '\header_right', 15 );
/**
 * Display Header Right widget area.
 *
 * @since 1.0.0
 *
 * @return void
 */
function header_right() {
	$enabled = _get_value( 'header_right_enable' );

	if ( 'hide' === $enabled ) {
		return;
	}

	\genesis_widget_area(
		'header-right-widget',
		[
			'before' => '<div class="header-right widget-area ' . $enabled . '">',
			'after'  => '</div>',
		]
	);
}

\add_action( 'genesis_after_entry', __NAMESPACE__ . '\after_entry', 9 );
/**
 * Display After Entry widget area.
 *
 * @since 1.0.0
 *
 * @return void
 */
function after_entry() {
	if ( ! \is_single() ) {
		return;
	}

	\genesis_widget_area(
		'after-entry',
		[
			'before' => '<div class="after-entry widget-area">',
			'after'  => '</div>',
		]
	);
}
