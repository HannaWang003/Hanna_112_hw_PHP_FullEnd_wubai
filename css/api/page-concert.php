<?php
include_once "db.php";
$total = $Concert->count(['sh' => 1]);
$nowpage = ($_GET['nowpage']) ?? 1;
$size = 6;
$pages = ceil($total / $size);
$start = ($nowpage - 1) * $size;
$rows = $Concert->all(['sh' => 1], "ORDER BY date DESC LIMIT $start, $size");

$response = [
    'rows' => $rows,
    'pages' => $pages
];

header('Content-Type: application/json');
echo json_encode($response);