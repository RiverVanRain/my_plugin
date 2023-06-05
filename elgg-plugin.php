<?php

return [
	'bootstrap' => \MyPlugin\Bootstrap::class, // for more options
	
	'view_extensions' => [
		'elgg.css' => [
			'my_plugin/style.css' => [],
		],
	],
];