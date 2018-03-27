<?php

/**
 * Menu Icons
 *
 *
 * Plugin name: Corporis helper
 * Plugin URI: https://smartcoderbd.com
 * Description: Helper plugin for Corporis Theme
 * Version:     1.0
 * Author:      smart coder
 * Author URI:  https://themeisle.com
 * License:     GPLv2
 * Text Domain: menu-icons
 */

//all add-ons link

//service section add-ons
if(file_exists(dirname(__FILE__).'/shortcode/service.php')){
	require dirname(__FILE__).'/shortcode/service.php';
}

//title section add-ons
if(file_exists(dirname(__FILE__).'/shortcode/title.php')){
	require dirname(__FILE__).'/shortcode/title.php';
}

//play_icon section add-ons
if(file_exists(dirname(__FILE__).'/shortcode/play_icon.php')){
	require dirname(__FILE__).'/shortcode/play_icon.php';
}

//image_section section add-ons
if(file_exists(dirname(__FILE__).'/shortcode/image_section.php')){
	require dirname(__FILE__).'/shortcode/image_section.php';
}

//step section add-ons
if(file_exists(dirname(__FILE__).'/shortcode/step.php')){
	require dirname(__FILE__).'/shortcode/step.php';
}

//testimonial section add-ons
if(file_exists(dirname(__FILE__).'/shortcode/testimonial.php')){
	require dirname(__FILE__).'/shortcode/testimonial.php';
}

//slider section add-ons
if(file_exists(dirname(__FILE__).'/shortcode/slider.php')){
	require dirname(__FILE__).'/shortcode/slider.php';
}

//we_do section add-ons
if(file_exists(dirname(__FILE__).'/shortcode/we_do.php')){
	require dirname(__FILE__).'/shortcode/we_do.php';
}

//title_2 section add-ons
if(file_exists(dirname(__FILE__).'/shortcode/title_2.php')){
	require dirname(__FILE__).'/shortcode/title_2.php';
}

//team section add-ons
if(file_exists(dirname(__FILE__).'/shortcode/team.php')){
	require dirname(__FILE__).'/shortcode/team.php';
}

//btn_style section add-ons
if(file_exists(dirname(__FILE__).'/shortcode/btn_style.php')){
	require dirname(__FILE__).'/shortcode/btn_style.php';
}
//clint_logo section add-ons
if(file_exists(dirname(__FILE__).'/shortcode/clint_logo.php')){
	require dirname(__FILE__).'/shortcode/clint_logo.php';
}

//404 page section add-ons
if(file_exists(dirname(__FILE__).'/shortcode/404.php')){
	require dirname(__FILE__).'/shortcode/404.php';
}

//page_title section add-ons
if(file_exists(dirname(__FILE__).'/shortcode/page_title.php')){
	require dirname(__FILE__).'/shortcode/page_title.php';
}

//pricing_table section add-ons
if(file_exists(dirname(__FILE__).'/shortcode/pricing_table.php')){
	require dirname(__FILE__).'/shortcode/pricing_table.php';
}

//pricing_table_blue section add-ons
if(file_exists(dirname(__FILE__).'/shortcode/pricing_table_blue.php')){
	require dirname(__FILE__).'/shortcode/pricing_table_blue.php';
}

//faq section add-ons
if(file_exists(dirname(__FILE__).'/shortcode/faq.php')){
	require dirname(__FILE__).'/shortcode/faq.php';
}



?>