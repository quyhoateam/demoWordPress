<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product, $woocommerce_loop;

if ( empty( $product ) || ! $product->exists() ) {
	return;
}

$related = $product->get_related( $posts_per_page );

if ( sizeof( $related ) === 0 ) return;

$args = apply_filters( 'woocommerce_related_products_args', array(
	'post_type'            => 'product',
	'ignore_sticky_posts'  => 1,
	'no_found_rows'        => 1,
	'posts_per_page'       => 6,
	'orderby'              => $orderby,
	'post__in'             => $related,
	'post__not_in'         => array( $product->id )
) );
$products = new WP_Query( $args );
$woocommerce_loop['columns'] = $columns;
if ( $products->have_posts() ) : ?>
	<div class="block-product">
		<h3 class="titlq"><?php _e( 'Related Products', 'woocommerce' ); ?></h3>
		<?php woocommerce_product_loop_start(); ?>
			<?php while ( $products->have_posts() ) : $products->the_post(); ?>
			<?php global $product; ?>
			<li class="col-xs-12 col-sm-6 col-md-3">
				<div style="position: relative;">
					<?php if($product->sale_price) { ?>
					<div class="sale-pri">
						-<?php  $percentage = round( ( ( $product->regular_price - $product->sale_price ) / $product->regular_price ) * 100 );
							   echo $price . sprintf( __('%s', 'woocommerce' ), $percentage . '%' ); ?>
					</div>
					<?php } ?>
					<a href="<?php the_permalink(); ?>" class="img"><?php show_thumb(280,220,1,'c'); ?></a>
				</div>
				<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				<div class="score-callback" data-score="3"></div>
				<p class="price"><?php echo $product->get_price_html(); ?></p>
				<div class="button-text">
					<a href="<?php the_permalink(); ?>" class="more-view">Xem thêm</a>
					<a href="<?php bloginfo('url'); ?>/?add-to-cart=<?php echo get_the_id(); ?>" class="more-buy">Mua hàng</a>
				</div>
			</li>
			<?php endwhile; // end of the loop. ?>
		<?php woocommerce_product_loop_end(); ?>
	</div>
<?php endif;
wp_reset_postdata();