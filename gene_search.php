<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$locus = $_POST['id'];
// Connect to database
$db_connect = mysqli_connect('localhost', 'H24121206_mysql', 'H24121206_mysql', 'H24121206');
mysqli_query($db_connect, "SET NAMES utf8");
// 建立 HTML 表格表頭
echo "<table border=1>
<tr>
  <td>Gene ID</td>
  <td>Gene Name</td>
  <td>Chromosome</td>
  <td>Strand</td>
  <td>Start</td>
  <td>End</td>
</tr>";
// 執行查詢
$query = "SELECT * FROM gene_data WHERE gene_id LIKE '" . $locus . "%'";
$result = mysqli_query($db_connect, $query);
// 輸出每筆資料為一列
while ($name_row = mysqli_fetch_row($result)) {
    echo "<tr>";
    echo "<td>$name_row[0]</td>"; // gene_id
    // echo "<td>$name_row[1]</td>"; // transcript_id
    echo "<td>$name_row[2]</td>"; // name
    echo "<td>$name_row[3]</td>"; // chr
    echo "<td>$name_row[6]</td>"; // start
    echo "<td>$name_row[4]</td>"; // end
    echo "<td>$name_row[5]</td>"; // strand
    // echo "<td>$name_row[7]</td>"; // seq
    echo "</tr>";
}
echo "</table>";
?>

