<?php

/*------------------------------------------------------------------------

# MOD_TZ_NEW_PRO Extension

# ------------------------------------------------------------------------

# author    TuanNATemplaza

# copyright Copyright (C) 2013 templaza.com. All Rights Reserved.

# @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL

# Websites: http://www.templaza.com

# Technical Support:  Forum - http://templaza.com/Forum

-------------------------------------------------------------------------*/
// no direct access

defined('_JEXEC') or die;

$doc = JFactory::getDocument();
$doc->addScript('modules/mod_tz_video/js/video.js');

$background     = $background = $params->get('video_parallax','');
$baseurl = JUri::base();
if($background != ''){
    $url_back = $baseurl . $background;
    $class_back = 'footer_background';
}else {
    $url_back = '';
    $class_back = '';
}

?>
<!--<iframe src="//player.vimeo.com/video/19376057" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>-->
<div class="tz-vimeo niory-video<?php echo $module -> id;?>">
    <div class="tz-video-content parallax" style="background: url('<?php echo $background; ?>') no-repeat fixed 50% 0 rgba(0, 0, 0, 0);">
        <div class="content container-fluid">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 viemo_content">
                <div class="title"><h3><?php ?><?php echo $params->get('author','');?></h3></div>
                <div class="desc"><?php echo $params->get('desc','');?></div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 video-content">
<!--                <div class="fluidvids">-->
<!--                    <iframe class="fluidvids-item" width="500" height="281" frameborder="0" data-fluidvids="loaded" src="http://player.vimeo.com/video/--><?php //echo $params -> get('vimeo_video');?><!--"></iframe>-->
<!--                </div>-->
                <div class="tz-video-content two">
                    <button class="tzautoplay"></button>
                    <button class="tzpause"></button>
                </div>
                <div class="bg-video" style="background: url(<?php echo $params->get('image'); ?>) no-repeat  center center / cover  transparent !important;"></div>
                <video class="videoID">
                    <source type="video/webm" src="images/video/<?php echo $params->get('webm') ?>" />
                    <source type="video/mp4" src="images/video/<?php echo $params->get('mp4') ?>" />
                    <source type="video/ogv" src="images/video/<?php echo $params->get('ogv') ?>" />
                </video>
            </div>
        </div>
    </div>
</div>
<script>
    jQuery(document).ready(function(){
        niory_video(<?php echo $module ->id;?>);
    });
    jQuery(window).on('load resize',function(){
        var height_vmct = jQuery('.tz-vimeo .viemo_content').innerHeight();
        jQuery('.tz-vimeo .video-content').height(height_vmct);
    });
</script>