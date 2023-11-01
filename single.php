<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

// Remove default author and post date
add_filter('astra_single_post_meta', function($test) {
    return '';
});

function remove_single_post_navigation_links($output) {
    if (is_single()) {
        return ''; // Return an empty string for single post navigation links
    }
    return $output; // Return the default output for other pages
}

add_filter('previous_post_link', 'remove_single_post_navigation_links');
add_filter('next_post_link', 'remove_single_post_navigation_links');

add_filter('the_content', function($content) {
    $breadcrumb = woocommerce_breadcrumb();
    $featuredImage = get_the_post_thumbnail(null, 'medium');
    $publishedDate = get_the_date('d/m/Y');
    $objavljenoDana = '<span class="text-muted fs-7 published-date">Objavljeno dana ' . $publishedDate . '</span>';
    return $breadcrumb . $objavljenoDana . $featuredImage . $content;
});
?>


<?php if ( astra_page_layout() == 'left-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

	<div id="primary" <?php astra_primary_class(); ?>>

		<?php astra_primary_content_top(); ?>

		<?php astra_content_loop(); ?>

		<?php astra_primary_content_bottom(); ?>

	</div><!-- #primary -->

<?php if ( astra_page_layout() == 'right-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

<?php get_footer(); ?>
