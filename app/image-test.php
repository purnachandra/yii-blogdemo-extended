<?php

$yii=dirname(dirname(__FILE__)).'/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/test.php';
// remove the following line when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);

require_once($yii);

// quick hacky test:

require 'protected/components/CImage.php';

$input = 'protected/images/test.jpg';
$output = 'protected/images/resized.jpg';

#header('Content-type: image/jpeg'); readfile($input); exit();

$test = CImageFile::load($input);

$test->fit(200,200);
$test->save($output);

header('Content-type: image/jpeg');
readfile($output);
