<?php                       //only for fresh registrants
session_start();
        $event_id=$_SESSION['event_id'];
if(($_SESSION['event_type']=="individual")||($_SESSION['event_type']=="Both"&&$_POST['sel']=="individual"))
 	$flag=0;  	//flag=0 if event_type="individual"
else 
 	$flag=1;        //flag=1 if event_type="team"

	$p1=$_POST['name1'];
	$p2=$_POST['name2']; 
	$p3=$_POST['name3'];
	$p4=$_POST['name4'];
	$p5=$_POST['name5'];
	$p6=$_POST['name6'];
	$p7=$_POST['name7'];
	$p8=$_POST['name8'];
	$p9=$_POST['name9'];
	$p10=$_POST['name10'];
	$p11=$_POST['name11'];
	$p12=$_POST['name12'];
	$p13=$_POST['name13'];
	$p14=$_POST['name14'];
	$p15=$_POST['name15'];
         
         //$arr=array($p1,$p2,$p3,$p4,$p5,$p6,$p7,$p8,$p9,$p10,$p11,$p12,$p13,$p14,$p15);
        // for($i=0;$i<15;$i++)
       //  echo $arr[$i];
	$p16=$_POST['name16'];   //this is the roll number of the individual player
        $capt_roll=$_POST['capt_roll'];
        $capt_contact=$_POST['capt_contact'];
        //$male_female=$_SESSION['male_female'];
        $team_name=$_POST['team_name'];
        $game_name=$_SESSION['game_name'];
        $type=$_POST['male_female'];
        $indi_or_team=$_SESSION['event_type'];
        
        //if($_SESSION['event_type']=="Both")
          if($_SESSION['male_female']=="Both")
            $type_of_team=$_POST['male_female1'];
          else
            $type_of_team=$_SESSION['male_female'];
         
          if($_SESSION['event_type']=="Both")
	           {
			     if($_POST['sel']=="individual")
			      	 $capt_contact=$_POST['capt_contact_i1'];        //actually not needed
			     else 
			    	{
				     $capt_roll=$_POST['capt_roll_t1'];
				     $capt_contact=$_POST['capt_contact_t1'];
			    	}
			     $indi_or_team=$_POST['sel'];
		   }
        else if($_SESSION['event_type']=="team")
		   {
		    	     $capt_roll=$_POST['capt_roll_t2'];
		    	     $capt_contact=$_POST['capt_contact_t2'];
		    
		   }
         else
                   {
            
            		     $capt_contact=$_POST['capt_contact_i2'];
           	   }
$team_id=1;
echo $indi_or_team;
echo $flag;
$check=0;
echo $_POST['name1'];
echo $_POST['name16'];
require_once "db.php";








        $post=mysql_query("select * from team");    //getting the last team_id in database
        if($post)
        {
         while($row=mysql_fetch_array($post))
         {
          $team_id=$row['team_id'];
         }
          $team_id++;
         }
      
         
if($flag==0)      //can be removed
              {
 	$post=mysql_query("insert into team (team_id,indi_or_team,team_captain_roll,team_captain_contact,p1) 
                         values('$team_id','$indi_or_team','$p16','$capt_contact','$p16')") or die ("Insert error:".mysql_error());
              }

else
	$post=mysql_query("insert into team (team_id,name,indi_or_team,team_captain_roll,team_captain_contact,g_name,type,rank,
                  	p1,p2,p3,p4,p5,p6,p7,p8,p9,p10,p11,p12,p13,p14,p15) 
                  	values('$team_id','$team_name','$indi_or_team','$capt_roll','$capt_contact','$game_name','$type_of_team','1',
                       '$p1','$p2','$p3','$p4','$p5','$p6','$p7','$p8','$p9','$p10','$p11',
                  	'$p12','$p13','$p14','$p15' )") or die(mysql_error());
		//$post=mysql_query("insert into team(p1) values('$_POST['name1']')");
      
$rank=1;
$game_name=$_SESSION['game_name'];

/*if($flag==1)
      $p16=$team_id;*/

//entering values into indi_plays_game table
$post=mysql_query("select * from detailed_event_record ");
	while($row=mysql_fetch_array($post))
	{ 
	  if(($row['team_id']==$team_id)&&($row['g_name']==$game_name))
            $check++;
	   
	}
        if($check==0)
         mysql_query("insert into detailed_event_record values('$team_id','$game_name',100.0,'$event_id') ") or die(mysql_error());


//posting in plays_game where overall points and rank is stored
$post=mysql_query("insert into plays_game (team_id,g_name,total_points,rank) values('$team_id','$game_name',100.0,100) ") or die(mysql_error());
/*for($i=0;$i<15;$i++)
 {$val=$arr[$i];
  $t="hhh";
  mysql_query("insert into plays_game (roll,g_name,position,team_name,player_rank) values('$val','$game_name',
              '$t','$team_name',1) ") or die(mysql_error());
 //echo $val."<br>"; 
}
echo $_SESSION['game_name']."<br>".$t."<br>".$team_name."<br>".$rank;
*/


mysql_close($con);
?>
