<?php
include_once "db.php";
$total = $Music->count();
$nowpage = ($_GET['page']) ?? 1;
$size = 6;
$pages = ceil($total / $size);
$start = ($nowpage - 1) * $size;
$rows = $Music->all("ORDER BY date DESC LIMIT $start, $size");

$response = [
    'rows' => $rows,
    'pages' => $pages
];

header('Content-Type: application/json');
echo json_encode($response);
