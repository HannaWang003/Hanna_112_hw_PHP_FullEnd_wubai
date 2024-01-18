<?php
include_once "db.php";
if (isset($_POST['table'])) {
    $DB = ${ucfirst($_POST['table'])};
    unset($_POST['table']);
}
$_POST['sh'] = 1;
$DB->save($_POST);
to("../back.php?do=news");
