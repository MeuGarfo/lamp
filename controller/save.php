<?php
$produto=$_GET;
$produto['created_at']=time();
$produto['updated_at']=time();
$db->insert('produto',$produto);
header("Location: index.php");
