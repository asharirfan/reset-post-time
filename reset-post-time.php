<?php
/**
 * Plugin Name: Reset Post Time
 * Plugin URI: https://github.com/asharirfan/reset-post-time
 * Description: WordPress plugin to set the seconds of publish/schedule time of post types to zero.
 * Author: mrasharirfan
 * Author URI: https://AsharIrfan.com/
 * Version: 1.0.0
 * License: GPL2+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package rpt
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/*
	`Reset Post Time`
	Copyright(c) 2018  Ashar Irfan  (email : me@asharirfan.com)
	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License, version 2, as
	published by the Free Software Foundation.
	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.
	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/**
 * Function to set the seconds of publish/schedule time
 * of post types to zero.
 */
function rpt_reset_post_time() {
	// Get WP global variable $pagenow.
	global $pagenow;

	// Check if the current page is either a new post or a post edit page.
	if ( 'post-new.php' === $pagenow || 'post.php' === $pagenow ) {
		?>
		<script>
			jQuery( '#timestampdiv #ss' ).val( '00' );
		</script>
		<?
	}
}
add_action( 'admin_footer', 'rpt_reset_post_time' );
