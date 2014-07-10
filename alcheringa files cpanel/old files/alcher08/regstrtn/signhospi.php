<?php

$dbhost = "localhost";
$dbuser = "alcheringa";
$dbpass = "alch1234";
$dbase = "alcheringa";
$db_mem = "members";

$col_name = $_POST['col_name'];
$city = $_POST['city'];
$team_leader = $_POST['team_leader'];
$faculty= $_POST['faculty'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$aleader = $_POST['aleader'];
$aphone = $_POST['aphone'];
$aemail = $_POST['aemail'];
$facno = $_POST['facno'];
$address = $_POST['address'];
$size = $_POST['size'];
$boys = $_POST['boys'];
$girls = $_POST['girls'];
$way = $_POST['way'];
$timearrival = $_POST['timearrival'];
$departure = $_POST['departure'];


trim($col_name);
trim($city);
trim($team_leader);
trim($faculty);
trim($phone);

//Check for Authentic entries

$authenticated=1;
$newHeader="location:hospi.php?msg=";

if($username==NULL)
{
$authenticated=0;
$newHeader = $newHeader.urlencode("Username cannot be empty.\n");
}
else
{
for($i=0;$i<strlen($username);$i++)
{
if(!((ord(substr($username,$i,1))>=48&&ord(substr($username,$i,1))<=57)||
(ord(substr($username,$i,1))>=65&&ord(substr($username,$i,1))<=90)||
(ord(substr($username,$i,1))>=97&&ord(substr($username,$i,1))<=122)||
(substr($username,$i,1)=='_')))
{
$authenticated=0;
$newHeader = $newHeader.urlencode("Only AlphaNumeric and Underscore Keywords can be used.\n");
break;
}
}
}

if($password==NULL)
{
$authenticated=0;
$newHeader = $newHeader.urlencode("Password cannot be empty.\n");
}
else
{
for($i=0;$i<strlen($password);$i++)
{
if(!((ord(substr($password,$i,1))>=48&&ord(substr($password,$i,1))<=57)||
(ord(substr($password,$i,1))>=65&&ord(substr($password,$i,1))<=90)||
(ord(substr($password,$i,1))>=97&&ord(substr($password,$i,1))<=122)||
(substr($password,$i,1)=='_')))
{
$authenticated=0;
$newHeader = $newHeader.urlencode("Only AlphaNumeric and Underscore Keywords can be used.\n");
break;
}
}
}

if($col_name==NULL)
{
$authenticated=0;
$newHeader = $newHeader.urlencode("College Name cannot be empty.\n");
}

if($city==NULL)
{
$authenticated=0;
$newHeader = $newHeader.urlencode("City field cannot be empty .\n");
}

if($team_leader==NULL)
{
$authenticated=0;
$newHeader = $newHeader.urlencode("Team Leader field cannot be empty .\n");
}


if($phone==NULL)
{
$authenticated=0;
$newHeader = $newHeader.urlencode("Phone field cannot be empty .\n");
}

if($email==NULL)
{
$authenticated=0;
$newHeader = $newHeader.urlencode("Email field cannot be empty .\n");
}
if($size==NULL)
{
$authenticated=0;
$newHeader = $newHeader.urlencode("Size field cannot be empty .\n");
}





if($authenticated==0)
{
header($newHeader);
exit();
}

//Continue Processing

$mytime = date("U");
$username = addslashes($username);
$passwd = sha1($password);

$db = mysql_connect($dbhost,$dbuser,$dbpass);

if(!$db)
{
echo "Sorry could not connect to the database !<br><br>Not Registered!!!";
exit();
}

mysql_select_db($dbase);
$query1 = "select username from $db_mem where username = '$username' and password = '$passwd'";
$result1 = mysql_query($query1);

if (mysql_num_rows($result1) == 1)
{

$add1 = "INSERT INTO mrnms(age,hieght,sex,course,history,ans1,ans2,ans3,ans4) values ($age,$hieght,$sex,$course,$history,$ans1,$ans2,$ans3,$ans4)";
$result1 = mysql_query($add1);

if ($result1)
{
$pass="XXX NOT SHOWN XXX";
if($email1 != NULL)
$reciever=$email1;
else
$reciever=$email2;
$subject="Alcheringa 2008";
$body="Hello ".$leader.",\n\nYou have registered to participate in Mr. & Ms. Alcheringa.\n\nUsername:\t".$username."\nPassword:\t".$pass."\n\nLeader: ".$leader."\nCollege: ".$college."\nCity: ".$city."\n\n\nThe Alcheringa Team is happy to register you as a participant. For further details, Please login at http://www.alcheringa.org.\n\n\nRegards.\n\nAlcheringa 2008 Team.";

$header = "From: Alcheringa 2008 <alcheringa@iitg.ernet.in>\r\n";
$header .= "Reply-To: alcheringa@iitg.ernet.in\r\n";
$header .= "Return-Path: alcheringa@iitg.ernet.in\r\n";

mail($reciever, $subject, $body, $header);

$msg = "Registered!!! Confirmation mail sent!!\n\n";
$msg=urlencode($msg);
mysql_close($db);
header("location:success.php?msg=$msg");
exit();
}
else
{
$msg = urlencode("Not Registered!!!");
mysql_close($db);
header("location:hospi.php?msg=$msg");
exit();
}

mysql_close($db);

}
else
{
$msg = urlencode("You have not registered. Go to Event Registration Section!!");
mysql_close($db);
header("location:alcher.php?msg=$msg");
exit();
}


?>