<?php
require_once 'fun.php';

$lastname = $_POST['lastname'] ?? '';
$firstname = $_POST['firstname'] ?? '';
$group = $_POST['group'] ?? '';
$variant = $_POST['variant'] ?? 1;

$x = $_POST['x'] * $variant;
$y = $_POST['y'] * $variant;
$z = $_POST['z'] / $variant;

$result = calculateExpression($x, $y, $z);
?>

<!DOCTYPE html>
<html lang="uk">
<head>
  <meta charset="UTF-8">
  <title>Результат</title>
</head>
<body>
  <h2>Результат обчислення</h2>
  <p><strong>ПІБ:</strong> <?php echo "$lastname $firstname"; ?></p>
  <p><strong>Група:</strong> <?php echo htmlspecialchars($group); ?></p>
  <p><strong>Варіант:</strong> <?php echo $variant; ?></p>
  <hr>
  <p><strong>X:</strong> <?php echo round($x, 2); ?></p>
  <p><strong>Y:</strong> <?php echo round($y, 2); ?></p>
  <p><strong>Z:</strong> <?php echo round($z, 2); ?></p>
  <hr>
  <p><strong>f(x, y, z):</strong> <?php echo round($result, 4); ?></p>

  <br><a href="./index.html">← Повернутись назад</a>
</body>
</html>
