
<?php
session_start();
//$submit=$_POST['submit'];
//if(isset($submit))
//{
 require_once "dbconnect.php";
 $row=mysql_query("select * from news ");
 while($news=mysql_fetch_array($row))
 {
  $blurb=$news['blurb'];
  $date=$news['post_date'];
  $id=$news['news_id'];
  //$_SESSION['abc']=$news['news_id'];
  echo '<a href="shownews.php?id='.$id.'">'.$blurb."</a><br>";
  //echo $news['news']."<br>";
  echo "Posted on:".$date."<br>";
 }
  mysql_close($con);
//}
?>
