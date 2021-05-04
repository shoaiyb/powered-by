<?php
/*
 * Powered By - WonderCMS Plugin
 *
 * The plugin add (...)
 *
 * @package PoweredBy
 * @author shoaiyb sysa <https://sysa.ml>
 * @require WonderCMS v3.*.*
 * @version 1.0
 * 
*/


global $Wcms;
  
function poweredBy($args) {
    global $Wcms;
    if($Wcms->loggedIn) return $args;
  $args[0] .= <<<HTML
                 <div style="text-align: right;position: fixed;z-index:9999999;bottom: 0;width: auto;right: 1%;cursor: pointer;line-height: 0;display:block !important;">
                     <a title="Powered by WonderCMS." target="_blank" href="https://www.wondercms.com/?utm_source=siteTitle&utm_medium=banner&utm_campaign=powered_by_logo">
                         <img src="plugins/PoweredBy/poweredby.png" alt="Powered by WonderCMS">
                     </a>
                 </div>
HTML;
  return $args;
  }

$Wcms->addListener("js", "poweredBy");
?>
