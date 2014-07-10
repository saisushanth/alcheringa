<?php

	$filename= 'count.txt';
	$handle= fopen($filename, 'r');
	$current= fread($handle, filesize($filename));
	fclose($handle);
	
$data = $_POST['imgBase64'];
$file = 'photos/'.$current.'.jpg';
$uri =  substr($data,strpos($data,",")+1);
file_put_contents($file, base64_decode($uri));
echo $file;

$current_inc = $current +1 ;
$handle= fopen($filename, 'w');
fwrite($handle, $current_inc);
fclose($handle);

?>