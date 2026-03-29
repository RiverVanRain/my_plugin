<?php

return [
	'plugin' => [
		'name' => 'My Plugin',
		'version' => '6.1',
		'activate_on_install' => true,
	],
	
	'bootstrap' => \MyPlugin\Bootstrap::class, // for more options
	
	'view_extensions' => [
		'admin.css' => [
			'my_plugin/admin.css' => [],
		],
		'elgg.css' => [
			'my_plugin/elgg.css' => [],
		],
		'walled_garden.css' => [
			'my_plugin/walled_garden.css' => [],
		],
	],
];