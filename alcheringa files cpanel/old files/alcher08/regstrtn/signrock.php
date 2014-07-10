<?php

$dbhost = "localhost";
$dbuser = "alcheringa";
$dbpass = "alch1234";
$dbase = "alcheringa";
$db_mem = "members";

$username = $_POST['name'];
$password = $_POST['password'];
$band = $_POST['bndname'];
$genre= $_POST['genre'];
$place = $_POST['place'];
$no1 = $_POST['no1'];
$no2 = $_POST['no2'];
$no3 = $_POST['no3'];
$no4 = $_POST['no4'];
$no5 = $_POST['no5'];
$no6 = $_POST['no6'];
$no7 = $_POST['no7'];
$no8 = $_POST['no8'];
$history = $_POST['history'];
$link = $_POST['link'];


trim($username);
trim($band);
trim($genre);
trim($history);
trim($link);

//Check for Authentic entries

$authenticated=1;
$newHeader="location:rock.php?msg=";

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

if($band==NULL)
{
$authenticated=0;
$newHeader = $newHeader.urlencode("Band Name field cannot be empty.\n");
}

if($genre==NULL)
{
$authenticated=0;
$newHeader = $newHeader.urlencode("Genre field cannot be empty .\n");
}

if($place==NULL)
{
$authenticated=0;
$newHeader = $newHeader.urlencode("place field cannot be empty .\n");
}


if($history==NULL)
{
$authenticated=0;
$newHeader = $newHeader.urlencode("History field cannot be empty .\n");
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

$add1 = "INSERT INTO rock(band_name,genre,place,no1,no2,no3,no4,no5,no6,no7,no8,history,link,name) values ('$band','$genre','$place','$no1','$no2','$no3','$no4','$no5','$no6','$no7','$no8','$history','$link','$username')";
$result1 = mysql_query($add1);

if ($result1)
{
$pass="XXX NOT SHOWN XXX";
if($email1 != NULL)
$reciever=$email1;
else
$reciever=$email2;
$subject="Alcheringa 2008";
$body="Hello ".$leader.",\n\nYou have registered to participate in Rock-o-Phonix.\n\nUsername:\t".$username."\nPassword:\t".$pass."\n\nLeader: ".$leader."\nCollege: ".$college."\nCity: ".$city."\n\n\nThe Alcheringa Team is happy to register you as a participant. For further details, Please login at http://www.alcheringa.org.\n\n\nRegards.\n\nAlcheringa 2008 Team.";

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
header("location:rock.php?msg=$msg");
exit();
}

mysql_close($db);

}
else
{
$msg = urlencode("You have not registered. Go to Event Registration Section!!");
mysql_close($db);
header("location:rock.php?msg=$msg");
exit();
}


?>