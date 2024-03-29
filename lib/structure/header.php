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

\add_filter( 'language_attributes', __NAMESPACE__ . '\admin_bar_class' );
/**
 * Add class to html element for styling.
 *
 * @since 1.0.0
 *
 * @param string $output Language attributes markup.
 *
 * @return string
 */
function admin_bar_class( $output ) {
	if ( \is_admin_bar_showing() ) {
		$output .= ' class=\'admin-bar-showing\'';
	}

	return $output;
}

\add_filter( 'body_class', __NAMESPACE__ . '\header_body_classes', 100, 1 );
/**
 * Add header specific body classes.
 *
 * @since 1.0.0
 *
 * @param array $classes All body classes.
 *
 * @return array
 */
function header_body_classes( $classes ) {
	$header_layout    = _get_value( 'header_primary_layout' );
	$mobile_layout    = _get_value( 'header_primary_mobile-layout' );
	$mobile_animation = _get_value( 'menus_mobile_animation' );

	if ( 'has-logo-left' === $header_layout ) {
		$mobile_layout = 'has-logo-left-mobile';
	}

	if ( 'has-logo-above' === $header_layout ) {
		$mobile_layout = 'has-logo-above-mobile';
	}

	if ( 'has-logo-right' === $header_layout ) {
		$mobile_layout = 'has-logo-right-mobile';
	}

	$classes[] = $header_layout;
	$classes[] = $mobile_layout;
	$classes[] = $mobile_animation;

	if ( _is_single() ) {
		$classes[] = 'single';
		$classes   = \array_diff( $classes, [ 'archive' ] );
	}

	if ( _is_archive() ) {
		$classes[] = 'archive';
		$classes   = \array_diff( $classes, [ 'single' ] );
	}

	return $classes;
}

\add_filter( 'genesis_attr_site-title', __NAMESPACE__ . '\display_site_title' );
/**
 * Hide/show site title.
 *
 * @since 1.0.0
 *
 * @param array $atts Sit title attributes.
 *
 * @return array
 */
function display_site_title( $atts ) {
	$display = _get_value( 'title' );

	if ( ! $display ) {
		$atts['class'] = $atts['class'] . ' screen-reader-text';
	}

	return $atts;
}

\add_filter( 'genesis_attr_site-description', __NAMESPACE__ . '\display_site_tagline' );
/**
 * Hide/show site description.
 *
 * @since 1.0.0
 *
 * @param array $atts Site description attributes.
 *
 * @return array
 */
function display_site_tagline( $atts ) {
	$display = _get_value( 'tagline' );

	if ( ! $display ) {
		$atts['class'] = $atts['class'] . ' screen-reader-text';
	}

	return $atts;
}

\add_action( 'genesis_site_title', __NAMESPACE__ . '\custom_logo', 5 );
/**
 * Display custom logo, sticky logo and transparent logo.
 *
 * @since 1.0.0
 *
 * @return void
 */
function custom_logo() {
	$html             = \has_custom_logo() ? \the_custom_logo() : '';
	$sticky           = _get_value( 'header_sticky_different-logo' );
	$sticky_logo      = _get_value( 'header_sticky_logo' );
	$transparent      = _get_value( 'header_transparent_different-logo' );
	$transparent_logo = _get_value( 'header_transparent_logo' );

	if ( $sticky && $sticky_logo ) {
		$attr = [
			'class' => 'sticky-logo',
		];

		$alt = \get_post_meta( $sticky_logo, '_wp_attachment_image_alt', true );

		if ( empty( $alt ) ) {
			$attr['alt'] = \get_bloginfo( 'name', 'display' );
		}

		$html .= \sprintf(
			'<a href="%1$s" class="sticky-logo-link" rel="home" itemprop="url">%2$s</a>',
			\esc_url( \home_url( '/' ) ),
			\wp_get_attachment_image( $sticky_logo, 'full', false, $attr )
		);
	}

	if ( $transparent && $transparent_logo ) {
		$attr = [
			'class' => 'transparent-logo',
		];

		$alt = \get_post_meta( $transparent_logo, '_wp_attachment_image_alt', true );

		if ( empty( $alt ) ) {
			$attr['alt'] = \get_bloginfo( 'name', 'display' );
		}

		$html .= \sprintf(
			'<a href="%1$s" class="transparent-logo-link" rel="home" itemprop="url">%2$s</a>',
			\esc_url( \home_url( '/' ) ),
			\wp_get_attachment_image( $transparent_logo, 'full', false, $attr )
		);
	}

	// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	echo \apply_filters( 'customize_pro_logo', $html );
}

\add_action( 'genesis_before_header_wrap', __NAMESPACE__ . '\primary_header_open', 100 );
/**
 * Opening wrap for primary header.
 *
 * @since 1.0.0
 *
 * @return void
 */
function primary_header_open() {
	\genesis_markup(
		[
			'open'    => '<div %s>',
			'context' => 'primary-header',
		]
	);
}

\add_action( 'genesis_after_header_wrap', __NAMESPACE__ . '\primary_header_close', 5 );
/**
 * Closing wrap for primary header.
 *
 * @since 1.0.0
 *
 * @return void
 */
function primary_header_close() {
	\genesis_markup(
		[
			'close'   => '</div>',
			'context' => 'primary-header',
		]
	);
}

\add_action( 'genesis_markup_title-area_open', __NAMESPACE__ . '\before_title_area' );
/**
 * Add hook location before title area.
 *
 * @since 1.0.0
 *
 * @param string $open_html Opening HTML.
 *
 * @return string
 */
function before_title_area( $open_html ) {
	if ( $open_html ) {
		\ob_start();
		\do_action( 'genesis_before_title_area' );
		$open_html = \ob_get_clean() . $open_html;
	}

	return $open_html;
}

\add_action( 'genesis_markup_title-area_close', __NAMESPACE__ . '\after_title_area' );
/**
 * Add hook location after title area.
 *
 * @since 1.0.0
 *
 * @param string $close_html Closing HTML.
 *
 * @return string
 */
function after_title_area( $close_html ) {
	if ( $close_html ) {
		\ob_start();
		\do_action( 'genesis_after_title_area' );
		$close_html = $close_html . ob_get_clean();
	}

	return $close_html;
}

\add_filter( 'genesis_seo_title', __NAMESPACE__ . '\site_title_link', 10, 3 );
/**
 * Add 'site-title-link' class to site title link for better CSS targeting.
 *
 * @since 1.0.0
 *
 * @param string $title  Site title text.
 * @param string $inside Site title inner markup.
 * @param string $wrap   Site title wrapper.
 *
 * @return string
 */
function site_title_link( $title, $inside, $wrap ) {
	$link = \sprintf(
		'<a href="%s" class="%s">%s</a>',
		\trailingslashit( home_url() ),
		\apply_filters( 'customize_pro_site_title_link', 'site-title-link' ),
		\get_bloginfo( 'name' )
	);

	return \str_replace( $inside, $link, $title );
}

\add_action( 'genesis_meta', __NAMESPACE__ . '\hide_site_header' );
/**
 * Hide site header if page setting is checked.
 *
 * @since 1.0.0
 *
 * @return void
 */
function hide_site_header() {
	if ( \get_post_meta( \get_the_ID(), 'header_disabled', true ) ) {
		\remove_action( 'genesis_header', 'genesis_header_markup_open', 5 );
		\remove_action( 'genesis_header', 'genesis_do_header' );
		\remove_action( 'genesis_header', 'genesis_header_markup_close', 15 );
	}
}

\add_action( 'genesis_before_header_wrap', __NAMESPACE__ . '\above_header' );
/**
 * Display Above Header widget area.
 *
 * @since 1.0.0
 *
 * @return void
 */
function above_header() {
	$enabled = _get_value( 'header_above_enabled' );

	if ( 'hide' === $enabled ) {
		return;
	}

	\genesis_widget_area(
		'above-header',
		[
			'before' => \sprintf( '<div class="above-header widget-area %s"><div class="wrap">', $enabled ),
			'after'  => '</div></div>',
		]
	);
}

\add_action( 'genesis_before_title_area', __NAMESPACE__ . '\header_left', 5 );
/**
 * Display Header Left widget area.
 *
 * @since 1.0.0
 *
 * @return void
 */
function header_left() {
	$enabled = _get_value( 'header_left_enable' );

	if ( 'hide' === $enabled ) {
		return;
	}

	\genesis_widget_area(
		'header-left-widget',
		[
			'before' => '<div class="header-left widget-area ' . $enabled . '">',
			'after'  => '</div>',
		]
	);
}

\add_action( 'genesis_before_content_sidebar_wrap', __NAMESPACE__ . '\below_header' );
/**
 * Display Below Header widget area.
 *
 * @since 1.0.0
 *
 * @return void
 */
function below_header() {
	$enabled = _get_value( 'header_below_enabled' );

	if ( 'hide' === $enabled ) {
		return;
	}

	\genesis_widget_area(
		'below-header',
		[
			'before' => \sprintf( '<div class="below-header widget-area %s"><div class="wrap">', $enabled ),
			'after'  => '</div></div>',
		]
	);
}

\add_filter( 'body_class', __NAMESPACE__ . '\transparent_header_logo_class', 1000 );
/**
 * Add transparent header body class.
 *
 * @since 1.0.0
 *
 * @param array $classes Body classes.
 *
 * @return array
 */
function transparent_header_logo_class( $classes ) {
	$has_different_logo = _get_value( 'header_transparent_different-logo' );
	$different_logo     = _get_value( 'header_transparent_logo' );

	if ( _has_transparent_header() && $has_different_logo && $different_logo ) {
		$classes[] = 'wp-custom-logo';
		$classes[] = 'has-transparent-logo';
	}

	return $classes;
}

\add_filter( 'body_class', __NAMESPACE__ . '\sticky_header_logo_class', 1000 );
/**
 * Add sticky header logo class to body.
 *
 * @since 1.0.0
 *
 * @param array $classes Body classes.
 *
 * @return array
 */
function sticky_header_logo_class( $classes ) {
	$has_different_logo = _get_value( 'header_sticky_different-logo' );
	$different_logo     = _get_value( 'header_sticky_logo' );

	if ( _has_sticky_header() && $has_different_logo && $different_logo ) {
		$classes[] = 'wp-custom-logo';
		$classes[] = 'has-sticky-logo';
	}

	return $classes;
}
