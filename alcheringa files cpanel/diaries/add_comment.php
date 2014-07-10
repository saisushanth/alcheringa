<?php
session_start();
require 'connect.php';

				if(isset($_POST['comment']) && !empty($_POST['comment']))
				{
				$comment=mysql_real_escape_string($_POST['comment']);
				
					$query= "INSERT INTO `alcherin_diaries`.`comments` (`order`, `post_id`, `id`, `username`, `comment`, `time`) VALUES ('','".$_POST['hidden']."', '".$_SESSION['user_id']."', '".$_SESSION['user_name']."', '".$comment."', '".time()."')";
						if($query_run= mysql_query($query)){
							
						}
	
				
				}
header('Location: index.php')
			?>