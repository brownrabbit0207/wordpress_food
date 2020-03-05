<?php
defined('ABSPATH') or die;

require_once get_template_directory() . '/library/class-tgm-plugin-activation.php';

function theme_register_required_plugins() {

	$plugin_source = get_template_directory() . '/plugins/nicepage.zip';
	if (!file_exists($plugin_source)) {
		// noting to install
		return;
	}

	$plugins = array(
      		array(
      			'name'               => 'Nicepage',     // The plugin name.
      			'slug'               => 'nicepage',     // The plugin slug (typically the folder name).
      			'source'             => $plugin_source, // The plugin source.
      			'required'           => false,          // If false, the plugin is only 'recommended' instead of required.
      			'version'            => '',             // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
	);
	tgmpa($plugins, $config);
}
add_action('tgmpa_register', 'theme_register_required_plugins');

function theme_redirect_if_plugin_installed() {
    if (isset($_GET['page']) && $_GET['page'] === 'tgmpa-install-plugins') {
        wp_redirect(admin_url('plugins.php'));
        die;
    }
}
add_action('admin_page_access_denied', 'theme_redirect_if_plugin_installed');
