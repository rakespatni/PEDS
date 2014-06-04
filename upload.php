<html>
<head>
<style>
#form{
margin-left:50px;
}
</style>
</head>
<body>
		
<form action="<?php print $PHP_SELF?>" enctype="multipart/form-data" method="post">
<div id="form">
Enter name of file*:<br /> <input type="text" name="filename" value="" /><br />

Upload file here:<br /> <input type="file" name="oldfile" value="" /><br />
  
<p><input type="submit" name="submit" value="Upload" /></p>
<br><br>
*Enter the name that best reflects the content of the file <br>e.g for cricket team of 2014 enter name as cricket_team'14<hr>
</div>
</form>
<?php
session_start();
//require "dbconnect.php";
define ("FILEREPOSITORY","./");

if (isset($_FILES['oldfile'])) {

	if (is_uploaded_file($_FILES['oldfile']['tmp_name'])) {

		if ($_FILES['oldfile']['type'] != "application/pdf") {
			echo "<p>Homework must be uploaded in PDF format.</p>";
		} else {
				if (! is_dir(FILEREPOSITORY."uploads")) {
				mkdir(FILEREPOSITORY."uploads");
			}
			$name = $_POST['filename'];
			echo $_FILES['oldfile']['tmp_name'];
			$_FILES['oldfile']['name']=$name.".pdf";
			$result = move_uploaded_file($_FILES['oldfile']['tmp_name'], FILEREPOSITORY."uploads"."/".$_FILES['oldfile']['name']);
			echo "here";

			if ($result == 1) 
			{
				echo "<p>File successfully uploaded.</p>";
				$_SESSION['filename']=$_FILES['oldfile']['name'];
				include 'upload_test.php';
					
				//mysql_query("insert into notification(type,description,filename) values ('result','".$_POST['desc']."','".$_POST['filename']."')") or die("Insert error:".mysql_error()); 
						     
			 }
			else 
				echo "<p>There was a problem uploading the file.</p>";
			}
 		}
	}

	 //mysql_close();
?>
</body>
</html>
