<?php
session_start();
$_SESSION['event_type']=$event_type=$_GET['event_type'];
$_SESSION['event_id'];
$event_date=$_GET['event_date'];
$today=date("Y-m-d");
$_SESSION['male_female']=$_GET['male_female'];
$_SESSION['game_name']=$_GET['game_name'];
if($today>$event_date)
echo "Registration is over";
else 
{
echo "welcome to registration";
echo "<html>";
echo "<script>
alert('hi');

function hide(){
	div1=document.getElementById('team_regis');
	div1.style.display='none';
	div1=document.getElementById('indi_regis');
	div1.style.display='none';


	div1=document.getElementById('player_name_field1');
	div1.style.display='none';
	div1=document.getElementById('player_name_field2');
	div1.style.display='none';
	div1=document.getElementById('player_name_field3');
	div1.style.display='none';
	div1=document.getElementById('player_name_field4');
	div1.style.display='none';
	div1=document.getElementById('player_name_field5');
	div1.style.display='none';
	div1=document.getElementById('player_name_field6');
	div1.style.display='none';
	div1=document.getElementById('player_name_field7');
	div1.style.display='none';
	div1=document.getElementById('player_name_field8');
	div1.style.display='none';
	div1=document.getElementById('player_name_field9');
	div1.style.display='none';
	div1=document.getElementById('player_name_field10');
	div1.style.display='none';
	div1=document.getElementById('player_name_field11');
	div1.style.display='none';
	div1=document.getElementById('player_name_field12');
	div1.style.display='none';
	div1=document.getElementById('player_name_field13');
	div1.style.display='none';
	div1=document.getElementById('player_name_field14');
	div1.style.display='none';
	div1=document.getElementById('player_name_field15');
	div1.style.display='none';
	div1=document.getElementById('player_name_field16');
	div1.style.display='none';

        div1=document.getElementById('add1');
	div1.style.display='none';

        div1=document.getElementById('add2');
	div1.style.display='none';

}
function func(a){
     if(a=='individual')
	{
        div1=document.getElementById('indi_regis');
	div1.style.display='block';
	div1=document.getElementById('player_name_field16');
	div1.style.display='block';


	div1=document.getElementById('team_regis');
	div1.style.display='none';
       }
     else if(a=='team')
       {
        div1=document.getElementById('team_regis');
	div1.style.display='block';
 
        div1=document.getElementById('player_name_field1');
	div1.style.display='block';
	div1=document.getElementById('player_name_field2');
	div1.style.display='block';
	div1=document.getElementById('player_name_field3');
	div1.style.display='block';
	div1=document.getElementById('player_name_field4');
	div1.style.display='block';
	div1=document.getElementById('player_name_field5');
	div1.style.display='block';
	div1=document.getElementById('player_name_field6');
	div1.style.display='block';
	div1=document.getElementById('player_name_field7');
	div1.style.display='block';
	div1=document.getElementById('player_name_field8');
	div1.style.display='block';
	div1=document.getElementById('player_name_field9');
	div1.style.display='block';
	div1=document.getElementById('player_name_field10');
	div1.style.display='block';
	div1=document.getElementById('player_name_field11');
	div1.style.display='block';
	div1=document.getElementById('player_name_field12');
	div1.style.display='block';
	div1=document.getElementById('player_name_field13');
	div1.style.display='block';
	div1=document.getElementById('player_name_field14');
	div1.style.display='block';
	div1=document.getElementById('player_name_field15');
	div1.style.display='block';
                 
        div1=document.getElementById('indi_regis');
	div1.style.display='none';
        }

     else{
         hide();
       }
}";

echo "</script>"; 
echo "<body onload='hide()'>";
   echo "<form method='post' action='post_regis.php'>";
         if($event_type=="Both")
          {
           echo "<select name='sel' onchange='func(this.value)'><option value='--' >"."--"."</option><option value='individual' >"."Individual event"."</option><option value='team' >Team</option></select>";
           echo "<div id='team_regis'>
             ADD TEAM NAME
             <p><input type='text' name='team_name' id='team_name_field'></p>
             ADD PLAYERS ROLL NUMBERS
             <p>
             <input type='text' name='name1' id='player_name_field1'>
             <input type='text' name='name2' id='player_name_field2'>
             <input type='text' name='name3' id='player_name_field3'>
             <input type='text' name='name4' id='player_name_field4'>
             <input type='text' name='name5' id='player_name_field5'>
             <input type='text' name='name6' id='player_name_field6'>
             <input type='text' name='name7' id='player_name_field7'>
             <input type='text' name='name8' id='player_name_field8'>
             <input type='text' name='name9' id='player_name_field9'>
             <input type='text' name='name10' id='player_name_field10'>
             <input type='text' name='name11' id='player_name_field11'>
             <input type='text' name='name12' id='player_name_field12'>
             <input type='text' name='name13' id='player_name_field13'>
             <input type='text' name='name14' id='player_name_field14'>
             <input type='text' name='name15' id='player_name_field15'></p><br>
             CAPTAIN'S ROLL NO
             &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type='text' name='capt_roll_t1' id='cap_name_field'><br>
             CAPTAIN CONTACT NO
             <input type='text' name='capt_contact_t1' id='cap_contact_field'><br>
             </div>";
            echo "<div id='indi_regis'>
             <p id='add2'>PLAYER NAME
             
             <input type='text' name='name16' id='player_name_field16'></p>
             <p>CONTACT NUMBER<br>
             <input type='text' name='capt_contact_i1'></p><br>
            </div>";
          }
         else if($event_type=="individual")
          {
             echo "<div id='indi2'>
             <p id='add2'>
             ROLL
             <input type='text' name='name16' ></p>
             <p>CONTACT    
             <input type='text' name='capt_contact_i2'></p></div><br>";
          }
         else 
          {
             echo "
            <div id='team2'>
             <p>TEAM  NAME<br>
             <input type='text' name='team_name'></p>
             <p>
             ADD PLAYERS ROLL NUMBERS<br>
             <input type='text' name='name1' ><br>
             <input type='text' name='name2' ><br>
             <input type='text' name='name3' ><br>
             <input type='text' name='name4' ><br>
             <input type='text' name='name5' ><br>
             <input type='text' name='name6' ><br>
             <input type='text' name='name7' ><br>
             <input type='text' name='name8' ><br>
             <input type='text' name='name9' ><br>
             <input type='text' name='name10' ><br>
             <input type='text' name='name11' ><br>
             <input type='text' name='name12' ><br>
             <input type='text' name='name13' ><br>
             <input type='text' name='name14' ><br>
             <input type='text' name='name15' ><br></p>
            </div> 
             CAPTAIN'S ROLL NO
             &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type='text' name='capt_roll_t2' id='cap_name_field'><br>
             CAPTAIN CONTACT NO
             <input type='text' name='capt_contact_t2' id='cap_contact_field'><br>";
        }
       if($_SESSION['male_female']=="Both")
        {
	echo "<br><select name='male_female1'><option value='male'>Male</option><option value='female'>Female</option></select><br><br>";
	
        }
        
                
   echo "<input type='submit' value='register'>";
echo "</form>";
echo "</body>";
echo "</html>";
}
?>
