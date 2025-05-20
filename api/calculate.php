<?php
require_once '../includes/fun.php';

$x = $_POST['x'] ?? 0;
$y = $_POST['y'] ?? 0;
$z = $_POST['z'] ?? 0;

$result = calculateExpression($x, $y, $z);
echo json_encode(['result' => $result]);
?>
