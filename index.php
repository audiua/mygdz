<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
function d($data=null){
	echo '<pre>';
	print_r($_REQUEST);
	print_r($data);
	die;
}
// change the following paths if necessary
$yii=dirname(__FILE__).'/protected/framework/yiilite.php';
$config=dirname(__FILE__).'/protected/config/main.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);
Yii::createWebApplication($config)->run();
