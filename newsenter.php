<?php require($DOCUMENT_ROOT . "template.php"); ?>
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
         $upcoming_sport_flag=$_POST['sel'];
         $event_name=$_POST['event_name'];
         $event_date=$_POST['event_date'];
   // echo $date;  
         
         $event_type=$_POST['event_type'];
	 
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
         mysql_query("insert into news(news_id,post_date,blurb,game,news,upcoming_sport_flag,event_name,event_date,event_type) values('$id_val','$date','$blurb','$topic','$news','$upcoming_sport_flag','$event_name','$event_date','$event_type') ") or die(mysql_error());
        echo "<div id='ack'>"; 	 
         echo "<h>"."ur news has been posted successfully"."</h><br>";
         echo "<a href='news.php'>"."publish more"."</a>";
        echo "</div>";
         }
         mysql_close($con);
?>
<?php require($DOCUMENT_ROOT . "template2.php"); ?>
