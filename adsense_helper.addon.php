<?php
/**
 * @file adsense_helper.addon.php
 * @author 김대현
 * @brief control adsense js script
 **/


if(!defined('__XE__')) exit();

// 관리자 페이지에서 이 애드온이 작동할 필요는 없다.
if(Context::get('module')=='admin') return;

// 만일 관리자에게 노출하고 싶지 않으면 애드센스 js 를 불러오지 않음.
if($addon_info->load_admin = 'Y' && $logged_info->is_admin=='Y') return;

if($called_position == 'before_display_content' && $addon_info->load_admin = 'N')
{
	// body 의 끝쪽에 호출함 (비동기식 호출)
	$footer = sprintf('<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>');
	Context::addHtmlFooter($footer);
}
?>
