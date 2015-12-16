<?php

defined('_JEXEC') or die;

require_once dirname(__FILE__) . '/models/mod_music.php';
 
$rows = modMusicModel::getMusic();
require JModuleHelper::getLayoutPath('mod_music');


