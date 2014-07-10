<?php
$con=mysqli_connect("localhost","alcherin_mayank","mayank","alcherin_mun");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO information (name, institute, birthday, email, mobile, q1, q2,q3, q4, q5, q6)
VALUES
('$_POST[name]','$_POST[institute]','$_POST[birthday]','$_POST[email]','$_POST[mobile]','$_POST[q1]','$_POST[q2]','$_POST[q3]','$_POST[q4]','$_POST[q5]','$_POST[q6]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "Thank You!!! your details have been recorded...";


mysqli_close($con);
?>