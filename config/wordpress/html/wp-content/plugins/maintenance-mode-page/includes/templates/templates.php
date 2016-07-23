<!-- Dashboard Settings panel content --- >
<!----------------------------------------> 	
<?php $wpsm_mmr_plugin_options_templates = unserialize(get_option('wpsm_mmr_plugin_options_templates'));	
?>
<script>
	function select_template(template){
		jQuery("#templates"+template).prop( "checked", true );			
		jQuery(".templates_btn").attr('class','btn btn-info btn-block pull-right templates_btn');
		jQuery(".templates_btn").text('Activate');
		jQuery("#templates_btn"+template).text('Activated');
		jQuery("#templates_btn"+template).attr('class','btn btn-primary pull-right  templates_btn');
		jQuery(".activate-button").show();
		jQuery("#activate"+template).hide();
		
	}
	function hide_activate(id){
		jQuery(".activate-button").show();
		jQuery("#activate"+id).hide();
		jQuery("#templates"+id).prop( "checked", true );			
		jQuery(".templates_btn").attr('class','btn btn-info pull-right  templates_btn');
		jQuery(".templates_btn").text('Activate');
		jQuery("#templates_btn"+id).text('Activated');
		jQuery("#templates_btn"+id).attr('class','btn btn-primary pull-righttemplates_btn');
	}
</script>
<style>
.templates_btn{
	font-size: 22px;
}
#TB_window {
width:100% important;
}
.demoftr {
	background: transparent;
	box-shadow: 0 0 20px rgba(0,0,0,.2);
	padding:0px;
}
.ftr_img{
	background:transparent
}
</style>
<?php add_thickbox(); ?>

<div class="row">
	<div class="post-social-wrapper clearfix">
		<div class="col-md-12 post-social-item heading-item">
			<div class="panel panel-default heading-item-default">
				<div class="panel-heading padding-none">
					<div class="post-social post-social-xs" id="post-social-5">
						<div class="text-center padding-all text-center">
							<div class="textbox text-white   margin-bottom settings-title">
								<?php _e('Templates','WPSM_MMR_TEXT_DOMAIN'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php  $templates = $wpsm_mmr_plugin_options_templates['templates']; ?>
		<form method="post" id="wpsm_mmr_plugin_options_templates">
			<div  style="padding:10px;">
			<?php 
				for($i=1; $i<=1; $i++)
				{
				?>
				<div class="col-md-6  demoftr "> 
					<div class="">
						<div class="wpsme_home_portfolio_showcase">
							<img class="wpsme_img_responsive ftr_img"  src="<?php echo  wpsm_mmr_PLUGIN_URL.'images/demo-2-img.png'; ?>">
							<div class="wpsme_home_portfolio_showcase_overlay">
								<div class="wpsme_home_portfolio_showcase_overlay_inner ">
									<div class="wpsme_home_portfolio_showcase_icons">
									<?php if($templates != $i) { 
									?>
										<a class="activate-button" href="#activate" id="activate<?php  echo $i; ?>" onclick="hide_activate(<?php echo $i; ?>)"><?php _e('Activate','WPSM_MMR_TEXT_DOMAIN'); ?> </a>
									<?php
									}?>
										<a  href="<?php echo home_url(); ?>?wpsm_coming_soon_pro_preview=true&number=<?php echo $i; ?>&TB_iframe=true&width=900&height=80" class="thickbox" title="<?php _e('Maintenance Mode Preview Window','WPSM_MMR_TEXT_DOMAIN'); ?>" ><?php _e('Live Preview','WPSM_MMR_TEXT_DOMAIN'); ?></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div style="padding:13px;overflow:hidden;background:#fff">
						<h3 class="text-center pull-left" style="margin-top: 10px;margin-bottom: 10px;font-weight:900">Template <?php echo $i; ?></h3>
						
						<button type="button" disabled="disabled" class="pull-right btn btn-<?php if($templates == $i) { echo "primary"; } else { echo "info"; } ?>  templates_btn" id="templates_btn<?php echo $i; ?>" onclick="select_template('<?php echo $i; ?>')"><?php if($templates == $i) { echo "Activated"; } else { echo "Activate"; } ?></button>
						<input type="radio" name="templates" id="templates<?php echo $i; ?>" value="<?php echo $i; ?>"  <?php if($templates == $i) { echo "checked"; } ?> style="display:none"   />
					</div>			
				</div>
				<?php 
				}
				?>
				
			</div>
			
		</form>
	   
	</div>
	
	
	<div class="panel panel-primary save-button-block">
		<div class="panel-body">
			<div class="pull-left">
				<button type="button" class="btn btn-info btn-lg" onclick="wpsm_mmr_option_data_save('templates')"><?php _e('Save Changes','WPSM_MMR_TEXT_DOMAIN'); ?></button>
			</div>
			<div class="pull-right">
				<button type="button" class="btn btn-primary btn-lg" onclick="wpsm_mmr_option_data_reset('templates')"><?php _e('Reset Default','WPSM_MMR_TEXT_DOMAIN'); ?></button>
			</div>
		</div>
	</div>
	
							
</div>