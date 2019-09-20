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

add_filter( 'body_class', __NAMESPACE__ . '\menu_body_classes', 100, 1 );
/**
 * Add menu-specific body classes.
 *
 * @since 0.1.0
 *
 * @param array $classes All body classes.
 *
 * @return array
 */
function menu_body_classes( $classes ) {
	$classes[] = _get_value( 'menus_mobile_animation', 'has-mobile-menu-top' );
	$classes[] = 'social-menu-' . _get_value( 'menus_social_color-style', '' );

	return $classes;
}

add_action( 'genesis_before', __NAMESPACE__ . '\reposition_menus' );
/**
 * Reposition navigation menus.
 *
 * @since 0.1.0
 *
 * @return void
 */
function reposition_menus() {

	// Nav primary.
	remove_action( 'genesis_after_header', 'genesis_do_nav' );

	$header_layout = _get_value( 'header_primary_layout' );

	if ( 'has-logo-right' === $header_layout ) {
		add_action( 'genesis_before_title_area', 'genesis_do_nav' );

	} elseif ( 'has-logo-above' === $header_layout ) {
		add_action( 'genesis_header', 'genesis_do_nav', 14 );

	} else {
		add_action( 'genesis_after_title_area', 'genesis_do_nav' );
	}

	// Nav secondary.
	remove_action( 'genesis_after_header', 'genesis_do_subnav' );
	add_action( 'genesis_after_header_wrap', 'genesis_do_subnav' );

	// Nav footer.
	$value    = _get_value( 'menus_footer_position' );
	$position = [
		'above-footer'  => [ 'genesis_footer', 9 ],
		'above-widgets' => [ 'genesis_footer', 10 ],
		'above-credits' => [ 'genesis_footer', 12 ],
		'below-credits' => [ 'genesis_footer', 14 ],
	];

	if ( isset( $position[ $value ] ) ) {
		add_action( $position[ $value ][0], __NAMESPACE__ . '\add_footer_menu', $position[ $value ][1] );
	}
}

add_filter( 'genesis_attr_nav-primary', __NAMESPACE__ . '\menu_alignment' );
/**
 * Set the mobile and primary menu alignment.
 *
 * @since 0.1.0
 *
 * @param array $atts Primary nav attributes.
 *
 * @return array
 */
function menu_alignment( $atts ) {
	$mobile  = _get_value( 'menus_mobile_alignment' );
	$desktop = _get_value( 'menus_primary_alignment' );
	$desktop = str_replace( 'flex-', '', $desktop );
	$space   = $mobile ? ' ' : '';

	$atts['class'] .= $space . $mobile . ' flex-' . $desktop . '-desktop';

	return $atts;
}

/**
 * Display footer menu if set.
 *
 * @since 0.1.0
 *
 * @return void
 */
function add_footer_menu() {
	genesis_nav_menu(
		[
			'theme_location' => 'footer',
			'depth'          => 1,
		]
	);
}

add_filter( 'widget_nav_menu_args', __NAMESPACE__ . '\nav_menu_widget' );
/**
 * Wrap nav menu widget links in span tags.
 *
 * @since 1.0.2
 *
 * @param array $nav_menu_args Nav menu widget args (wp_nav_menu).
 *
 * @return array
 */
function nav_menu_widget( $nav_menu_args ) {
	$custom = [
		'link_before' => genesis_markup(
			[
				'open'    => '<span %s>',
				'context' => 'nav-link-wrap',
				'echo'    => false,
			]
		),
		'link_after'  => genesis_markup(
			[
				'close'   => '</span>',
				'context' => 'nav-link-wrap',
				'echo'    => false,
			]
		),
	];

	return array_merge_recursive( $nav_menu_args, $custom );
}

add_filter( 'genesis_nav_items', __NAMESPACE__ . '\display_mobile_menu_widget_area', 10, 2 );
add_filter( 'wp_nav_menu_items', __NAMESPACE__ . '\display_mobile_menu_widget_area', 10, 2 );
/**
 * Display the Mobile Menu widget area.
 *
 * @since 0.1.0
 *
 * @param string $menu Menu markup.
 * @param array  $args Menu args.
 *
 * @return string
 */
function display_mobile_menu_widget_area( $menu, $args ) {
	$args = (array) $args;

	if ( has_nav_menu( 'secondary' ) && 'secondary' !== $args['theme_location'] ) {
		return $menu;
	}

	if ( ! has_nav_menu( 'secondary' ) && 'primary' !== $args['theme_location'] ) {
		return $menu;
	}

	ob_start();
	genesis_widget_area(
		'mobile-menu',
		[
			'before' => '<li class="menu-item mobile-menu widget-area hide-desktop">',
			'after'  => '</li>',
		]
	);
	$widget = ob_get_clean();

	return $menu . $widget;
}

add_action( 'admin_init', __NAMESPACE__ . '\mega_menu_admin_class' );
/**
 * Initialize mega menu admin class.
 *
 * @since 0.1.0
 *
 * @return void
 */
function mega_menu_admin_class() {
	Mega_Menu_Admin::init();
}

add_filter( 'wp_edit_nav_menu_walker', __NAMESPACE__ . '\fields_walker', 99 );
/**
 * Replace default menu editor walker with ours
 *
 * We don't actually replace the default walker. We're still using it and
 * only injecting some HTMLs.
 *
 * @since   0.1.0
 *
 * @access  private
 * @wp_hook filter wp_edit_nav_menu_walker
 *
 * @param   string $walker Walker class name.
 *
 * @return  string Walker class name.
 */
function fields_walker( $walker ) {
	$walker = __NAMESPACE__ . '\Menu_Fields_Walker';

	return $walker;
}

add_filter( 'nav_menu_css_class', __NAMESPACE__ . '\nav_class', 10, 2 );
/**
 * Adds mega menu class to nav menu.
 *
 * @since 0.1.0
 *
 * @param array  $classes Nav menu classes.
 * @param object $item    Nav menu object.
 *
 * @return array
 */
function nav_class( $classes, $item ) {
	$mega_menu = get_post_meta( $item->ID, 'menu-item-mega-menu', true );
	$classes[] = $mega_menu;

	return $classes;
}

add_action( 'genesis_after_title_area', __NAMESPACE__ . '\display_mega_menu', 20 );
/**
 * Display mega menu widget area.
 *
 * @since 0.1.0
 *
 * @return void
 */
function display_mega_menu() {
	genesis_widget_area(
		'mega-menu',
		[
			'before' => '<div class="mega-menu hide"><div class="wrap">',
			'after'  => '</div></div>',
		]
	);
}
