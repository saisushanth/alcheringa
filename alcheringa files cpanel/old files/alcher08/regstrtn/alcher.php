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
.style19 {
	font-size: 14px;
	text-decoration: none;
	color: #FFFFFF;
}
.style20 {
	font-size: 14px;
	padding-left: 10px;
}
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
		alert("Please enter Password .\n");
		return false;
	}
	if (document.getElementById("age").value == "")
    {   
		alert("Please enter age.\n");
		return false;
	}
	if (document.getElementById("height").value == "")
    {   
		alert("Please enter height.\n");
		return false;
	}
	if (document.getElementById("sex").value == "")
    {   
		alert("Please specify sex.\n");
		return false;
	}
   
return true;
}
</script>






<body bgcolor="#000000" >
<script type="text/javascript" language="JavaScript1.2" src="stmenu.js"></script>
<TABLE width="820" align="center" height="615" background="images/template.gif" >

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
  <TD>
      <div align="center" class="style18" style="height:370px; width:648px; overflow-y:scroll; display:block;">
	    <h2 align="center"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Mr. &amp; Ms. Alcheringa </h2>
	<?php if(isset($_GET['msg'])) echo $_GET['msg'];?>
	    <form action="signalcher.php" method="post" onsubmit="return ve();" enctype="multipart/form-data" name="accomodation" id="accomodation">
           <label>
          <div align="center">
             <p>
  <img src="../images/blank.gif" width="47" height="1" /> <span class="style6_matterplain">User Name:
          <input name="name" type="text" id="name" />
&nbsp; &nbsp; <br />
          <br />
		   <img src="../images/blank.gif" width="55" height="1" /> Password:
           <input name="password" type="password" id="password" />
&nbsp; &nbsp; <br />
          <br />
		   <img src="../images/blank.gif" width="110" height="1" />If you don't have the ID and password please get it from events registration...<a href="event.php">REGISTER</a><br/>
		   <br/>
           <img src="../images/blank.gif" width="78" height="1" /> Age:
<input name="age" type="text" id="age" />
&nbsp; &nbsp; <br />
              <br />
              <img src="../images/blank.gif" width="60" height="1" />   Height:
<input name="height" type="text" id="height" />
&nbsp; &nbsp;<br />
              <br />
              <img src="../images/blank.gif" width="79" height="1" />Sex:
<input name="sex" type="text" id="sex" />
&nbsp; &nbsp;</span></p>
             <p>
               <label><img src="../images/blank.gif" width="37" height="1" />Upload recent photograph
               <input type="file" name="file" />
               </label>
               <br />
               <br />
               <img src="../images/blank.gif" width="50" height="1" />Course :
<input name="course" type="text" id="course" />
<br />
               <br />
             <span class="style6_matterplain">
               <label>&nbsp;Any Earlier Achievements
               <textarea name="history" cols="20" id="history"></textarea>
               </label>
             </span><img src="../images/blank.gif" width="45" height="1" /></p>
          </div>
           <H2 class="style6_matterplain">
Questionnaire</H2>
           <p align="left" class="style6_matterplain"><strong>Note: Answer all 4 questions given below. The questions are the criteria for 
           your selections for prelims so take your time and give your best.</strong></p>
           <p align="left" class="style6_matterplain"><br />
           </p>
           <p align="left" class="style6_matterplain">1) Should prostitution be legalized in India? Comment. </p>
           <p align="left" class="style20">
             
             <span class="style6_matterplain">
             <label>
             <textarea name="ans1" cols="70" rows="5" id="ans1">Type you answer here...</textarea>
             </label>
             </span></p>
           <p align="left" class="style6_matterplain">2) More than 70% of Indian population lives in rural areas, which still have not received basic amenities like food, water and electricity. With such a huge population still far behind, how do you think the youth, especially the urban youth can make a difference?           </p>
           <p align="left" class="style20">
             
             <span class="style6_matterplain">
             <label>
             <textarea name="ans2" cols="70" rows="5" id="ans2">Type you answer here...</textarea>
             </label>
             </span></p>
           <p align="left" class="style6_matterplain">3) How would you be able to realize your dreams through ALCHERINGA, the biggest youth festival of north-east? </p>
           <p align="left" class="style20">
             
             <span class="style6_matterplain">
             <label>
             <textarea name="ans3" cols="70" rows="5" id="ans3">Type you answer here...</textarea>
             </label>
             </span></p>
           <p align="left" class="style6_matterplain">4) What is the weirdest thing you have done till now and do you think you will be able to raise the bar ;)</p>
           <p align="left" class="style20">
             
             <span class="style6_matterplain">
             <label>
             <textarea name="ans4" cols="70" rows="5" id="ans4">Type you answer here...</textarea>
             </label>
             </span></p>
           <p align="left">&nbsp;</p>
           <p align="center">
	         
	         <span class="style6_matterplain">
	         <label>
	         <input type="submit" name="Submit" value="Submit" />
&nbsp;&nbsp;&nbsp;&nbsp;	         </label>
	         <label>
	         <input type="reset" name="Submit2" value="Reset" />
	         </label>
	         </span></p>
          <p align="left" class="style19"><span class="style6_matterplain">For any queries contact: <br />
            Rohit Raj (r.raj@iitg.ernet.in ) +91 9954249776<br />
            Aditya Upadhyay (u.aditya@iitg.ernet.in) +91 9954248949</span><br />
          </p>
	       <p align="left">&nbsp;</p>
        </form>
     </div>    </TD>
  <TD align="center">&nbsp;</TD>
<tr>
  <TD align="center">&nbsp;</TD>
  <TD align="center">&nbsp;</TD>
  <TD align="center">&nbsp;</TD>
</TABLE>

</body>
</html>