<?php
$con = mysql_connect("localhost","root","jaguar");
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}
else
{ 
       // echo "connected";
	mysql_selectdb("PEDS");
}
?>
