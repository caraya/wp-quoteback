<?php
/*
  Plugin Name: WP-Quotebacks
  Plugin URI: https://publishing-project.rivendellweb.net/
  description: Backend work for Quotebacks See <a href="https://quotebacks.net/">quotebacks.net</a>
  Version: 1.0
  Author: Carlos Araya
  Author URI: https://publishing-project.rivendellweb.net/
  License: MIT
*/

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

/**
 * Enqueues the quotebacks.js script to make it easier to work with WordPress
 *
 * This requires you to modify the embed code and remove the script element at the end of the embed.
 *
 * @link https://quotebacks.net/
 * @link https://github.com/Blogger-Peer-Review/quotebacks
 * @link https://github.com/Blogger-Peer-Review/quotebacks/issues/17
*/
function quotebacks_enqueue_script() {
  wp_enqueue_script('quotebacks',
  plugins_url( 'vendor/quoteback.js', __FILE__ ),
  array(),
  '20200615',
  true
 );
}

add_action( 'wp_enqueue_scripts', 'quotebacks_enqueue_script' );
