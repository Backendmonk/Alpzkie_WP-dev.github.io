<?php
/*
 * Woocommerce compatibility / overrides
 *
 * @package Esotera
 */

/* Override content product - products content on archive pages
    https://github.com/woocommerce/woocommerce/blob/release/3.5/templates/content-product.php
*/


/*
 * Move the Add to Cart button inside the thumbnail,
 * and add a div for the Add to card and View cart buttons
 */
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);
add_action('woocommerce_before_shop_loop_item_title', 'esotera_woocommerce_before_buttons', 15);
add_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_add_to_cart', 16);
add_action('woocommerce_before_shop_loop_item_title', 'esotera_woocommerce_after_buttons', 17);

function esotera_woocommerce_before_buttons() {
    echo "<div class='woocommerce-buttons-container'>";
}

function esotera_woocommerce_after_buttons() {
    echo "</div><!--.woocommerce-buttons-container-->";
}

/*
 * Add a container to the thumbnail
 */
add_action('woocommerce_before_shop_loop_item_title', 'esotera_woocommerce_before_thumbnail', 5);
add_action('woocommerce_before_shop_loop_item_title', 'esotera_woocommerce_after_thumbnail', 20);

function esotera_woocommerce_before_thumbnail() {
    echo "<div class='woocommerce-thumbnail-container'>";
}

function esotera_woocommerce_after_thumbnail() {
    echo "</div><!--.woocommerce-thumbnail-container-->";
}

/**
 * Change number or products per row to 3
 */
add_filter('loop_shop_columns', 'cryout_woo_loop_columns', 999);
if (!function_exists('cryout_woo_loop_columns')) {
	function cryout_woo_loop_columns() {
		return 3; // 3 products per row
	}
} //cryout_woo_loop_columns

// <?php
// /**
//  * Hook: woocommerce_before_shop_loop_item.
//  *
//  * @hooked woocommerce_template_loop_product_link_open - 10
//  */
// do_action( 'woocommerce_before_shop_loop_item' );
// /**
//  * Hook: woocommerce_before_shop_loop_item_title.
//  *
//  * @hooked woocommerce_show_product_loop_sale_flash - 10
//  * @hooked woocommerce_template_loop_product_thumbnail - 10
//  */
// do_action( 'woocommerce_before_shop_loop_item_title' );
// /**
//  * Hook: woocommerce_shop_loop_item_title.
//  *
//  * @hooked woocommerce_template_loop_product_title - 10
//  */
// do_action( 'woocommerce_shop_loop_item_title' );
// /**
//  * Hook: woocommerce_after_shop_loop_item_title.
//  *
//  * @hooked woocommerce_template_loop_rating - 5
//  * @hooked woocommerce_template_loop_price - 10
//  */
// do_action( 'woocommerce_after_shop_loop_item_title' );
// /**
//  * Hook: woocommerce_after_shop_loop_item.
//  *
//  * @hooked woocommerce_template_loop_product_link_close - 5
//  * @hooked woocommerce_template_loop_add_to_cart - 10
//  */
// do_action( 'woocommerce_after_shop_loop_item' );
//
