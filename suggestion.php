<!---<html>
<body>
	<form method="post" action="#">
         Choose category:<select name="type"><option value="administration">Administration</option><option value="athletics"></option></select>--->
      
<?php require($DOCUMENT_ROOT . "include.php"); ?>
<!DOCTYPE html>

<html>
<head>
<script>
function hide()
{
 abc=document.getElementById("abc");
 abc.style.display='none';
 abc=document.getElementById("xyz");
 abc.style.display='none';
}
function myFunction(a)
{
//alert("You have selected some text!");

if(a=="administration"){
abc=document.getElementById("xyz");
abc.style.display='none';

abc=document.getElementById("abc");
abc.style.display='block';
}
if(a=="athletics")
{
abc=document.getElementById("abc");
abc.style.display='none';

abc=document.getElementById("xyz");
abc.style.display='block';
}
}
</script>
</head>
<body onload="hide()">
<form action="www.google.co.in" method="post" id="menuForm" name="menuForm">
<!--Some text: <input type="text" value="Hello world!" onselect="myFunction()">-->
Choose category:<select  name="sel"  onclick"><option value="0" >Choose a color</option><option  value="administration" onclick="myFunction('administration')">Administration</option><option value="athletics" onclick="myFunction('athletics')">Athletics</option></select>
<a href="google.co.in" id="abc">gud</a>
<a href="google.co.in" id="xyz">bad</a>
<input type="submit" name="submit">
</form>
</body>
</html>

           
