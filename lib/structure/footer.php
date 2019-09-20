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

add_action( 'genesis_meta', __NAMESPACE__ . '\footer_credits', 20 );
/**
 * Add footer credits section.
 *
 * @since 0.1.0
 *
 * @return void
 */
function footer_credits() {
	remove_action( 'genesis_footer', 'genesis_do_footer' );

	$footer_credits = _get_value( 'footer_credits_enabled' );

	if ( $footer_credits ) {
		add_action( 'genesis_footer', __NAMESPACE__ . '\footer_credits_div', 13 );
	}
}

/**
 * Display the Footer Credits widget area if enabled.
 *
 * @since 1.1.0
 *
 * @return void
 */
function display_footer_credits() {
	genesis_widget_area(
		'footer-credits',
		[
			'before' => '',
			'after'  => scroll_to_top_link() . '</div></div>',
		]
	);
}

/**
 * Display footer credits section.
 *
 * @since 0.1.0
 *
 * @return void
 */
function footer_credits_div() {
	genesis_markup(
		[
			'open'    => '<div %s>',
			'context' => 'footer-credits',
		]
	);

	genesis_structural_wrap( 'footer-credits', 'open' );

	$type = _get_value( 'footer_credits_type', 'text' );

	if ( 'widget' === $type ) {
		display_footer_credits();

	} else {
		$text = _get_value( 'footer_credits_text' );

		printf( '<p>%s %s</p>', do_shortcode( $text ), wp_kses_post( scroll_to_top_link() ) );
	}

	genesis_structural_wrap( 'footer-credits', 'close' );

	genesis_markup(
		[
			'close'   => '</div>',
			'context' => 'footer-credits',
		]
	);
}

/**
 * Display scroll to top link.
 *
 * @since 0.1.0
 *
 * @return string
 */
function scroll_to_top_link() {
	$output        = '';
	$scroll_to_top = _get_value( 'footer_scroll-to-top_enabled' );

	if ( $scroll_to_top ) {
		$style = _get_value( 'footer_scroll-to-top_style' );
		$html  = _get_value( 'footer_scroll-to-top_html' );
		$text  = _get_value( 'footer_scroll-to-top_text' );
		$link  = '<a href="#top" rel="nofollow" class="scroll-to-top%s">%s</a>';
		$icon  = _get_svg( 'arrow-up' );

		if ( 'button' === $style ) {
			$output = sprintf( $link, '-icon', $icon );

		} elseif ( 'html' === $style ) {
			$output = sprintf( $html );

		} else {
			$output = sprintf( $link, '', $text );
		}
	}

	return $output;
}

add_action( 'genesis_footer', __NAMESPACE__ . '\display_footer_widgets', 11 );
/**
 * Display footer widget areas in columns.
 *
 * @since 0.1.0
 *
 * @return void
 */
function display_footer_widgets() {
	if ( ! is_active_sidebar( 'footer-1' ) ) {
		return;
	}

	$settings = _get_value( 'footer_widgets_columns' );

	if ( '0' === $settings ) {
		return;
	}

	genesis_markup(
		[
			'open'    => '<div %s>' . genesis_get_structural_wrap( 'footer-widgets', 'open' ),
			'context' => 'footer-widgets',
		]
	);

	$widgets = explode( '-', $settings );
	$count   = 1;
	$width   = [
		'12' => 'full-width',
		'9'  => 'three-fourths',
		'8'  => 'two-thirds',
		'6'  => 'one-half',
		'4'  => 'one-third',
		'3'  => 'one-fourth',
	];

	foreach ( $widgets as $widget ) {
		$first = 1 === $count ? ' first' : '';
		genesis_widget_area(
			"footer-$count",
			[
				'before' => sprintf( '<div class="footer-widgets-area footer-widgets-%s %s%s">', $count, $width[ $widget ], $first ),
				'after'  => '</div>',
			]
		);
		$count++;
	}

	genesis_markup(
		[
			'close'   => genesis_get_structural_wrap( 'footer-widgets', 'close' ) . '</div>',
			'context' => 'footer-widgets',
		]
	);
}

add_action( 'genesis_meta', __NAMESPACE__ . '\hide_site_footer' );
/**
 * Hide site footer if page setting checked.
 *
 * @since 0.1.0
 *
 * @return void
 */
function hide_site_footer() {
	if ( get_post_meta( get_the_ID(), 'footer_disabled', true ) ) {
		remove_action( 'genesis_meta', __NAMESPACE__ . '\footer_credits', 20 );
		remove_action( 'genesis_footer', __NAMESPACE__ . '\display_footer_widgets', 11 );
		remove_action( 'genesis_footer', __NAMESPACE__ . '\above_footer', 11 );
		remove_action( 'genesis_footer', 'genesis_footer_markup_open', 5 );
		remove_action( 'genesis_footer', 'genesis_do_footer' );
		remove_action( 'genesis_footer', 'genesis_footer_markup_close', 15 );
	}
}

add_action( 'genesis_footer', __NAMESPACE__ . '\above_footer' );
/**
 * Display the Above Footer widget area.
 *
 * @since 1.1.0
 *
 * @return void
 */
function above_footer() {
	$enabled = _get_value( 'footer_above_enabled' );

	if ( ! $enabled ) {
		return;
	}

	genesis_widget_area(
		'above-footer',
		[
			'before' => '<div class="above-footer widget-area"><div class="wrap">',
			'after'  => '</div></div>',
		]
	);
}

add_action( 'genesis_footer', __NAMESPACE__ . '\below_footer', 12 );
/**
 * Display the Above Footer widget area.
 *
 * @since 1.1.0
 *
 * @return void
 */
function below_footer() {
	$enabled = _get_value( 'footer_below_enabled' );

	if ( ! $enabled ) {
		return;
	}

	genesis_widget_area(
		'below-footer',
		[
			'before' => '<div class="below-footer widget-area"><div class="wrap">',
			'after'  => '</div></div>',
		]
	);
}
