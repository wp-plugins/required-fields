<?php
function rf_settings_validate($input) {
	return $input; 
}
function rf_main_section_text(){
}

function rf_enabled_settings()
{
	$opt = get_option( 'rf_settings' );
	if (!isset($opt['rf_enabled_settings']))
	{
		$value = '';
		echo '<input type="checkbox" class="ch_location" value="None" id="slideThree" style="display: none;" name="rf_settings[rf_enabled_settings]" '.$value.' />';
	} else {
		$value = $opt['rf_enabled_settings'];
		echo '<input type="checkbox" class="ch_location" value="None" id="slideThree" style="display: none;" name="rf_settings[rf_enabled_settings]" checked />';
	}
}

function rf_for_page_enabled()
{
	/* ENABLED FOR PAGE */
	$opt = get_option( 'rf_settings' );
	if (!isset($opt['rf_for_page_enabled']))
	{
		$value = '';
		echo '<input type="checkbox" class="ch_location" value="None" id="rf_for_page_enabled" style="display: none;" name="rf_settings[rf_for_page_enabled]" '.$value.' />';
	} else {
		$value = $opt['rf_for_page_enabled'];
		echo '<input type="checkbox" class="ch_location" value="None" id="rf_for_page_enabled" style="display: none;" name="rf_settings[rf_for_page_enabled]" checked />';
	}
	/* END ENABLED FOR PAGE */
}

function rf_for_page_text()
{
	$opt = get_option( 'rf_settings' );
	echo '<div id="collapse2" style="display:none"><div id="contact_main" style="width:100%; height:100%;"><div class="content" style=" padding: 5px; ">';
	echo '<table class="form-table"><tbody>';
	/* FOR PAGE TITLE */
	if (!isset($opt['rf_title_for_page']))
	{
		$value = $default_settings['rf_title_for_page'];
		echo '<tr><th scope="row">Set Title For Page: </th><td><div class="slideThree" style=" top: 0px; "><input type="checkbox" class="ch_location" value="None" id="rf_title_for_page" style="display: none;" name="rf_settings[rf_title_for_page]" '.$value.' /><label for="rf_title_for_page"></label></div></td></tr>';
	} else {
		$value = $opt['rf_title_for_page'];
		echo '<tr><th scope="row">Set Title For Page: </th><td><div class="slideThree" style=" top: 0px; "><input type="checkbox" class="ch_location" value="None" id="rf_title_for_page" style="display: none;" name="rf_settings[rf_title_for_page]" checked /><label for="rf_title_for_page"></label></div></td></tr>';
	}
	/* END FOR PAGE TITLE */
	
	/* FOR PAGE IMAGE */
	if (!isset($opt['rf_image_for_page']))
	{
		$value = $default_settings['rf_image_for_page'];
		echo '<tr><th scope="row">Set Image For Page: </th><td><div class="slideThree" style=" top: 0px; "><input type="checkbox" class="ch_location" value="None" id="rf_image_for_page" style="display: none;" name="rf_settings[rf_image_for_page]" '.$value.' /><label for="rf_image_for_page"></label></div></td></tr>';
	} else {
		$value = $opt['rf_image_for_page'];
		echo '<tr><th scope="row">Set Image For Page: </th><td><div class="slideThree" style=" top: 0px; "><input type="checkbox" class="ch_location" value="None" id="rf_image_for_page" style="display: none;" name="rf_settings[rf_image_for_page]" checked /><label for="rf_image_for_page"></label></div></td></tr>';
	}
	/* END FOR PAGE IMAGE */
	
	echo '</table></tbody></div></div></div>';
}

function rf_error_logs_text()
{
	$opt = get_option( 'rf_settings' );
	echo '<div id="collapse1" style="display:none"><div id="contact_main" style="width:100%; height:100%;"><div class="content" style=" padding: 5px; ">';
	echo '<table class="form-table"><tbody>';
	/* Title Error Logs */
	if (!isset($opt['rf_title_error']))
	{
		$value = $default_settings['rf_title_error'];
		echo '<tr><th scope="row">Set Error Log For Title</th><td><div><input type="text"  value="'.$value.'" id="rf_title_error" name="rf_settings[rf_title_error]" /></div></td></tr>';
	} else {
		$value = $opt['rf_title_error'];
		echo '<tr><th scope="row">Set Error Log For Title</th><td> <div><input type="text"  value="'.$value.'" id="rf_title_error" name="rf_settings[rf_title_error]" /></div></td></tr>';
	}
	/* END Title Error Logs */
	/* Category Error Logs */
	if (!isset($opt['rf_cat_error']))
	{
		$value = $default_settings['rf_cat_error'];
		echo '<tr><th scope="row">Set Error Log For Category</th><td><div><input type="text"  value="'.$value.'" id="rf_cat_error" name="rf_settings[rf_cat_error]" /></div></td></tr>';
	} else {
		$value = $opt['rf_cat_error'];
		echo '<tr><th scope="row">Set Error Log For Category</th><td> <div><input type="text"  value="'.$value.'" id="rf_cat_error" name="rf_settings[rf_cat_error]" /></div></td></tr>';
	}
	/* END Category Error Logs */
	/* Tag Error Logs */
	if (!isset($opt['rf_tag_error']))
	{
		$value = $default_settings['rf_tag_error'];
		echo '<tr><th scope="row">Set Error Log For Tag</th><td><div><input type="text"  value="'.$value.'" id="rf_tag_error" name="rf_settings[rf_tag_error]" /></div></td></tr>';
	} else {
		$value = $opt['rf_tag_error'];
		echo '<tr><th scope="row">Set Error Log For Tag</th><td> <div><input type="text"  value="'.$value.'" id="rf_tag_error" name="rf_settings[rf_tag_error]" /></div></td></tr>';
	}
	/* END Tag Error Logs */
	/* Post Image Error Logs */
	if (!isset($opt['rf_img_error']))
	{
		$value = $default_settings['rf_img_error'];
		echo '<tr><th scope="row">Set Error Log For Post Image</th><td><div><input type="text"  value="'.$value.'" id="rf_img_error" name="rf_settings[rf_img_error]" /></div></td></tr>';
	} else {
		$value = $opt['rf_img_error'];
		echo '<tr><th scope="row">Set Error Log For Post Image</th><td> <div><input type="text"  value="'.$value.'" id="rf_img_error" name="rf_settings[rf_img_error]" /></div></td></tr>';
	}
	/* END Post Image Error Logs */
	echo '</table></tbody></div></div></div>';
}

function rf_title_settings()
{
	$opt = get_option('rf_settings');
	if (!isset($opt['rf_title_settings']))
	{
		$value = '';
		echo '<div class="slideThree" style=" top: 0px; "><input type="checkbox" class="ch_location" value="None" id="rf_title_settings" style="display: none;" name="rf_settings[rf_title_settings]" '.$value.' /><label for="rf_title_settings"></label></div>';
	} else {
		$value = $opt['rf_title_settings'];
		echo '<div class="slideThree" style=" top: 0px; "><input type="checkbox" class="ch_location" value="None" id="rf_title_settings" style="display: none;" name="rf_settings[rf_title_settings]" checked /><label for="rf_title_settings"></label></div>';
	}
}

function rf_category_settings()
{
	$opt = get_option('rf_settings');
	if (!isset($opt['rf_category_settings']))
	{
		$value = '';
		echo '<div class="slideThree" style=" top: 0px; "><input type="checkbox" class="ch_location" value="None" id="rf_category_settings" style="display: none;" name="rf_settings[rf_category_settings]" '.$value.' /><label for="rf_category_settings"></label></div>';
	} else {
		$value = $opt['rf_category_settings'];
		echo '<div class="slideThree" style=" top: 0px; "><input type="checkbox" class="ch_location" value="None" id="rf_category_settings" style="display: none;" name="rf_settings[rf_category_settings]" checked /><label for="rf_category_settings"></label></div>';
	}
}

function rf_tag_settings()
{
	$opt = get_option('rf_settings');
	if (!isset($opt['rf_tag_settings']))
	{
		$value = '';
		echo '<div class="slideThree" style=" top: 0px; "><input type="checkbox" class="ch_location" value="None" id="rf_tag_settings" style="display: none;" name="rf_settings[rf_tag_settings]" '.$value.' /><label for="rf_tag_settings"></label></div>';
	} else {
		$value = $opt['rf_tag_settings'];
		echo '<div class="slideThree" style=" top: 0px; "><input type="checkbox" class="ch_location" value="None" id="rf_tag_settings" style="display: none;" name="rf_settings[rf_tag_settings]" checked /><label for="rf_tag_settings"></label></div>';
	}
}

function rf_image_settings()
{
	$opt = get_option('rf_settings');
	if (!isset($opt['rf_image_settings']))
	{
		$value = '';
		echo '<div class="slideThree" style=" top: 0px; "><input type="checkbox" class="ch_location" value="None" id="rf_image_settings" style="display: none;" name="rf_settings[rf_image_settings]" '.$value.' /><label for="rf_image_settings"></label></div>';
	} else {
		$value = $opt['rf_image_settings'];
		echo '<div class="slideThree" style=" top: 0px; "><input type="checkbox" class="ch_location" value="None" id="rf_image_settings" style="display: none;" name="rf_settings[rf_image_settings]" checked /><label for="rf_image_settings"></label></div>';
	}

}
?>