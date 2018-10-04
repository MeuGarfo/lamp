<?php
define('ROOT',__DIR__.'/');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//INCs
require ROOT.'inc/controller.php';
require ROOT.'inc/view.php';
//Composer
require_once ROOT.'vendor/autoload.php';

use Medoo\Medoo;


$db=new Medoo([
    // required
    'database_type' => 'mysql',
    'database_name' => 'lamp',
    'server' => 'localhost',
    'username' => 'root',
    'password' => ''
]);

/*
$db = new Medoo([
	'database_type' => 'sqlite',
	'database_file' => __DIR__.'/banco.db'
]);
*/
