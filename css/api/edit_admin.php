<?php
include_once "db.php";
// dd($_POST);
// dd($Admin->all());
foreach($_POST['id'] as $idx=>$val){
    $row=$Admin->find($val);
$row['pw']=$_POST['pw'][$idx];
    $Admin->save($row);
}
to("../back.php?do=admin");
?>