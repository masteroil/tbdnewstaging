<!-- DC ready -->
<style type="text/css">
@page{margin: 30px 0px;}
body, html{margin:0px; padding:0px; font-family:"Helvetica Neue", Roboto, Arial, "Droid Sans", sans-serif;}
.clearfix::after{ display:block; clear:both; content:""; }

.wfte_invoice-main{ color:#202020; font-size:12px; font-weight:400; box-sizing:border-box; width:100%; padding:0px 0px 30px 0px; margin: 30px 0px; background:#fff; height:auto; }
.wfte_invoice-main *{ box-sizing:border-box;}
.template_footer{color:#202020; font-size:12px; font-weight:400; box-sizing:border-box; padding:30px 0px; background:#fff; height:auto;}
.template_footer *{ box-sizing:border-box;}


.wfte_row{ width:100%; display:block; }
.wfte_sub_row{ width:100%; display:block; }
.wfte_col-1{ width:100%; display:block;}
.wfte_col-2{ width:50%; display:block;}
.wfte_col-3{ width:33%; display:block;}
.wfte_col-4{ width:25%; display:block;}
.wfte_col-6{ width:30%; display:block;}
.wfte_col-7{ width:69%; display:block;}

.wfte_padding_left_right{ padding:0px 30px; }
.wfte_hr{ height:1px; font-size:0px; padding:0px; background:#cccccc; margin-bottom: 20px;}

.wfte_company_logo_img_box{ margin-bottom:10px; }
.wfte_company_logo_img{ width:150px; max-width:100%; }
.wfte_doc_title{ color:#23a8f9; font-size:30px; font-weight:bold; height:auto; width:auto; float:left; line-height:22px;}
.wfte_company_name{ font-size:18px; font-weight:bold; }
.wfte_company_logo_extra_details{ font-size:12px; margin-top:3px;}
.wfte_invoice_data div span:last-child, .wfte_extra_fields span:last-child{ font-weight:bold; }
.wfte_invoice_data{ line-height:18px; font-size:12px; }
.wfte_shipping_address{ width:95%;}
.wfte_billing_address{ width:95%; }
.wfte_address-field-header{ font-weight:bold; font-size:12px; color:#000; padding:3px; padding-left:0px;}
.wfte_addrss_field_main{ padding-top:15px;}

.wfte_product_table{ width:100%; border-collapse:collapse; margin:0px; }
.wfte_payment_summary_table_body .wfte_right_column{ text-align:left; }
.wfte_payment_summary_table{ margin-bottom:10px; }
.wfte_table_head_color{ color:#2e2e2e; }

.wfte_product_table_head{}
.wfte_product_table_head th{ height:36px; padding:0px 5px; font-size:.75rem; text-align:start; line-height:10px; border-bottom:solid 1px #7b7b7b; border-top:solid 1px #7b7b7b; font-family:"Helvetica Neue", Roboto, Arial, "Droid Sans", sans-serif; text-transform:uppercase;}
.wfte_product_table_body td, .wfte_payment_summary_table_body td{ font-size:12px; line-height:15px;}
.wfte_product_table_body td{ padding:10px 5px; border-bottom:solid 1px #dddee0;}
.wfte_product_table .wfte_right_column{ width:15%;}
.wfte_payment_summary_table .wfte_left_column{ width:60%; }
.wfte_product_table_body .product_td b{ font-weight:normal; }
.wfte_product_table_head_product{width: 30%;}

.wfte_payment_summary_table_body td{ padding:5px 5px; border:none;}

.wfte_product_table_payment_total td{ font-size:13px; color:#000; height:28px; border-bottom:solid 1px #cccccc; border-top:solid 1px #cccccc;}
.wfte_product_table_payment_total td:nth-child(3){ font-weight:bold; }

.product_td b{line-height: 15px;}
.quantity_td{ text-align: center !important; } 
.wfte_package_no{font-weight: bold;}
.wfte_invoice_data_grey{ background-color:#f3f3f3;padding:10px}

/* for mPdf */
.wfte_invoice_data{ border:solid 0px #fff; }
.wfte_invoice_data td, .wfte_extra_fields td{ font-size:12px; padding:0px; font-family:"Helvetica Neue", Roboto, Arial, "Droid Sans", sans-serif; line-height:14px;}
.wfte_invoice_data tr td:nth-child(2), .wfte_extra_fields tr td:nth-child(2){ font-weight:bold; }

.wfte_signature{ width:100%; height:auto; min-height:60px; padding:5px 0px;}
.wfte_signature_label{ font-size:12px; }
.wfte_image_signature_box{ display:inline-block;}
.wfte_return_policy{width:100%; height:auto; border-bottom:solid 1px #dfd5d5; padding:5px 0px; margin-top:5px; }
.wfte_footer{width:100%; height:auto; padding:5px 0px; margin-top:5px;font-size: 12px;}

.wfte_received_seal{ position:absolute; z-index:10; margin-top:110px; margin-left:0px; width:130px; border-radius:5px; font-size:22px; height:40px; line-height:28px; border:solid 5px #00ccc5; color:#00ccc5; font-weight:900; text-align:center; transform:rotate(-45deg); opacity:.5; }

.float_left{ float:left; }
.float_right{ float:right; }

.wfte_product_table_category_row td{ padding:10px 5px;}
</style>
<div class="wfte_rtl_main wfte_invoice-main"> 
    <div class="wfte_row wfte_padding_left_right clearfix">       
        <div class="wfte_col-7 float_left">
            <div class="wfte_doc_title wfte_template_element" data-hover-id="doc_title">__[Delivery note]__</div>
        </div>
        <div class="wfte_col-6 float_right">
            <div class="wfte_barcode wfte_template_element" data-hover-id="barcode">
                <img src="[wfte_barcode_url]" class="wfte_img_barcode" style="">
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="wfte_row wfte_padding_left_right clearfix" style="padding-top: 15px;">
        <div class="wfte_col-1 float_left wfte_text_left">
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="wfte_row wfte_padding_left_right clearfix">       
        <div class="wfte_col-7 float_left">
            <div class="wfte_company_logo wfte_template_element" data-hover-id="company_logo">
                <div class="wfte_company_logo_img_box">
                    <img src="[wfte_company_logo_url]" class="wfte_company_logo_img">
                </div>
                <div class="wfte_company_name wfte_hidden"> [wfte_company_name]</div>
                <div class="wfte_company_logo_extra_details">__[]__</div>
            </div>
        </div>
        <div class="wfte_col-6 float_right">
            <div class="wfte_from_address wfte_template_element" data-hover-id="from_address">
                <div class="wfte_from_address_val">
                    [wfte_from_address]
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="wfte_row wfte_padding_left_right clearfix" style="padding-top: 15px;">
        <div class="wfte_col-1 float_left wfte_text_left">
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="wfte_row wfte_padding_left_right clearfix">
        <div class="wfte_col-7 float_left">
            <div class="wfte_sub_row clearfix">
                <div class="wfte_col-2 float_left wfte_text_left">
                    <div class="wfte_billing_address wfte_template_element" data-hover-id="billing_address">
                        <div class="wfte_address-field-header wfte_billing_address_label">__[Billing Address:]__</div>
                        <div class="wfte_billing_address_val">
                            [wfte_billing_address]
                        </div>
                    </div>
                    <div class="wfte_invoice_data">
                        <div class="wfte_email wfte_template_element" data-hover-id="email">
                            <span class="wfte_email_label">__[Email:]__</span>
                            <span class="wfte_email_val" style="font-weight:normal;">[wfte_email]</span>
                        </div>
                        <div class="wfte_tel wfte_template_element" data-hover-id="tel">
                            <span class="wfte_tel_label">__[Phone:]__ </span>
                            <span class="wfte_tel_val" style="font-weight:normal;">[wfte_tel]</span>
                        </div>
                    </div>
                    <div class="wfte_vat_number">
                        <span class="wfte_vat_number_label">__[VAT:]__</span>
                        <span style="font-weight:normal;">[wfte_vat_number]</span>
                    </div>
                    <div class="wfte_order_item_meta">[wfte_order_item_meta]</div>
                </div>
                <div class="wfte_col-2 float_right wfte_text_left">
                    <div class="wfte_shipping_address wfte_template_element" data-hover-id="shipping_address">
                        <div class="wfte_address-field-header wfte_shipping_address_label">__[Shipping Address:]__</div>
                        <div class="wfte_shipping_address_val">
                            [wfte_shipping_address]
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wfte_col-6 float_right wfte_text_left">
            <div class="wfte_invoice_data_grey">
                <div class="wfte_package_no wfte_template_element">
                    [wfte_package_no]
                </div>           
                <div class="wfte_invoice_data">
                    <div class="wfte_order_number wfte_template_element" data-hover-id="order_number">
                        <span class="wfte_order_number_label">__[Order No:]__ </span> 
                        <span class="wfte_order_number_val" style="font-weight: bold;">[wfte_order_number]</span>
                    </div>
                    <div class="wfte_order_date wfte_template_element" data-order_date-format="m-d-Y" data-hover-id="order_date">
                        <span class="wfte_order_date_label">__[Order Date:]__ </span> 
                        <span class="wfte_order_date_val" style="font-weight: bold;">[wfte_order_date]</span>
                    </div>
                    <div class="wfte_total_no_of_items wfte_template_element">
                        <span class="wfte_total_no_of_items_label">__[No of items:]__ </span> 
                        <span class="wfte_total_no_of_items_val" style="font-weight: bold;">[wfte_total_no_of_items]</span>
                    </div>
                    <div class="wfte_shipping_method">
                        <span class="wfte_shipping_method_label">__[Shipping Method:]__</span>
                        <span>[wfte_shipping_method]</span>
                    </div>
                    <div class="wfte_tracking_number">
                        <span class="wfte_tracking_number_label">__[Tracking number:]__</span>
                        <span>[wfte_tracking_number]</span>
                    </div>
                    <div class="wfte_ssn_number">
                        <span class="wfte_ssn_number_label">__[SSN:]__</span>
                        <span>[wfte_ssn_number]</span>
                    </div>
                    [wfte_extra_fields]
                    <div class="wfte_box_name">[wfte_box_name]</div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="wfte_row wfte_padding_left_right clearfix" style="padding-top: 15px;">
        <div class="wfte_col-2 float_left wfte_text_left">
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="wfte_row wfte_padding_left_right clearfix">
        <div class="wfte_col-1">
            [wfte_product_table_start]
            <table class="wfte_product_table wfte_side_padding_table wfte_template_element" data-hover-id="product_table">
                <thead class="wfte_product_table_head wfte_table_head_color wfte_product_table_head_bg">
                    <tr>
                        <th class="wfte_product_table_head_serial_no wfte_product_table_head_bg wfte_table_head_color" col-type="-serial_no">__[S.No]__</th>
                        <th class="wfte_product_table_head_image wfte_table_head_color wfte_product_table_head_bg" col-type="image">__[Image]__</th>
                        <th class="wfte_product_table_head_sku wfte_table_head_color wfte_product_table_head_bg" col-type="sku">__[SKU]__</th>
                        <th class="wfte_product_table_head_product wfte_table_head_color wfte_product_table_head_bg" col-type="product">__[Product]__</th>
                        <th class="wfte_product_table_head_quantity wfte_table_head_color wfte_product_table_head_bg" col-type="quantity" style="text-align:center;">__[Quantity]__</th>
                        <th class="wfte_product_table_head_total_weight wfte_table_head_color wfte_product_table_head_bg" col-type="total_weight">__[Total Weight]__</th>
                        <th class="wfte_product_table_head_total_price wfte_table_head_color wfte_product_table_head_bg" col-type="total_price">__[Total Price]__</th> 
                    </tr>
                </thead>
                <tbody class="wfte_product_table_body wfte_table_body_color">
                </tbody>
            </table>
            [wfte_product_table_end]
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="wfte_row wfte_padding_left_right clearfix" style="margin-top: 15px;">
        <div class="wfte_col-2 float_left wfte_text_left">
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="wfte_row wfte_padding_left_right clearfix">
        <div class="wfte_col-1">
            <div class="wfte_return_policy wfte_text_left clearfix">
                [wfte_return_policy]
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="wfte_row wfte_padding_left_right clearfix">
        <div class="wfte_col-1">
            <div class="wfte_footer wfte_text_left clearfix">
                [wfte_footer]
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>