<html>
	<body>
		<form action="#" method="post">
			
			Blurb:<textarea rows="2" columns="10" name="blurb"></textarea>
			Topic:<select name="topic"><option value="administration">Administration</option><option value="athletics">Athletics</option><option value="badminton">Badminton</option><option value="cricket">Cricket</option><option value="football">Football</option><option value="hockey">Hockey</option><option value="tabletennis">Table Tennis</option><option value="tennis">Tennis</option></select>
			News:<textarea rows="10" columns="20" name="news"></textarea>
			<input type="submit" value="Publish" name="submit">
		</form>
	</body>
</html>

<?php

	session_start();
        $submit=$_POST['submit'];
	if(isset($submit))
	{
	// $date=$_POST['date'];    
	 $blurb=$_POST['blurb'];
	 $topic=$_POST['topic'];
	 $news=$_POST['news'];
          $date=date("Y-m-d");
    echo $date;  
         
         echo "hiji";
	 
	 require_once "/var/www/PEDS/player/dbconnect.php";
	 $id=mysql_query("select * from news ");
	 
         if($id)
	   {
	    while($row=mysql_fetch_array($id))
	    $id_val=$row['news_id'];
	   }
	 else
	  $id_val=0;
         $id_val++;
         mysql_query("insert into news(news_id,post_date,blurb,game,news) values('$id_val','$date','$blurb','$topic','$news') ") or die(mysql_error());
         	 
         echo "ur news has been posted";
         echo "<a href='news.php'>"."publish more"."</a>";
         }
         mysql_close($con);
?>
