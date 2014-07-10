<?php
session_start();
include 'connect.php';
				if(isset($_POST['remove_comment'])& !empty($_POST['remove_comment']))
				{
				
				$query_del_comment= "DELETE FROM `alcherin_diaries`.`comments` WHERE `comments`.`order` = '".$_POST['remove_comment']."'";	
					if($query_run_del_comment= mysql_query($query_del_comment)){
					
					}
				}
				
				
	header('Location: index.php');		
	
			?>