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

/**
 * Returns array of default Customizer panels and sections.
 *
 * @since 1.0.0
 *
 * @return array
 */
function _get_default_sections() {
	return [
		'general'     => [
			'license'     => __( 'License Key', 'customize-pro' ),
			'performance' => __( 'Performance', 'customize-pro' ),
			'breakpoints' => __( 'Breakpoints', 'customize-pro' ),
		],
		'base'        => [
			'global'      => __( 'Global', 'customize-pro' ),
			'body'        => __( 'Body', 'customize-pro' ),
			'headings'    => __( 'Headings', 'customize-pro' ),
			'links'       => __( 'Links', 'customize-pro' ),
			'buttons'     => __( 'Buttons', 'customize-pro' ),
			'inputs'      => __( 'Inputs', 'customize-pro' ),
			'blockquotes' => __( 'Blockquotes', 'customize-pro' ),
			'code'        => __( 'Code', 'customize-pro' ),
			'lists'       => __( 'Lists', 'customize-pro' ),
			'tables'      => __( 'Tables', 'customize-pro' ),
		],
		'header'      => [
			'primary'     => __( 'Primary Header', 'customize-pro' ),
			'title-area'  => __( 'Title Area', 'customize-pro' ),
			'right'       => __( 'Header Right', 'customize-pro' ),
			'left'        => __( 'Header Left', 'customize-pro' ),
			'above'       => __( 'Above Header', 'customize-pro' ),
			'below'       => __( 'Below Header', 'customize-pro' ),
			'transparent' => __( 'Transparent Header', 'customize-pro' ),
			'sticky'      => __( 'Sticky Header', 'customize-pro' ),
			'search'      => __( 'Search', 'customize-pro' ),
		],
		'menus'       => [
			'primary'         => __( 'Primary Menu', 'customize-pro' ),
			'secondary'       => __( 'Secondary Menu', 'customize-pro' ),
			'mobile'          => __( 'Mobile Menu', 'customize-pro' ),
			'menu-toggle'     => __( 'Menu Toggle', 'customize-pro' ),
			'sub-menu'        => __( 'Sub Menu', 'customize-pro' ),
			'sub-menu-toggle' => __( 'Sub Menu Toggle', 'customize-pro' ),
			'footer'          => __( 'Footer Menu', 'customize-pro' ),
			'footer-widgets'  => __( 'Footer Widgets Menu', 'customize-pro' ),
			'social'          => __( 'Social Menu', 'customize-pro' ),
			'mega'            => __( 'Mega Menu', 'customize-pro' ),
		],
		'hero'        => [
			'settings' => __( 'Settings', 'customize-pro' ),
		],
		'content'     => [
			'main'           => __( 'Main Content', 'customize-pro' ),
			'breadcrumbs'    => __( 'Breadcrumbs', 'customize-pro' ),
			'author-box'     => __( 'Author Box', 'customize-pro' ),
			'featured-image' => __( 'Featured Image', 'customize-pro' ),
			'avatar'         => __( 'Avatar', 'customize-pro' ),
			'sidebar'        => __( 'Sidebar', 'customize-pro' ),
			'search-form'    => __( 'Search Form', 'customize-pro' ),
			'above'          => __( 'Above Content', 'customize-pro' ),
			'below'          => __( 'Below Content', 'customize-pro' ),
		],
		'sidebars'    => [
			'primary'          => __( 'Primary Sidebar', 'customize-pro' ),
			'secondary'        => __( 'Secondary Sidebar', 'customize-pro' ),
			'featured-content' => __( 'Featured Content', 'customize-pro' ),
		],
		'single'      => [
			'entry'          => __( 'Entry', 'customize-pro' ),
			'after-entry'    => __( 'After Entry', 'customize-pro' ),
			'featured-image' => __( 'Featured Image', 'customize-pro' ),
			'post-meta'      => __( 'Post Meta', 'customize-pro' ),
			'comments'       => __( 'Comments', 'customize-pro' ),
		],
		'archive'     => [
			'entries'     => __( 'Entries', 'customize-pro' ),
			'description' => __( 'Archive Description', 'customize-pro' ),
			'post-info'   => __( 'Post Info', 'customize-pro' ),
			'read-more'   => __( 'Read More', 'customize-pro' ),
			'pagination'  => __( 'Pagination', 'customize-pro' ),
			'blog-layout' => __( 'Blog Layout', 'customize-pro' ),
		],
		'footer'      => [
			'site-footer'   => __( 'Site Footer', 'customize-pro' ),
			'widgets'       => __( 'Footer Widgets', 'customize-pro' ),
			'credits'       => __( 'Footer Credits', 'customize-pro' ),
			'above'         => __( 'Above Footer', 'customize-pro' ),
			'below'         => __( 'Below Footer', 'customize-pro' ),
			'scroll-to-top' => __( 'Scroll to Top', 'customize-pro' ),
		],
		'code'        => [
			'css' => __( 'Custom CSS', 'customize-pro' ),
			'js'  => __( 'Custom JS', 'customize-pro' ),
		],
		'woocommerce' => [
			'test' => __( 'Test Setting', 'customize-pro' ),
		],
		'edd'         => [],
	];
}

\add_action( 'genesis_setup', __NAMESPACE__ . '\add_sections' );
/**
 * Adds Kirki sections.
 *
 * @since 1.0.0
 *
 * @return void
 */
function add_sections() {
	$handle = _get_handle();
	$panels = \apply_filters( 'customize_pro_sections', _get_default_sections() );

	foreach ( $panels as $panel => $sections ) {
		$priority = 10;

		foreach ( $sections as $section => $title ) {
			\Kirki::add_section(
				$handle . "_{$panel}_${section}",
				[
					'title'    => $title,
					'panel'    => $handle . "_{$panel}",
					'priority' => $priority,
				]
			);

			$priority = $priority + 10;
		}
	}
}
