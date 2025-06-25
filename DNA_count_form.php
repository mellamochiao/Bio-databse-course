<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<?php
$gene = $_POST["gene"];
$seq = strtoupper($_POST["sequence"]);
$counts = $_POST["count"];

echo "<b>$gene</b><br>";
echo "$seq<br><br>";

if (in_array("mono", $counts)) {
    echo "Monomer<br>";
    $mono = array("A" => 0, "T" => 0, "C" => 0, "G" => 0);
    for ($i = 0; $i < strlen($seq); $i++) {
        $base = $seq[$i];
        if (isset($mono[$base])) $mono[$base]++;
    }
    foreach ($mono as $k => $v) {
        echo "The number of $k = $v<br>";
    }
    echo "<br>";
}

// Dimer
if (in_array("di", $counts)) {
    echo "Dimer<br>";
    $bases = ['A','T','C','G'];
    $di = [];
    foreach ($bases as $b1) {
        foreach ($bases as $b2) {
            $di[$b1.$b2] = 0;
        }
    }

    for ($i = 0; $i < strlen($seq) - 1; $i++) {
        $pair = substr($seq, $i, 2);
        if (isset($di[$pair])) $di[$pair]++;
    }

    foreach ($di as $k => $v) {
        echo "The number of $k = $v<br>";
    }
}
echo "</pre>";
?>
</body>
</html>