<?php

echo "kkk";
session_start();
$news_id=$_GET['id'];
echo "wat";
require_once "dbconnect.php";
echo "here";

$news=mysql_query("select news from news where news_id='$news_id' ") or die (mysql_error());
echo "hi";
while($row=mysql_fetch_array($news))
{
 echo $row['news'];
}
mysql_close($con);

?>
