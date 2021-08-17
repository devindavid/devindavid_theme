<?php
/**
 * Custom hooks
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'devindavid_site_info' ) ) {
	/**
	 * Add site info hook to WP hook library.
	 */
	function devindavid_site_info() {
		do_action( 'devindavid_site_info' );
	}
}

add_action( 'devindavid_site_info', 'devindavid_add_site_info' );
if ( ! function_exists( 'devindavid_add_site_info' ) ) {
	/**
	 * Add site info content.
	 */
	function devindavid_add_site_info() {
		
		$site_info = sprintf(
			
			'<div id="copyrights" class="noselect">
			<span>©%1$s </span>
			<span class="footerLogo" style="margin: 0 0 0 6px; display:inline-block; color:transparent;">%2$s</span>
			</div>',
			
			sprintf( esc_html__( '%s', 'devindavid' ),
				'2021'
			),
			sprintf( esc_html__( '%s', 'devindavid' ),
				'Devin David'
			)
		);

		echo apply_filters( 'devindavid_site_info_content', $site_info ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}
}
