<?php
if (!defined('ABSPATH')) {
	exit;
}
?>
<div class="wf-tab-content" data-id="<?php echo $target_id;?>">
<p>
	<?php _e('Configure the general settings required for packing slip.','wf-woocommerce-packing-list');?>
</p>
<table class="wf-form-table">
	<?php
	$order_meta_doc_url = 'https://www.webtoffee.com/add-custom-fields-to-woocommerce-documents/#order-meta';
    $product_meta_doc_url = 'https://www.webtoffee.com/add-custom-fields-to-woocommerce-documents/#product-meta';
    $product_attr_doc_url = 'https://www.webtoffee.com/add-custom-fields-to-woocommerce-documents/#product-attribute';
    
	Wf_Woocommerce_Packing_List_Admin::generate_form_field(array(
		array(
			'type'=>"checkbox",
			'label'=>__("Group products by 'Category'",'wf-woocommerce-packing-list'),
			'option_name'=>"wf_woocommerce_product_category_wise_splitting",
			'field_vl' => "Yes",
			'help_text' => __('Enable to group the products based on a category in the packing slip.','wf-woocommerce-packing-list')
		),
		array(
			'type'=>"checkbox",
			'label'=>__("Show variation data below each product",'wf-woocommerce-packing-list'),
			'option_name'=>"woocommerce_wf_packinglist_variation_data",
			'field_vl' => "Yes",
			'help_text' => __('Enable to display variation data of products beneath the product.','wf-woocommerce-packing-list')
		),
		array(
			'type'=>"product_sort_by",
			'label'=>__("Sort products by", 'wf-woocommerce-packing-list'),
			'option_name'=>"sort_products_by",
			'help_text'=>'',
		),
		array(
			'type'=>"additional_fields",
			'label'=>__("Order meta fields",'wf-woocommerce-packing-list'),
			'option_name'=>'wf_'.$this->module_base.'_contactno_email',
			'module_base'=>$this->module_base,
			'help_text'=>sprintf(__('Select/add additional order information in the packing slip.%s Learn how to add order meta %s','wf-woocommerce-packing-list'),'<a href="'.esc_url($order_meta_doc_url).'" target="_blank">', '</a>'),
		),
		array(
			'type'=>"product_meta",
			'label'=>__("Product meta fields",'wf-woocommerce-packing-list'),
			'option_name'=>'wf_'.$this->module_base.'_product_meta_fields',
			'module_base'=>$this->module_base,
			'help_text'=>sprintf(__('Selected product meta will be displayed beneath the respective product in the packing slip.<br> %s Learn how to add product meta %s','wf-woocommerce-packing-list'),'<a href="'.esc_url($product_meta_doc_url).'" target="_blank">', '</a>'),
		),
		array(
			'type'=>"product_attribute",
			'label'=>__("Product attributes", 'wf-woocommerce-packing-list'),
			'option_name'=>'wt_'.$this->module_base.'_product_attribute_fields',
			'module_base'=>$this->module_base,
			'help_text'=>sprintf(__('Selected product attribute will be displayed beneath the respective product in the packing slip.<br> %s Learn how to add product attribute %s', 'wf-woocommerce-packing-list'),'<a href="'.esc_url($product_attr_doc_url).'" target="_blank">', '</a>'),
		),
		array(
			'type'=>'order_st_multiselect',
			'label'=>__("Show 'Print Packing Slip' button for selected order statuses",'wf-woocommerce-packing-list'),
			'option_name'=>"woocommerce_wf_attach_".$this->module_base,
			'help_text'=>__("Adds print packing slip button to the order email for chosen status",'wf-woocommerce-packing-list'),
			'order_statuses'=>$order_statuses,
			'field_vl'=>array_flip($order_statuses),
		),
		array(
			'type'=>'order_st_multiselect',
			'label'=>__("Email packing slip automatically", 'wf-woocommerce-packing-list'),
			'option_name'=>"woocommerce_wf_generate_for_orderstatus",
			'order_statuses'=>$order_statuses,
			'field_vl'=>array_flip($order_statuses),
			'help_text'=>__('PDF version of Packing slip will be attached with the order email','wf-woocommerce-packing-list'),
		),
		array(
			'type'=>"checkbox",
			'label'=>__("Share Packing slip PDF as a separate email",'wf-woocommerce-packing-list'),
			'option_name'=>"wt_pklist_separate_email",
			'field_vl' => "Yes",
			'help_text'=>sprintf(__('Enable it and save settings, if you need to send a copy of the Packing slip to another email id e.g admin email. You may then configure the email %s here %s accordingly.', 'wf-woocommerce-packing-list'), '<a href="'.$email_settings_path.'" target="_blank">', '</a>'),
		),
		array(
			'type'=>"textarea",
			'label'=>__("Custom footer",'wf-woocommerce-packing-list'),
			'option_name'=>"woocommerce_wf_packinglist_footer",
			'help_text'=>__('If left blank, defaulted to footer from General settings.','wf-woocommerce-packing-list'),
		),
		array(
			'type'=>"select",
			'label'=>__("Bundled product display options",'wf-woocommerce-packing-list'),
			'option_name'=>"bundled_product_display_option",
			'help_text'=>sprintf(__('Choose how to display bundled products in the invoice. Applicable only if you are using %s Woocommerce Product Bundles %s / %s YITH WooCommerce Product Bundle add-on %s. It may not work along with %sGroup by Category%s option.','wf-woocommerce-packing-list'), '<b>', '</b>', '<b>', '</b>', '<b>', '</b>' ),
			'select_fields'=>array(
				'main-sub'=>__('Main product with bundle items', 'wf-woocommerce-packing-list'),
				'main'=>__('Main product only', 'wf-woocommerce-packing-list'),
				'sub'=>__('Bundle items only', 'wf-woocommerce-packing-list'),
			),
			'help_text_conditional'=>array(
                array(
                    'help_text'=>'<img src="'.WF_PKLIST_PLUGIN_URL.'assets/images/bundle-both-items.png"/>',
                    'condition'=>array(
                        array('field'=>'bundled_product_display_option', 'value'=>'main-sub')
                    )
                ),
                array(
                    'help_text'=>'<img src="'.WF_PKLIST_PLUGIN_URL.'assets/images/bundle-parent-only.png"/>',
                    'condition'=>array(
                        array('field'=>'bundled_product_display_option', 'value'=>'main')
                    )
                ),
                array(
                    'help_text'=>'<img src="'.WF_PKLIST_PLUGIN_URL.'assets/images/bundle-child-only.png"/>',
                    'condition'=>array(
                        array('field'=>'bundled_product_display_option', 'value'=>'sub')
                    )
                ),
            ),
		),
	),$this->module_id);
	?>
</table>

<?php 
include plugin_dir_path( WF_PKLIST_PLUGIN_FILENAME )."admin/views/admin-settings-save-button.php";
?>
</div>