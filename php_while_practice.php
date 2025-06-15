<html>
<head>
<meta charset="UTF-8">
<title>php_while_practice</title>
</head>
<body>
        <?php
        echo "<span style = 'color:#01B468;'>Pracrice1<br></span>";
        echo "<table border=1>";
        echo "<tr>";
        echo "<td>Sun</td><td>Mon</td><td>Tue</td><td>Wed</td><td>Thu</td><td>Fri</td><td>Sat</td>";
        echo "</tr>";

        $x = 0;
        while ($x < 31) {
            $x++;
            if ($x % 7 == 1) {
                echo "<tr>";
                echo "<td bgcolor=#ff0000>$x</td>";
                }
            elseif ($x % 7 == 0) {
                echo "<td bgcolor=#0000ff>$x</td>";
                }
            else {
                echo "<td>$x</td>";
                }
        }
        echo "</tr></table>";
        ?>

        <?php
        echo "<span style = 'color:#01B468;'>Pracrice2<br></span>";
        echo "<table border=1>";
        echo "<tr>";
        echo "<td>Sun</td><td>Mon</td><td>Tue</td><td>Wed</td><td>Thu</td><td>Fri</td><td>Sat</td>";
        echo "</tr>";
        $month_day = 31;  // 一個月幾天
        $day = 4;         // 月初是星期幾 (0=Sun, 1=Mon,...,6=Sat)
        $box = $month_day + $day; // 總共需要幾格
        $num = 0;

        while ($num < $box) {
        $num++;
        $x = $num - $day;

        if ($num % 7 == 1) {
                if ($x <= 0) {
                        echo "<tr><td bgcolor=#ffff00>&nbsp;</td>";
                }
                else {
                        echo "<tr><td bgcolor=#ffff00><font color=#ff0000>$x</font></td>";
                }
        }
        elseif ($x <= 0) {
                echo "<td>&nbsp;</td>";
        }
        elseif ($num % 7 == 0) {
                echo "<td bgcolor=#00ffff>$x</td></tr>";
        }
        else {
        echo "<td>$x</td>";
        }
        }
        echo "</table>";
        ?>

        <?php
        echo "<span style = 'color:#01B468;'>Practice3<br></span>";
        $seq = "ATGCGCGtgcaGTcagtCgtgcaTGcg";

        // 輸出原始序列
        echo "<tt>$seq</tt><br>";

        // 逐一處理每個字元
        for ($i = 0; $i < strlen($seq); $i++) {
        switch ($seq[$i]) {
        case "A": $seq[$i] = "0"; break;
        case "T": $seq[$i] = "1"; break;
        case "C": $seq[$i] = "2"; break;
        case "G": $seq[$i] = "3"; break;
        case "a": $seq[$i] = "0"; break;
        case "t": $seq[$i] = "1"; break;
        case "c": $seq[$i] = "2"; break;
        case "g": $seq[$i] = "3"; break;
        }
        }

        // 輸出轉換後的數字序列
        echo "<tt>$seq</tt>";
        echo"<br>";
        ?>

        <?php
        echo "<span style = 'color:#01B468;'>Homework<br></span>";
        $seq = "ATGCGCGtgcaGTcagtCgtgcaTGcg";

        echo "<pre>";
echo "input: $seq\n";
echo "       ";
for ($i = 0; $i < strlen($seq); $i++) echo "|";
echo "\n";
echo "align: ";
for ($i = 0; $i < strlen($seq); $i++) {
        switch ($seq[$i]) {
                case "A": echo "T"; break;
                case "T": echo "A"; break;
                case "C": echo "G"; break;
                case "G": echo "C"; break;
                case "a": echo "T"; break;
                case "t": echo "A"; break;
                case "c": echo "G"; break;
                case "g": echo "C"; break;
                default: echo $seq[$i];
            }
        }
        echo "</pre>";
        ?>
</body>
</html>
        