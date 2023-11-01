<?php

namespace VanjaBeautyTheme\Controllers;

class WoocommerceArchive 
{   
    public $currentCategory;

    public function __construct()
    {   
        add_action('parse_query', [$this, 'getCurrentCategory']);
        add_action('woocommerce_archive_description', [$this, 'extendArchiveDescription']);
        add_action('woocommerce_before_shop_loop', [$this, 'expandDescriptionBtn']);
    }

    public function getCurrentCategory()
    {
        $this->currentCategory = get_queried_object();
    }

    public function extendArchiveDescription()
    {       

        if (
            is_product_category() 
            && isset($this->currentCategory->parent) 
            && $this->currentCategory->parent === 0
        ) {
            $imageID = get_term_meta($this->currentCategory->term_id, 'thumbnail_id', true);
            $imageUrl = wp_get_attachment_url($imageID);
            $imageAlt = get_post_meta($imageID, '_wp_attachment_image_alt', true);

            ob_start();

            include CHILD_THEME_PATH . '/view/woocommerce-archive-description.php';

            echo ob_get_clean();
        }
    }

    public function expandDescriptionBtn()
    {   
        if (
            is_product_category()
            && isset($this->currentCategory->parent) 
            && $this->currentCategory->parent === 0
        ) {
            echo "<button class='btn btn-primary text-white d-block py-1 px-2 m-auto fs-7 read-more mt-2'>Pročitaj Više</button>";
        }
    }
}