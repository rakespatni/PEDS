<?php
session_start();
require_once "/var/www/PEDS/player/dbconnect.php";
$game_name=$_SESSION['game_name'];
$match_id=$_POST['match_id'];
$date=$_POST['match_date'];
$team1_id=$_POST['team1'];
$team1_points=$_POST['team1_points'];

$team2_id=$_POST['team2'];
$team2_points=$_POST['team2_points'];

$team3_id=$_POST['team3'];
$team3_points=$_POST['team3_points'];

$team4_id=$_POST['team4'];
$team4_points=$_POST['team4_points'];

$team5_id=$_POST['team5'];
$team5_points=$_POST['team5_points'];

$team6_id=$_POST['team6'];
$team6_points=$_POST['team6_points'];

$a=array($team1_id,$team2_id,$team3_id,$team4_id,$team5_id,$team6_id);
$b=array($team1_points,$team2_points,$team3_points,$team4_points,$team5_points,$team6_points);

for($i=0;$i<6;$i++)
	{
 	 $c[$i]=$b[$i]-5.0;
 	}

$winner=$_POST['winner'];
$mom=$_POST['MOM'];

$match_type=$_POST['match_type'];

$MOT=$_POST['MOT'];
$tournament_id=$_SESSION['event_id'];
echo "TTTTTTTTTTTTTT".$tournament_id;

$game_name=$_SESSION['game_name'];


$g_type=mysql_query("select * from team where team_id='$team1_id' ");
	while($row=mysql_fetch_array($g_type))
  		$game_type=$row['indi_or_team'];

echo "ggggggggggg".$game_type;
$post=mysql_query("insert into all_match_record values('$tournament_id','$match_id','$date','$team1_id','$team2_id',
                   '$team3_id','$team4_id','$team5_id','$team6_id','$team1_points','$team2_points',
                   '$team3_points','$team4_points','$team5_points','$team6_points','$winner','$mom','$game_name','$game_type',
                   '$match_type','$MOT')") or die(mysql_error());

 

for($i=0;$i<6;$i++)
{
//entering into detailed-event _record i,e event wise
	$post=mysql_query("select * from detailed_event_record where team_id='$a[$i]' and event_id='$tournament_id' ") 
                         or die(mysql_error());
	    if($post)
		  {
		     while($row=mysql_fetch_array($post))
			 {
			  $event_points=$row['points_in_this_event'];
			  $b[$i]=$event_points+(0.2*$c[$i]);
			 }
		     mysql_query("update detailed_event_record set points_in_this_event='$b[$i]' where team_id='$a[$i]' 
                                and event_id='$tournament_id' ") or die(mysql_error());
	          }
//updating the plays_game table also
        $post=mysql_query("select * from plays_game where team_id='$a[$i]' and game_name='$game_name' ") or die(mysql_error());
            if($post)
		  {
		      while($row=mysql_query($post))
			{
			  $total_points=$row['total_points'];
			  $total_points=$total_points+($b[$i]*0.2);
			}	
		  }
}


mysql_close($con);
?>



