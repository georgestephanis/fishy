<?php
/*
 * Plugin Name: Fishy Followers
 * Plugin URI: http://example.com/fishy
 * Description: Fish follow your mouse
 * Author: Cornell FBOA
 * Version: 0.1
 * Author URI: http://example.com/make-the-fishies
 */

add_action( 'admin_init', 'fishy_followers_init' );

function fishy_followers_init() {
	wp_enqueue_style( 'fishy', plugins_url( 'fishy.css', __FILE__ ) );
	wp_enqueue_script( 'fishy', plugins_url( 'fishy.js', __FILE__ ), array( 'jquery' ) );
}

add_action( 'admin_footer', 'fishy_follower_footer' );

function fishy_follower_footer() {
	?>
	<img src="<?php echo esc_url( plugins_url( 'fishy.png', __FILE__ ) ); ?>" height="50" width="100" alt="<?php esc_attr_e( 'Fishy!', 'fishy' ); ?>" id="fishy" />
	<?php
}

