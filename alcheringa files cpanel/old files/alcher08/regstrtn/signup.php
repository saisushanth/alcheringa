 <?php
	
	$dbhost = "localhost";
	$dbuser = "alcheringa";
	$dbpass = "alch1234";
	$dbase = "alcheringa";
	$db_mem = "members";
			
	$college = $_POST['college'];
	$city = $_POST['city'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$password2 = $_POST['password2'];
	$tn = $_POST['teamname'];
	$leader = $_POST['leader'];
	$address = $_POST['address'];
	if(isset($_POST['email1']))
		$email1 = $_POST['email1'];
	else $email1 = NULL;
	if(isset($_POST['email2']))
		$email2 = $_POST['email2'];
	else $email2 = NULL;
	if(isset($_POST['phone']))
		$phone = $_POST['phone'];
	else $phone = NULL;
	if(isset($_POST['phone2']))
		$phone2 = $_POST['phone2'];
	else $phone2 = NULL;
	
	if(isset($_POST['eh']))
		$eh = 1;
	else 
		$eh = 0;
	
	if(isset($_POST['hc']))
		$hc = 1;
	else 
		$hc = 0;	
	if(isset($_POST['rh']))
		$rh = 1;
	else 
		$rh = 0;
	if(isset($_POST['mrnms']))
		$mrnms = 1;
	else 
		$mrnms = 0;
	if(isset($_POST['rock']))
		$rock = 1;
	else 
		$rock = 0;
	if(isset($_POST['dj']))
		$dj = 1;
	else 
		$dj = 0;
	if(isset($_POST['gag']))
		$gag = 1;
	else 
		$gag = 0;
	if(isset($_POST['step']))
		$step = 1;
	else 
		$step = 0;
	if(isset($_POST['fine']))
		$fine = 1;
	else 
		$fine = 0;
	if(isset($_POST['shadow']))
		$shadow = 1;
	else 
		$shadow = 0;
	if(isset($_POST['words']))
		$words = 1;
	else 
		$words = 0;
	if(isset($_POST['rj']))
		$rj = 1;
	else 
		$rj = 0;
	if(isset($_POST['photo']))
		$photo = 1;
	else 
		$photo = 0;
	if(isset($_POST['plug']))
		$plug = 1;
	else 
		$plug = 0;
	if(isset($_POST['gaane']))
		$gaane = 1;
	else 
		$gaane = 0;
	if(isset($_POST['quiz']))
		$quiz = 1;
	else 
		$quiz = 0;
	if(isset($_POST['jam']))
		$jam = 1;
	else 
		$jam = 0;
	if(isset($_POST['tune']))
		$tune = 1;
	else 
		$tune = 0;
	if(isset($_POST['gold']))
		$gold = 1;
	else 
		$gold = 0;
	
	trim($username);
	trim($password);
	trim($password2);
	
	//Check for Authentic entries
	
	$authenticated=1;
	$newHeader="location:event.php?msg=";
	
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
	
	if($password != $password2)
	{
		$authenticated=0;
		$newHeader = $newHeader.urlencode("Passwords do not match\n");
		
	}
	
	if($college==NULL)
	{
		$authenticated=0;
		$newHeader = $newHeader.urlencode("College cannot be empty.\n");
	}
	
	if($city==NULL)
	{
		$authenticated=0;
		$newHeader = $newHeader.urlencode("City cannot be empty.\n");
	}
	
	if($leader==NULL)
	{
		$authenticated=0;
		$newHeader = $newHeader.urlencode("Team Leader cannot be empty.\n");
	}
	
	if($address==NULL)
	{
		$authenticated=0;
		$newHeader = $newHeader.urlencode("Address cannot be empty.\n");
	}
	
	if($email1==NULL && $email2==NULL)
	{
		$authenticated=0;
		$newHeader = $newHeader.urlencode("Please provide atleast one email address.\n");
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
	$query1 = "select username from $db_mem where username = '$username'";
	$result1 = mysql_query($query1);
	
	if (mysql_num_rows($result1) == 0)
	{
              
	
		$add1 = "INSERT INTO $db_mem(username,password,college,city,leader,address,email1,email2,phone,eh,hc,rh,mrnms,rock,dj,gag,step,fine,shadow,words,rj,photo,plug,gaane,quiz,jam,tune,gold,reg_time,team_name,ph2) values ('$username','$passwd','$college','$city','$leader','$address','$email1','$email2','$phone','$eh','$hc','$rh','$mrnms','$rock','$dj','$gag','$step','$fine','$shadow','$words','$rj','$photo','$plug','$gaane','$quiz','$jam','$tune','$gold','$mytime','$tn','$phone2')";
		$result1 = mysql_query($add1);
		
		if ($result1)
		{
			$pass="XXX NOT SHOWN XXX";
			if($email1 != NULL)
				$reciever=$email1;
			else
				$reciever=$email2;			
			$subject="Alcheringa 2008";
			$body="Hello ".$leader.",\n\nYou have registered to participate in Alcheringa 2008, The Annual Cultural Festival Of IITG.\n\nUsername:\t".$username."\nPassword:\t".$pass."\n\nLeader:  ".$leader."\nCollege:  ".$college."\nCity:  ".$city."\n\n\nThe Alcheringa Team is happy to register you as a participant. For further details, Please login at http://www.alcheringa.org.\n\n\nRegards.\n\nAlcheringa 2008 Team.";
			
			$header = "From: Alcheringa 2008 <alcheringa@iitg.ernet.in>\r\n";
			$header .= "Reply-To: alcheringa@iitg.ernet.in\r\n";
			$header .= "Return-Path: alcheringa@iitg.ernet.in\r\n";
	
			mail($reciever, $subject, $body, $header);

			$msg = urlencode("Registered!!! Confirmation mail sent!!");
			mysql_close($db);
			header("location:success.php?msg=$msg");
			exit();			
		}
		else
		{
			$msg = urlencode("Not Registered!!!");
			mysql_close($db);
			header("location:event.php?msg=$msg");
			exit();	
		}
	
		mysql_close($db);
	
	}
	else
	{
		$msg = urlencode("Username already exists !!");
		mysql_close($db);
		header("location:event.php?msg=$msg");
		exit();
	}
	
	
?>
	
	
	
