<?php
session_start();
$news_id=$_GET['id'];
require_once "dbconnect.php";

$news=mysql_query("select news from news where news_id='$news_id' ") or die ("select error : ".mysql_error());

while($row=mysql_fetch_array($news))
{
	echo $row['news'];
}
mysql_close($con);

?>
