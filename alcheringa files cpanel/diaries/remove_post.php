<?php
session_start();
include 'connect.php';
				if(isset($_POST['remove_post'])& !empty($_POST['remove_post']))
				{
				$query_del= "DELETE FROM `alcherin_diaries`.`post` WHERE `post`.`order` = '".$_POST['remove_post']."'";	
				
				if($query_run_del= mysql_query($query_del)){
					$query_del_comments= "DELETE FROM `alcherin_diaries`.`comments` WHERE `comments`.`post_id` = '".$_POST['remove_post']."'";	
					if($query_run_del_comments= mysql_query($query_del_comments)){
					
					}
				}
				}
				
	header('Location: index.php');		
	
			?>