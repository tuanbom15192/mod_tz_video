<?php
/*------------------------------------------------------------------------

# TZ Extension

# ------------------------------------------------------------------------

# author    DuongTVTemPlaza

# copyright Copyright (C) 2012 templaza.com. All Rights Reserved.

# @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL

# Websites: http://www.templaza.com

# Technical Support:  Forum - http://templaza.com/Forum

-------------------------------------------------------------------------*/

defined('_JEXEC') or die();

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

//$doc->addScript('./modules/mod_tz_video/js/oe-videobg.js');

require JModuleHelper::getLayoutPath('mod_tz_video', $params->get('layout', 'default'));
