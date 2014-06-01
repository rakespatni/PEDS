<?php
include('dbconnectphp');
session_start();

if( isset($_SESSION['log']) && $_SESSION['log']!='in')
{
	echo "You r not allowed";
	header("Location:index.php");
}
?>
