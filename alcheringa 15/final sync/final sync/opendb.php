<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpassword = '';

$dbname = 'alcherin_registration';

$conn = mysql_connect($dbhost, $dbuser, $dbpassword) or die ('Error connecting to mysql');
mysql_select_db($dbname);
?>