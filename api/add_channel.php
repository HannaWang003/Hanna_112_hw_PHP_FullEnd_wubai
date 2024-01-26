<?php
include_once "db.php";
// dd($_POST);
$res = 0;
foreach ($_POST['isbn'] as $idx => $val) {
    $data = [];
    $data['isbn'] = $_POST['isbn'][$idx];
    $data['name'] = $_POST['name'][$idx];
    $data['url'] = $_POST['url'][$idx];
    $data['sh'] = 1;

    $res += $Channelbook->save($data);
    // $dataAll = $Channelbook->all("order by id desc");
    // header("Content-Type:application/json");
    // echo json_encode($dataAll);
};
echo $res;
