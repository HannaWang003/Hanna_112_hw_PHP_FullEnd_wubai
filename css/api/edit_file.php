<?php
include_once "db.php";

if (isset($_FILES['img']['tmp_name'])) {
    move_uploaded_file($_FILES['img']['tmp_name'], "../img/{$_FILES['img']['name']}");
    $_POST['img'] = $_FILES['img']['name'];
    $table = $_POST['do'];
    unset($_POST['do']);
    $DB = ${ucfirst($table)};
    $DB->save($_POST);
    // $tmp = $DB->find($_POST['id']);
    // unlink("../img/{$tmp['img']}");
}
to("../back.php?do=$table");