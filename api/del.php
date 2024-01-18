<?php
include_once "db.php";
$DB = ${ucfirst($_POST['table'])};
$res = $DB->del($_POST['id']);
echo $res;
