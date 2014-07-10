<?php 

if(!@mysql_connect('localhost', 'alcherin_shikhar', 'hailudaan14') || !@mysql_select_db('alcherin_diaries')){
		echo '<font style="color: white; position: relative; top: 5px;">'; 
		echo 'Cannot connect to Server. You can\'t log in at the moment.';
		echo '</font>';
	}
?>