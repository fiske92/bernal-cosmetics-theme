<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

add_filter( 'get_the_archive_title_prefix', '__return_empty_string' );

add_action('before_ast-container', function() {
	echo "<h1 class='text-center text-white py-4'>Rezultati pretrage</h1>";
});

get_header(); ?>

<?php if ( astra_page_layout() == 'left-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>
	<div id="primary" <?php astra_primary_class(); ?>>
		<?php

		if (have_posts()) {
			?> <div class="posts-container"> <?php 
			while (have_posts()) {
				the_post();

                if (get_post_type($post_id) === 'product') {
                    get_template_part('loop-templates/content', 'product');
                    continue;
                }

                get_template_part('loop-templates/content', 'blog');
			}
			?> </div> <?php
		}

		astra_pagination();
		?>
	</div><!-- #primary -->
<?php
if ( astra_page_layout() == 'right-sidebar' ) :

	get_sidebar();

endif;

get_footer();
