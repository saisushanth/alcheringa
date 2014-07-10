<!DOCTYPE html>
<html>
<head>


	
</head>
<body>


<?php

if(!empty($_POST['submit']))
{

	include("opendb.php");

	$sql = "INSERT INTO `campus_ambasdors`(`username`, `college`, `contact1`, `contact2`, `email`, `res_address`, `colg_address`) VALUES ('".$_POST['username']."','".$_POST['college']."','".$_POST['contact1']."','".$_POST['contact2']."','".$_POST['email']."','".$_POST['resaddress']."','".$_POST['colgaddress']."')";
	$result = mysql_query($sql);

	if(!$result)
	{
		echo "Error in connecting to database" ;
	}
	else
	{
		echo "Your details are collected";
	}


}

?>



<form action="ca.php"  enctype="multipart/form-data" method="post">
	
<h2>Campus Ambasdor Registration</h2>

<p><label for="username">Your Name</label><br />
	<input id="username" name="username" size="30" type="text" /></p>

<br/>

<p><label for="college">Your College</label><br />
	<input id="college" name="college" size="30" type="text" /></p>


<br/>

<p><label for="contact1">Your Mobile Number</label><br />
	<input id="contact1" name="contact1" size="20" type="text" /></p>

<br/>

<p><label for="contact2">Your Alternate Number</label><br />
	<input id="contact2" name="contact2" size="20" type="text" /></p>

<br/>

<p><label for="email">Your Email ID</label><br />
	<input id="email" name="email" size="30" type="text" /></p>


<br/>

<p><label for="resaddress">Your Current Residential Address</label><br />
	<textarea  cols="30" id="resaddress" name="resaddress" rows="5"></textarea></p>


<br/>

<p><label for="colgaddress">Your College Address</label><br />
	<textarea  cols="30" id="colgaddress" name="colgaddress" rows="5"></textarea></p>

<br/>

<p><input  id="form_submit" name="submit" type="submit" value="Submit your details" /></p>

</form>


</body>
</html>