<div class="woo_amc_container_wrap_center">
    <div class="woo_amc_bg"></div>
    <div class="woo_amc_container_center">
        <div class="woo_amc_container">
            <div class="woo_amc_head">
                <div class="woo_amc_head_title woo_amc_center"><?php echo $options['cart_header_title']; ?></div>
                <div class="woo_amc_close">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16.008 16.008">
                        <g transform="translate(-1865.147 -163.146)">
                            <line x1="15.301" y2="15.301" transform="translate(1865.5 163.5)"/>
                            <line x2="15.301" y2="15.301" transform="translate(1865.5 163.5)"/>
                        </g>
                    </svg>
                </div>
            </div>
            <div class="woo_amc_items_wrap woo_amc_center">
                <div class="woo_amc_items_loading">
                    <div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
                </div>
                <div class="woo_amc_items">
                    <?php require_once $template_items_path; ?>
                </div>
            </div>

            <a href="#" class="woo_amc_footer test">
                <div class="woo_amc_center woo_amc_flex">
                    <div class="woo_amc_footer_w50 woo_amc_flex">
                        <div class="woo_amc_footer_lines">
                            <div class="woo_amc_footer_products">
                                <div class="woo_amc_label"><?php echo $options['cart_footer_products_label']; ?></div>
                                <div class="woo_amc_value"><?php echo $cart_count; ?></div>
                            </div>
                            <div class="woo_amc_footer_total">
                                <div class="woo_amc_label"><?php echo $options['cart_footer_total_label']; ?></div>
                                <div class="woo_amc_value"><?php echo $cart_total; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="woo_amc_footer_w50 woo_amc_flex">
                        <div class="woo_amc_footer_link"><?php echo $options['cart_footer_link_text']; ?></div>
                    </div>
                    <button><a href="/checkout">Checkout</a></button>
                </div>
            </a>
        </div>
    </div>
</div>