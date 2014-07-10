<?php
$con=mysqli_connect("localhost","alcherin_mayank","mayank","alcherin_mun");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO contactinfo (contactname, contactemail, contactmessage)
VALUES
('$_POST[contactname]','$_POST[contactemail]','$_POST[contactmessage]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "Thank You!!! your details have been recorded...";


mysqli_close($con);
?>