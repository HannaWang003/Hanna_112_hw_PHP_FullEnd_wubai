<?php
include_once "db.php";
$start = ($_POST['page'] - 1) * $_POST['size'];
$rows = $Gallery->all(['subject_id' => $_POST['subject_id']], "order by id desc limit $start,{$_POST['size']}");

echo "<tr>";
echo "<td colspan='3'>";
$size = 5;
$total = $Gallery->count(['subject_id' => $_POST['subject_id']]);
$pages = ceil($total / $size);
for ($i = 1; $i <= $pages; $i++) {
    echo "<button class='pageBtn' onclick='toPage({$_POST['subject_id']},$i,$size)'>$i</button>";
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
