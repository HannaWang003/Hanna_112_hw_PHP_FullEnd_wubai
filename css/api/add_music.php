<?php
include_once "db.php";
// dd($_POST);
foreach($_POST['album'] as $idx => $val){
    $data=[];
    if(!empty($_FILES['img']['tmp_name'][$idx])){
        move_uploaded_file($_FILES['img']['tmp_name'][$idx],"../img/{$_FILES['img']['name'][$idx]}");
    $data['img']=$_FILES['img']['name'][$idx];
    }
    $data['date'] = $_POST['date'][$idx];
    $data['album'] = $_POST['album'][$idx];
    $data['publisher'] = $_POST['publisher'][$idx];
    $data['num'] = $_POST['num'][$idx];
    $data['note'] = $_POST['note'][$idx];
    $data['sh']=1;
    $Music->save($data);
}
header("location:../back.php?do=music");
?>