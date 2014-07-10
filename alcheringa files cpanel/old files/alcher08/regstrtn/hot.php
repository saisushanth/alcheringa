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
.style22 {color: #FFFFFF}
-->
</style>
<link href="../fonts.css" rel="stylesheet" type="text/css" />
<script language="javascript">
function ve()
{
  	if (document.getElementById("name").value == "") 
    {    
		alert("Please enter User name .\n");
		return false;
	}	
	if (document.getElementById("password").value == "")
    {   
		alert("Please enter password .\n");
		return false;
	}
	if (document.getElementById("choreo").value == "")
    {   
		alert("Please enter Choreographer.\n");
		return false;
	}
	if (document.getElementById("designer").value == "")
    {   
		alert("Please enter Fashion designer.\n");
		return false;
	}
	if (document.getElementById("artist").value == "")
    {   
		alert("Please enter Makeup artist.\n");
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
  <TD align="center" class="style9"><div align="right"><span class="style16"><a href="../index.html" class="style16">&lt;&lt;HOME</a></span><img src="../images/blank.gif" width="1" height="1" /><img src="../images/blank.gif" width="449" height="1" />Registration &nbsp;</div></TD>
  <TD width="37" align="center">&nbsp;</TD>
<tr>
  <TD height="36" align="center">&nbsp;</TD>
  <TD align="center">
  <div align="left" style="padding-left:5px" style:float>
	  <script type="text/javascript" language="JavaScript1.2" src="tab.js"></script>
      </div></TD>
  <TD align="center"></TD>
<tr>
  <TD height="394">&nbsp;</TD>
  <TD><div align="center" class="style18" style="height:370px; width:648px; overflow-y:scroll; display:block;">
    <h2 align="center"> Hot Cotoure </h2>
<center><font color="#ff0000"><?php if(isset($_GET['msg'])) echo $_GET['msg'];?> </font></center>
    <form action="signhc.php" onsubmit="return ve();" method="post" enctype="multipart/form-data" >
   
        <p  class="style6_matterplain" align="left">
		
		 <img src="../images/blank.gif" width="206" height="1" /> User Name:
          <input name="name" type="text" id="name" />
  &nbsp; &nbsp; <br />
          <br />
		   <img src="../images/blank.gif" width="214" height="1" /> Password:
          <input name="password" type="password" id="password" />
  &nbsp; &nbsp; <br />
          <br />
		   <img src="../images/blank.gif" width="110" height="1" /><span class="style22">If you don't have the ID and password please get it from events registration...<a href="event.php">REGISTER</a></span><br/>
		   <br/>
		
          <img src="../images/blank.gif" width="189" height="1" />Choreographer:
          <input name="choreo" type="text" id="choreo" />
  &nbsp; &nbsp;</p>
        <p align="left">
          <label></label>
          <img src="../images/blank.gif" width="170" height="1" /> <span class="style6_matterplain">Fashion designer</span> :
          <input name="designer" type="text" id="designer" />
          <br />
          <br />
          <img src="../images/blank.gif" width="193" height="1" /><span class="style6_matterplain">Make up artist :</span>
          <input name="artist" type="text" id="artist" />
          </p>
         </p>
        <p align="center">
        <label>
        <input type="submit" name="Submit" value="Submit" />
          &nbsp;&nbsp;&nbsp;&nbsp; </label>
        <label>
        <input type="reset" name="Submit2" value="Reset" />
        </label>
      </p>
      <p align="left" class="style19">For any queries contact: <br />
        Kushal Sinha (k.sinha@iitg.ernet.in 
        ) +91 9954248928</p>
      <p align="left">&nbsp;</p>
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