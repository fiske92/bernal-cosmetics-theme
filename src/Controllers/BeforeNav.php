<?php

namespace VanjaBeautyTheme\Controllers;

class BeforeNav
{
    public function __construct()
    {
        add_action('astra_header_before', [$this, 'beforeHeaderElement']);
    }

    public function beforeHeaderElement()
    {   
        $enableAboveNavSection = get_theme_mod('enable_above_nav_section', '');

        $aboveNavText = get_theme_mod('above_header_text', '');
        $aboveNavTitle = get_theme_mod('above_header_title', '');
        $belowTitleText = get_theme_mod('below_title_text', '');

        $subscribeFormShortcode = get_option('nav_subscribe_shortcode', '');
        $subscribeFormShortcode = str_replace('\\', '', $subscribeFormShortcode);

        $logo_id = get_theme_mod('custom_logo');
        $logo_url = wp_get_attachment_image_url($logo_id, 'full');

        $cartPageID =  wc_get_page_id('cart');
        $cartPageURL = get_permalink($cartPageID);
        
        $getCart = WC()->cart;
        $cartCount = $getCart->get_cart_contents_count();

        include CHILD_THEME_PATH . '/global-templates/before-nav.php';         
    }
}