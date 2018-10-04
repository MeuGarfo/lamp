<?php
require_once ROOT.'config.php';
$data['produtos']=$db->select("produto", "*", [
	"id[>]" => 0
]);
view('home',$data);
