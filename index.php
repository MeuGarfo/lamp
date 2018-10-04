<?php
require 'config.php';

use Ifsnop\Mysqldump as IMysqldump;

backup();
$data=[
    'db'=>$db
];
controller('home',$data);

function backup(){
    try {
        $dump = new IMysqldump\Mysqldump('mysql:host=localhost;dbname=lamp', 'root', '');
        $dump->start('lamp.sql');
    } catch (\Exception $e) {
        echo 'mysqldump-php error: ' . $e->getMessage();
    }
}
