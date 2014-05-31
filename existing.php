<?php
session_start();

$_SESSION['event_type']=$event_type=$_GET['event_type'];
$_SESSION['event_id']=$_GET['event_id'];
$_SESSION['event_date']=$event_date=$_GET['event_date'];
$_SESSION['male_female']=$_GET['male_female'];
$_SESSION['game_name']=$game_name=$_GET['game_name'];

echo"<html>
    <head><script>
   	function hide()
           {
	     div1=document.getElementById('phone');
   	     div1.style.display='none';
   	   }
  	function show(a)
  	   {  
     		if(a=='old')
		{
	  		div1=document.getElementById('phone');
		        div1.style.display='block';
		}
     		else
		        hide();
	   }
    </script></head>
 	<body onload='hide()'>
  		<form method='post' action='#'>
    	 		<select name='check' onchange='show(this.value)'><option value='--'>--</option><option value='old'>Registered</option><option value='new'>New</option></select>
  			<input type='text' id='phone'>
  			<input type='submit'name='submit'>
  		</form>
 	</body>
    </html>";
?>    
<?php
session_start();
$submit=$_POST['submit'];

if(isset($submit))
     {
	 echo "hi";
	 $exist=$_POST['check'];
	 if($exist=="old")
	 {
                 $team_captain_contact=$_POST['phone'];
		 require_once "/var/www/PEDS/player/dbconnect.php";
		 $post=mysql_query("select * from team") or die(mysql_error());
         
		 $check=0;
		 while($row=mysql_fetch_array($post))
		  {
			   if(($row['team_captain_contact']==$team_captain_contact)&&($game_name==$row['game_name'])
                               &&(($event_type==$row['indi_or_team'])||($event_type=="Both")))
	                     	{
                                        $team_id=$row['team_id'];
	    				$check++;
				}
                   }
     
		  if($check==0)
		  	 echo "Your number is not registered for this event";
		  else
	   	  	 header("Location:post_old_regis.php?team_id=$team_id");
	    }
	else
      	    {  
       		   header('Location:registration/player_regis.php');
            }
       
       }
mysql_close($con);
?>
