<html>

  <head>
   <script> 
     function hide()
	{
		 abc=document.getElementById("event");
		 abc.style.display='none';
		 
	}
	function func(a)
	{
             if(a=="game")
              {
	         abc=document.getElementById("event");
                 abc.style.display='block';
	      }
             else{
                 abc=document.getElementById("event");
                 abc.style.display='none';
              }
	}
    </script>     
  </head>
	<body onload="hide()"> 
           <div id="news_upload">
		<form action="newsenter.php" method="post">
			
			<p>Blurb:<textarea rows="2" columns="10" name="blurb"></textarea></p><br><br>
			<p>Topic:<select name="topic"><option value="administration">Administration</option><option value="athletics">Athletics</option><option value="badminton">Badminton</option><option value="cricket">Cricket</option><option value="football">Football</option><option value="hockey">Hockey</option><option value="tabletennis">Table Tennis</option><option value="tennis">Tennis</option></select></p><br>
			<p>News:<br><textarea rows="10" columns="20" name="news"></textarea></p><br>
                       <p> Tag:<select name="sel"  onchange="func(this.value)"><option value="0">choose tag</option><option value="game" >Upcoming sport meet</option><option value="general_info" >General info</option></select><br>
                      <div id="event">
                        <p>Enter the event name:<input type="text" name="event_name"></p><br>
                        <p>Enter the event date:<input type="date" name="event_date"></p><br>
                        <p><select name="event_type" ><option value="team" >Team event</option><option value="individual" >Individual</option><option type="both" >Both</option></select></p><br>
                        <p><select name="male_female"><option value="male">Male</option><option value="female">Female</option><option value="Both">Both</option></select>
                      </div>
			<input type="submit" value="Publish" name="submit">
		</form>
            </div>

	</body>

</html>
