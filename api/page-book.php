<?php
include_once "db.php";
$DB = ${$_GET['table']};
$total = $DB->count(['sh' => 1]);
$nowpage = ($_GET['nowpage']) ?? 1;
$size = 3;
$pages = ceil($total / $size);
$start = ($nowpage - 1) * $size;
$rows = $DB->all(['sh' => 1], "ORDER BY date DESC LIMIT $start, $size");

$response = [
    'rows' => $rows,
    'pages' => $pages
];

header('Content-Type: application/json');
echo json_encode($response);