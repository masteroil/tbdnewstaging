<h3 style="display:inline-block;"><?php _e('System Configuration','wf-woocommerce-packing-list'); ?></h3>
<a id="sys_info_copy" class="page-title-action" style="display:inline-block;"><span class="dashicons dashicons-admin-page"></span> Copy</a>
<span id="wt_sys_info_copied" style="color:#3F7E00;font-weight: 600;display: none;"><i>Copied</i></span>
<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$memory_limit   = function_exists( 'wc_let_to_num' )?wc_let_to_num( WP_MEMORY_LIMIT ):woocommerce_let_to_num( WP_MEMORY_LIMIT );
$php_mem_limit  = function_exists( 'memory_get_usage' ) ? @ini_get( 'memory_limit' ) : '-';
$upload_loc=Wf_Woocommerce_Packing_List::get_temp_dir();
$server_configs = array(
	'PHP version' => array(
		'required' => __( '5.6 or higher recommended', 'wf-woocommerce-packing-list' ),
		'value'    => PHP_VERSION,
		'result'   => version_compare( PHP_VERSION, '5.6', '>' ),
	),
	'DOMDocument extension' => array(
		'required' => true,
		'value'    => phpversion('DOM'),
		'result'   => class_exists('DOMDocument'),
	),
	'MBString extension' => array(
		'required' => true,
		'value'    => phpversion('mbstring'),
		'result'   => function_exists('mb_send_mail'),
		'fallback' => __( 'Recommended, will use fallback functions', 'wf-woocommerce-packing-list' ),
	),
	'GD' => array(
		'required' => true,
		'value'    => phpversion('gd'),
		'result'   => function_exists('imagecreate'),
		'fallback' => __( 'Required if you have images in your documents', 'wf-woocommerce-packing-list' ),
	),
	'GMagick or IMagick' => array(
		'required' => __( 'Better with transparent PNG images', 'wf-woocommerce-packing-list' ),
		'value'    => null,
		'result'   => extension_loaded('gmagick') || extension_loaded('imagick'),
		'fallback' => __( 'Recommended for better performances', 'wf-woocommerce-packing-list' ),
	),
	// "PCRE" => array(
	// 	"required" => true,
	// 	"value"    => phpversion("pcre"),
	// 	"result"   => function_exists("preg_match") && @preg_match("/./u", "a"),
	// 	"failure"  => "PCRE is required with Unicode support (the \"u\" modifier)",
	// ),
	'Zlib' => array(
		'required' => __( 'To compress PDF documents', 'wf-woocommerce-packing-list' ),
		'value'    => phpversion('zlib'),
		'result'   => function_exists('gzcompress'),
		'fallback' => __( 'Recommended to compress PDF documents', 'wf-woocommerce-packing-list' ),
	),
	'opcache' => array(
		'required' => __( 'For better performances', 'wf-woocommerce-packing-list' ),
		'value'    => null,
		'result'   => false,
		'fallback' => __( 'Recommended for better performances', 'wf-woocommerce-packing-list' ),
	),
	'WP Memory Limit' => array(
		'required' => __( 'Recommended 128MB or more', 'wf-woocommerce-packing-list' ),
		'value'    => sprintf('WordPress: %s, PHP: %s', WP_MEMORY_LIMIT, $php_mem_limit ),
		'result'   => $memory_limit > 67108864,
	),
	'allow_url_fopen'	=> array (
		'required' => __( 'Allow remote stylesheets and images', 'wf-woocommerce-packing-list' ),
		'value'	   => null,
		'result'   => ini_get('allow_url_fopen'),			
		'fallback' => __( 'allow_url_fopen disabled', 'wf-woocommerce-packing-list' ),
	),

	'upload_folder' => array(
		'required' => __('Writtable','wf-woocommerce-packing-list'),
		'value'    => is_writable($upload_loc['path']) ? "Yes" : "No",
		'result'=> is_writable($upload_loc['path']),
	),
);

if ( ( $xc = extension_loaded('xcache') ) || ( $apc = extension_loaded('apc') ) || ( $zop = extension_loaded('Zend OPcache') ) || ( $op = extension_loaded('opcache') ) ) {
	$server_configs['opcache']['result'] = true;
	$server_configs['opcache']['value'] = (
		$xc ? 'XCache '.phpversion('xcache') : (
			$apc ? 'APC '.phpversion('apc') : (
				$zop ? 'Zend OPCache '.phpversion('Zend OPcache') : 'PHP OPCache '.phpversion('opcache')
			)
		)
	);
}
if ( ( $gm = extension_loaded('gmagick') ) || ( $im = extension_loaded('imagick') ) ) {
	$server_configs['GMagick or IMagick']['value'] = ($im ? 'IMagick '.phpversion('imagick') : 'GMagick '.phpversion('gmagick'));
}
?>
<style type="text/css">
	.wt_sys_info_border_right{
		border-right:1px solid #CFCFCF;
	}
	.wt_sys_info_correct{
		background-color:#E8FFD1;
		color:#3F7E00;
	}
	.wt_sys_info_fallback{
		background: #ffeba7;
    	color: #836500;
	}
	.wt_sys_info_warning{
		background-color: #FFCDC9;
		color: #A51205;
	}
</style>
<table id="wt_pklist_sys_info_table" cellspacing="1px" cellpadding="10px" width="100%" style="border: 1px solid #CFCFCF;margin: 25px 0;border-collapse: collapse;">
	<tr style="background: #F0F0F1;">
		<th class="wt_sys_info_border_right" align="left">&nbsp;</th>
		<th class="wt_sys_info_border_right" align="left"><?php _e( 'Required', 'wf-woocommerce-packing-list' ); ?></th>
		<th align="left"><?php _e( 'Present', 'wf-woocommerce-packing-list' ); ?></th>
	</tr>
	<?php foreach( $server_configs as $label => $server_config ) {
		if ( $server_config['result'] ) {
			$sys_info_class = "wt_sys_info_correct";
		} elseif ( isset($server_config['fallback']) ) {
			$sys_info_class = "wt_sys_info_fallback";
		} else {
			$sys_info_class = "wt_sys_info_warning";
		}

		if($label == "upload_folder"){
			$label = "PDF upload folder <br><i>(".$upload_loc['path'].")</i>";
		}
		?>
		<tr style="background:#FFF;border: 1px solid #CFCFCF;">
			<td class="title wt_sys_info_border_right" width="35%"><?php echo $label; ?></td>
			<td class="wt_sys_info_border_right"><?php echo ($server_config['required'] === true ? 'Yes' : $server_config['required']); ?></td>
			<td class="<?php echo esc_attr($sys_info_class); ?>">
				<?php
				echo $server_config['value'];
				if ($server_config['result'] && !$server_config['value']) echo 'Yes';
				if (!$server_config['result']) {
					if (isset($server_config['fallback'])) {
						echo '<div>No. '.$server_config['fallback'].'</div>';
					}
					if (isset($server_config['failure'])) {
						echo '<div>'.$server_config['failure'].'</div>';
					}
				}
				?>
			</td>
		</tr>
	<?php } ?>
</table>

<er id="wt_sys_info_box" style="display: none;">
	<?php foreach( $server_configs as $label => $server_config ) {
		echo $label."<br>";
		echo "Required: ".($server_config['required'] === true ? 'Yes' : $server_config['required'])."<br>";
		echo "Present: ".$server_config['value']."<br>";
		if ($server_config['result'] && !$server_config['value']) echo 'Yes'."<br>";
		if (!$server_config['result']) {
			if (isset($server_config['fallback'])) {
				echo 'No. '.$server_config['fallback']."<br>";
			}
			if (isset($server_config['failure'])) {
				echo $server_config['failure']."<br>";
			}
		}
		echo "===============<br>";
	}?>
</er>