<?php
require_once('vendor/autoload.php');

ini_set('display_errors', true);
error_reporting(E_ALL);

include('config.php');

use Jenssegers\Blade\Blade;

if (!isset($config['theme'])) {
	$config['theme'] = 'default';
}
if (!isset($config['resource_path'])) {
	$config['resource_path'] = "themes/{$config['theme']}/dist";
}

$blade = new Blade('themes', 'cache');

echo $blade->make("{$config['theme']}.index", [
	'links' => $links,
	'config' => $config,
])->render();
?>
