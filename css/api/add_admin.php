<?php
include "db.php";
if (!empty($_POST['acc'])) {
    $res = $Admin->count(['acc' => $_POST['acc']]);
    if ($res != 0) {
        // echo $res;
        echo "recurrent";
    } elseif (!empty($_POST['pw'])) {
        $total = $Admin->save($_POST);
        echo "新增" . $total . "筆帳號";
    }
}
