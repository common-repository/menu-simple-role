<?php
/*
Plugin Name: Wordpress Menu Simple Role
Plugin URI: http://cuneydanlayisli.com
Description: En: Visitors and users of WordPress Menu Display - Tr: Wordpress Ziyaretçiye ve Kayıtlı Kullanıcıya Özel Görünecek Menü
Version: 1.0
Author: Muhammed Cüneyd Anlayışlı
Author URI: http://cuneydanlayisli.com
License: GNU
*/

if (preg_match('#' . basename(__FILE__) . '#', $_SERVER['PHP_SELF']))
{
die('You are not allowed to call this page directly. - Plugin yolunu direk çağıramazsın. ');
}
add_action( 'wp_head', 'wp_simple_navmenu_role' );
function wp_simple_navmenu_role() {
		
		$user_id = get_current_user_id();
		if ($user_id != 0) { //kullanıcı girdiyse ?>

			<style>
			.registered_user {display:block !important;}
			.visitor {display:none !important;}</style>

		<? }else { // kullanıcı giriş yapmadıysa , ziyaretçiye ?>

			<style>
			.registered_user {display:none !important;}
			.visitor {display:block !important;}</style>


		<? } } ?>