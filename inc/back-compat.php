<?php
/**
 * Theme back compat functionality
 *
 * Prevents from running on WordPress versions prior to 4.4,
 */

/**
 * Prevent switching to theme on old versions of WordPress.
 *
/**
 * Adds a message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * theme on WordPress versions prior to 4.4.
 *
 * @global string $wp_version WordPress version.
 */
function theme_compat_upgrade_notice() {
    $message = sprintf(__('This theme requires at least WordPress version 4.4. You are running version %s. Please upgrade and try again.', 'website4829605'), $GLOBALS['wp_version']);
    printf('<div class="error"><p>%s</p></div>', $message);
}

/**
 * Prevents the Customizer from being loaded on WordPress versions prior to 4.4.
 *
 * @global string $wp_version WordPress version.
 */
function theme_compat_customize() {
    wp_die(sprintf(__('This theme requires at least WordPress version 4.4. You are running version %s. Please upgrade and try again.', 'website4829605'), $GLOBALS['wp_version']), '', array(
        'back_link' => true,
    ));
}
add_action('load-customize.php', 'theme_compat_customize');

/**
 * Prevents the Theme Preview from being loaded on WordPress versions prior to 4.4.
 *
 * @global string $wp_version WordPress version.
 */
function theme_compat_preview() {
    if (isset($_GET['preview'])) {
        wp_die(sprintf(__('This theme requires at least WordPress version 4.4. You are running version %s. Please upgrade and try again.', 'website4829605'), $GLOBALS['wp_version']));
    }
}
add_action('template_redirect', 'theme_compat_preview');
