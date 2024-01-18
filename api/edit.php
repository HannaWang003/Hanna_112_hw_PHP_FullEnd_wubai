<?php
include_once "db.php";
$DB = ${ucfirst($_POST['table'])};
unset($_POST['table']);
echo $DB->save($_POST['newdata']);
// to("../back.php?do=music");