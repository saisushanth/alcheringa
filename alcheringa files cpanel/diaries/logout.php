<?php 
session_start();
if(isset($_POST['signout']))
						{
						session_destroy();

						}
						echo 'You are now successfully logged out. Log back in <a href="index.php">here</a>.';
						?>