<?php

namespace VanjaBeautyTheme\Controllers;

class WoocommerceBreadcrumb 
{   
    public function __construct()
    {   
        add_filter('woocommerce_get_breadcrumb', [$this, 'modifyWoocommerceBreadcrumb']);
    }

    public function modifyWoocommerceBreadcrumb($crumbs) {
        global $post;
    
        if ($crumbs[1][0] === 'Blog') {
            $crumbs[1][1] = str_replace('/kategorija/', '/', $crumbs[1][1]);
        }
    
        return $crumbs;
    }
}
