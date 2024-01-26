<?php
include_once "db.php";
$DB = ${ucfirst($_POST['table'])};
$DB->del($_POST['id']);
$page = $DB->count(" where id <= {$_POST['id']}");

echo $page;
