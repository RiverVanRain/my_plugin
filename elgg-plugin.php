<?php

return [
	'plugin' => [
		'name' => 'My Plugin',
		'version' => '5.0',
		'activate_on_install' => true,
	],
	
	'bootstrap' => \MyPlugin\Bootstrap::class, // for more options
	
	'view_extensions' => [
		'elgg.css' => [
			'my_plugin/style.css' => [],
		],
	],
];