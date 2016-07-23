<style>
    #post-social-5{
		background: url('<?php echo wpsm_mmr_PLUGIN_URL.'img/slide6-min.jpg'; ?>') no-repeat fixed;
		background-position: 50% 0 !important;
	}
	.rate-us-link{
		color:#fff;
		background: #35343d;
		border:3px solid #fff;
		
	} 
	.rate-us-link span{
		color: #DACD1B;
		
	}
</style>
<div id="load"></div>

<div id="wrapper">

	<!-- Navigation -->
	<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="sidebar-toggle hidden-xs" href="javascript:void(0);"><i class="fa fa-bars fa-2x"></i></a>
			<a class="navbar-brand coming-soon-admin-title" href="index.html">Maintenance Mode</a>
		</div>
		
		<!-- navbar-top-links -->
		<ul class="nav navbar-top-links navbar-right coming-soon-top">
			
		
			
			
			<li>
				<a style="background:#31a3dd;" href="<?php echo home_url(); ?>?wpsm_coming_soon_pro_preview=true&number=1&TB_iframe=true&width=900&height=80" class="thickbox" id="toggle-right-sidebar" href="#" title="<?php _e('Maintenance Mode Preview Window','WPSM_MMR_TEXT_DOMAIN'); ?>">
					<?php _e('Live Preview','WPSM_MMR_TEXT_DOMAIN'); ?>
				</a>
	
						
			</li>
		</ul>
		<!-- /navbar-top-links -->

		<div class="navbar-default sidebar" role="navigation">
			<div class="sidebar-nav navbar-collapse">
				<input type="hidden" value="1" id="store_menu_id" />
				<ul class="nav " id="side-menu">
					<li class="sidebar-profile text-center">
						<h3 class="sidebar-profile-name">POWERED BY</h3>
						<span class="sidebar-profile-picture">
							<img src="<?php echo wpsm_mmr_PLUGIN_URL.'img/wp.png'; ?>" alt="Profile Picture"/>
						</span>
						<a href="https://wordpress.org/plugins/maintenance-mode-page/" target="_new" type="button" class="btn btn-primary btn-lg btn-block rate-us-link" style="" >Rate Us <span class="dashicons dashicons-star-filled"></span>
							<span class="dashicons dashicons-star-filled"></span>
							<span class="dashicons dashicons-star-filled"></span>
							<span class="dashicons dashicons-star-filled"></span>
							<span class="dashicons dashicons-star-filled"></span>
						</a>
						
					<li>                            
					<li>
						<a  class="active" href="#"  id="ui-id-1" >
							<span class="sidebar-item-icon fa-stack">
								<i class="fa fa-dashboard fa-stack-1x fa-inverse"></i>
							</span>
							<span class="sidebar-item-title"><?php _e('Dashboard','WPSM_MMR_TEXT_DOMAIN'); ?></span>
							<span class="sidebar-item-subtitle"><?php _e('Application overview','WPSM_MMR_TEXT_DOMAIN'); ?></span>
						</a>
					</li>
					<li>
						<a href="#"  id="ui-id-2" >
							<span class="sidebar-item-icon fa-stack">
								<i class="fa fa-table fa-stack-1x fa-inverse"></i>
							</span>
							<span class="sidebar-item-title"><?php _e('Templates','WPSM_MMR_TEXT_DOMAIN'); ?></span>
							<span class="sidebar-item-subtitle"> <?php _e('Find Best Design','WPSM_MMR_TEXT_DOMAIN'); ?></span>
						</a>
					</li>
					<li>
						<a href="#" id="3" >
							<span class="sidebar-item-icon fa-stack ">
								<i class="fa fa-wrench fa-stack-1x fa-inverse"></i>
							</span>
							<span class="sidebar-item-arrow fa arrow"></span>
							<span class="sidebar-item-title"><?php _e('Settings','WPSM_MMR_TEXT_DOMAIN'); ?></span>
							<span class="sidebar-item-subtitle"><?php _e('Customize your templates here','WPSM_MMR_TEXT_DOMAIN'); ?></span>
						</a>
						<ul class="nav nav-second-level">
							<li>
								<a href="#"  id="ui-id-3" ><?php _e('Home Page Settings','WPSM_MMR_TEXT_DOMAIN'); ?></a>
							</li>
							<li>
								<a href="#" id="ui-id-4" ><?php _e('Header Settings','WPSM_MMR_TEXT_DOMAIN'); ?></a>
							</li>
							<li>
								<a href="#" id="ui-id-5" ><?php _e('Countdown Settings','WPSM_MMR_TEXT_DOMAIN'); ?></a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#" id="6" >
							<span class="sidebar-item-icon fa-stack ">
								<i class="fa fa-paint-brush fa-stack-1x fa-inverse"></i>
							</span>
							<span class="sidebar-item-arrow fa arrow"></span>
							<span class="sidebar-item-title"> <?php _e('Design','WPSM_MMR_TEXT_DOMAIN'); ?></span>
							<span class="sidebar-item-subtitle"> <?php _e('Modify your design here','WPSM_MMR_TEXT_DOMAIN'); ?></span>
						</a>
						<ul class="nav nav-second-level">
							<li>
								<a href="#" id="ui-id-6" ><?php _e('Background','WPSM_MMR_TEXT_DOMAIN'); ?></a>
							</li>
							<li>
								<a href="#" id="ui-id-7" ><?php _e('Text And Colour ','WPSM_MMR_TEXT_DOMAIN'); ?></a>
							</li>
							<li>
								<a href="#" id="ui-id-8" ><?php _e('Custom Codes','WPSM_MMR_TEXT_DOMAIN'); ?></a>
							</li>
							
						</ul>
					</li>
					<li>
						<a href="#"  id="ui-id-9" >
							<span class="sidebar-item-icon fa-stack">
								<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
							</span>
							<span class="sidebar-item-title"><?php _e('Social Profile','WPSM_MMR_TEXT_DOMAIN'); ?></span>
							<span class="sidebar-item-subtitle"><?php _e('Connect with your social profile','WPSM_MMR_TEXT_DOMAIN'); ?></span>
						</a>
					</li>
					<li>
						<a href="#"  id="ui-id-10" >
							<span class="sidebar-item-icon fa-stack">
								<i class="fa fa-home fa-stack-1x fa-inverse"></i>
							</span>
							<span class="sidebar-item-title"><?php _e('About Us Section','WPSM_MMR_TEXT_DOMAIN'); ?></span>
							<span class="sidebar-item-subtitle"><?php _e('Describe your self here','WPSM_MMR_TEXT_DOMAIN'); ?></span>
						</a>
					</li>
					<li>
						<a href="#"  id="ui-id-11" >
							<span class="sidebar-item-icon fa-stack">
								<i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
							</span>
							<span class="sidebar-item-title"><?php _e('Contact Info','WPSM_MMR_TEXT_DOMAIN'); ?></span>
							<span class="sidebar-item-subtitle"><?php _e('Add your contact info here ','WPSM_MMR_TEXT_DOMAIN'); ?></span>
						</a>
					</li>
					<li>
						<a href="#" id="12" >
							<span class="sidebar-item-icon fa-stack ">
								<i class="fa fa-flag fa-stack-1x fa-inverse"></i>
							</span>
							<span class="sidebar-item-arrow fa arrow"></span>
							<span class="sidebar-item-title"><?php _e('Newsletter And Subscriber Settings','WPSM_MMR_TEXT_DOMAIN'); ?></span>
							<span class="sidebar-item-subtitle"><?php _e('Select Your Newsletter','WPSM_MMR_TEXT_DOMAIN'); ?></span>
						</a>
						<ul class="nav nav-second-level">
							<li>
								<a href="#" id="ui-id-12" ><?php _e('Newsletter Settings','WPSM_MMR_TEXT_DOMAIN'); ?></a>
							</li>
							<li>
								<a href="#Header-settings" id="ui-id-13" ><?php _e('Subscription Field Settings ','WPSM_MMR_TEXT_DOMAIN'); ?></a>
							</li>
						   
						</ul>
					</li>
					<li>
						<a href="#"  id="ui-id-14" >
							<span class="sidebar-item-icon fa-stack">
								<i class="fa fa-exchange fa-stack-1x fa-inverse"></i>
							</span>
							<span class="sidebar-item-title"><?php _e('Import/Export','WPSM_MMR_TEXT_DOMAIN'); ?></span>
							<span class="sidebar-item-subtitle"><?php _e('Import and export your options settings','WPSM_MMR_TEXT_DOMAIN'); ?></span>
						</a>
					</li>
					<li>
						<a href="#"  id="ui-id-15">
							<span class="sidebar-item-icon fa-stack">
								<i class="fa fa-question fa-stack-1x fa-inverse"></i>
							</span>
							<span class="sidebar-item-title"><?php _e('Help & Support','WPSM_MMR_TEXT_DOMAIN'); ?></span>
							<span class="sidebar-item-subtitle"><?php _e('Submit your query here','WPSM_MMR_TEXT_DOMAIN'); ?></span>
						</a>
					</li>
					
				</ul>
			</div>
		</div>
	</nav>
	<?php  
	$inc =1;
	$files = array("0"=>array('dashboard','dashboard.php'),"1"=>array('templates','templates.php'),"2"=>array( 'settings','page-settings.php'),"3"=>array('settings','header-settings.php'),"4"=>array('settings','countdown.php'),"5"=>array('design','background.php'),"6"=>array('design','text_and_color.php'),"7"=>array('design','custom_codes.php'),"8"=>array('social','social.php'),"9"=>array('about-us','about-us.php'),"10"=>array('contact-us','contact-us.php'),"11"=>array('newsletter','newsletter.php'),"12"=>array('newsletter','subscription-field.php'),"13"=>array('import-export','import-export.php'),"14"=>array('help','help.php'));
	foreach($files as $folder => $file_name) {
	?>
		<div class="page-wrapper ui-tabs-panel <?php if($inc==1){ echo "active" ; } else{ echo "deactive"; } ?>" id="option-ui-id-<?php echo $inc; ?>">	
		  <?php require_once($file_name[0]."/".$file_name[1]); ?>
		</div>	
	<?php 
	$inc++;
	}  ?> 				
	 
</div>
<div class="wpsm_settings_loding" id="wpsm_loding_general_image"></div>
				
<button data-dialog="somedialog" class="dialog-button" style="display:none;">Open Dialog</button>
<div id="somedialog" class="dialog" style="position: fixed; z-index: 9999;">
	<div class="dialog__overlay"></div>
	<div class="dialog__content">
		<div class="morph-shape" data-morph-open="M33,0h41c0,0,0,9.871,0,29.871C74,49.871,74,60,74,60H32.666h-0.125H6c0,0,0-10,0-30S6,0,6,0H33" data-morph-close="M33,0h41c0,0-5,9.871-5,29.871C69,49.871,74,60,74,60H32.666h-0.125H6c0,0-5-10-5-30S6,0,6,0H33">
			<svg xmlns="" width="100%" height="100%" viewBox="0 0 80 60" preserveAspectRatio="none">
				<path d="M33,0h41c0,0-5,9.871-5,29.871C69,49.871,74,60,74,60H32.666h-0.125H6c0,0-5-10-5-30S6,0,6,0H33"></path>
			</svg>
		</div>
		<div class="dialog-inner">
			<h2><strong></strong><?php _e('Setting Saved Successfully','WPSM_MMR_TEXT_DOMAIN'); ?></h2><div><button class="action dialog-button-close" data-dialog-close id="dialog-close-button" ><?php _e('Close','');?></button></div>
		</div>
	</div>
</div>

<?php require_once('fs.php'); ?>