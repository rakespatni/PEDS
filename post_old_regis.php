<?php  //entry of team_id and event_id into detailed_event_record for an existing team
session_start();
require_once "/var/www/PEDS/player/dbconnect.php";

$team_captain_contact=$_GET['team_captain_contact'];
$team_id=$_GET['team_id'];
$event_id=$_SESSION['event_id'];
$game_name=$_SESSION['game_name'];

mysql_query("insert into detailed_event_record values('$team_id','$game_name',100.0,'$event_id') ") or die(mysql_error());

mysql_close($con);
?>
