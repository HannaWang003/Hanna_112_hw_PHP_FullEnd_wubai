<?php
include_once "db.php";
$res = 0;
foreach ($_POST['id'] as $idx => $id) {
    $data = [];
    $data = $Channelbook->find($id);
    $data['url'] = $_POST['url'][$idx];
    $data['sh'] = (isset($_POST['sh']) && in_array($id, $_POST['sh'])) ? 1 : 0;
    $res += $Channelbook->save($data);
};
echo  $res;
// $res = $Channelbook->all();
// header('Content-Type:application/json');
// echo json_encode($res);