<?php
include_once "db.php";
// dd($_POST);
$data = [];
foreach ($_POST['text'] as $idx => $val) {
    $data = [];
    if (!empty($_FILES['img']['tmp_name'][$idx])) {
        move_uploaded_file($_FILES['img']['tmp_name'][$idx], "../img/{$_FILES['img']['name'][$idx]}");
        $data['img'] = $_FILES['img']['name'][$idx];
    }
    $data['text'] = $_POST['text'][$idx];
    $data['subject_id'] = $_POST['id'];
    $data['sh'] = 1;
    $Gallery->save($data);
    $size = 5;
    $rows = $Gallery->all(['subject_id' => $data['subject_id']], "order by id desc limit 0,{$size}");
    echo "<tr>";
    echo "<td colspan='3'>";
    $size = 5;
    $total = $Gallery->count(['subject_id' => $data['subject_id']]);
    $pages = ceil($total / $size);
    for ($i = 1; $i <= $pages; $i++) {
        echo "<button class='pageBtn' onclick='toPage({$data['subject_id']},$i,$size)'>$i</button>";
    }

    echo "</td>";
    echo "</tr>";


    echo "<tr>";
    echo "<th>img</th>";
    echo "<th>text</th>";
    echo "<th>刪除</th>";
    echo "</tr>";
    foreach ($rows as $row) {
        echo "<tr>";
        echo "<td><img src='./img/{$row['img']}'></td>";
        echo "<td>{$row['text']}</td>";
        echo "<td>";
        echo "<ion-icon class='DelBtn' name='trash-sharp' size='large' data-id='{$row['id']}' data-table='gallery'>";
        echo "</ion-icon>";
        echo "</td>";
        echo "</tr>";
    }
}
