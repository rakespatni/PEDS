<?php 
	session_start();
	include("dbconnect.php");
	echo"hi";
	$name=$_POST['name'];
	$roll=$_POST['roll'];
	$dob=$_POST['dob'];
	$gender=$_POST['gender'];
	$dept=$_POST['dept'];
	$result=mysql_query("insert into player(name,roll,dob,gender,dept,marks,course_id) values
	                    ('$name','$roll','$dob','$gender','$dept',0,'abc')") or die("insert error:".mysql_error());		 
	//if($result)
	echo "Your data is inserted now ... And you are registered...!";
	echo "Goto <a href='index.php'><u>home page</u></a>";		
?>
