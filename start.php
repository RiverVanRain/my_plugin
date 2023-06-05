<?php
/**
 * My Elgg Plugin
**/

elgg_register_event_handler('init', 'system', 'my_plugin_init');

function my_plugin_init() {
	elgg_extend_view('elgg.css', 'my_plugin/style.css');
}