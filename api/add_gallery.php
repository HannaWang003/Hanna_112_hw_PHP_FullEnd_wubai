<?php
include_once "db.php";
// dd($_POST);
foreach ($_POST['text'] as $idx => $val) {
    $data = [];
    if (!empty($_FILES['img']['tmp_name'][$idx])) {
        move_uploaded_file($_FILES['img']['tmp_name'][$idx], "../img/{$_FILES['img']['name'][$idx]}");
        $data['img'] = $_FILES['img']['name'][$idx];
    }
    $data['text'] = $_POST['text'][$idx];
    $data['subject_id'] = 0;
    $data['sh'] = 1;
    $Gallery->save($data);
}
header("location:../back.php?do=gallery");
