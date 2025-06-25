<html>
<head>
<meta charset="UTF-8">
<title>php_form_practice</title>
</head>
<body>
<?php
$a = $_POST["a"];
$b = $_POST["b"];
$ops = $_POST["op"];

if (in_array("add", $ops)) echo "A + B = " . ($a + $b) . "<br>";
if (in_array("sub", $ops)) echo "A - B = " . ($a - $b) . "<br>";
if (in_array("mul", $ops)) echo "A x B = " . ($a * $b) . "<br>";
if (in_array("div", $ops)) echo "A / B = " . ($a / $b) . "<br>";
?>
</body>
</html>
