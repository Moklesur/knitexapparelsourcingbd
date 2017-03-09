<?php
/**
 * ThemeTim WooCommerce Hook
 */

/**
 * ThemeTim Shop Page
 * Remove woo #container
 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

/**
 * Breadcrumbs
 * Remove hook
 * Modify Breadcrumbs
 */
add_action( 'init', 'themetim_woo_breadcrumbs' );
function themetim_woo_breadcrumbs() {
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
}