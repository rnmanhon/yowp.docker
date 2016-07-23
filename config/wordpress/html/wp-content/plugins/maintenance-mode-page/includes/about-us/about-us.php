<?php $wpsm_mmr_plugin_options_about_us = unserialize(get_option('wpsm_mmr_plugin_options_about_us'));	
?>	
<script>
	function  about_us_section_enable(status){
		if(status.value=='on')
		{
			jQuery(".about_us_section").show(500);
		}
	   else
		{
		  jQuery(".about_us_section").hide(500);
		}
	}
</script>
<style>
	<?php if($wpsm_mmr_plugin_options_about_us['about_us_enable']!="on") { ?>
		.about_us_section{
			display:none;
		}
	<?php } ?>	
</style>
<div class="row">
	<div class="post-social-wrapper clearfix">
		<div class="col-md-12 post-social-item heading-item">
			<div class="panel panel-default heading-item-default">
				<div class="panel-heading padding-none">
					<div class="post-social post-social-xs" id="post-social-5">
						<div class="text-center padding-all text-center">
							<div class="textbox text-white   margin-bottom settings-title">
								<?php _e('About Us Section Settings','WPSM_MMR_TEXT_DOMAIN'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	   
	</div>
	<form method="post" id="wpsm_mmr_plugin_options_about_us" >
	
		<div class="panel panel-primary panel-default content-panel">
			<div class="panel-body">
				<table class="form-table">
					<tr>
						<th scope="row" ><?php _e('Display About Us Section','WPSM_MMR_TEXT_DOMAIN'); ?></th>
						<td style="text-align:right;" >
							<i title="Hide/Display Your about us section here " style="font-size:30px;" class="fa fa-lightbulb-o wpsm_help_i" data-toggle="tooltip" data-placement="left" ></i>
						</td>
					</tr>
					<tr class="radio-span" style="border-bottom:none;">
						<td>
							<?php  $about_us_enable = $wpsm_mmr_plugin_options_about_us['about_us_enable']; ?>
							<div class="switch">
								<input type="radio" class="switch-input" name="about_us_enable" value="on" id="enable_about_us"  <?php if($about_us_enable == "on") { echo "checked"; } ?>  onclick="about_us_section_enable(this);">
								<label for="enable_about_us" class="switch-label switch-label-off"><?php _e('Yes','WPSM_MMR_TEXT_DOMAIN'); ?></label>
								<input type="radio" class="switch-input" name="about_us_enable" value="off" id="disable_about_us" <?php if($about_us_enable == "off") { echo "checked"; } ?> onclick="about_us_section_enable(this);">
								<label for="disable_about_us" class="switch-label switch-label-on"><?php _e('No','WPSM_MMR_TEXT_DOMAIN'); ?></label>
								<span class="switch-selection"></span>
							</div>
						</td>
					</tr>
				</table>
			</div>
		</div>
	
		
		<div class="panel panel-primary panel-default content-panel about_us_section">
			<div class="panel-body">
				<table class="form-table">
					<tr>
						<th scope="row" ><?php _e('About Us Button Icon','WPSM_MMR_TEXT_DOMAIN')?></th>
						<td></td>
					</tr>
					<tr class="" style="border-bottom:none;">
						<td>
							<!-- Modal -->
							<div class="form-group input-group">
								<input data-placement="bottomRight" name="about_btn_icon" id="about_btn_icon" class="form-control icp icp-auto" value="<?php echo $wpsm_mmr_plugin_options_about_us['about_btn_icon']; ?>" type="text" readonly="readonly" />
								<span class="input-group-addon "></span>
							</div>
						</td>
					</tr>
				</table>
			</div>
		</div>
		
		
		<div class="panel panel-primary panel-default content-panel about_us_section">
			<div class="panel-body">
				<table class="form-table">
					<tr>
						<th scope="row" ><?php _e('About Us Section Title','WPSM_MMR_TEXT_DOMAIN'); ?></th>
						<td style="text-align:right;" >
							<i title="Update your About us Section Title " style="font-size:30px;" class="fa fa-lightbulb-o wpsm_help_i" data-toggle="tooltip" data-placement="left" ></i>
						</td>
					</tr>
					<tr class="radio-span" style="border-bottom:none;">
						<td>
							<input type="text" class="pro_text" id="about_section_title" name="about_section_title" placeholder="<?php _e('Enter About Us Section Title','WPSM_MMR_TEXT_DOMAIN'); ?>" size="56" value="<?php echo $wpsm_mmr_plugin_options_about_us['about_section_title']; ?>" />
						</td>
					</tr>
				</table>
			</div>
		</div>
		
		<div class="panel panel-primary panel-default content-panel about_us_section">
			<div class="panel-body">
				<table class="form-table">
					<tr>
						<th scope="row" ><?php _e('About Us Description','WPSM_MMR_TEXT_DOMAIN'); ?></th>
						<td style="text-align:right;" >
							<i title="Add your About us Section Description Here " style="font-size:30px;" class="fa fa-lightbulb-o wpsm_help_i" data-toggle="tooltip" data-placement="left" ></i>
						</td>
					</tr>
					<tr class="radio-span" style="border-bottom:none;">
						<td>
							<textarea rows="6"  class="pro_text" id="about_section_desc" name="about_section_desc" placeholder="<?php _e('Enter Your About Us Section Description Here...','WPSM_MMR_TEXT_DOMAIN'); ?>"><?php echo $wpsm_mmr_plugin_options_about_us['about_section_desc']; ?></textarea>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</form>
	
	
	<div class="panel panel-primary save-button-block">
		<div class="panel-body">
			<div class="pull-left">
				<button type="button" class="btn btn-info btn-lg" onclick="wpsm_mmr_option_data_save('about_us')"><?php _e('Save Changes','WPSM_MMR_TEXT_DOMAIN'); ?></button>
			</div>
			<div class="pull-right">
				<button type="button" class="btn btn-primary btn-lg" onclick="wpsm_mmr_option_data_reset('about_us')"><?php _e('Reset Default','WPSM_MMR_TEXT_DOMAIN'); ?></button>
			</div>
		</div>
	</div>	
							
</div>