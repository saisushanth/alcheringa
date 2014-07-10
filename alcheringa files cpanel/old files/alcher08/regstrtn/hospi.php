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
}
-->
</style>

<body bgcolor="#000000" >
<script type="text/javascript" language="JavaScript1.2" src="stmenu.js"></script>
<TABLE width="820" align="center" height="615"  border="0" bordercolor="#FFFFFF" background="images/template.gif" >

<tr><TD width="107" height="77" align="center">&nbsp;</TD>
  <TD colspan="2" align="center">&nbsp;</TD>
<tr>
  <TD height="52" align="center">&nbsp;</TD>
  <TD align="center" class="style9"><div align="right"><span class="style16"><a href="../index.html" class="style16">&lt;&lt;HOME</a></span><img src="../blank.gif" width="450" height="1" />Registration &nbsp;</div></TD>
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
  <TD>
      <div align="center" class="style18" style="height:370px; width:648px; overflow-y:scroll; display:block;">
	  <H2 align="center">Accomodation Registration</H2>
	  <?php if(isset($_GET['msg'])) echo $_GET['msg'];?>
        <form id="accomodation" name="accomodation" method="post" action="signhospi.php">
           <label>
           <div align="center">
             <p><br />
  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;  &nbsp;&nbsp; &nbsp; &nbsp;College Name:
  <input name="col_name" type="text" id="col_name" />
               <br />
               <br />
  &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;  &nbsp; &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;City: 
  <input name="city" type="text" id="city" />
               <br />
               <br />
  &nbsp; &nbsp; &nbsp;&nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;  Team Leader:
  <input name="team_leader" type="text" id="team_leader" />
               <br />
               <br />
               Faculty Members (if any):
               <input name="faculty" type="text" id="faculty" />
               <br />
               <br />
  &nbsp;&nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp;Leader&rsquo;s Phone No.:
  <input name="phone" type="text" id="phone" />
               <br />
               <br />
  &nbsp;&nbsp;  &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; Leader&rsquo;s Email ID:
  <input name="email" type="text" id="email" />
               <br />
               <br />
  &nbsp;&nbsp;&nbsp;Asst. Contingent Leader:
  <input name="aleader" type="text" id="aleader" />
               <br />
               <br />
  &nbsp;Asst. Leader's Phone No :
  <input name="aphone" type="text" id="aphone" />
               <br />
               <br />
  &nbsp;&nbsp; Asst. Leader&rsquo;s Email ID:
  <input name="aemail" type="text" id="aemail" />
               <br />
               <br />
               Faculty Member&rsquo;s Phone No. (if any):
               <input name="facno" type="text" id="facno" />
  &nbsp;  &nbsp;  &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;&nbsp;
               <br />
               <br />
                &nbsp;Correspondence Address:
              <input name="address" type="text" id="address" />
                <br />
               <br />
  &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;  &nbsp;&nbsp; &nbsp;Contingent Size:  &nbsp;
  <input name="size" type="text" id="size" />
               <br />
               <br />
  &nbsp; &nbsp;&nbsp;Contingent Size (boys):
  <input name="boys" type="text" id="boys" />
               <br />
               <br />
  &nbsp; &nbsp;&nbsp; &nbsp;Contingent Size (girls):
  <input name="girls" type="text" id="girls" />
               <br />
               <br />
  &nbsp; &nbsp;&nbsp; &nbsp;Train/Flight of Arrival:
  <input name="way" type="text" id="way" />
               <br />
               <br />
               &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;  &nbsp; &nbsp; &nbsp;   Date of Arrival:
               <input name="timearrival" type="text" id="timearrival" />
             </p>
             <label>&nbsp; &nbsp;&nbsp;  &nbsp; &nbsp;&nbsp; &nbsp; Date of Departure:
	         <input name="departure" type="text" id="departure" />
	         </label>
	       </div>
           <p align="center">&nbsp;</p>
	       <p align="center">
	         <label>
	         <input type="submit" name="Submit" value="Submit" />&nbsp;&nbsp;&nbsp;&nbsp;	         </label>
	         <label>
	         <input type="reset" name="Submit2" value="Reset" />
	         </label>
	       </p>
	       <p align="left" class="style19">For enquiries relating to accommodation contact:<br />
	         Publicity Team:  &nbsp; <B>publicity_alcheringa@iitg.ernet.in</B><br />
	         For enquiries relating to any of the events contact:<br />
	         Events Team: &nbsp; <B>events_alcheringa@iitg.ernet.in</B></p>
	       <p align="left" class="style19">Please ensure you collect the Rule Booklet from the organizers and also download it from the website. </p>
	       <p align="left"><span class="style19">If your team decides to back out of the competition (in the worst of worst cases), please inform us beforehand.</span><br />
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