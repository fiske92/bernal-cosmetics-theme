<?php

namespace VanjaBeautyTheme\Admin;

class AboveNavCustomizer
{
    public function __construct()
    {
        add_filter('customize_register', [$this, 'addCustomizerOption']);
    }

    public function addCustomizerOption($wp_customize)
    {
        $wp_customize->add_section('textAboveHeader', array(
            'title' => 'Text iznad header-a',
            'priority' => 30,
        ));

        $wp_customize->add_setting('enable_above_nav_section', array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control('enable_above_nav_section', array(
            'label' => 'Ukljuci',
            'section' => 'textAboveHeader',
            'type' => 'checkbox',
        ));

        $wp_customize->add_setting('above_header_text', array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control('above_header_text', array(
            'label' => 'Text iznad header-a',
            'section' => 'textAboveHeader',
            'type' => 'text',
        ));

        $wp_customize->add_setting('above_header_title', array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control('above_header_title', array(
            'label' => 'Naslov iznad header-a',
            'section' => 'textAboveHeader',
            'type' => 'text',
        ));

        $wp_customize->add_setting('below_title_text', array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control('below_title_text', array(
            'label' => 'Text ispod naslova',
            'section' => 'textAboveHeader',
            'type' => 'text',
        ));
    }
}

