
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
  $event_type=$news['event_type'];
  //$_SESSION['abc']=$news['news_id'];
  $event_date=$news['event_date'];
  echo "<u >".'<a id="news_link" href="shownews.php?id='.$id.'">'.$blurb."</a></u><br>";
  echo $blurb."<br>";
  echo "Posted on:".$date."<br>";
  if($tag=="game")
   
  echo "<a href='registration/player_regis.php?event_type=".$event_type."&&event_date=".$event_date." '>"."register"."</a><br>";
 }
 echo "</div>";

  mysql_close($con);
//}
 require($DOCUMENT_ROOT . "template2.php");
?>

