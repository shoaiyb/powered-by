<?php
/*
 * Powered By - WonderCMS Plugin
 *
 * This plugin add image->(227×29) to the site which then appear as a sticky button in the right side at the footer, Which tell your visitors your website is powered by WonderCMS.
 *
 * @package PoweredBy
 * @version 1.0
 * @author shoaiyb sysa <https://sysa.ml>
 * @require WonderCMS v3.*.*
 * @tested WonderCMS v3.1.4
*/


global $Wcms;
  
function poweredBy($args) {
    global $Wcms;
    if($Wcms->loggedIn) return $args;
  $args[0] .= <<<HTML
                 <div style="text-align: right;position: fixed;z-index:9999999;bottom: 0;width: auto;right: 1%;cursor: pointer;line-height: 0;display:block !important;">
                     <a title="Powered by WonderCMS." target="_blank" href="https://www.wondercms.com/?utm_source=$Wcms->get('config', 'siteTitle')&utm_medium=banner&utm_campaign=powered_by_logo">
                         <img src="$this->url()plugins/PoweredBy/poweredby.png" alt="Powered by WonderCMS">
                     </a>
                 </div>
HTML;
  return $args;
  }

$Wcms->addListener("js", "poweredBy");
?>
