<?php
session_start();
$game=$_POST['submit'];

require_once('dbconnect.php');

$con1=mysql_query("select * from game where g_name='$game'");
echo "<table><tr>";
echo "<th>name</th><th>position</th><th>rank</th></tr>";

while($list=mysql_fetch_array($con))
{
 $con2=mysql_query("select * from player where g_name='$game' ");
 
 echo "<tr><td>"
 $name=$list['name'];
 echo $name."</td><td>"
 $postion=$list['position'];
 echo $position."</td><td>"
 $rank=$list['rank'];
 echo $rank."</td></tr>";
}
echo "<table>";
mysql_close($con);
?>

