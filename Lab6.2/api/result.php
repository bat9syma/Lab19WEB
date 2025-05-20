<?php
require_once '../includes/fun.php';

$lastname = $_POST['lastname'] ?? '';
$firstname = $_POST['firstname'] ?? '';
$group = $_POST['group'] ?? '';
$variant = $_POST['variant'] ?? '';
$x = isset($_POST['x']) ? (float)$_POST['x'] : 0;
$y = isset($_POST['y']) ? (float)$_POST['y'] : 0;
$z = isset($_POST['z']) ? (float)$_POST['z'] : 0;

$result = calculateExpression($x, $y, $z);
?>

<!DOCTYPE html>
<html lang="uk">
<head>
  <meta charset="UTF-8">
  <title>Result</title>
</head>
<body>
  <h2>Calculation Result</h2>
  <p><strong>Full name:</strong> <?php echo htmlspecialchars("$lastname $firstname"); ?></p>
  <p><strong>Group:</strong> <?php echo htmlspecialchars($group); ?></p>
  <p><strong>Variant:</strong> <?php echo htmlspecialchars($variant); ?></p>
  <hr>
  <p><strong>X:</strong> <?php echo round($x, 2); ?></p>
  <p><strong>Y:</strong> <?php echo round($y, 2); ?></p>
  <p><strong>Z:</strong> <?php echo round($z, 2); ?></p>
  <hr>
  <p><strong>f(x, y, z):</strong> <?php echo round($result, 4); ?></p>
  <br><a href="/index.html">← Go Back</a>
</body>
</html>
