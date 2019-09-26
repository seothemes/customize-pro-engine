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

\add_action( 'genesis_setup', __NAMESPACE__ . '\add_fields', 15 );
/**
 * Add fields defined in config to Customizer.
 *
 * @since 1.0.0
 *
 * @return array|mixed
 */
function add_fields() {
	$fields = [];
	$handle = _get_handle();
	$panels = \glob( _get_path() . '/config/*', GLOB_ONLYDIR );

	// Loop through config directories.
	foreach ( $panels as $panel ) {
		foreach ( \glob( $panel . '/*.php' ) as $section ) {
			$fields  = require_once $section;
			$counter = 0;
			$panel   = \basename( \dirname( $section ) );
			$section = \basename( $section, '.php' );
			$prefix  = $handle . '_' . $panel . '_' . $section;

			if ( ! \is_array( $fields ) ) {
				continue;
			}

			foreach ( $fields as $field ) {
				\Kirki::add_field( $handle, \apply_filters( 'customize_pro_field', $field, $panel, $section, $prefix, $counter++ ) );
			}
		}
	}

	return $fields;
}

\add_filter( 'customize_pro_field', __NAMESPACE__ . '\format_field', 10, 5 );
/**
 * Modify fields before adding them.
 *
 * @since 1.0.0
 *
 * @param array  $field   Field array values.
 * @param string $panel   Field panel string.
 * @param string $section Fields section string.
 * @param string $prefix  Customize Pro option prefix.
 * @param int    $counter Counter for unique IDs.
 *
 * @return array
 */
function format_field( $field, $panel, $section, $prefix, $counter ) {
	$field['section']  = $prefix;
	$field['settings'] = $panel . '_' . $section . '_' . $field['settings'];

	if ( isset( $field['type'] ) && 'custom' === $field['type'] ) {
		$field['settings'] = $field['settings'] . '-' . $counter;
	}

	// Allow for element arrays.
	if ( isset( $field['output'] ) && $field['output'] ) {
		foreach ( $field['output'] as $output ) {
			if ( isset( $output['element'] ) && \is_array( $output['element'] ) ) {
				$output['element'] = \implode( ',', $output['element'] );
			}
		}

		// Set transport for fields with output.
		if ( ! isset( $field['transport'] ) ) {
			$field['transport'] = 'auto';
		}
	}

	return $field;
}
