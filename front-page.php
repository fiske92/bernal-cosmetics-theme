<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use VanjaBeautyTheme\Controllers\FrontPageCarousel;

new FrontPageCarousel();

get_header();

the_content();

get_footer(); 

?>
