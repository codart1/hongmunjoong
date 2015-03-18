<?php 
function hmj_img_main($img) {
	$asset_uri = get_template_directory_uri() . "/hmj-assets/";
	$img_main_uri = $asset_uri . "img/0.main/";
	$css_uri = $asset_uri . "css/";
	
	return $img_main_uri . $img;
}