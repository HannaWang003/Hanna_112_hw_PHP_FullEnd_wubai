<?php
include_once "db.php";
// dd($_POST);
foreach ($_POST['isbn'] as $idx => $val) {
    $data = [];
    if (!empty($_FILES['img']['tmp_name'][$idx])) {
        move_uploaded_file($_FILES['img']['tmp_name'][$idx], "../img/{$_FILES['img']['name'][$idx]}");
        $data['img'] = $_FILES['img']['name'][$idx];
    }
    $data['isbn'] = $_POST['isbn'][$idx];
    $data['book'] = $_POST['book'][$idx];
    $data['text'] = $_POST['text'][$idx];
    $data['date'] = $_POST['date'][$idx];
    $data['sh'] = 1;

    $Book->save($data);
}
header("location:../back.php?do=book");
