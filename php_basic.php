<html>
<head>
<meta charset="UTF-8">
<title>php_practice</title>
</head>
<body>
        <?php
        echo "<span style = 'color:#01B468;'>Pracrice1<br></span>";
        echo "\"To be always relevant,<br>";
        echo "<span style='font-size: 36px; color:blue;'>you have to say things which are eternal\"</span>";
        echo "<br>";
        ?>

        <?php
        echo "<span style = 'color:#01B468;'>Pracrice2<br></span>";
        echo "Good afternoon!<br>";
        echo "The car cost him around \$500,000!";
        echo "<br>";
        ?>

        <?php
        echo "<span style = 'color:#01B468;'>Pracrice3<br></span>";
        $a="apple";
        echo 'I like $a.';
        echo "<br>";
        ?>

        <?php
        echo "<span style = 'color:#01B468;'>Pracrice4<br></span>";
        $name="Mary";
        $age="25";
        $address="台南市大學路1號";
        $number="06-2757575";
        echo "<table border='1' cellpadding='8' cellspacing='0'>";
        echo "<tr>
              <th>姓名</th>
              <th>年齡</th>
              <th>地址</th>
              <th>電話</th>
              </tr>";
        echo "<tr>
              <td>$name</td>
              <td>$age</td>
              <td>$address</td>
              <td>$number</td>
              </tr>";
        echo "</table>";
        echo "<br>";
        echo "<table border='1' cellpadding='8' cellspacing='0'>";
        echo "<tr>
              <th>a</th>
              <th>b</th>";
        echo "<tr>
              <td colspan='2'>
              </tr>                   
        echo "</table>";
        ?>

        <?php
        echo "<span style = 'color:#01B468;'>Pracrice5<br></span>";
        $a=rand(1,100);
        $b=rand(1,100);
        echo "\$a=$a<br>";
        echo "\$b=$b<br>";
        echo "\$a+\$b=$a+$b =".($a + $b)."<br>";
        echo "\$a-\$b=$a-$b =".($a - $b)."<br>";
        echo "\$a*\$b=$a*$b =".($a * $b)."<br>";
        echo "\$a/\$b=$a/$b =".($a / $b)."<br>";
        echo "\$a%\$b=$a%$b =".($a % $b)."<br>";
        echo "<br>";
        ?>
</body>
</html>