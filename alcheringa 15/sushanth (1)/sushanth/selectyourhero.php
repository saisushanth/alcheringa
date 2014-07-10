<!DOCTYPE html>
<html>
<head>


	
</head>
<body>


<?php

if(!empty($_POST['submit']))
{
	include("opendb.php");
	//include("path.php");

	$path = "files/" ;

	// $hero_image_one = file_get_contents($_FILES["hero_image_one"]["tmp_name"]) ;

	$sql = "SELECT * from `knowyourhero`";
	$result = mysql_query($sql);

	if(!$result)
		{
			echo "Error in connecting to database" ;
		}
		else
		{
			$count = mysql_num_rows($result) ;
		}
	

	$sql = "INSERT INTO `knowyourhero`(`hero[first_name]`, `hero[last_name]`, `hero[hero_emailid]`, `hero[hero_phone]`,  `hero_story`, `hero[author]`, `hero[author_email]`, `hero[value_id]`)
			VALUES ('".$_POST['hero_first_name']."','".$_POST['hero_last_name']."','".$_POST['hero_hero_email']."','".$_POST['hero_hero_phone']."','".$_POST['hero_story']."','".$_POST['hero_author']."','".$_POST['hero_author_email']."','".$_POST['hero_value_id']."')";

	$result = mysql_query($sql) ;

	if(!$result)
		{
			echo "Problem in submiting the information try again" ;
		}
		else
		{
			echo "Successfully submitted the information" ;
		}

	if(!empty($count))
	{
		$cnt = strval($count) ;
		$f1size = $_FILES['hero_image_one']['size'] ;
		$f2size = $_FILES['hero_image_two']['size'] ;
		$f3size = $_FILES['hero_image_three']['size'] ;

		if($f1size!=0)
		{
			$file1name = $cnt . "-" . $_FILES['hero_image_one']['name'] ;
			move_uploaded_file($_FILES["hero_image_one"]["tmp_name"], $path.$file1name);
			$sql = "UPDATE `knowyourhero` SET `hero_image` = '".$file1name."' WHERE `ID` = '".$count."' " ;
			$result = mysql_query($sql) ;

			if(!$result)
			{
				echo "Error in connecting to database, try again" ;
			}
				

		}

		if($f2size!=0)
		{
			$file2name = $cnt . "-" . $_FILES['hero_image_two']['name'] ;
			move_uploaded_file($_FILES["hero_image_two"]["tmp_name"], $path.$file2name);
			$sql = "UPDATE `knowyourhero` SET `hero_image_two` = '".$file2name."' WHERE `ID` = '".$count."' " ;
			$result = mysql_query($sql) ;

			if(!$result)
			{
				echo "Error in connecting to database, try again" ;
			}
			
		}

		if($f3size!=0)
		{
			$file3name = $cnt . "-" . $_FILES['hero_image_three']['name'] ;
			move_uploaded_file($_FILES["hero_image_three"]["tmp_name"], $path.$file3name);
			$sql = "UPDATE `knowyourhero` SET `hero_image_three` = '".$file3name."' WHERE `ID` = '".$count."' ";
			$result = mysql_query($sql) ;

			if(!$result)
			{
				echo "Error in connecting to database, try again" ;
			}
			
		}		
	}
}

?>
	<form action="selectyourhero.php" class="form" enctype="multipart/form-data" id="new_hero" method="post">

		

		<h2>Nominate Your Hero</h2>

		
		<table border="0" cellspacing="0" cellpadding="0" class='author'>
			<tr>
				<td>
					<p><label for="hero_first_name">First Name of Your Hero</label><br />
					<input class="text" id="hero_first_name" name="hero_first_name" size="20" type="text" /></p>
				</td>

				<td>
					<p><label for="hero_last_name">Last Name</label><br />
					<input class="text" id="hero_last_name" name="hero_last_name" size="20" type="text" /></p>
				</td>
			</tr>

			<tr>
				<td>
					<p><label for="hero_hero_email">Your Hero's Email Address</label><br />
					<input class="text" id="hero_hero_email" name="hero_hero_email" size="20" type="text" /></p>
				</td>

				<td>
					<p><label for="hero_hero_phone">Your Hero's Phone Number</label><br />
					<input class="text" id="hero_hero_phone" name="hero_hero_phone" size="20" type="text" /></p>
				</td>
			</tr>

			<tr>
				<td colspan='2'>
					<p><label for="hero_image">Upload up to 3 photos of your hero.<br />(At least one photo is required)</label><br />
					<input id="hero_image" name="hero_image_one" size="30" type="file" /></p>
					<input id="hero_image_two" name="hero_image_two" size="30" type="file" /></p>
					<input id="hero_image_three" name="hero_image_three" size="30" type="file" /></p>
				</td>
			</tr>

			<tr>
				<td colspan='2'>
					<p><label for="hero_story">Tell us about your hero (500 words or less, please)</label><br />
					<textarea class="hero_story_textarea" cols="40" id="hero_story" name="hero_story" rows="20"></textarea></p>
				</td>
			</tr>
		</table>

  	<table border="0" cellspacing="0" cellpadding="0" class='author'>
  		<tr>
				<td>
					<p><label for="hero_author">Your Name</label><br />
			    	<input class="text" id="hero_author" name="hero_author" size="20" type="text" /></p>
	   		</td>

				<td>
					<p><label for="hero_author_email">Your Email Address</label><br />
			    	<input class="text" id="hero_author_email" name="hero_author_email" size="20" type="text" /></p>
			  </td>
			</tr>
  	</table>

		<p><label for="hero_value_id">Select the value your hero best represents</label></p>

		<select id="hero_value_id" name="hero_value_id"><option value="">Please choose...</option>
<option value="97">achievement</option>
<option value="1">ambition</option>
<option value="2">appreciation</option>
<option value="135">being there</option>
<option value="112">believe</option>
<option value="80">believe in yourself</option>
<option value="3">caring</option>
<option value="62">character</option>
<option value="110">charity</option>
<option value="133">civility</option>
<option value="98">class and grace</option>
<option value="5">commitment</option>
<option value="6">common ground</option>
<option value="7">compassion</option>
<option value="118">compliments</option>
<option value="129">compromise</option>
<option value="81">confidence</option>
<option value="10">courage</option>
<option value="11">courtesy</option>
<option value="12">dedication</option>
<option value="17">determination</option>
<option value="75">devotion</option>
<option value="114">do your part</option>
<option value="111">drive</option>
<option value="127">education</option>
<option value="82">encouragement</option>
<option value="125">equality</option>
<option value="96">excellence</option>
<option value="131">fitness</option>
<option value="99">foresight</option>
<option value="21">forgiveness</option>
<option value="22">friendship</option>
<option value="83">generosity</option>
<option value="84">giving back</option>
<option value="116">good manners</option>
<option value="23">gratitude</option>
<option value="132">great music</option>
<option value="24">hard work</option>
<option value="25">helping others</option>
<option value="26">honesty</option>
<option value="128">honor</option>
<option value="63">hope</option>
<option value="27">humility</option>
<option value="134">imagine</option>
<option value="119">including others</option>
<option value="85">ingenuity</option>
<option value="123">innovation</option>
<option value="86">inspiration</option>
<option value="32">integrity</option>
<option value="126">justice</option>
<option value="117">kindness</option>
<option value="87">laughter</option>
<option value="100">leadership</option>
<option value="33">learning</option>
<option value="34">listening</option>
<option value="130">literacy</option>
<option value="101">live life</option>
<option value="64">live your dreams</option>
<option value="35">love</option>
<option value="36">loyalty</option>
<option value="88">making a difference</option>
<option value="121">mentoring</option>
<option value="103">motivation</option>
<option value="66">opportunity</option>
<option value="37">optimism</option>
<option value="89">overcoming</option>
<option value="120">passion</option>
<option value="39">patience</option>
<option value="90">peace</option>
<option value="40">perseverance</option>
<option value="104">persistence</option>
<option value="115">practice</option>
<option value="95">preparation</option>
<option value="113">purpose</option>
<option value="91">reaching out</option>
<option value="44">respect</option>
<option value="45">responsibility</option>
<option value="46">right choices</option>
<option value="105">rising above</option>
<option value="67">sacrifice</option>
<option value="107">sharing</option>
<option value="122">smile</option>
<option value="106">soul</option>
<option value="94">sportsmanship</option>
<option value="109">spread your wings</option>
<option value="93">stewardship</option>
<option value="70">strength</option>
<option value="74">teaching by example</option>
<option value="92">team work</option>
<option value="108">true beauty</option>
<option value="52">trust</option>
<option value="71">unity</option>
<option value="72">vision</option>
<option value="102">volunteering</option></select>

		<div class='clear'></div>
		<br /><br /><br /><br />

  	<p><input class="submit_hero" id="hero_submit" name="submit" type="submit" value="Submit Your Nomination" /></p>

	</form>

</body>
</html>