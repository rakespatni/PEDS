<?php
session_start();
include("dbconnect.php");
echo "hi";
$_SESSION['started']=1;
$user=$_POST['user'];
$pass=$_POST['pass'];
$type=$_POST['usertype'];
//$flag=0;
$_SESSION['username']=$_POST['user'];
$_SESSION['type']=$type;
if(($type="student" || $type="coach") || ($type="faculty" || $type="admin"))
{
	/*$result=mysql_query("select * from login where username='".$user."'") or die("Select query error : ".mysql_error());
	$row=mysql_fetch_array($result);
	echo "heree";
	if($row!=NULL && $pass==$row['password'] )
	{
		echo "hi there!";
		echo "login Success";
		header('location:home.php')
			
		//$flag=1;
		break;
		//die( "you are successfully logged in");
	
	}
	else
	{
		header('Location:index.php?q=invalid');//it means either userid does not exists or password is incorrect
	}
	 
	
}*/	$result= mysql_query("select * from login where username='$user'") or die("<h3 align='right'> ".mysql_error()."</h3>");
	$row=mysql_fetch_array($result);
	if(($row != NULL) && ($row['password']==$pass)) 
		{
			if($row['type']=="admin")
			{
				$_SESSION['log']='in';
				header('location:adminhome.php');
			}
			else if($row['type']=="student")
			{
				$_SESSION['log']='in';
				header('location:studenthome.php');
			}
			else if($row['type']=="faculty")
			{
				$_SESSION['log']='in';
				header('location:facultyhome.php');
			}
			else if($row['type']=="coach")
			{
				$_SESSION['log']='in';
				header('location:coachhome.php');
			}
				
		}
		else
		{
			header('Location:index.php?q=invalid');//it means either userid does not exists or password is incorrect
		}
}
?>
