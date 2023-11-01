<?php

namespace VanjaBeautyTheme\Controllers;

class FrontPageCarousel
{
    public function __construct() {
        add_filter('astra_content_before', [$this, 'frontPageCarousel']);
    }

    public function frontPageCarousel()
    {
        include CHILD_THEME_PATH . '/view/front-page-carousel.php';
    } 
}