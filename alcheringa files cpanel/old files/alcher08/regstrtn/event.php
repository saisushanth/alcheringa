<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>


<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><title>ALCHERINGA '08 "The Annual Cultural Festival Of IIT Guwahati"</title>

<style type="text/css">
<!--
body {
	margin-right: 10px;
}
.style9 {
	font-family: "Excalibur Logotype";
	font-size: 24px;
	color: #FFFFFF;
}
.style10 {
	font-family: Casua;
	font-size: 14px;
	color: #FFFFFF;
	text-decoration: none;
}
.style12 {font-family: Casua; font-size: 14px; color: #FFFFFF; text-decoration: none; }
.style14 {
	font-family: Casua;
	font-size: 14px;
	color: #1eff00;
	text-decoration: none;
	font-weight: bold;
}
.style16 {
	font-size: 16px;
	text-decoration: none;
	color: #1eff00;
	font-weight: bold;
}
.style18 {
	color: #FFFFFF;
	font-size: 12px;
	padding-left: 14px;
}
.style19 {
	font-size: 14px;
	text-decoration: none;
	color: #FFFFFF;
}
.style20 {font-size: 14px}
.style21 {font-size: 16px}
-->
</style>
<link href="../fonts.css" rel="stylesheet" type="text/css" />
</head>
<script language="javascript">
function ve()
{
  	if (document.getElementById("college").value == "") 
    {    
		alert("Please enter college name .\n");
		return false;
	}	
	if (document.getElementById("city").value == "")
    {   
		alert("Please enter city .\n");
		return false;
	}
	if (document.getElementById("username").value == "")
    {   
		alert("Please enter username .\n");
		return false;
	}
	if (document.getElementById("password").value == "")
    {   
		alert("Please enter password.\n");
		return false;
	}
	if (document.getElementById("password2").value == "")
    {   
		alert("Please confirm password.\n");
		return false;
	}
     if ((document.getElementById("password").value) != (document.getElementById("password2").value))
    {   
		alert("Password do not match. Type Again. \n");
		return false;
	}
    
	if (document.getElementById("leader").value == "")
    {   
		alert("Please enter leader name .\n");
		return false;
	}	
	if (document.getElementById("address").value == "")
    {   
		alert("Please enter address .\n");
		return false;
	}	
	if (document.getElementById("email1").value == "" && document.getElementById("email2").value == "")
    {   
		alert("Please enter atleast 1 email .\n");
		return false;
	}
	if(!document.getElementById("email1").value.match("^[a-zA-Z][\\w\\.-]*[a-zA-Z0-9]@[a-zA-Z0-9][\\w\\.-]*[a-zA-Z0-9]\\.[a-zA-Z][a-zA-Z\\.]*[a-zA-Z]$"))

			   {

              	alert("Please enter a valid E-Mail\n");
				return false;	
               }			   
	if (document.getElementById("phone").value == "" && document.getElementById("phone2").value == "")
    {   
		alert("Please enter atleast 1 contact detail .\n");
		return false;
	}
	var stripped = document.getElementById("phone").value.replace(/[\(\)\.\-\ ]/g, '');
	
	if (document.getElementById("phone").value!="" && isNaN(parseInt(stripped))) 
	{

		alert("The phone number contains illegal characters.\n");
		return false;

	}

return true;
}
</script>
<body bgcolor="#000000">
<script type="text/javascript" language="JavaScript1.2" src="stmenu.js"></script>
<table align="center" background="images/template.gif" height="615" width="820">

<tbody><tr><td align="center" height="77" width="107">&nbsp;</td>
  <td colspan="9" align="center">&nbsp;</td>
</tr><tr>
  <td align="center" height="52">&nbsp;</td>
  <td colspan="8" class="style9" align="center"><div align="right"><span class="style16"><a href="../index.html" class="style16">&lt;&lt;HOME</a></span><img src="../images/blank.gif" width="450" height="1" />Registration &nbsp;</div></td>
  <td align="center" width="37">&nbsp;</td>
</tr>  
<tr>
  <td height="394">&nbsp;</td>
  <td colspan="8">
  
	<div align="left" style="padding-left:5px" style:float>
	  <script type="text/javascript" language="JavaScript1.2" src="tab.js"></script>
      </div> 
	 
	  <div class="style18" style="height: 370px; width: 648px; overflow-y: scroll; display: block;" align="center">
	  <h2 align="center">&nbsp; &nbsp; &nbsp; &nbsp; Events Registration</h2>
          
<center><font color="#ff0000"><?php if(isset($_GET['msg'])) echo $_GET['msg'];?> </font></center>
	  
       
        <form id="event" name="event" method="post" onsubmit="return ve();" action="signup.php">
 <div align="center">
            <p><br>
  &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;  &nbsp;&nbsp; &nbsp;<span class="style6_matterplain"> &nbsp;College Name:
  <input name="college" type="text" id="college">
               <br>
               <br>
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;City:
<input name="city" type="text" id="city">
               <br>
               <br>
               &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;   Login ID:
               <input name="username" type="text" id="username">
               <br>
               <br>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Password:
<input name="password" type="password" id="password">
               <br>
               <br>
&nbsp;&nbsp;  &nbsp;  &nbsp;Confirm Password :
<input name="password2" type="password" id="password2">
               <br>
               <br>
&nbsp;&nbsp;  &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Team Name :
<input name="teamname" type="text" id="teamname">
               <br>
               <br>
&nbsp;&nbsp;  &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Team Leader :
<input name="leader" type="text" id="leader">
               <br>
               <br>
               &nbsp; &nbsp;
               &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   Address of Team Leader:
               <textarea name="address" cols="30" id="address"></textarea>
               &nbsp;<br>
               <br>
  E-mails (please leave at least 2):
  <input name="email1" type="text" id="email1">
               <label> &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br>
               <br>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; 
<input name="email2" type="text" id="email2">
               </label>
               <br>
               <br>
               
 Phone No. (preferably cell phones):
 <input name="phone" type="text" id="phone">
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;<br />
<br />
 <img src="../images/blank.gif" width="166" height="1" /> &nbsp;
 <input name="phone2" type="text" id="phone2">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;              </span></p>
             <p class="style20">&nbsp;</p>
             <p class="style6_matterplain">Check the Events you want to register for:</p>
             <p class="style20" align="left">
               <span class="style6_matterplain">
              &nbsp;&nbsp;
             <input name="eh" id="eh" value="1" type="checkbox">
             Electric Heels --- The Choreo Showdown 
 
             <br>
&nbsp;&nbsp;
              <input name="hc" id="hc" value="1" type="checkbox">
             Hot Coture --- The Fashion Contest <br>
&nbsp;&nbsp;
<input name="rh" id="rh" value="1" type="checkbox">
Raga High --- The Indian Music Contest <br>
&nbsp;&nbsp;
<input name="mrnms" id="mrnms" value="1" type="checkbox">
Mr &amp; Ms. Alcheringa --- The Personality Contest <br>
&nbsp;&nbsp;
<input name="rock" id="rock" value="1" type="checkbox">
Rock-o-Phonix --- The Rock Contest<br>
&nbsp;&nbsp;
             <input name="dj" id="dj" value="1" type="checkbox">
Groove --- The DJing competition <br>
&nbsp;&nbsp;
<input name="gag" value="1" type="checkbox">
             Bollywood Calling --- The Gag Show<br>
&nbsp;&nbsp;
<input name="step" value="1" type="checkbox">
2 Steps --- Couple Dance with a Twist &nbsp;&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;
             <input name="fine" value="1" type="checkbox"> 
Shades --- Fine Arts<br>
&nbsp;&nbsp;
<input name="shadow" value="1" type="checkbox">
Screenplay --- Shadow Play<br>
&nbsp;&nbsp;
<input name="words" value="1" type="checkbox">
Wordsworth --- The Literary Challenge<br>
&nbsp;&nbsp;
<input name="rj" value="1" type="checkbox">
 Nautanki --- The Radio show<br>
&nbsp;&nbsp;
<input name="photo" value="1" type="checkbox">
 Kirnaankan --- Photography and Filming<br>
&nbsp;&nbsp;
<input name="plug" value="1" type="checkbox">
 Unplugged --- The Vocal contest<br>
&nbsp;&nbsp;
<input name="gaane" value="1" type="checkbox">
 Antakshari --- Gaane Anjanne<br>
&nbsp;&nbsp; 
<input name="quiz" value="1" type="checkbox">
 Brainstorm --- The Alcher Quiz<br>
&nbsp;&nbsp;
<input name="jam" value="1" type="checkbox">
 Alcher Jam --- Impromptu Dance competition<br>
&nbsp;&nbsp;
<input name="tune" value="1" type="checkbox">
 Crazy Tune --- Gone in 60 seconds<br>
&nbsp;&nbsp;
<input name="gold" value="1" type="checkbox">
 Gold Rush --- The Treasure Hunt<br>
             </label>
               </span></p>
          </div>
           <p align="center">
	         <span class="style6_matterplain">
	         <label>
	         <input name="Submit" value="Submit" type="submit">
	         &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 	         </label>
	         <label>
	         <input name="Submit2" value="Reset" type="reset">
	         </label>
	         </span></p>
          <p class="style6_matterplain" align="left">	         For enquiries relating to any of the events contact:<br>
  Events Team: &nbsp; <b>events_alcheringa@iitg.ernet.in</b></p>
          <p class="style6_matterplain" align="left">For enquiries relating to accommodation contact:<br>
  Publicity Team:  &nbsp; <b>publicity_alcheringa@iitg.ernet.in</b></p>
          <p class="style6_matterplain" align="left">Please ensure you collect the Rule Booklet from the organizers and also download it from the website. </p>
          <p align="left"><span class="style6_matterplain">If your team decides to back out of the competition (in the worst of worst cases), please inform us beforehand.</span><br>
          </p>
	       <p align="left">&nbsp;</p>
        </form>
     </div>    </td>
  <td align="center">&nbsp;</td>
</tr><tr>
  <td align="center">&nbsp;</td>
  <td colspan="8" align="center">&nbsp;</td>
  <td align="center">&nbsp;</td>
</tr></tbody></table>

</body></html>
