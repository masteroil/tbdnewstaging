<div class="wfte_rtl_main wfte_invoice-main">
    <div class="wfte_invoice-header clearfix">
        <div class="wfte_doc_title wfte_text_right clearfix">__[Credit note]__</div>
        <div class="wfte_invoice-header_top clearfix">
            <div class="clearfix">
                <div class="wfte_company_logo float_left">
                    <div class="wfte_company_logo_img_box">
                        <img src="[wfte_company_logo_url]" class="wfte_company_logo_img">
                    </div>
                    <div class="wfte_company_name wfte_hidden">[wfte_company_name]</div>
                    <div class="wfte_company_logo_extra_details">__[]__</div>
                </div>
                <div class="wfte_addrss_fields float_right wfte_invoice_data_grey">
                    <div class="wfte_invoice_data">
                        <div class="wfte_vat_number">
                            <span class="wfte_vat_number_label">__[VAT:]__</span>
                            <span>[wfte_vat_number]</span>
                        </div>
                        <div class="wfte_ssn_number">
                            <span class="wfte_ssn_number_label">__[SSN:]__</span>
                            <span>[wfte_ssn_number]</span>
                        </div>
                        <div class="wfte_email">
                            <span class="wfte_email_label">__[Email:]__</span>
                            <span>[wfte_email]</span>
                        </div>
                        <div class="wfte_tel">
                            <span class="wfte_tel_label">__[Tel:]__</span>
                            <span>[wfte_tel]</span>
                        </div>
                        <div class="wfte_shipping_method">
                            <span class="wfte_shipping_method_label">__[Shipping Method:]__</span>
                            <span>[wfte_shipping_method]</span>
                        </div>
                        <div class="wfte_tracking_number">
                            <span class="wfte_tracking_number_label">__[Tracking number:]__</span>
                            <span>[wfte_tracking_number]</span>
                        </div>
                    </div>
                    <div class="wfte_order_item_meta">[wfte_order_item_meta]</div>
                    [wfte_extra_fields]
                </div>
            </div>
            <div class="wfte_addrss_field_main clearfix">
                <div class="wfte_addrss_fields wfte_from_address wfte_text_left float_left">
                    <div class="wfte_address-field-header wfte_from_address_label">__[From Address:]__</div>
                    <div class="wfte_from_address_val">[wfte_from_address]</div>
                </div>
            </div>
        </div>
        <div class="wfte_addrss_field_main clearfix">        
            <div class="wfte_addrss_fields wfte_billing_address wfte_text_left float_left">
                <div class="wfte_address-field-header wfte_billing_address_label">__[Billing Address:]__</div>
                [wfte_billing_address]
            </div>
            <div class="wfte_addrss_fields wfte_shipping_address wfte_text_left float_left">
                <div class="wfte_address-field-header wfte_shipping_address_label">__[Shipping Address:]__</div>
                [wfte_shipping_address]
            </div>
            <div class="wfte_invoice_data_grey float_right">
                <div class="wfte_invoice_data">
                    <div class="wfte_creditnote_number">
                        <span class="wfte_creditnote_number_label">__[Credit note No:]__</span> [wfte_creditnote_number]
                    </div>
                    <div class="wfte_creditnote_date" data-creditnote_date-format="m-d-Y">
                        <span class="wfte_creditnote_date_label">__[Credit note Date:]__</span> [wfte_creditnote_date]
                    </div>
                    <div class="wfte_invoice_number">
                        <span class="wfte_invoice_number_label">__[Invoice No:]__</span> [wfte_invoice_number]
                    </div>
                    <div class="wfte_order_date" data-order_date-format="m-d-Y">
                        <span class="wfte_order_date_label">__[Order Date:]__</span> [wfte_order_date]
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wfte_invoice-body clearfix">   
        [wfte_product_table_start]
        <table class="wfte_product_table">
            <thead class="wfte_product_table_head wfte_product_table_head_bg wfte_table_head_color">
                <tr>
                    <th class="wfte_product_table_head_serial_no wfte_product_table_head_bg wfte_table_head_color" col-type="serial_no">__[No]__</th>
                    <th class="wfte_product_table_head_image wfte_product_table_head_bg wfte_table_head_color" col-type="image">__[Image]__</th>
                    <th class="wfte_product_table_head_sku wfte_product_table_head_bg wfte_table_head_color" col-type="sku">__[SKU]__</th>
                    <th class="wfte_product_table_head_product wfte_product_table_head_bg wfte_table_head_color" col-type="product">__[Product]__</th>
                    <th class="wfte_product_table_head_quantity wfte_product_table_head_bg wfte_table_head_color" col-type="quantity">__[Quantity]__</th>
                    <th class="wfte_product_table_head_price wfte_product_table_head_bg wfte_table_head_color" col-type="price">__[Price]__</th>
                    <th class="wfte_product_table_head_total_price wfte_right_column wfte_product_table_head_bg wfte_table_head_color" col-type="total_price">__[Total Price]__</th>
                    <th class="wfte_product_table_head_tax_items wfte_product_table_head_bg wfte_table_head_color" col-type="tax_items">[wfte_product_table_tax_item_column_label]</th>
                    <th class="wfte_product_table_head_tax wfte_product_table_head_bg wfte_table_head_color" col-type="-tax">__[Total Tax]__</th>     
                </tr>
            </thead>
            <tbody class="wfte_product_table_body wfte_table_body_color">
            </tbody>
        </table>   
        [wfte_product_table_end]   
        <table class="wfte_payment_summary_table wfte_product_table">
            <tbody class="wfte_payment_summary_table_body wfte_table_body_color">
                <tr class="wfte_payment_summary_table_row wfte_product_table_subtotal">
                    <td class="wfte_product_table_subtotal_label wfte_text_right">__[Subtotal]__</td>
                    <td class="wfte_right_column wfte_text_center">[wfte_product_table_subtotal]</td>
                </tr>
                <tr class="wfte_payment_summary_table_row wfte_product_table_shipping">
                    <td class="wfte_product_table_shipping_label wfte_text_right">__[Shipping]__</td>
                    <td class="wfte_right_column wfte_text_center">[wfte_product_table_shipping]</td>
                </tr>
                <tr class="wfte_payment_summary_table_row wfte_product_table_cart_discount">
                    <td class="wfte_product_table_cart_discount_label wfte_text_right">__[Cart Discount]__</td>
                    <td class="wfte_right_column wfte_text_center">[wfte_product_table_cart_discount]</td>
                </tr>
                <tr class="wfte_payment_summary_table_row wfte_product_table_order_discount">
                    <td class="wfte_product_table_order_discount_label wfte_text_right">__[Order Discount]__</td>
                    <td class="wfte_right_column wfte_text_center">[wfte_product_table_order_discount]</td>
                </tr>
                <tr data-row-type="wfte_tax_items" class="wfte_payment_summary_table_row wfte_product_table_tax_item">
                    <td class="wfte_product_table_tax_item_label wfte_text_right">[wfte_product_table_tax_item_label]</td>
                    <td class="wfte_right_column wfte_text_center">[wfte_product_table_tax_item]</td>
                </tr>
                <tr class="wfte_payment_summary_table_row wfte_product_table_total_tax">
                    <td class="wfte_product_table_total_tax_label wfte_text_right">__[Total Tax]__</td>
                    <td class="wfte_right_column wfte_text_center">[wfte_product_table_total_tax]</td>
                </tr>
                <tr class="wfte_payment_summary_table_row wfte_product_table_fee">
                    <td class="wfte_product_table_fee_label wfte_text_right">__[Fee]__</td>
                    <td class="wfte_right_column wfte_text_center">[wfte_product_table_fee]</td>
                </tr>
                <tr class="wfte_payment_summary_table_row wfte_product_table_coupon">
                    <td class="wfte_product_table_coupon_label wfte_text_right">__[Coupon Used]__</td>
                    <td class="wfte_right_column wfte_text_center">[wfte_product_table_coupon]</td>
                </tr>
                <tr class="wfte_payment_summary_table_row wfte_product_table_payment_method">
                    <td class="wfte_product_table_payment_method_label wfte_text_right">__[Payment Method]__</td>
                    <td class="wfte_right_column wfte_text_center">[wfte_product_table_payment_method]</td>
                </tr>
                <tr data-row-type="wfte_refund_items" class="wfte_payment_summary_table_row wfte_product_table_refund_item">
                    <td class="wfte_product_table_refund_item_label wfte_text_right">[wfte_product_table_refund_item_label]</td>
                    <td class="wfte_right_column wfte_text_center">[wfte_product_table_refund_item]</td>
                </tr>
                <tr class="wfte_payment_summary_table_row wfte_product_table_payment_total">
                    <td class="wfte_product_table_payment_total_label wfte_text_right wfte_product_table_head_bg wfte_table_head_color">__[Total]__</td>
                    <td class="wfte_product_table_payment_total_val wfte_right_column wfte_product_table_head_bg wfte_table_head_color wfte_text_center">[wfte_product_table_payment_total]</td>
                </tr>
            </tbody>
        </table>
        <div class="wfte_addrss_field_main clearfix">
            <div class="wfte_addrss_fields float_left">
                <div class="wfte_return_address wfte_text_left">
                    <div class="wfte_address-field-header wfte_return_address_label">__[Return Address:]__</div>
                    [wfte_return_address]
                </div>
            </div>
        </div>
        <div class="wfte_return_policy clearfix wfte_text_left">
            [wfte_return_policy]
        </div>
        <div class="wfte_footer clearfix wfte_text_left">
            [wfte_footer]
        </div>
    </div>
</div>
<style type="text/css">
body, html{margin:0px; padding:0px;}
.clearfix::after {
    display: block;
    clear: both;
  content: "";}
.wfte_invoice-main{ color:#73879C; font-family:"Helvetica Neue", Roboto, Arial, "Droid Sans", sans-serif; font-size:12px; font-weight:400; line-height:18px; box-sizing:border-box; width:100%; margin:0px; padding:0px;}
.wfte_invoice-main *{ box-sizing:border-box;}
.wfte_invoice-header{ background:#ffffff; color:#000; padding:15px 30px; width:100%; }
.wfte_doc_title{ padding:15px 0px; padding-top:5px; width:100%; font-size:26px; font-weight:bold; color:#333;}
.wfte_invoice-header_top{ padding:15px 0px; padding-bottom:25px; border-bottom:solid 1px #ccc; width:100%;}
.wfte_company_logo{ float:left; width:40%; }
.wfte_company_logo_img{ width:150px; max-width:100%; }
.wfte_company_name{ font-size:18px; font-weight:bold; }
.wfte_company_logo_extra_details{ font-size:12px; }
.wfte_barcode{ margin-left:15px; }
.wfte_invoice_number{ font-size:12px; }
.wfte_creditnote_number{ font-size:12px; font-weight:bold; }
.wfte_order_number{ font-size:12px; font-weight:bold; }
.wfte_invoice_date{ font-size:12px;}
.wfte_order_date{ font-size:12px;}
.wfte_invoice_data{ width:100%;  }
.wfte_invoice_data_grey{padding:10px; background-color:#f3f3f3;}
.wfte_addrss_field_main{ width:100%; font-size:12px; padding-top:10px; }
.wfte_addrss_fields{ width:33%;}
.wfte_address-field-header{ font-weight:bold; }
.wfte_invoice-body{background:#ffffff; color:#23272c; padding:10px 30px; width:100%;}
.wfte_product_table{ width:100%; border-collapse:collapse; }
.wfte_product_table_head{background-color:#212529; color:#ffffff;}
.wfte_product_table .wfte_right_column{ width:20%; }
.wfte_payment_summary_table .wfte_left_column{ width:60%; }
.wfte_product_table_head{}
.wfte_product_table_head th{height:36px; padding:0px 5px; font-size:.75rem; text-align:center; line-height:10px; font-family:"Helvetica Neue", Roboto, Arial, "Droid Sans", sans-serif; }
.wfte_product_table_body td, .wfte_payment_summary_table_body td{font-size:12px; line-height:10px; font-family:"Helvetica Neue", Roboto, Arial, "Droid Sans", sans-serif; }

.wfte_product_table_body td{padding:8px 5px; text-align:center; }
.wfte_payment_summary_table_body td{padding:8px 5px;}

.wfte_product_table_payment_total{ font-size:14px; font-weight:bold; height:36px; padding:0px;line-height:10px;}
td.wfte_product_table_payment_total_label{ height:36px; padding:0px 5px; line-height:10px;}
.wfte_product_table_payment_total_val{}
.wfte_return_policy{ width:100%; height:auto; border-top:solid 1px #dfd5d5; padding:5px 0px; margin-top:5px; font-size:10px;}
.wfte_footer{ width:100%; height:auto; border-top:solid 1px #dfd5d5; padding:5px 0px; margin-top:5px; font-size:10px;}

.wfte_product_table_head_bg{background-color:#212529;}
.wfte_table_head_color{ color:#ffffff; }

.wfte_invoice_data td, .wfte_extra_fields td{font-size:12px; padding:0px; font-family:"Helvetica Neue", Roboto, Arial, "Droid Sans", sans-serif;}
.wfte_payment_summary_table_row td{ font-weight:bold; }

.float_left{ float:left; }
.float_right{ float:right; }
</style>