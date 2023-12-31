<?php

namespace Objectiv\Plugins\Checkout\Interfaces;

interface BumpInterface {
	public function get_id(): int;
	public function add_to_cart( \WC_Cart $cart );
	public function record_displayed();
	public function record_purchased();
	public function add_bump_meta_to_order_item( $item, $values );
	public function get_cfw_cart_item_discount( string $price_html );
	public function display( string $location );
	public function get_captured_revenue(): float;
	public function get_conversion_rate();
	public function is_in_cart(): bool;
	public function get_item_removal_behavior(): string;
	public function is_cart_bump_valid(): bool;
	public function is_published(): bool;
	public function get_price( string $context = 'view' ): float;
}
