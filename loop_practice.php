<html>
<head>
<meta charset="UTF-8">
<title>php_loop_practice</title>
</head>
<body>
        <?php
        echo "<span style = 'color:#01B468;'>Pracrice1<br></span>";
        $score = 85;
        if($score == 100){echo "A++";}
        elseif($score >= 90){echo "A";}
        elseif($score >= 80){echo "B";}
        elseif($score >= 70){echo "C";}
        elseif($score >= 60){echo "D";}
        elseif($score < 60){echo "Too bad!";}
        echo"<br>";
        ?>

        <?php
        echo "<span style = 'color:#01B468;'>Practice2<br></span>";
        $day = date("D");
                switch($day){
                        case "Mon":
                                echo "A";
                                break;
                        case "Tue":
                                echo "B";
                                break;
                        case "Wed":
                                echo "C";
                                break;
                        case "Thu":
                                echo "D";
                                break;
                        case "Fri":
                                echo "E";
                                break;
                        default:
                                echo "Weekend";
                                break;}
        echo"<br>";
        ?>

        <?php
        echo "<span style = 'color:#01B468;'>Pracrice3<br></span>";
        $sum = 0;
        for ($i = 2; $i <= 1000; $i += 2) {
        $sum += $i;
        }
        echo "The sum of even from 2 to 1000 = $sum";
        echo"<br>";
        ?>
        
        <?php
        echo "<span style = 'color:#01B468;'>Pracrice4<br></span>";
        for ($i = 1; $i <= 9; $i += 1){
                for ($j = 1; $j <= 9; $j += 1) {
                        echo "$i x $j = ".$i*$j.", ";}
                echo "<br>";
        }
        ?>

        <?php
        echo "<span style = 'color:#01B468;'>Homework<br></span>";
        echo "<table border='1' cellspacing='0' cellpadding='5'>";
        for ($i = 1; $i <= 9; $i += 1){
                $bgcolor = ($i % 2 == 0) ? '#FFFFAA' : '#FFC1E0'; // yellow : pink
                echo "<tr style='background-color: $bgcolor;'>";
                 for ($j = 1; $j <= 9; $j += 1) {
                        echo "<td>$i x $j = ".$i*$j."</td>";}
                echo "</tr>";
        }
        echo "</table>";
        ?>

</body>
</html>