<?php

$path = __DIR__;
if (file_exists("{$path}/vendor/autoload.php")) {
	require_once "{$path}/vendor/autoload.php";
}

/**
 * Plugin container
 * @return \hypeJunction\Wall\Plugin
 */
function hypeWall() {
	return \hypeJunction\Wall\Plugin::factory();
}