<?php

namespace VanjaBeautyTheme\Controllers;

class MegaMenu
{
    public function __construct()
    {
        add_filter('astra_masthead_top', [$this, 'megaMenu'], 20);
        add_action('after_setup_theme', [$this, 'registerMegaMenuLocation']);
        add_filter('nav_menu_link_attributes', [$this, 'megaMenuItemDropdown'], 10, 4);
    }

    public function megaMenu()
    {
        $allCategories = get_categories([
            'hide_empty' => false,
            'parent'     => 0
        ]);

        ob_start();

        include CHILD_THEME_PATH . '/global-templates/mega-menu.php';

        echo ob_get_clean();
    }

    public function registerMegaMenuLocation() 
    {
        register_nav_menu('mega-menu-location', __('Mega Menu Location'));
    }

    public function megaMenuItemDropdown($atts, $item, $args, $depth)
    {
        if ($args->theme_location === 'mega-menu-location' && $depth === 0) {
            $atts['href'] = '';
        }

        return $atts;
    }
}