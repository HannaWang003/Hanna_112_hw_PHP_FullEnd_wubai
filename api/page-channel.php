<?php
include_once "db.php";
// $_GET;
$DB = ${$_GET['table']};
$total = $DB->count(['isbn' => $_GET['isbn']]);
$nowpage = ($_GET['nowpage']) ?? 1;
$size = $_GET['size'];
$pages = ceil($total / $size);
$start = ($nowpage - 1) * $size;
$rows = $DB->all(['isbn' => $_GET['isbn']], "limit $start,$size");

$response = [
    'rows' => $rows,
    'pages' => $pages,
];
header("Content-Type:application/json");
echo json_encode($response);
