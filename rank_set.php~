<?php require($DOCUMENT_ROOT . "template.php");?>
<html>
 <head>
   <script>
    function hide()
      {
        div1=document.getElementById("event_type");
        div1.style.display='none';
      }
     function show(a)
      { 
       if((a=="tennis")||(a=="table_tennis")||(a=="badminton")||(a=="swimming")||(a=="athletics"))
         {
           div1=document.getElementById("event_type");
           div1.style.display='block';
          }
         else
          {
            div1=document.getElementById("event_type");
            div1.style.display='none';
          }
      }
    
  </script>
 </head>
  <body onload="hide()">
   <form action="#" method="post">
    <div id='rank' >
    <select name="game_name" onchange="show(this.value)"><option value="--">--</option><option value="athletics">
     Athletics</option><option value="badminton">Badminton</option><option value="cricket">Cricket</option><option              
     value="football">Football</option><option value="tennis">Tennis</option></select>

   <select name="male_female"><option value="--">--</option><option value="male">Male</option><option value="female">Female</option>
     </select>
     
    <select name="type" id="event_type"><option value="--">--</option><option value="team">Team</option>
      <option value="Individual">Individual</option></select>
    <input type="submit" name="submit">
    </div>
   </form>
   </body>
   </html>
<?php
session_start();
$submit=$_POST['submit'];
if(isset($submit))
	{
		$game_name=$_POST['game_name'];
		$male_female=$_POST['male_female'];
		$event_type=$_POST['event_type'];
                require_once "/var/www/PEDS/player/dbconnect.php";
                //$post=mysql_query("select * from plays_game");
		echo "<div id='rank_php'>";
                echo "<table border='1'>
                      <tr><th>team name</th><th>Points</th><th>Rank</th></tr>";
                //while($row=mysql_fetch_array($post))
                	if(($game_name=="tennis")||($game_name=="badminton")||($game_name=="swimming")||($game_name=="athletics"))
                            {
                             $reply=mysql_query("select team.name,plays_game.rank,plays_game.total_points, from team,plays_game where team.team_id=plays_game.team_id and plays_game.g_name='$game_name' and team.type='$male_female' and team.indi_or_team='$event_type' order by rank desc") or die(mysql_error());
                             }
 			else
 			      $reply=mysql_query("select team.name,plays_game.rank,plays_game.total_points from team,plays_game where team.team_id=plays_game.team_id and plays_game.g_name='$game_name' and team.type='$male_female'order by total_points desc") or die(mysql_error());
                             
                              $i=1;
                             while($tuple=mysql_fetch_array($reply))
                               {
				 
                                 if($tuple['rank']!="-")
				{
                                 $tuple['rank']=$i;
                                 echo "<tr><td>";
                                 echo $tuple['name']."</td><td>";
				 echo $tuple['total_points']."</td>";
                                 echo "<td>".$tuple['rank']."</td></tr>";
                                 $i++;
				}
                               }
                         
                       echo "</table>";
		  echo "</div>";
         }
mysql_close($con);
?>
<?php require($DOCUMENT_ROOT . "template2.php");
?>
                 
