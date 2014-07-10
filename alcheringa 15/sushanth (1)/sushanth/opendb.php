<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpassword = 'r00tpass';

$dbname = 'sush';

$conn = mysql_connect($dbhost, $dbuser, $dbpassword) or die ('Error connecting to mysql');
mysql_select_db($dbname);
?>