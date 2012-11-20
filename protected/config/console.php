<?php

// This is the configuration for yiic console application.
// Any writable CConsoleApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'FastLogger-NG cron',

	// preloading 'log' component
	'preload'=>array('log'),

	// application components
	'components'=>array(
        'db'=>array(
            'connectionString' => 'mysql:host=localhost;dbname=syslog',
            'emulatePrepare' => true,
            'username' => 'syslog',
            'password' => 'password',
            'charset' => 'utf8',
        ),
	),
);