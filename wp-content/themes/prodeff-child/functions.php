<?php
/**
 * Child Theme Functions
 * Add custom code below
 */
/** 
 *Reduce the strength requirement on the woocommerce password.
 * 
 * Strength Settings
 * 3 = Strong (default)
 * 2 = Medium
 * 1 = Weak
 * 0 = Very Weak / Anything
 */
function reduce_woocommerce_min_strength_requirement( $strength ) {
    return 2;
}
add_filter( 'woocommerce_min_password_strength', 'reduce_woocommerce_min_strength_requirement' );
