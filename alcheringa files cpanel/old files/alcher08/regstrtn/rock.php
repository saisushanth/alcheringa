<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ALCHERINGA '08 "The Annual Cultural Festival Of IIT Guwahati"</title>
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
.style19 {	font-size: 14px;
	text-decoration: none;
	color: #FFFFFF;
}
.style20 {	font-size: 14px;
	padding-left: 10px;
}
-->
</style>
<link href="../fonts.css" rel="stylesheet" type="text/css" />
<script language="javascript">
function ve()
{
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
	if (document.getElementById("bndname").value == "")
    {   
		alert("Please enter Band name.\n");
		return false;
	}
	if (document.getElementById("genre").value == "")
    {   
		alert("Please enter genre.\n");
		return false;
	}	
	if (document.getElementById("place").value == "")
    {   
		alert("Please enter place .\n");
		return false;
	}	
	if (document.getElementById("no1").value == "")
    {   
		alert("Please enter atleast one band member .\n");
		return false;
	}	
return true;
}
</script>


<body bgcolor="#000000" >
<script type="text/javascript" language="JavaScript1.2" src="stmenu.js"></script>
<TABLE width="820" align="center" height="615"  border="0" bordercolor="#FFFFFF" background="images/template.gif" >

<tr><TD width="107" height="77" align="center">&nbsp;</TD>
  <TD colspan="2" align="center">&nbsp;</TD>
<tr>
  <TD height="52" align="center">&nbsp;</TD>
  <TD align="center" class="style9"><div align="right"><span class="style16"><a href="../index.html" class="style16">&lt;&lt;HOME</a></span><img src="../images/blank.gif" width="450" height="1" />Registration &nbsp;</div></TD>
  <TD width="37" align="center">&nbsp;</TD>
<tr>
  <TD height="36" align="center">&nbsp;</TD>
  <TD align="center">
  <div align="left" style="padding-left:5px" style:float>
	  <script type="text/javascript" language="JavaScript1.2" src="tab.js"></script>
      </div>
  </TD>
  <TD align="center"></TD>
<tr>
  <TD height="394">&nbsp;</TD>
  <TD><div align="center" class="style18" style="height:370px; width:648px; overflow-y:scroll; display:block;">
    <h2 align="center"> &nbsp; &nbsp; &nbsp; &nbsp; Rock-O-Phonix </h2>
<center><font color="#ff0000"><?php if(isset($_GET['msg'])) echo $_GET['msg'];?> </font></center>
    <form action="signrock.php" method="post" onsubmit="return ve();" enctype="multipart/form-data" name="accomodation" id="accomodation">
      <label>
      <div align="center">
        <p><br />
          <img src="../images/blank.gif" width="42" height="1" /> <span class="style6_matterplain">User Name:
          <input name="name" type="text" id="name" />
&nbsp; &nbsp; <br />
          <br />
		   <img src="../images/blank.gif" width="55" height="1" /> Password:
           <input name="password" type="password" id="password" />
&nbsp; &nbsp; <br />
          <br />
		   <img src="../images/blank.gif" width="110" height="1" />If you don't have the ID and password please get it from events registration...<a href="event.php">REGISTER</a><br/>
		   <br/>
		 
		 
		  &nbsp;&nbsp;<span class="style6_matterplain">&nbsp;  Band Name:
          <input name="bndname" type="text" id="bndname" />
          <br />
          <br />
&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; Genre:
<input name="genre" type="text" id="genre" />
&nbsp; &nbsp; <br />
          <br />
&nbsp; &nbsp; &nbsp;&nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; Place:
<input name="place" type="text" id="place" />
          &nbsp;</span></p>
        <p>&nbsp;</p>
        <p class="style6_matterplain">Band Member1:
            <input name="no1" type="text" id="no1" />
Band Member2:
          <input name="no2" type="text" id="no2" />
        </p>
        <p class="style6_matterplain">Band Member3:
            <input name="no3" type="text" id="no3" />
Band Member4:
          <input name="no4" type="text" id="no4" />
        </p>
        <p class="style6_matterplain">Band Member5:
            <input name="no5" type="text" id="no5" />
            Band Member6:
            <input name="no6" type="text" id="no6" />
        </p>
        <p class="style6_matterplain">
          Band Member7:
              <input name="no7" type="text" id="no7" />
        Band Member8:
          <input name="no8" type="text" id="no8" />
            </p>
        <p>
          <span class="style6_matterplain">
          <label></label>
          &nbsp;<br /><br />
          Band History/Achievements/Gigs
<textarea name="history" cols="22" id="history"></textarea>
&nbsp;               &nbsp;</label>
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br />
        </p>
        <p>
            <span class="style6_matterplain">
<label>Link to OCs (mp3s/myspace/youtube/gigpad):
              <textarea name="link" cols="35" id="link"></textarea>
            </label>
&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;</span><span class="style6_matterplain">&nbsp; &nbsp; &nbsp;&nbsp;</span><span class="style6_matterplain">&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;</span><span class="style6_matterplain">&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;</span></p>
        <p>&nbsp;</p>
        <p>
          <span class="style6_matterplain">
          <label>
            <input type="submit" name="Submit" value="Submit" />
            </label>
          </span></p>
        <p><br />
        </p>
      </div>
      </form>
  </div></TD>
  <TD align="center">&nbsp;</TD>
<tr>
  <TD align="center">&nbsp;</TD>
  <TD align="center">&nbsp;</TD>
  <TD align="center">&nbsp;</TD>
</TABLE>

</body>
</html>