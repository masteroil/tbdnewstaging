<?php
get_header();
global $product;
?>
<style>
li.subscription-option.active {
    display: block;
}

ul.wcsatt-options-product li {
    display: none;
}

.single-pro-acc.seco-box-ac {
    display: block !important;
}

.woocommerce-product-details__short-description {
    display: none;
}

.disapprstate .acc-head p {
    color: red;
}

.disapprstate .acc-icon .open-down-arrow {
    color: red;
}

label.subscriptions-listcs {
    display: none !important;
}

. a.accod-btn.subs {
    display: none;
}

a.accod-btn.one-off {
    display: block;
}

select#subscription-options {
    display: none;
}
</style>
<script>
jQuery(document).ready(function() {
    // Get value on button click and show alert
    jQuery(".single_add_to_cart_button").click(function() {
        var str = $("#pincode_field_id").val();
        if (str == "") {
            jQuery(".errorponote").css("display", "block");
            return false;
        }
        if (str != "") {
            jQuery(this).html('Added to Box');
            fbq('track', 'AddToCart', {
                content_type: 'product',
                content_category: 'Apothecary',
                pluginVersion: '2.1.4',
                currency: 'AUD',
                value: <?php echo $product->get_price();?>,
                content_name: '<?php the_title();?>',
                content_ids: ["<?php echo $product->get_sku().'_'.get_the_ID();?>"],
                version: '4.6.0'
            });
        }

    });
});
</script>
<section class="chuni-beef-banner" id="all-page-header-space">
    <div class="chunny-butlee-under">
        <div class="chunii-left-image">
            <img class="rawicoimg" src="<?php the_field('product_introduction_image');?>">
        </div>
        <div class="chunii-right-image sigle-ps">
            <section class="working-dog-butler">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 sp-space">

                            <div class="single-pro-acc">

                                <a class="accod-btn pnrmlstate collapsed" id="pnrmlstate" data-toggle="collapse"
                                    href="#collapse27" role="button" aria-expanded="false"
                                    aria-controls="collapseExample">
                                    <div class="acc-head">
                                        <p>CHECK WE DELIVER TO YOUR AREA</p>
                                    </div>
                                    <div class="acc-icon">
                                        <i class="fa fa-minus open-down-up" aria-hidden="true"></i>
                                        <i class="fas fa-chevron-down open-down-arrow"></i>
                                    </div>
                                </a>
                                <div class="collapse" id="collapse27">
                                    <div class="data-single-ac">
                                        <?php echo do_shortcode( '[phoeniixx-pincode-check]' );?>
                                    </div>
                                </div>
                            </div>

                            <?php
			/**
			 * The Template for displaying all single products
			 *
			 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
			 *
			 * HOWEVER, on occasion WooCommerce will need to update template files and you
			 * (the theme developer) will need to copy the new files to your theme to
			 * maintain compatibility. We try to do this as little as possible, but it does
			 * happen. When this occurs the version of the template file will be bumped and
			 * the readme will list any important changes.
			 *
			 * @see         https://docs.woocommerce.com/document/template-structure/
			 * @package     WooCommerce\Templates
			 * @version     1.6.4
			 */

			if ( ! defined( 'ABSPATH' ) ) {
				exit; // Exit if accessed directly
			}

			get_header( 'shop' ); ?>

                            <?php
					/**
					 * woocommerce_before_main_content hook.
					 *
					 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
					 * @hooked woocommerce_breadcrumb - 20
					 */
					do_action( 'woocommerce_before_main_content' );
				?>

                            <?php while ( have_posts() ) : ?>
                            <?php the_post(); ?>

                            <?php wc_get_template_part( 'content', 'single-product' ); ?>

                            <?php endwhile; // end of the loop. ?>

                            <?php
					/**
					 * woocommerce_after_main_content hook.
					 *
					 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
					 */
					do_action( 'woocommerce_after_main_content' );
				?>

                            <?php
					/**
					 * woocommerce_sidebar hook.
					 *
					 * @hooked woocommerce_get_sidebar - 10
					 */
					do_action( 'woocommerce_sidebar' );
				?>
                            <!-- <p style="display:none; color:red;" class="errorponote">Please add postcode</p> -->
                        </div>
                    </div>
                </div>
            </section>


        </div>
    </div>

    <div class="datpri">
        <?php 
 
 $current_product_id = get_the_ID();


 $product = wc_get_product( $current_product_id );

// //echo ">>>>>>>";
 

			?>




        <span id="dataprice" data-price="<?php echo $product->get_price();?>"
            data-max="<?php echo $product->get_max_purchase_quantity();?>"><?php echo $product->get_price_html();?></span>
    </div>
    <!-- <div class="madeby-icone-arstulian">
		<img src="<//?php echo get_site_url();?>/wp-content/uploads/2021/03/Australian-Made_White.png">
	</div> -->
</section>

<section class="aprothecy-tabs-banner">
    <div class="container">
        <div class="new-raw">
            <div class="row">
                <div class="introdution-custom">
                    <div class="introdution-custom-text">
                        <?php the_field('introdcution_text');?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="Product-Information-tab">
                <ul class="nav nav-tabs">
                    <?php
    					$Slidecounter=0;
    					if( have_rows('product_information_content') ):
    			
    						while( have_rows('product_information_content') ): the_row();
    							if($Slidecounter=='0'){
    								?>
                    <li class="active"><a class="active" data-toggle="tab"
                            href="#menu<?php echo $Slidecounter;  ?>"><?php the_sub_field('main_tab');?></a></li>

                    <?php
    							}
    							if($Slidecounter!='0'){
    								?>

                    <li><a data-toggle="tab"
                            href="#menu<?php echo $Slidecounter;  ?>"><?php the_sub_field('main_tab');?></a></li>
                    <?php
    							} 
    							$Slidecounter++;
    						endwhile;
    					endif;
    					?>
                    <!-- 	<li><a data-toggle="tab" href="#menu1">INGREDIENTS</a></li>
					<li><a data-toggle="tab" href="#menu2">SYMPTOMS</a></li>
					<li><a data-toggle="tab" href="#menu3">DIRECTIONS</a></li> -->
                </ul>
                <div class="tab-content">
                    <?php
    					$Slidecounter=0;
    					if( have_rows('product_information_content') ):
    			
    						while( have_rows('product_information_content') ): the_row();
    							if($Slidecounter=='0'){
    								?>
                    <div id="menu<?php echo $Slidecounter;  ?>" class="tab-pane fade in active show">
                        <div class="common-tab-pro">
                            <div class="tuja-tabs-content">

                                <?php the_sub_field('main_tab_content');?>
                            </div>
                        </div>
                    </div>
                    <?php
    							}
    							if($Slidecounter!='0'){
    								?>
                    <div id="menu<?php echo $Slidecounter;  ?>" class="tab-pane fade ">
                        <div class="common-tab-pro">
                            <div class="tuja-tabs-content">

                                <?php the_sub_field('main_tab_content');?>
                            </div>
                        </div>
                    </div>
                    <?php
    							} 
    							$Slidecounter++;
    						endwhile;
    					endif;
    					?>
                    <!-- 
					<div id="menu1" class="tab-pane fade">
						<div class="common-tab-pro">
							<div class="tuja-tabs-content">
								<div class="tuja-left-sidee">
									<h4>Thuja</h4>
									<p>Origin: Northern White Cedar/Arbor Vitae/Tree of Life</p>
									<ul>
										<li><p>Primary vaccinosis remedy</p></li>
										<li><p>Used for canine papillomas</p></li>
										<li><p>Origin: Northern White Cedar/Arbor Vitae/Tree of Life</p></li>
									</ul>
								</div>
								<div class="tuja-left-sidee">
									<h4>Silicea (Silica)</h4>
									<p>Origin: Pure flint, silicon dioxide - a natural chemical compound found in the earth</p>
									<ul>
										<li><p>Helps to remove toxic reaction from vaccinated animals</p></li>
										<li><p>Used to push foreign objects to the surface</p></li>
										<li><p>Helps with boils/abscesses</p></li>
										<li><p>Useful for blocked tear ducts and salivary glands</p></li>
									</ul>
								</div>
							</div>
						</div>
					</div> -->
                    <!-- <div id="menu2" class="tab-pane fade">
						<div class="common-tab-pro">
							<div class="tuja-tabs-content">
								<div class="tuja-left-sidee">
									<h4>Thuja</h4>
									<p>Origin: Northern White Cedar/Arbor Vitae/Tree of Life</p>
									<ul>
										<li><p>Primary vaccinosis remedy</p></li>
										<li><p>Used for canine papillomas</p></li>
										<li><p>Origin: Northern White Cedar/Arbor Vitae/Tree of Life</p></li>
									</ul>
								</div>
								<div class="tuja-left-sidee">
									<h4>Silicea (Silica)</h4>
									<p>Origin: Pure flint, silicon dioxide - a natural chemical compound found in the earth</p>
									<ul>
										<li><p>Helps to remove toxic reaction from vaccinated animals</p></li>
										<li><p>Used to push foreign objects to the surface</p></li>
										<li><p>Helps with boils/abscesses</p></li>
										<li><p>Useful for blocked tear ducts and salivary glands</p></li>
									</ul>
								</div>
							</div>
						</div>
					</div> -->
                    <!-- <div id="menu3" class="tab-pane fade">
						<div class="common-tab-pro">
							<div class="tuja-tabs-content">
								<div class="tuja-left-sidee">
									<h4>Thuja</h4>
									<p>Origin: Northern White Cedar/Arbor Vitae/Tree of Life</p>
									<ul>
										<li><p>Primary vaccinosis remedy</p></li>
										<li><p>Used for canine papillomas</p></li>
										<li><p>Origin: Northern White Cedar/Arbor Vitae/Tree of Life</p></li>
									</ul>
								</div>
								<div class="tuja-left-sidee">
									<h4>Silicea (Silica)</h4>
									<p>Origin: Pure flint, silicon dioxide - a natural chemical compound found in the earth</p>
									<ul>
										<li><p>Helps to remove toxic reaction from vaccinated animals</p></li>
										<li><p>Used to push foreign objects to the surface</p></li>
										<li><p>Helps with boils/abscesses</p></li>
										<li><p>Useful for blocked tear ducts and salivary glands</p></li>
									</ul>
								</div>
							</div>
						</div>
					</div> -->
                </div>
            </div>
        </div>
        <?php if( get_field('guidelines') ): ?>
        <div class="row">
            <div class="feeding-guid-lin aprothecy-gudiling">
                <div class="accordion" id="beefacorden">
                    <div class="card">
                        <div class="card-header" id="heading0">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse0" aria-expanded="false"
                                    aria-controls="collapse0"><?php the_field('feeding_heading');?></button>
                            </h2>
                        </div>
                        <div id="collapse0" class="custome-collep-b collapse" aria-labelledby="heading0"
                            data-parent="#beefacorden" style="">
                            <div class="card-body">
                                <div class="arrive-ferozen-text">
                                    <?php the_field('guidelines');?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br />
                    <div class="card">
                        <div class="card-header" id="collapse_reviews_heading">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse_reviews" aria-expanded="true"
                                    aria-controls="collapse_reviews">
                                    <?php _e( 'REVIEWS', 'blaze-online' ); ?></button>
                            </h2>
                        </div>
                        <div id="collapse_reviews" class="custome-collep-b collapse"
                            aria-labelledby="collapse_reviews_heading" data-parent="#beefacorden">
                            <div class="card-body">
                                <div class="arrive-ferozen-text">
                                    <?php if ( function_exists( 'wc_yotpo_show_widget' ) ) { wc_yotpo_show_widget(); } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>


<section class="kangaru-tail-banner">
    <div class="container">
        <H4 class="relatd-last-prod">KEEP SHOPPING</H4>
        <div class="featured-meals">
            <div class="owl-carousel prod" id="owl-prod">
                <?php
		    	$args = array( 'post_type' => 'product', 'posts_per_page' => 20, 'product_cat' => "apothecary", 'order'=>'ASC');
		    
		        $loop = new WP_Query( $args );
		            $ctr=1;
		        if ( have_posts() ) : 
		            while ( $loop->have_posts() ) : $loop->the_post(); 
		            
		             ?>
                <?php get_the_ID();
		         $current_product_id = get_the_ID();
		         $product1 = wc_get_product( $current_product_id );
 					$quentity=$product1->get_stock_quantity();
		            
		    ?>
                <div class="owl-head-sec">
                    <?php if($quentity==0) {?>
                    <div class="out_stock_box"><span>Out of Stock</span></div>
                    <?php } ?>
                    <div class="on-hover-all-build">
                        <img class="build-whithout-hover2" src="<?php the_field('product_image');?>">
                        <img class="buld-hover2" src="<?php the_field('product_image');?>">
                    </div>
                    <div class="prod-title"><?php the_title();?></div>
                    <div class="pera-produ-als">
                        <p><?php the_field('intro_excerpt');?></p>
                    </div>
                    <?php if ( function_exists( 'wc_yotpo_show_buttomline_blaze' ) ) {
                        print '<div style="margin-bottom:10px;">';
                        wc_yotpo_show_buttomline_blaze( $product1 );
                        print '</div>';
                    } ?>
                    <span class="gepricus"><?php echo "$".$product->get_price();?></span>
                    <div class="prod-but">
                        <a href="<?php the_permalink($loop->ID); ?>">View Product</a>
                        <?php if($product->get_stock_quantity()>0) {
                               echo '<a href="'.$checkout_url.'?add-to-cart='.$current_product_id.'">Add to Box</a>';
                            } else {
                                echo '<a href="#" class="oos">Out Of Stock</a>';
                                
                            }
                        ?>
                    </div>
                </div>
                <?php
                    $ctr++;
            endwhile;?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section class="chose-comob-box">
    <div class="container">
        <div class="row">
            <div class="main-row-combo-b">
                <div class="way-your-combo">
                    <div class="combo-box-thre">
                        <ul class="way-list-left">
                            <li>
                                <p>Choose your way</p>
                            </li>
                            <li><a href="<?php echo site_url();?>/shop-2/?swoof=1&product_cat=combo-boxes"
                                    class="boxse-btn-s">Combo Boxes</a></li>
                            <li><a href="<?php echo site_url();?>/shop-2/?swoof=1&product_cat=raw-meals">Raw Meals</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="way-your-combo">
                    <div class="combo-box-thre">
                        <ul class="way-list-right">
                            <li>
                                <p>ADD TO YOUR ORDER</p>
                            </li>
                            <li><a href="<?php echo site_url();?>/shop-2/?swoof=1&product_cat=treats">Treats</a></li>
                            <li><a href="<?php echo site_url();?>/shop-2/?swoof=1&product_cat=apothecary">Apothecary</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/*.wc-delivery-time-response,.shipping-taxable ul.purchase-options,.afterpay-payment-info{display:none}*/

nav.woocommerce-breadcrumb {
    display: none;
}

.woocommerce-product-gallery.woocommerce-product-gallery--without-images.woocommerce-product-gallery--columns-4.images {
    display: none;
}

.product_meta {
    display: none;
}

section.related.products {
    display: none;
}

aside#secondary {
    display: none;
}

.woocommerce-tabs.wc-tabs-wrapper {
    display: none;
}

.qtylabel {
    text-align: left;
    font-size: 12px;
    letter-spacing: 1.4px;
    color: #fff;
    line-height: 20px;
    font-weight: 400;
    text-transform: uppercase;
    margin-bottom: 24px;
    position: absolute;
    right: 302px;
    top: 44px;
}

@media (max-width: 767px) {
    .wcsatt-options-wrapper ul.wcsatt-options-product li label {
        top: 308px;
    }

    .working-dog-butler .qtylabel {
        margin-bottom: 24px !important;
        right: auto !important;
        top: auto !important;
        bottom: 80px;
        left: 0px;
    }
}

p.afterpay-payment-info {
    display: none;
}

h1.product_title.entry-title {
    display: none !important;
}

.quantity {
    display: block !important;
}

.datpri span {
    background-color: #ffffff;
    color: #ffffff;
}

.datpri {
    background-color: #ffffff;
    color: #ffffff;
    height: 0px;
}
</style>
<script>
jQuery(document).ready(function() {
    jQuery(".subs .acc-head").empty("");
    jQuery(".one-off .acc-head").empty("");
    jQuery(".subs .acc-head").append("<p>THIS ITEM CAN ONLY BE PURCHASED AS A ONE-OFF ITEM</p>");
    jQuery(".one-off .acc-head").append("<p>THIS ITEM CAN ONLY BE PURCHASED AS A ONE-OFF ITEM</p>");
    jQuery(".open-down-arrow").removeClass("fa-sync-alt");
    jQuery(".open-down-arrow").addClass("fa-check-circle");
    jQuery("ul.purchase-options > li:nth-child(2)").removeClass("selected");
    jQuery("ul.purchase-options > li:nth-child(1)").addClass("selected");
    jQuery("#one-time-purchase").attr("checked");
});
</script>

<?php
get_footer();
?>