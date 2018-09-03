<?php
define('ROOT',__DIR__.'/');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require 'vendor/autoload.php';

use Medoo\Medoo;

$db = new Medoo([
	// required
	'database_type' => 'mysql',
	'database_name' => 'lamp',
	'server' => 'localhost',
	'username' => 'root',
	'password' => ''
]);
