<!DOCTYPE html>
<html>
<head>
	
</head>
<body>

<?php

if(!empty($_POST['submit']))
{
	include("opendb.php");
	$sql = "INSERT INTO `messaging`(`Message`, `your_name`, `your_email`, `recieptent_name`, `recieptent_email`) 
         	VALUES ('".$_POST['message']."','".$_POST['from_name']."','".$_POST['from_email']."','".$_POST['to_name']."','".$_POST['to_email']."')";
    $result = mysql_query($sql);
    if(!$result)
		{
			echo "Error in connecting to database" ;
		}
		else
		{
			echo "Successfully saved your message" ;
		}     	
}

?>

<form action="ecards.php" enctype="multipart/form-data" method="post">
	
<table border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td colspan='2'>
		    <h2>Your Message</h2>

			<label for="pass_it_on_message">You may include a personal message if you would like.</label><br />
		    <textarea cols="50" id="pass_it_on_message" name="message" rows="5"></textarea>

		</td>
	</tr>

	<tr>
		<td>

			<h2>From</h2>

			<table border="0" cellspacing="0" cellpadding="0" class='from'>

				<tr>
					<td>
					<label for="pass_it_on_from_name">Your Name</label>
				    <input id="pass_it_on_from_name" name="from_name" size="30" type="text" />
				    </td>
				</tr>
				<tr>
					<td>
					    <label for="pass_it_on_from_email">Your Email Address</label>
					    <input id="pass_it_on_from_email" name="from_email" size="30" type="text" />
				    </td>
				</tr>

			</table>


		</td>
		<td>

			<h2>To</h2>

			<table border="0" cellspacing="0" cellpadding="0" class='to'>
				<tr>
					<td>
					<label for="pass_it_on_to_name">Recipients Name</label>
				    <input id="pass_it_on_to_name" name="to_name" size="30" type="text" />
				    </td>
				</tr>
				<tr>
					<td>
					    <label for="pass_it_on_to_email">Recipients Email Address</label>
					    <input id="pass_it_on_to_email" name="to_email" size="30" type="text" />
				    </td>
				</tr>
			</table>

		</td>
	</tr>
	<tr>
		<td colspan='2' class='submit'><input id="pass_it_on_submit" name="submit" type="submit" value=" Send " /></td>
	</tr>
</table>
</form> 


</body>
</html>