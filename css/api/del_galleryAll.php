<?php
include_once "db.php";
$DB = ${ucfirst($_POST['table'])};
$DB->del(['subject_id' => $_POST['id']]);
$res = $DB->del($_POST['id']);

echo $res;
