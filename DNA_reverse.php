<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<?php
$gene = $_POST["gene"];
$sequence = strtoupper($_POST["sequence"]);
$complement = strtr($sequence, "ATCG", "TAGC");
echo "Input: $sequence<br>";
echo "Reverse: $complement";
?>
</body>
</html>