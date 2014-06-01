<html>
<body>
		
<form action="<?php print $PHP_SELF?>" enctype="multipart/form-data" method="post">
Enter name of file:<br /> <input type="text" name="filename" value="" /><br />
 Upload file here:<br /> <input type="file" name="oldfile" value="" /><br />
Description about upload:<br><textarea name="desc" height="200px" width="400px">
 </textarea>
			   
<p><input type="submit" name="submit" value="Submit Notes" /></p>
</form>
			
<?php
session_start();
require "dbconnect.php";
define ("FILEREPOSITORY","./");

if (isset($_FILES['oldfile'])) {

	if (is_uploaded_file($_FILES['oldfile']['tmp_name'])) {

		if ($_FILES['oldfile']['type'] != "application/pdf") {
			echo "<p>Homework must be uploaded in PDF format.</p>";
		} else {
				if (! is_dir(FILEREPOSITORY."testupload")) {
				mkdir(FILEREPOSITORY."testupload");
			}
			$name = $_POST['filename'];
			$_FILES['oldfile']['name']=$name.".pdf";
			$result = move_uploaded_file($_FILES['oldfile']['tmp_name'], FILEREPOSITORY."testupload"."/".$_FILES['oldfile']['name']);

			if ($result == 1) 
			{
				echo "<p>File successfully uploaded.</p>";
				$_SESSION['filename']=$_FILES['oldfile']['name'];
				include 'upload_test.php';
					
				mysql_query("insert into notification(type,description,filename) values ('result','".$_POST['desc']."','".$_POST['filename']."')") or die("Insert error:".mysql_error()); 
						     
			 }
			else 
				echo "<p>There was a problem uploading the file.</p>";
			}
 		}
	}

	 mysql_close();
?>
</body>
</html>
