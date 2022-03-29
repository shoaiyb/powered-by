<?php
/*
 * Powered By - WonderCMS Plugin
 *
 * This plugin add image->(227×29) to the site which then appear as a sticky button in the right side at the footer, Which tell your visitors your website is powered by WonderCMS.
 *
 * @package WonderCMS
 * @subpackage PoweredBy
 * @author Shoaiyb Sysa
 * @version 1.0.0
 * @license MIT
*/
global $Wcms;

function powered_by_header() {
  global $Wcms;
  if(!headers_sent()) {
    header('X-Powered-By: WonderCMS v' . VERSION);
  }
}
  
function powered_by_meta() {
  global $Wcms;
  return '<meta name="generator" content="WonderCMS v' . VERSION . '">';
}

function powered_by_image($args) {
  global $Wcms;
  if($Wcms->loggedIn) {
    return $args;
  }
  $args[0] .= '
  <div style="text-align: right;position: fixed;z-index:9999999;bottom: 0;width: auto;right: 1%;cursor: pointer;line-height: 0;display:block !important;">
    <a title="Powered by WonderCMS" target="_blank" rel="nofollow" href="https://www.wondercms.com/?utm_source=' . $Wcms->get('config', 'siteTitle') . '">
      <img src="' . $Wcms->url('plugins/PoweredBy/poweredby.png') . '" alt="Powered by WonderCMS">
    </a>
  </div>
  ';
  return $args;
}

powered_by_header();
$Wcms->addListener("css", "powered_by_meta");
$Wcms->addListener("js", "powered_by_image");
?>
