<?php
$con=mysqli_connect("localhost","alcherin_mayank","mayank","alcherin_mun");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO delegateinfo (name, institute, birthday, email, mobile, d1, d2, p1, p2, p3, rs)
VALUES
('$_POST[name]','$_POST[institute]','$_POST[birthday]','$_POST[email]','$_POST[mobile]','$_POST[d1]','$_POST[d2]','$_POST[p1]','$_POST[p2]','$_POST[p3]','$_POST[rs]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "Thank You!!! your details have been recorded...";


mysqli_close($con);
?>