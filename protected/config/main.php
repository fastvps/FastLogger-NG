<?php

return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'FastLogger-NG',

	// preloading 'log' component
	'preload'=>array(
        'bootstrap',
        'log'
    ),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool

		/*'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'fastvps',
			'ipFilters'=>array('127.0.0.1'),
            'generatorPaths' => array(
                'bootstrap.gii'
            ),
		),*/

	),

	// application components
	'components'=>array(
		// uncomment the following to enable URLs in path-format

		'urlManager'=>array(
			'urlFormat'=>'path',
            'showScriptName'=>false,
			'rules'=>array(
                'logs' => 'site/logs',
                '/' => 'site/index',
			),
		),


        'bootstrap' => array(
            'class' => 'ext.bootstrap.components.Bootstrap',
            'responsiveCss' => true,
        ),

		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=syslog',
			'emulatePrepare' => true,
			'username' => 'syslog',
			'password' => 'password',
			'charset' => 'utf8',
		),

		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		/*'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),

			),*/
		),


);