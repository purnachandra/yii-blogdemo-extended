<?php

$config = CMap::mergeArray(
	require(dirname(__FILE__).'/main.php'),
	array(
		'components'=>array(
			'fixture'=>array(
				'class'=>'system.test.CDbFixtureManager',
			),
			'db'=>array(
				'connectionString'=>'sqlite:'.dirname(dirname(__FILE__)).'/data/blog-test.db',
        'enableProfiling'=>true,
        'enableParamLogging'=>true,
			),
			// uncomment the following to use a MySQL database
			/*
			'db'=>array(
				'connectionString' => 'mysql:host=localhost;dbname=blog-test',
				'emulatePrepare' => true,
				'username' => 'root',
				'password' => '',
				'charset' => 'utf8',
			),
			*/
		),
	)
);

$config['components']['log']['routes'][] = array(
  'class'=>'CWebLogRoute',
  'categories'=>'system.db.CDbCommand,application',
  'showInFireBug'=>true,
);
$config['components']['db']['enableProfiling'] = true;
$config['components']['db']['enableParamLogging'] = true;
unset($config['components']['cache']); # also turns off schema-caching

return $config;
