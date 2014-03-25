<?php

define('ROOT',dirname(dirname(__FILE__)));
define('CONTROLLER', ROOT."/controller");
define('CONFIG', ROOT."/config");
define('UTIL', ROOT."/util");
define('DATA', ROOT."/data");
define('VIEW', ROOT."/view");
define('MODEL', ROOT."/model");
define('WEIBO', ROOT."/weibo");

define('MODEL_POST', MODEL."/post");
define('MODEL_LOGIN', MODEL."/login");

define('CONTROLLER_POST', CONTROLLER."/post");
define('CONTROLLER_LOGIN', CONTROLLER."/login");

define('REDIRECT_URL', "http://ask.sleepwalker.pro/");
define('POST_PAGE_NUM', 10);

define('IMG_PATH',ROOT.'/../images/myblog/');
define('IMG_URL','http://img.sleepwalker.pro/');

define( "LOGIN_TOKEN" , md5('anna001'.date('Y-m-d').'20140221'));
?>
