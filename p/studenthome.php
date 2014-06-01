<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<title>Physical Education Depatment | NIT Calicut</title>
	<script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
	<script type="text/javascript" src="js/menu.js"></script>
	<script type="text/javascript" src="js/slideshow.js"></script>
	<script type="text/javascript" src="js/cufon-yui.js"></script>
	<script type="text/javascript" src="js/Arial.font.js"></script>
	<script type="text/javascript">
		Cufon.replace('h1,h2,h3,h4,h5,#menu,#copy,.blog-date');
	</script>
	<script type="text/javascript" src="js/fancyzoom.min.js"></script>
	<script type="text/javascript" charset="utf-8">
		$(document).ready(function() {
			$('div.photo a').fancyZoom({directory: 'images/zoom', scaleImg: true, closeOnClick: true});
		});
	</script>
	<style>
	.backspace
	{margin-left:-10px;}
	.content
	{
		width:936px;
		height:600px;
		border:1px solid #a8d1d5;
		margin-left:50px;
	}
	.content table
	{
		padding-left:20px;
	}
	#footer
	{
		position:absolute;	
	}
	
	</style>
	<link rel="stylesheet" href="css/main.css" type="text/css" />
</head>
<body>
		
	<div id="banner">
		<img src="images/banner.jpg"></img>
	</div>
	<div id="bg">
		<div class="content">
		 	
		 	
		 	<!--<?php session_start();
		 		echo "Welcome <b><u>".$_SESSION['type']."</u></b> to your home page...!"; 
		 	?> -->
		 	<form action="submitst.php" method="post">
		 	<h3>Enter your details for registration </h3>
		 	<table align="center">
		 		<tr><td>Roll number</td><td><input type="text" name=roll></td></tr>
		 		<tr><td>Name</td><td><input type="text" name=name></td></tr>
		 		<tr><td>DOB</td><td><input type="date" name=dob></td></tr>
		 		<tr><td>Gender</td><td><input type="radio" name=gender value="male">Male<br>
		 					<input type="radio" name=gender value="female">Female</td></tr>
		 		<tr><td>Department</td><td><input type="text" name=dept ></td></tr>
		 		<tr><td><input type="submit" name="Submit" value="Submit"></td><td><input type="reset" name="reset" value="Reset"></td></tr>
		 	</table> 
		 	</form>	
		</div>
		
			
		<!-- footer -->
		<div id="footer">
			<div id="footerbg">
				<div class="wrap">
				
					<!-- footer links -->
					<p id="footer_menu" float="right">
						Copyright &copy;NITC 2014. All Rights Reserved<br />			
						<span class="backspace"><a href="http://www.nitc.ac.in"><u>NITC main website</u></a></span>
						<a href="credits.php"><u>Credits</u></a>
					</p>
					<!-- /footer links -->
					
					<p id="copy"> Website of <span>Physical Education Department</span></p>
					
					<div class="clear"></div>
				</div>
			</div>
		</div>
		<!-- /footer -->
		
	</div>
</body>
</html>
