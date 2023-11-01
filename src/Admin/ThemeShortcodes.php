<?php

namespace VanjaBeautyTheme\Admin;

class ThemeShortcodes
{
    public function __construct()
    {
        add_action('admin_menu', [$this, 'addThemeShortcodesMenu']);
    }

	public function addThemeShortcodesMenu()
	{
		add_menu_page(
			'Theme Shortcodes',
			'Theme Shortcodes',
			'manage_options',
			'theme-shortcodes',
			[$this, 'themeShortcodesPage'],
			'dashicons-shortcode',
			6
		);
	}

	public function themeShortcodesPage()
	{	
		$this->saveShortcodes();
		include CHILD_THEME_PATH . '/view/theme-shortcodes-settings.php';
	}

	public function saveShortcodes()
	{	
		if (isset($_POST['form_nonce']) && wp_verify_nonce($_POST['form_nonce'], 'save_form_nonce')) {
			if (isset($_POST['nav_subscribe_shortcode'])) {
				$formShortcode = sanitize_text_field($_POST['nav_subscribe_shortcode']);

				update_option('nav_subscribe_shortcode', $formShortcode);
			}

			if (isset($_POST['main_contact_form_shortcode'])) {
				$formShortcode = sanitize_text_field($_POST['main_contact_form_shortcode']);
	
				update_option('main_contact_form_shortcode', $formShortcode);
			}
		}
	}
}
