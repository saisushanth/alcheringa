<!doctype html>
<html>
<head>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
<link type="text/css" rel="stylesheet" href="main.css" />
<title>Alcheringa</title>
<script type="text/javascript" src="js/html2canvas.js"></script>

</head>
<body>
<div style="background: rgba(255,255,255,0.5); position: fixed; right: 0; top: 0; height: 100%;"><iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Falcheringaiitg&amp;width&amp;height=590&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=true&amp;show_border=true&amp;appId=651609994877093" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:590px;" allowTransparency="true"></iframe></div>




<div id="wrapper">
<div id="main_image">
	<img src="alcherimage.jpg" id="alcherimage"/>
	<div id="user_text">
		I WANT TO HAVE THE TIME OF MY LIFE
	</div>
	<div id="time_box">
<?php 
$alcher_start= strtotime("31 January 2014")-(5*60*60);
$rem= $alcher_start-time();
$rem_hours= intval($rem/3600);
echo $rem_hours.' Hours To Go';
 ?>
</div>
</div>

<div id="edit_text_box">
	<textarea id="user_input" placeholder="Your text here.." rows="2" cols="50" ></textarea><br><br><br>
	<div id="change_size"><span style="float: left; color: white;">FONT-SIZE : </span><button id="decrease_size">-</button><button id="increase_size">+</button></div>
	<button id="submit" >SUBMIT</button>
</div>
</div>

<div id="final">
	<div id="final_image">
	</div>
	<form style="margin-top: 120px;float: left;" action="post.php" method="POST">
	<input name="current_pic" type="hidden" id="post_option" value=""/>
	<input type="submit" id="accept" disabled="disabled" value="SAVING IMAGE..."/>
	<input type="button" id="go_back" onClick="window.location.assign('index.php')" value="GO BACK" />
	</form>
	</div>

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/edit_text.js"></script>
</body>
</html>