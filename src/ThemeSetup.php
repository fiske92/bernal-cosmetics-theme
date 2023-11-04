<?php

namespace VanjaBeautyTheme;

use VanjaBeautyTheme\Controllers\BeforeNav;
use VanjaBeautyTheme\Controllers\MegaMenu;
use VanjaBeautyTheme\Controllers\WoocommerceArchive;
use VanjaBeautyTheme\Controllers\WoocommerceBreadcrumb;
use VanjaBeautyTheme\Controllers\CheckoutFields;
use VanjaBeautyTheme\Admin\AboveNavCustomizer;
use VanjaBeautyTheme\Admin\ThemeShortcodes;
use VanjaBeautyTheme\Helpers\SrbLatin;

class ThemeSetup
{
    public function __construct()
    {
        add_action( 'wp_enqueue_scripts', [$this, 'enqueueScriptAndStyle']);
        add_action( 'after_setup_theme', [$this, 'mytheme_add_woocommerce_support']);
        $this->themeInit();
    }

    public function themeInit()
    {
        new BeforeNav();
        new AboveNavCustomizer();
        new ThemeShortcodes();
        new MegaMenu();
        new WoocommerceArchive();
        new SrbLatin();
        new WoocommerceBreadcrumb();
        new CheckoutFields();
    }

    public function enqueueScriptAndStyle()
    {
        wp_enqueue_script('bootstrap-js', CHILD_THEME_URL . '/assets/public/dist/js/bootstrap.min.js', [], '1.0.0', true);
        wp_enqueue_style('main-css', CHILD_THEME_URL . '/assets/public/dist/css/child.min.css', [], '1.0.5');
        wp_enqueue_script('main-js', CHILD_THEME_URL . '/assets/public/dist/js/child.min.js', [], '1.2.1', true);
    }

    public function mytheme_add_woocommerce_support() 
    {
        add_theme_support( 'woocommerce' );
    }
}
