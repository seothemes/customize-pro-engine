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

add_action( 'add_meta_boxes', __NAMESPACE__ . '\add_meta_box' );
/**
 * Adds meta box to singular post types.
 *
 * @since 0.1.0
 *
 * @return void
 */
function add_meta_box() {
	$post_types = apply_filters(
		'customize_pro_meta_box_post_types',
		[
			'post',
			'page',
			'product',
			'portfolio',
		]
	);

	\add_meta_box(
		_get_handle(),
		_get_name(),
		__NAMESPACE__ . '\render_meta_box',
		$post_types,
		'side',
		'low'
	);
}

add_action( 'save_post', __NAMESPACE__ . '\save_meta_box' );
/**
 * Save the meta when the post is saved.
 *
 * @since 0.1.0
 *
 * @param int $post_id The ID of the post being saved.
 *
 * @return mixed
 */
function save_meta_box( $post_id ) {
	$handle = _get_handle();

	if ( ! isset( $_POST[ $handle . '_meta_box_nonce' ] ) ) {
		return $post_id;
	}

	$nonce = isset( $_POST[ $handle . '_meta_box_nonce' ] ) && wp_verify_nonce( wp_unslash( sanitize_key( $_POST[ $handle . '_meta_box_nonce' ] ) ), sanitize_key( $handle . '_meta_box_nonce_action' ) );

	if ( ! $nonce ) {
		return $post_id;
	}

	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return $post_id;
	}

	$post_type = isset( $_POST['post_type'] ) && 'page' === sanitize_key( $_POST['post_type'] ) ? true : false;

	if ( ! $post_type ) {
		if ( ! current_user_can( 'edit_page', $post_id ) ) {
			return $post_id;
		}
	} else {
		if ( ! current_user_can( 'edit_post', $post_id ) ) {
			return $post_id;
		}
	}

	$settings = page_settings_defaults();

	foreach ( $settings as $setting => $post_meta_key ) {
		$value = isset( $_POST[ $post_meta_key ] ) ? 'yes' : '';

		update_post_meta( $post_id, $post_meta_key, $value );
	}

	return null;
}

/**
 * Render Meta Box content.
 *
 * @since 0.1.0
 *
 * @param object $post The post object.
 *
 * @return void
 */
function render_meta_box( $post ) {
	$handle   = _get_handle();
	$counter  = 0;
	$settings = page_settings_defaults();

	foreach ( $settings as $setting => $post_meta_key ) {
		$disabled = get_post_meta( $post->ID, $post_meta_key, true );
		$checked  = 'yes' === $disabled ? $disabled : '';
		echo 0 === $counter ? '' : '<br>';
		$counter++;

		?><label for="<?php echo esc_attr( $post_meta_key ); ?>">
		<input type="checkbox" name="<?php echo esc_attr( $post_meta_key ); ?>" id="<?php echo esc_attr( $post_meta_key ); ?>" value="" <?php checked( $checked, 'yes' ); ?>><?php echo esc_html( __( 'Disable ', 'customize-pro' ) . str_replace( '_', ' ', $setting ) ); ?>
		</label><br>
		<?php
	}

	wp_nonce_field( $handle . '_meta_box_nonce_action', $handle . '_meta_box_nonce' );
}

/**
 * Return page settings. Used in multiple places.
 *
 * @since 0.1.0
 *
 * @return array
 */
function page_settings_defaults() {
	return apply_filters(
		'customize_pro_page_settings',
		[
			'site_header'        => 'header_disabled',
			'site_footer'        => 'footer_disabled',
			'hero_section'       => 'hero_disabled',
			'sticky_header'      => 'sticky_disabled',
			'transparent_header' => 'transparent_disabled',
		]
	);
}
