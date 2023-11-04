<?php

namespace VanjaBeautyTheme\Controllers;

class CheckoutFields
{
    public function __construct()
    {
        add_filter('woocommerce_checkout_fields', [$this, 'modifyCompanyNameField'], 10);
    }

    public function modifyCompanyNameField($fields) {
        if (isset($fields['billing']['billing_company'])) {
            $fields['billing']['billing_company']['label'] = 'Naziv kompanije i PIB';
            $fields['billing']['billing_company']['placeholder'] = 'MyNails DOO / 108555222';
        }
    
        return $fields;
    }
}