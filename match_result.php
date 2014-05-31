
<?php
require($DOCUMENT_ROOT . "template.php");
echo "hi";
session_start();
//$submit=$_POST['submit'];
//if(isset($submit))
//{
 require_once "/var/www/PEDS/player/dbconnect.php";
 $row=mysql_query("select * from news ");
 echo "<div id='viewnews'>";
 while($news=mysql_fetch_array($row))
 {
	  $blurb=$news['blurb'];
	  $date=$news['post_date'];
	  $id=$news['news_id'];
	  $tag=$news['upcoming_sport_flag'];
	  $event_type=$news['event_type'];         //individual or team
	  //$_SESSION['abc']=$news['news_id'];
	  $event_date=$news['event_date'];
	  $male_female=$news['male_female'];
	  $game_name=$news['game'];
	  $event_id=$news['event_id'];
	  //echo $male_female;
	  if($tag=="game")
		  {
		  echo "<u >".'<a id="news_link" href="shownews.php?id='.$id.'">'.$blurb."</a></u><br>";
		  //echo $blurb."<br>";
		  echo "Posted on:".$date."<br>";
		  echo "<a href='match_record_entry.php?event_type=".$event_type."&&event_date=".$event_date."&&male_female=".$male_female." &&game_name=".$game_name."&&event_id=".$event_id."'>"."Enter match record"."</a><br>";                                 
		  }
	 }
 echo "</div>";

  mysql_close($con);
//}
 require($DOCUMENT_ROOT . "template2.php");
?>

