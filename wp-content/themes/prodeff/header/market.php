<?php 
$login_url = wp_login_url();
$logout_url = wp_logout_url();
$register_url = wp_registration_url();
if(defined('WOOCOMMERCE_VERSION')){
	$login_url = get_permalink(get_option('woocommerce_myaccount_page_id'));
	$logout_url = wp_logout_url( get_permalink( wc_get_page_id( 'myaccount' ) ) );
}
?>
<header id="header" class="header-container page-heading-<?php echo esc_attr($page_heading) ?> header-type-market header-navbar-market<?php echo (dh_get_post_meta('always_show_categories') ? ' always-show-categories':'') ?> header-scroll-resize" itemscope="itemscope" itemtype="<?php echo dh_get_protocol()?>://schema.org/Organization" role="banner">
	<?php if(dh_get_theme_option('show-topbar',1)):?>
	<div class="topbar">
		<div class="<?php dh_container_class() ?> topbar-wap">
			<div class="row">
				<div class="col-sm-10 col-left-topbar">
					<div class="left-topbar">
            			<?php
            			
            				$left_topbar_content = dh_get_theme_option('left-topbar-content','info');
	            			if($left_topbar_content === 'info'): 
	            				echo '<div class="topbar-info">';
	            				if($topbar_phone = dh_get_theme_option('left-topbar-phone','(123) 456 789'))
	            					echo '<a href="#"><i class="fa fa-phone"></i> '.esc_html($topbar_phone).'</a>';
	            				if($topbar_email = dh_get_theme_option('left-topbar-email','info@example.com'))
	            					echo '<a href="mailto:'.esc_attr($topbar_email).'"><i class="fa fa-envelope-o"></i> '.esc_html($topbar_email).'</a>';
	            				if($topbar_skype = dh_get_theme_option('left-topbar-skype','skype.name'))
	            					echo '<a href="skype:'.esc_attr($topbar_skype).'?call"><i class="fa fa-skype"></i> '.esc_html($topbar_skype).'</a>';
	            				echo '</div>';
	            			elseif ($left_topbar_content === 'custom'):
	            				echo (dh_get_theme_option('left-topbar-custom-content',''));
	            			endif;
	            			?>
	            			<?php 
	            			if(($left_topbar_content == 'menu_social')):
	            			echo '<div class="topbar-social">';
	            			dh_social(dh_get_theme_option('left-topbar-social',array('facebook','twitter','google-plus','pinterest','rss','instagram')),true);
	            			echo '</div>';
	            			endif;
            			
            			?>
            			
					</div>
				</div>
				<div class="col-sm-2 col-right-topbar">
					<div class="right-topbar">
						<?php 
							dh_icl_languages_dropdown(false);
						?>
            			<?php 
		            		dh_currency_dropdown(false);
		            	?>
	            		<?php if ( has_nav_menu( 'top' ) ) : ?>
            				<div class="topbar-nav">
            					<?php 
            					wp_nav_menu( array(
            						'theme_location'    => 'top',
            						'depth'             => 2,
            						'container'         => false,
            						'menu_class'        => 'top-nav',
            						'walker'            => new DH_Walker
            					));
            					?>
            				</div>
            			<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php endif;?>
	<?php global $sitepress;
$lang = $sitepress->get_current_language(); ?>
	<!-- start-->
	<?php if($lang=='en') { ?>
	<div class="container"><div class="vc_row wpb_row vc_row-fluid services-fields vc_custom_1508303522507"><div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-4 vc_col-md-3 vc_col-has-fill"><div class="vc_column-inner vc_custom_1508220788889"><div class="wpb_wrapper"><div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1453612257987"><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-has-fill"><div class="vc_column-inner vc_custom_1507886213153"><div class="wpb_wrapper"><div class="vc_icon_element vc_icon_element-outer vc_custom_1507886368777 pull-left vc_icon_element-align-left">
	<div class="vc_icon_element-inner vc_icon_element-color-custom vc_icon_element-size-lg vc_icon_element-style- vc_icon_element-background-color-grey">
		<span class="vc_icon_element-icon fa fa-credit-card" style="color:#017bc4 !important"></span></div>
</div>
<h5 style="color: #818286;text-align: left" class="vc_custom_heading vc_custom_1507372681787">SAFE PAYMENT</h5>
	<div class="wpb_text_column wpb_content_element  vc_custom_1508218802837">
		<div class="wpb_wrapper">
			<p style="color: #818286; font-size: 12px;">Pay safe with our different payment options</p>

		</div>
	</div>
</div></div></div></div></div></div></div><div class="vc_col-has-fill wpb_column vc_column_container vc_col-sm-6 vc_col-lg-4 vc_col-md-3"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1453612257987"><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-has-fill"><div class="vc_column-inner vc_custom_1507886246439"><div class="wpb_wrapper"><div class="vc_icon_element vc_icon_element-outer vc_custom_1507886508404 pull-left vc_icon_element-align-left">
	<div class="vc_icon_element-inner vc_icon_element-color-custom vc_icon_element-size-lg vc_icon_element-style- vc_icon_element-background-color-grey">
		<span class="vc_icon_element-icon fa fa-truck" style="color:#017bc4 !important"></span></div>
</div>
<h5 style="color: #818286;text-align: left" class="vc_custom_heading vc_custom_1507373700264">FREE SHIPPING</h5>
	<div class="wpb_text_column wpb_content_element  vc_custom_1507373581163">
		<div class="wpb_wrapper">
			<p style="color: #818286; font-size: 12px;">For order over 1500 SEK</p>

		</div>
	</div>
</div></div></div></div></div></div></div><div class="vc_col-has-fill wpb_column vc_column_container vc_col-sm-6 vc_col-lg-4 vc_col-md-3"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1453612257987"><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-has-fill"><div class="vc_column-inner vc_custom_1507886269431"><div class="wpb_wrapper"><div class="vc_icon_element vc_icon_element-outer vc_custom_1507886539572 pull-left vc_icon_element-align-left">
	<div class="vc_icon_element-inner vc_icon_element-color-custom vc_icon_element-size-lg vc_icon_element-style- vc_icon_element-background-color-grey">
		<span class="vc_icon_element-icon fa fa-phone-square" style="color:#017bc4 !important"></span></div>
</div>
<h5 style="color: #818286;text-align: left" class="vc_custom_heading vc_custom_1507373718131">CUSTOMER SUPPORT</h5>
	<div class="wpb_text_column wpb_content_element  vc_custom_1508218916797">
		<div class="wpb_wrapper">
			<p style="color: #818286; font-size: 12px;">Always personal support</p>

		</div>
	</div>
</div></div></div></div></div></div></div></div></div>
	<?php } ?>
	<?php if($lang=='sv') { ?>
	<div class="container"><div class="vc_row wpb_row vc_row-fluid services-fields vc_custom_1508303522507"><div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-4 vc_col-md-3 vc_col-has-fill"><div class="vc_column-inner vc_custom_1508220788889"><div class="wpb_wrapper"><div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1453612257987"><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-has-fill"><div class="vc_column-inner vc_custom_1507886213153"><div class="wpb_wrapper"><div class="vc_icon_element vc_icon_element-outer vc_custom_1507886368777 pull-left vc_icon_element-align-left">
	<div class="vc_icon_element-inner vc_icon_element-color-custom vc_icon_element-size-lg vc_icon_element-style- vc_icon_element-background-color-grey">
		<span class="vc_icon_element-icon fa fa-credit-card" style="color:#017bc4 !important"></span></div>
</div>
<h5 style="color: #818286;text-align: left" class="vc_custom_heading vc_custom_1507372681787">SÄKER BETALNING</h5>
	<div class="wpb_text_column wpb_content_element  vc_custom_1508218802837">
		<div class="wpb_wrapper">
			<p style="color: #818286; font-size: 12px;">Betala säkert med våra olika betalalternativ</p>

		</div>
	</div>
</div></div></div></div></div></div></div><div class="vc_col-has-fill wpb_column vc_column_container vc_col-sm-6 vc_col-lg-4 vc_col-md-3"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1453612257987"><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-has-fill"><div class="vc_column-inner vc_custom_1507886246439"><div class="wpb_wrapper"><div class="vc_icon_element vc_icon_element-outer vc_custom_1507886508404 pull-left vc_icon_element-align-left">
	<div class="vc_icon_element-inner vc_icon_element-color-custom vc_icon_element-size-lg vc_icon_element-style- vc_icon_element-background-color-grey">
		<span class="vc_icon_element-icon fa fa-truck" style="color:#017bc4 !important"></span></div>
</div>
<h5 style="color: #818286;text-align: left" class="vc_custom_heading vc_custom_1507373700264">GRATIS FRAKT</h5>
	<div class="wpb_text_column wpb_content_element  vc_custom_1507373581163">
		<div class="wpb_wrapper">
			<p style="color: #818286; font-size: 12px;">För beställningar över 1500 SEK</p>

		</div>
	</div>
</div></div></div></div></div></div></div><div class="vc_col-has-fill wpb_column vc_column_container vc_col-sm-6 vc_col-lg-4 vc_col-md-3"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1453612257987"><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-has-fill"><div class="vc_column-inner vc_custom_1507886269431"><div class="wpb_wrapper"><div class="vc_icon_element vc_icon_element-outer vc_custom_1507886539572 pull-left vc_icon_element-align-left">
	<div class="vc_icon_element-inner vc_icon_element-color-custom vc_icon_element-size-lg vc_icon_element-style- vc_icon_element-background-color-grey">
		<span class="vc_icon_element-icon fa fa-phone-square" style="color:#017bc4 !important"></span></div>
</div>
<h5 style="color: #818286;text-align: left" class="vc_custom_heading vc_custom_1507373718131">KUNDSUPPORT</h5>
	<div class="wpb_text_column wpb_content_element  vc_custom_1508218916797">
		<div class="wpb_wrapper">
			<p style="color: #818286; font-size: 12px;">Alltid personlig service</p>

		</div>
	</div>
</div></div></div></div></div></div></div></div></div>

<?php } ?>
	
	
	<!-- end -->
	<div class="navbar-container">
		<div class="navbar navbar-default <?php if(dh_get_theme_option('sticky-menu',1)):?> navbar-scroll-fixed<?php endif;?>">
			<div class="navbar-default-container">
				<div class="navbar-default-wrap">
					<div class="navbar-wrap">
						<div class="<?php dh_container_class() ?>">
							<div class="row">
								<div class="navbar-header col-md-12">
									<div class="navbar-header-left">
										<button <?php /*data-target=".primary-navbar-collapse" data-toggle="collapse"*/?> type="button" class="navbar-toggle">
											<span class="sr-only"><?php echo esc_html__('Toggle navigation','luxury-wp')?></span>
											<span class="icon-bar bar-top"></span> 
											<span class="icon-bar bar-middle"></span> 
											<span class="icon-bar bar-bottom"></span>
										</button>
										<?php if(dh_get_theme_option('ajaxsearch',1)){ ?>
										<a class="navbar-search-button search-icon-mobile" href="#">
											<svg xml:space="preserve" style="enable-background:new 0 0 612 792;" viewBox="0 0 612 792" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" version="1.1">
												<g>
													<g>
														<g>
															<path d="M231,104c125.912,0,228,102.759,228,229.5c0,53.034-18.029,101.707-48.051,140.568l191.689,192.953
																c5.566,5.604,8.361,12.928,8.361,20.291c0,7.344-2.795,14.688-8.361,20.291C597.091,713.208,589.798,716,582.5,716
																s-14.593-2.792-20.139-8.396L370.649,514.632C332.043,544.851,283.687,563,231,563C105.088,563,3,460.241,3,333.5
																S105.088,104,231,104z M231,505.625c94.295,0,171-77.208,171-172.125s-76.705-172.125-171-172.125
																c-94.295,0-171,77.208-171,172.125S136.705,505.625,231,505.625z"/>
														</g>
													</g>
												</g>
											</svg>
										</a>
										<?php } ?>
								    	<?php if(defined('WOOCOMMERCE_VERSION') && dh_get_theme_option('woo-cart-mobile',1)):?>
								     	<?php 
								     	global $woocommerce;
								     	if ( version_compare( WOOCOMMERCE_VERSION, "2.1.0" ) >= 0 ) {
								     		$cart_url = apply_filters( 'woocommerce_get_checkout_url', WC()->cart->get_cart_url() );
								     	}else{
								     		$cart_url = esc_url( $woocommerce->cart->get_cart_url() );
								     	}
								     	?>
										<a class="cart-icon-mobile" href="<?php echo esc_url($cart_url) ?>"><?php echo DH_Woocommerce::instance()->_get_minicart_icon2()?><span><?php echo absint($woocommerce->cart->cart_contents_count)?></span></a>
										<?php endif;?>
										<<?php dh_logo_tag()?> class="navbar-brand-title">
											<a class="navbar-brand" itemprop="url" title="<?php esc_attr(bloginfo( 'name' )); ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>">
												<?php if(!empty($logo_url)):?>
													<img class="logo" alt="<?php bloginfo( 'name' ); ?>" src="<?php echo esc_url($logo_url)?>">
												<?php else:?>
													<?php echo bloginfo( 'name' ) ?>
												<?php endif;?>
												<img class="logo-fixed" alt="<?php bloginfo( 'name' ); ?>" src="<?php echo esc_url($logo_fixed_url)?>">
												<img class="logo-mobile" alt="<?php bloginfo( 'name' ); ?>" src="<?php echo esc_url($logo_mobile_url)?>">
												<span itemprop="name" class="sr-only sr-only-focusable"><?php bloginfo('name')?></span>
											</a>
										</<?php dh_logo_tag()?>>
									</div>
									<div class="navbar-header-center">
										<div class="navbar-search">
											<form method="GET" class="searchform" id="searchform" action="<?php echo esc_url( home_url( '/' ) )?>" role="form">												
												<div class="searchinput-wrap">
													<input type="search" class="searchinput" name="s" autocomplete="off" value="" placeholder="<?php esc_attr_e('Search...','luxury-wp')?>" />
													<input type="hidden" name="post_type" value="<?php echo apply_filters('dh_ajax_search_form_post_type', 'any') ?>" />
													<input type="hidden" name="lang" value="<?php echo(ICL_LANGUAGE_CODE); ?>"/>
													<div class="search-product-category">
														<div class="form-flat-select">
															<?php
												        		wc_product_dropdown_categories(
												            		array(
												                		'show_counts'        => 0,
																		'hierarchical'       => 0,
																		'show_uncategorized' => 0,
																		'orderby'            => 'name',
																		'selected'           => ''
												            	))
															?>
															<i class="fa fa-caret-down"></i>
														</div>
													</div>
													<button class="searchsubmit" type="submit" ><i class="elegant_icon_search"></i></button>
												</div>
											</form>
										</div>
									</div>
									<div class="navbar-header-right">
				            			<?php 
											if(class_exists('DH_Woocommerce') && defined( 'WOOCOMMERCE_VERSION' ) && dh_get_theme_option( 'woo-cart-nav', 1 )){
												echo '<div class="navbar-minicart navbar-minicart-topbar">'.DH_Woocommerce::instance()->get_minicart().'</div>';
											}
										?>
										<?php if(dh_get_theme_option('show-navbar-offcanvas',1)):?>
											<div class="navbar-offcanvas">
												<a href="#" class="navbar-offcanvas-btn">
													<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 317.825 317.825" style="enable-background:new 0 0 317.825 317.825;" xml:space="preserve">
														<g>
															<g>
																<g>
																	<g>
																		<path d="M301.934,143.021H15.891C7.119,143.021,0,150.14,0,158.912c0,8.772,7.119,15.891,15.891,15.891
																			h286.042c8.74,0,15.891-7.119,15.891-15.891C317.825,150.14,310.674,143.021,301.934,143.021z"/>
																		<path d="M15.891,79.456h286.042c8.74,0,15.891-7.119,15.891-15.891s-7.151-15.891-15.891-15.891H15.891
																			C7.119,47.674,0,54.793,0,63.565S7.119,79.456,15.891,79.456z"/>
																		<path d="M301.934,238.369H15.891C7.119,238.369,0,245.52,0,254.26c0,8.74,7.119,15.891,15.891,15.891
																			h286.042c8.74,0,15.891-7.151,15.891-15.891C317.825,245.52,310.674,238.369,301.934,238.369z"/>
																	</g>
																</g>
															</g>
														</g>
													</svg>
												</a>
											</div>
										<?php endif;?>
									</div>
								</div><!--navbar-header-->
							</div>
						</div>
					</div><!--navbar-wrap-->
					
					<nav class="collapse navbar-collapse primary-navbar-collapse" itemtype="<?php echo dh_get_protocol() ?>://schema.org/SiteNavigationElement" itemscope="itemscope" role="navigation">
						<div class="<?php dh_container_class() ?>">
							<div class="row">
								<?php 
								 if(has_nav_menu('category'))
									echo do_shortcode('[dh_menu title="'.__('Categories','luxury-wp').'" theme_location="category" ]');
								?>
								<?php
								$page_menu = '' ;
								if(is_page() && ($selected_page_menu = dh_get_post_meta('main_menu'))){
									$page_menu = $selected_page_menu;
								}
								if(has_nav_menu('primary') || !empty($page_menu)):
									wp_nav_menu( array(
										'theme_location'    => 'primary',
										'container'         => false,
										'depth'				=> 3,
										'menu'				=> $page_menu,
										'menu_class'        => 'nav navbar-nav primary-nav',
										'walker' 			=> new DH_Mega_Walker
									) );
								else:
									echo '<ul class="nav navbar-nav primary-nav"><li><a href="' . home_url( '/' ) . 'wp-admin/nav-menus.php">' . esc_html__( 'No menu assigned!', 'luxury-wp' ) . '</a></li></ul>';
								endif;
								?>
							</div>
						</div>
					</nav>

				</div>
			</div>
			<div class="header-search-overlay hide">
				<div class="<?php echo dh_container_class()?>">
					<div class="header-search-overlay-wrap">
						<?php echo dh_get_search_form()?>
						<button type="button" class="close">
							<span aria-hidden="true" class="fa fa-times"></span><span class="sr-only"><?php echo esc_html__('Close','luxury-wp') ?></span>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>