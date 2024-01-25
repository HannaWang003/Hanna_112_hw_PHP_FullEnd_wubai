<?php
include_once "db.php";
foreach($_POST['id'] as $idx=>$id){
    $data = $Channelbook->find($id);
    $data['url']=$_POST['url'][$idx];
    $data['sh']=(in_array($id,$_POST['sh']))?1:0;
    $Channelbook->save($data);
}
$res = $Channelbook->all();
header('Content-Type:application/json');
echo json_encode($res);
?>