<?php
//connect to database
$db_connect=mysqli_connect('localhost', 'H24121206_mysql', 'H24121206_mysql', 'H24121206');
mysqli_query($db_connect, "set names utf8");

$name = $_POST["name"];
$id = $_POST['id'];
$phone = $_POST['phone'];
if ($phone == "") $phone='NULL';

//insert the input data to database
$input = "INSERT INTO new_table VALUES ('$id', '$name', $phone)";
mysqli_query($db_connect, $input);
echo $input."<br>";

// query data from the database
$query = "SELECT * FROM new_table";
$result = mysqli_query($db_connect, $query);
while ($row = mysqli_fetch_row($result))
{
    echo("$row[0], $row[1], $row[2]<br>");
}

//close the database connect
mysqli_close($db_connect);
?>