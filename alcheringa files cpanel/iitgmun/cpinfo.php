<?php
$con=mysqli_connect("localhost","alcherin_mayank","mayank","alcherin_mun");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO cpinfo ( cpemail, cp1, cp2, cp3, cprs)
VALUES
('$_POST[cpemail]','$_POST[cp1]','$_POST[cp2]','$_POST[cp3]','$_POST[cprs]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "Thank You!!! your details have been recorded...";


mysqli_close($con);
?>