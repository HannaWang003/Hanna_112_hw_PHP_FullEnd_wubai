<?php
include_once "db.php";
$res = $Channelbook->all(['isbn'=>$_GET['isbn']]);
header("Content-Type:application/json");
echo json_encode($res);

?>