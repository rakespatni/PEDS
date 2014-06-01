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
	#addevent
	{
		width:500px;
		float:left;
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
		 	
		 	<?php 
		 		include("session.php");
		 		session_start();
		 		echo "Welcome <b><u>".$_SESSION['type']."</u></b> to your home page...!";
		 		$_SESSION['log']='in'; 
		 		
		 	?> 
		 	<table .class="adminactions" border=1>
			<tr><tr>
		 	<div id="upload">
		 		<h3>ADD NEWS TO PAGE</h3>
		 		<?php include "addnews.php"?>
		 	</div></td></tr>
		 	</table>
		 	<table .class="adminactions" border=1><tr><td>
		 	<div id="upload">
		 		<h3>ADD RESULTS OF PHYSICAL EDUCATION COURSE</h3>
		 		<?php include "addCourseResult.php";
		 		echo "<h4 align='center'>  Click here to <a href='logout.php'><u>LogOut</u></a> </h4>";
		 		//session_destory();
		 		?>
		 	</div></td></tr>
		 	</table>
		 	
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
