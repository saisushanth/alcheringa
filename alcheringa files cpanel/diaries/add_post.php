<?php
session_start();
include 'connect.php';
				if(isset($_POST['feedback']) && !empty($_POST['feedback']))
				{
				$post=mysql_real_escape_string($_POST['feedback']);
				
					$query= "INSERT INTO `alcherin_diaries`.`post` (`order`, `id`, `username`, `post`, `time`, `privacy`) VALUES ('', '".$_SESSION['user_id']."', '".$_SESSION['user_name']."', '".$post."', '".time()."', '".$_POST['privacy']."')";
						if($query_run= mysql_query($query)){
								
						}
				}
				
				
							header('Location: index.php');
							

			?>