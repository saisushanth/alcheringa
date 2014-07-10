<?php
$con=mysqli_connect("localhost","alcherin_mayank","mayank","alcherin_mun");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO ipinfo (ipname, ipinstitute, ipbirthday, ipemail, ipmobile, ip1, ip2)
VALUES
('$_POST[ipname]','$_POST[ipinstitute]','$_POST[ipbirthday]','$_POST[ipemail]','$_POST[ipmobile]','$_POST[ip1]','$_POST[ip2]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "Thank You!!! your details have been recorded...";


mysqli_close($con);
?>