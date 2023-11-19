<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if (function_exists('get_field')) {
	$productVideo = get_field('product_video');
	$productVideoUrl = isset($productVideo['url']) ? $productVideo['url'] : '';
}
?>

<?php if ($productVideoUrl): ?>
	<?php 
		$productVideoUrl .= '#t=3';
		$productTitle = get_the_title();
		$integerPosition = strcspn($productTitle, '0123456789');
		if ($integerPosition < strlen($productTitle)) {
			$extractedTitle = substr($productTitle, 0, $integerPosition);
			$productTitle = trim($extractedTitle);
		}
	?>
	<div class="product-video invisible opacity-0">
		<div class="product-video__container flex-column border border-white">
			<span class="close-video">+</span>
			<h2 class="text-white mb-3"><?php echo $productTitle; ?></h2>
			<div class="video mb-3" id="product-video__video">
			</div>
		</div>
	</div>
	<input 
		type="hidden" 
		value="<?php echo empty($productVideoUrl) ? '' : $productVideoUrl ?>" 
		id="product-video"
		data-title="<?php echo $productTitle; ?>"
	>
<?php endif; ?>
<?php
get_header( 'shop' ); ?>


	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>
		<?php 
			woocommerce_breadcrumb(); 
			
			add_filter('woocommerce_get_breadcrumb', function($crumb) {
				return '';
			}); 
		?>
		
		<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>

			<?php wc_get_template_part( 'content', 'single-product' ); ?>

		<?php endwhile; // end of the loop. ?>

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

	<?php
		/**
		 * woocommerce_sidebar hook.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		do_action( 'woocommerce_sidebar' );
	?>

<?php
get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
