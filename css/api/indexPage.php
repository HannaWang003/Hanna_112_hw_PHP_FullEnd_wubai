<?php
include_once "db.php";
$start = ($_POST['page'] - 1) * $_POST['size'];
$rows = $Music->all("order by date desc limit $start,{$_POST['size']}");
foreach($rows as $row){
    echo "<div class='d-flex justify-content-center align-items-center m-auto' style='width:50vw'>";
    echo "<div><h4>{$row['album']}</h4></div>";
    echo "<div class='mx-5'><img src='./img/{$row['img']}' alt='' srcset=''></div>";
    echo "<div><pre>{$row['note']}</pre></div>";
    echo "</div>";
}
