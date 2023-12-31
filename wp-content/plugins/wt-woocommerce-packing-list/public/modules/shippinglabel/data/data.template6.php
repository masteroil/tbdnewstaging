<style type="text/css">
.clearfix::after {
    display: block;
    clear: both;
  content: "";}
.wfte_main{ color:#73879C; font-family:"Helvetica Neue", Roboto, Arial, "Droid Sans", sans-serif; font-size:12px; font-weight:400; line-height:18px; box-sizing:border-box; width:100%; margin:10px 0px; border:solid 1px #000;}
.wfte_main *{ box-sizing:border-box;}
.wfte_header{background:#ffffff; color:#000; padding:10px 20px; width:100%; border-bottom:solid 1px #999;}
.wfte_company_logo{ float:left; width:50%;  }
.wfte_company_logo_img{ width:150px; max-width:100%; }
.wfte_company_name{ font-size:18px; font-weight:bold; }
.wfte_company_logo_extra_details{ font-size:12px; }
.wfte_body{background:#ffffff; color:#23272c; padding:10px 20px; width:100%;}
.wfte_addrss_field_main{ width:100%; font-size:12px; margin-top:5px; }
.wfte_addrss_fields{ line-height:16px; width:30%;}
.wfte_shipping_address{width:50%;}
.wfte_address-field-header{ font-weight:bold; }
.wfte_qr_code, .wfte_barcode{ text-align:center; }
.wfte_barcode img{ max-width:100%; }
.wfte_return_policy{width:100%; height:auto; padding:0px; font-weight:bold; margin-top:15px; }
.wfte_footer{width:100%; height:auto; padding:0px; margin-top:15px;}
.wfte_shipping_details{ font-weight:bold; margin-top:0px; padding-top:5px;}
.wfte_shipping_details div span:first-child{ font-weight:normal; }
.wfte_tracking_number{ text-align:center; font-size:14px; padding-bottom:5px; border-top:solid 1px #999;}
.wfte_tel, .wfte_email{ font-weight:bold; margin-top:10px; }

.float_left{ float:left; }
.float_right{ float:right; }

</style>
<div class="wfte_rtl_main wfte_main wfte_custom_shipping_size">
  <div class="wfte_header clearfix">      
      <div class="wfte_addrss_fields wfte_from_address float_left wfte_text_left">
        <div class="wfte_address-field-header wfte_from_address_label">__[From:]__</div>
        <div class="wfte_from_address_val">[wfte_from_address]</div>
      </div>
      <div class="float_right">
        <div class="wfte_shipping_details wfte_list_view">
          <div class="wfte_order_number">
            <span class="wfte_order_number_label">__[Order No:]__</span> [wfte_order_number]
          </div>
          <div class="wfte_weight">
            <span class="wfte_weight_label">__[Weight:]__</span> [wfte_weight]
          </div>
          <div class="wfte_ship_date">
            <span class="wfte_ship_date_label">__[Ship Date:]__</span> [wfte_ship_date]
          </div>
          <div class="wfte_box_name">
            [wfte_box_name]
          </div>
          <div class="wfte_package_no wfte_hidden clearfix">
              [wfte_package_no]
          </div>
          <div class="wfte_total_no_of_items wfte_template_element wfte_hidden">
              <span class="wfte_total_no_of_items_label">__[No of items:]__ </span> 
              <span class="wfte_total_no_of_items_val">[wfte_total_no_of_items]</span>
          </div>
          <div class="wfte_order_item_meta">[wfte_order_item_meta]</div>
          [wfte_extra_fields]
          [wfte_additional_data]
        </div>

        <div class="wfte_company_logo">
          <div class="wfte_company_logo_img_box">
            <img src="[wfte_company_logo_url]" class="wfte_company_logo_img">
          </div>
          <div class="wfte_company_name wfte_hidden">[wfte_company_name]</div>
        </div>
      </div>
  </div>
  <div class="wfte_body clearfix">
    <div class="wfte_addrss_field_main clearfix">     
      <div class="wfte_addrss_fields wfte_shipping_address float_left wfte_text_left">
        <div class="wfte_address-field-header wfte_shipping_address_label">__[To:]__</div>
        <div class="wfte_shipping_address_val">[wfte_shipping_address]</div>      
        <div class="wfte_list_view">
          <div class="wfte_tel">
            <span class="wfte_tel_label">__[Tel:]__</span>
            <span>[wfte_tel]</span>
          </div>
          <div class="wfte_email wfte_hidden">
            <span class="wfte_email_label">__[Email:]__</span>
            <span>[wfte_email]</span>
          </div>
        </div>
      </div>
    </div>
    <div class="wfte_addrss_field_main clearfix wfte_text_center">    
      
    </div>
  </div>
  <div class="wfte_body clearfix">
      <div class="wfte_list_view">
        <div class="wfte_tracking_number clearfix">
          <span class="wfte_tracking_number_label">__[Tracking number:]__</span>
          <span>[wfte_tracking_number]</span>
        </div>
      </div>
      <div class="wfte_qr_code clearfix">
        [wfte_qr_code]
      </div>
      <div class="wfte_barcode clearfix">
        <img src="[wfte_barcode_url]" style="">
      </div>
      <div class="wfte_return_policy clearfix wfte_text_left wfte_hidden">
      [wfte_return_policy]
      </div>
      <div class="wfte_footer clearfix wfte_text_left wfte_hidden">
        [wfte_footer]
      </div>
  </div>
</div>