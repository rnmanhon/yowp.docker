<?php 
function wpsm_maintenance_mode_responsive_plugin_js_css()
{

    //enequeue scripts page for coming soon plugin admin panel
   
    wp_enqueue_script('theme-preview');
	wp_enqueue_media();
    wp_enqueue_style('wp-color-picker');
	wp_enqueue_style('thickbox');
	wp_enqueue_style('wpsm_mmr-bootstrap_css', wpsm_mmr_PLUGIN_URL.'css/bootstrap.css');
	wp_enqueue_style('wpsm_mmr-smartech_css', wpsm_mmr_PLUGIN_URL.'css/smartech.css');

	wp_enqueue_style('wpsm_mmr-font-awesome_min', wpsm_mmr_PLUGIN_URL.'css/font-awesome/css/font-awesome.min.css');
	//wp_enqueue_style('font-animate', wpsm_mmr_PLUGIN_URL.'css/animate.css');
	wp_enqueue_style('wpsm_mmr-font-awesome-picker', wpsm_mmr_PLUGIN_URL.'css/fontawesome-iconpicker.css');
	
	//dailog pop css
	wp_enqueue_style('wpsm_mmr-dialog', wpsm_mmr_PLUGIN_URL.'css/dialog/dialog.css');
	wp_enqueue_style('wpsm_mmr-dialog-box-style', wpsm_mmr_PLUGIN_URL.'css/dialog/dialog-box-style.css');
	wp_enqueue_style('wpsm_mmr-dialog-wilma', wpsm_mmr_PLUGIN_URL.'css/dialog/dialog-jamie.css');
	
	wp_enqueue_style('wpsm_mmr-fv', wpsm_mmr_PLUGIN_URL.'css/fv.css');
	
	
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'jquery-ui-sortable' );
	
        wp_enqueue_script( 'jquery-ui-sortable' );
	// Media Upload Js
	wp_enqueue_script('wpsm_mmr-media-uploads',wpsm_mmr_PLUGIN_URL.'js/media-upload-script.js',array('media-upload','thickbox','jquery'));
    // Date Picker Js
	wp_enqueue_script('wpsm_mmr-time-picker', wpsm_mmr_PLUGIN_URL.'js/jquery-ui-timepicker.js',array('jquery','jquery-ui-datepicker'));
	// Colour Picker Js
	wp_enqueue_script('wpsm_mmr-my-color-picker-script', wpsm_mmr_PLUGIN_URL.'js/my-color-picker-script.js', array( 'wp-color-picker' ), false, true );
	// Bootstrap Js
	wp_enqueue_script('wpsm_mmr-bootstrap_min_js',wpsm_mmr_PLUGIN_URL.'js/bootstrap.min.js');
	// Admin Settings Dashboard Js
	wp_enqueue_script('wpsm_mmr-metisMenu',wpsm_mmr_PLUGIN_URL.'js/plugins/metisMenu/metisMenu.min.js');
	wp_enqueue_script('wpsm_mmr-smartech',wpsm_mmr_PLUGIN_URL.'js/smartech.js',array('jquery'));
	wp_enqueue_script('wpsm_mmr-sidebar_nav',wpsm_mmr_PLUGIN_URL.'js/rcsp_sidebar_nav.js');
	// Font Awesome Icon Picker Js
	wp_enqueue_script('wpsm_mmr-font-icon-picker-js',wpsm_mmr_PLUGIN_URL.'js/fontawesome-iconpicker.js',array('jquery'));
	wp_enqueue_script('wpsm_mmr-call-icon-picker-js',wpsm_mmr_PLUGIN_URL.'js/call-icon-picker.js',array('jquery'), false, true);
	
	// Multi select Dropdown Js
	wp_enqueue_script('wpsm_mmr-bootstrap-multiselect-js',wpsm_mmr_PLUGIN_URL.'js/chosen.jquery.js');
	// Data Save Js
	wp_enqueue_script('wpsm_mmr-rcsp-option-data-save-js',wpsm_mmr_PLUGIN_URL.'js/rcsp-option-data-save.js');
	// Data Field Validator Js
	wp_enqueue_script('wpsm_mmr-rcsp-validator-js',wpsm_mmr_PLUGIN_URL.'js/validator.js');
	
	wp_enqueue_style('wpsm_mmr-jquery-ui-css', wpsm_mmr_PLUGIN_URL.'css/rcsp_jquery-ui.css');
	
	//dailog pop js
	wp_enqueue_script('wpsm_mmr-snap-svg-min',wpsm_mmr_PLUGIN_URL.'js/dialog/snap.svg-min.js');
	wp_enqueue_script('wpsm_mmr-modernizr-custom',wpsm_mmr_PLUGIN_URL.'js/dialog/modernizr.custom.js');
	wp_enqueue_script('wpsm_mmr-classie',wpsm_mmr_PLUGIN_URL.'js/dialog/classie.js');
	wp_enqueue_script('wpsm_mmr-dialogFx',wpsm_mmr_PLUGIN_URL.'js/dialog/dialogFx.js'); 
	
		
	
}
?>