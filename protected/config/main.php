<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
Yii::setPathOfAlias('booster', dirname(__FILE__).'/../extensions/booster');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Technoroll',

	// preloading 'log' component
	'preload'=>array('log','translate','booster'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.modules.translate.TranslateModule',
	),

	// language
	'language'=>'en',

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		'translate',
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'suprabakti',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
			'generatorPaths'=>array(
				'booster.gii'
			),
		),
		
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		'booster'=>array(
			'class'=>'booster.components.Booster',
		),
		'messages' => array(
			'class'=>'CDbMessageSource',
			'onMissingTranslation' => array('TranslateModule', 'missingTranslation'),
			'sourceMessageTable' => 'tbl_translate_source',
			'translatedMessageTable' => 'tbl_translate_result',
		),
		/* setup global translate application component */
		'translate' => array(
			'class'=>'translate.components.MPTranslate',
			'acceptedLanguages'=>array(
				'en'=>'English',
				'id'=>'Indonesian',
			),
		),

		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		

		// database settings are configured in database.php
		'db'=>require(dirname(__FILE__).'/database.php'),

		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>YII_DEBUG ? null : 'site/error',
		),

		'log'=>array(
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
				*/
			),
		),

	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
		'defaultLanguage'=>'en',
	),
);
