<?php

/*------------------------------------------------------------------------

# ------------------------------------------------------------------------

# author    ThuongNVTemplaza

# copyright Copyright (C) 2015 templaza.com. All Rights Reserved.

# @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL

# Websites: http://www.templaza.com

# Technical Support:  Forum - http://templaza.com/Forum

-------------------------------------------------------------------------*/
// no direct access

defined('_JEXEC') or die;

$doc = JFactory::getDocument();
$doc->addStyleSheet('modules/mod_tz_video/css/style.css');
$doc->addScript('modules/mod_tz_video/js/video.js');

$logo_img = $params->get('logo_image','');
$title = $params->get('author','');
$desc  = $params->get('desc','');

?>
<div class="tz-video niory-video<?php echo $module -> id;?>">
    <div class="tz-video-content container">
        <button class="tzautoplay"></button>
        <button class="tzpause"></button>
        <?php if($title != ''): ?>
            <h3 class="title_rouge"><?php echo $title;?></h3>
        <?php endif;?>
        <?php if($desc != ''):?>
            <p><?php echo $desc;?></p>
        <?php endif;?>
    </div>
    <div class="bg-video" style="background: url(<?php echo $params->get('image'); ?>) no-repeat  center center / cover  transparent !important;"></div>
    <video class="videoID">
        <source type="video/webm" src="images/video/<?php echo $params->get('webm') ?>" />
        <source type="video/mp4" src="images/video/<?php echo $params->get('mp4') ?>" />
        <source type="video/ogv" src="images/video/<?php echo $params->get('ogv') ?>" />
    </video>
</div>
<script type="text/javascript">
    jQuery(document).ready(function(){
        niory_video(<?php echo $module ->id;?>);
    });
</script>