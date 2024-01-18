<?php
include_once "db.php";
foreach($_POST['title'] as $idx => $val){
    $data=[];
    // 接收傳檔案用
    // if(!empty($_FILES['img']['tmp_name'][$idx])){
    //     move_uploaded_file($_FILES['img']['tmp_name'][$idx],"../img/{$_FILES['img']['name'][$idx]}");
    // $data['img']=$_FILES['img']['name'][$idx];
    // }
    if(!empty($_POST['title'][$idx])){
    $data['title'] = $_POST['title'][$idx];
    $data['country'] = $_POST['country'][$idx];
    $data['location'] = $_POST['location'][$idx];
    $data['date'] = $_POST['date'][$idx];
    $data['ticket'] = $_POST['ticket'][$idx];
    $data['sh']=1;
    $Concert->save($data);
}
}
header("location:../back.php?do=concert");
?>