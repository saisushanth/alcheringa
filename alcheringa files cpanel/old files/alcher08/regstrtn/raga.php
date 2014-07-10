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
  <TD align="center" class="style9"><div align="right"><span class="style16"><a href="../index.html" class="style16">&lt;&lt;HOME</a></span><img src="../Alcher main Site/Site/images/blank.gif" width="450" height="1" />Registration &nbsp;</div></TD>
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
  <td><div align="center" class="style18" style="height:370px; width:648px; overflow-y:scroll; display:block;">
      <h2 align="center"> Raga High </h2>
<center><font color="#ff0000"><?php if(isset($_GET['msg'])) echo $_GET['msg'];?> </font></center>
      <form action="signraga.php" onsubmit="return ve();" method="post" enctype="multipart/form-data" name="accomodation" id="accomodation">
        <p align="left">&nbsp;</p>
      <img src="../images/blank.gif" width="8" height="1" /><span class="style6_matterplain"> User Name:
          <input name="name" type="text" id="name" />
&nbsp; &nbsp; <br />
          <br />
		   <img src="../images/blank.gif" width="15" height="1" /> Password:
          <input name="password" type="password" id="password" />
&nbsp; &nbsp; <br />
          <br />
		   <img src="../images/blank.gif" width="110" height="1" />If you don't have the ID and password please get it from events registration...<a href="event.php">REGISTER</a><br/>
		   <br/>
		
	  
	  
	  </span>
      <p align="left" class="style6_matterplain"><img src="../images/blank.gif" width="214" height="1" />Band Name:
          <input name="bndname" type="text" id="bndname" />
            <br />
            <br />
            <img src="../images/dummy.gif" width="243" height="1" /> Genre:
            <input name="genre" type="text" id="genre" />
&nbsp; &nbsp; <br />
        <br />
        <img src="../images/dummy.gif" width="248" height="1" />Place:
        <input name="place" type="text" id="place" />
&nbsp; &nbsp;<br />
        <br />
        <img src="../images/dummy.gif" width="197" height="1" />Band Member1:
        <input name="no1" type="text" id="no1" />
        <BR> 
	 
	    <img src="../images/dummy.gif" width="197" height="1" />Band Member2:
        <input name="no2" type="text" id="no2" />
		<BR>
		
        <img src="../images/dummy.gif" width="197" height="1" />Band Member3:
        <input name="no3" type="text" id="no3" />
		<BR>
		
        <img src="../images/dummy.gif" width="197" height="1" />Band Member4:
        <input name="no4" type="text" id="no4" />
		<BR>
		
        <img src="../images/dummy.gif" width="197" height="1" />Band Member5:
        <input name="no5" type="text" id="no5" />
		<BR>
        <img src="../images/dummy.gif" width="197" height="1" />Band Member6:
        <input name="no6" type="text" id="no6" />
		<BR>
        <img src="../images/dummy.gif" width="197" height="1" />Band Member7:
        <input name="no7" type="text" id="no7" />
		<BR>

        <img src="../images/dummy.gif" width="197" height="1" />Band Member8:
        <input name="no8" type="text" id="no8" />
      </p>
      <p align="left">
      <p align="left">
            <span class="style6_matterplain"><img src="../images/dummy.gif" width="99" height="1" />Band History/Achievements/Gigs::
            <textarea name="history" cols="40" id="history"></textarea>
            <br />
            <img src="../images/dummy.gif" width="31" height="1" />Link to OCs (mp3s/myspace/youtube/gigpad)::
            <textarea name="link" cols="40" id="link"></textarea>
            <br />
            &nbsp;<br />
            </label>
            </span></p>
      <p align="center">
          <span class="style6_matterplain">
          <label>
          <input type="submit" name="Submit" value="Submit" />
&nbsp;&nbsp;&nbsp;&nbsp; </label>
          <label>
          <input type="reset" name="Submit2" value="Reset" />
          </label>
          </span></p>
      <p align="left" class="style6_matterplain">For any queries contact: <br />
        Kushal Sinha (k.sinha@iitg.ernet.in 
        ) +91 9954248928</p>
      <p align="left">&nbsp;</p>
    </form>
  </div></td>
  <TD align="center">&nbsp;</TD>
<tr>
  <TD align="center">&nbsp;</TD>
  <TD align="center">&nbsp;</TD>
  <TD align="center">&nbsp;</TD>
</TABLE>

</body>
</html>