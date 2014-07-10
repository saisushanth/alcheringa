<?php 
session_start();

if(isset($_POST['name']) && isset($_POST['id']) && !empty($_POST['name']) && !empty($_POST['id'])){
	$_SESSION['user_id']= $_POST['id'];
	$_SESSION['user_name']= $_POST['name'];
	
}

if(isset($_SESSION['user_id']) && isset($_SESSION['user_name']) && !empty($_SESSION['user_id']) && !empty($_SESSION['user_name'])){
	
	echo '
	<link href=\'http://fonts.googleapis.com/css?family=Exo+2:400,500\' rel=\'stylesheet\' type=\'text/css\'>	
	<link type="text/css" rel="stylesheet" href="main.css" />
	<div id="wrapper">
	<header>
	<img src="lady.png" id="logo" />
	<div id="diaries">ALCHER-DIARIES</div>
	<form action="logout.php" method="POST">
					<input id="signout" name="signout" type="submit" value="SIGN OUT">
	</form>
	
	<div class="welcome">'.$_SESSION['user_name'].'</div>
	</header>
	'
	;

	require 'connect.php';

							function team(){
									$permission=0;
																
									$query_team= "SELECT * FROM `team` ORDER BY `order`";
										if($query_run_team= mysql_query($query_team)){
											while($query_row_team= mysql_fetch_assoc($query_run_team)){
												if($_SESSION['user_id']==$query_row_team['id']){
												$permission=1;	
												break;
												}
											}
										}
								return $permission;
								}	
									
							function display_time($time){
								$diff= time()-$time;
								
								if($diff<60){
								if($diff==1)
								{
								echo ' a second ago';
								}
								else{
								echo $diff.' seconds ago';
								}
								}
								else if($diff>60 && $diff<(60*60)){
								
								if(intval($diff/60)==1){
								echo ' a minute ago';
								}
								else{
								echo intval($diff/60).' minutes ago';
								}}
								else if($diff>(60*60) && $diff<(60*60*24)){
								
								if(intval($diff/(60*60))==1){
								echo ' an hour ago';
								}
								else{
								echo intval($diff/(60*60)).' hours ago';
								}
							}
							else{
							echo ' '.date('M j, g:ia', $time);
							
							}
							
							}
									
							echo '<section id= "notifications_box">';			
						
								$query_withinn= "SELECT * FROM `comments` ORDER BY `order` DESC";
								if($query_run1n= mysql_query($query_withinn)){						
									while($query_row1n= mysql_fetch_assoc($query_run1n)){
									if($query_row1n['id'] != $_SESSION['user_id']){
									$queryn= "SELECT * FROM `post` WHERE `order`= '".$query_row1n['post_id']."'";
										if($query_runn= mysql_query($queryn)){
											while($query_rown= mysql_fetch_assoc($query_runn)){

											
												if($query_rown['id']==$_SESSION['user_id'])
												{
												$check=0;
												
												
												$query3= "SELECT * FROM `comments` WHERE `post_id`= '".$query_rown['order']."' ORDER BY `order` DESC";
												if($query_run3= mysql_query($query3)){
													while($query_row3= mysql_fetch_assoc($query_run3)){
													
													if($query_row3['id']==$_SESSION['user_id'])
													{
													if($query_row1n['order']>$query_row3['order'])
													{
													$check=1;
													echo '<div class="notifications">'.$query_row1n['username'].' commented on your post #'.$query_rown['order'].' - "'.substr($query_row1n['comment'], 0, 40);
													if(strlen($query_row1n['comment'])>40){
													echo '...';
													}
													echo '" <span class="duration_passed">';
													display_time($query_row1n['time']);
													echo '</span></div>'; 
													}
													break;
													}
													
												}
												if($check==0){
													echo '<div class="notifications"> '.$query_row1n['username'].' commented on your post #'.$query_rown['order'].' - "'.substr($query_row1n['comment'], 0, 40);
													if(strlen($query_row1n['comment'])>40){
													echo '...';
													}
													echo '" <span class="duration_passed">';
													display_time($query_row1n['time']);
													echo '</span></div>';  
													}
												
												}}
												
												else{
												$query4= "SELECT * FROM `comments` WHERE `post_id`= '".$query_rown['order']."' ORDER BY `order` DESC";
												if($query_run4= mysql_query($query4)){
													while($query_row4= mysql_fetch_assoc($query_run4)){
													if($query_row4['id']==$_SESSION['user_id'])
													{
													if($query_row1n['order']>$query_row4['order'])
													{
													echo '<div class="notifications">'. $query_row1n['username'].' commented on post #'.$query_rown['order'].' that you are following - "'.substr($query_row1n['comment'], 0, 30);
													if(strlen($query_row1n['comment'])>30){
													echo '...';
													}
													echo '" <span class="duration_passed">';
													display_time($query_row1n['time']);
													echo '</span></div>';  
													}
													break;
													}
													}}
													}
													}}
													}}}
						
		echo'</section>
						
						
					
						
						

        <p>
		<form class="feedback" action="add_post.php" method="POST">
		<textarea placeholder="Write your experience here..." name="feedback" rows="5" cols="160"></textarea><br>
			<input type="submit" value="SUBMIT" class="sendfeedback">
			This post will be visible to <select name="privacy">
			<option value="0">Everybody</option>
			<option value="1">Only Team Alcheringa</option>
			</select>
			</form>
			</p>';
		
								function remove_permissions($current_post){
									$permission=0;
									if(($_SESSION['user_id'])==$current_post){
									$permission=1;
									}
									else{
																	
									$query_hmc= "SELECT * FROM `team` ORDER BY `order`";
										if($query_run_team= mysql_query($query_team)){
											while($query_row_team= mysql_fetch_assoc($query_run_team)){
												if($_SESSION['user_id']==$query_row_team['id']){
												$permission=1;	
												break;
												}
											}
										}
									}
									return $permission;
																
									}
									
										$query= "SELECT * FROM `post` ORDER BY `order` DESC";
								if($query_run= mysql_query($query)){
									
									while($query_row= mysql_fetch_assoc($query_run)){
									echo '<section id="feedback_post"><section id="username_bar"><a href="http://www.facebook.com/'.$query_row['id'].'" target="_blank"><span id="post_name">'.$query_row['username'].' </span></a>';
									if($query_row['privacy']==1){
										echo ' | Visible only to Team';
									}
									echo '
									<span id="idofpost">#'.$query_row['order'].'</span>';
									
								if(remove_permissions($query_row['id'])==1)
								{	
								echo '<form id="delete_post" action="remove_post.php" method="POST">
										<input id="delete_post_button" type="submit" value="Remove Post">
										<input type="hidden" name="remove_post" value="'.$query_row['order'].'">
										</form>';			
								}
									
									
									echo '</section>
													
									
									
									<div id="actual_post" class="wrap">'.htmlentities($query_row['post']).'</div><ul id="feedback_comments"><li>';
									
									
								$query_within= "SELECT * FROM `comments` WHERE `post_id`= '".$query_row['order']."' ORDER BY `order`";
								if($query_run1= mysql_query($query_within)){						
									while($query_row1= mysql_fetch_assoc($query_run1)){
										
									if(remove_permissions($query_row1['id'])==1)
								{	
								echo '<form id="delete_comment" action="remove_comment.php" method="POST">
										<input id="delete_comment_button" type="submit" value="Delete">
										<input type="hidden" name="remove_comment" value="'.$query_row1['order'].'">
										</form>';			
								}
									
									
									
									echo '<p id="comment_bar"><span id="comment_username">'.$query_row1['username'].' : '.' </span><span class="wrap">'.htmlentities($query_row1['comment']).'</span></p>';
								
									
									}
									}
									
									
									echo '
									
									</li>
									<li><form id="feedback_comments" action="add_comment.php" method="POST">
									<textarea placeholder="Add a comment..." name="comment" rows="1" cols="70"></textarea>
									
										<input id="comment_button" type="submit" value="COMMENT">
										<input type="hidden" name="hidden" value="'.$query_row['order'].'">
										</form></li>
										
									</ul><span id="post_time">';
									display_time($query_row['time']);
									echo '</span></section>
									<br><br>';
									
									
									}}
				echo '</div>';					
	
	die();
}
?>

<html>
<head></head>
<body>

<div id="fb-root"></div>
<div id="temp_message">Checking Facebook Login Status...</div>
<form id="form" action="index.php" method="POST">
	<input id="fb_name" type="hidden" name="name" />
	<input id="fb_id" type="hidden" name="id" />

</form>


<script>

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '651609994877093',
    status     : true, // check login status
    cookie     : true, // enable cookies to allow the server to access the session
    xfbml      : true  // parse XFBML
  });

  // Here we subscribe to the auth.authResponseChange JavaScript event. This event is fired
  // for any authentication related change, such as login, logout or session refresh. This means that
  // whenever someone who was previously logged out tries to log in again, the correct case below 
  // will be handled. 
  FB.Event.subscribe('auth.authResponseChange', function(response) {
    // Here we specify what we do with the response anytime this event occurs. 
    if (response.status === 'connected') {
	document.getElementById("temp_message").innerHTML = "Please Wait...";
      // The response object is returned with a status field that lets the app know the current
      // login status of the person. In this case, we're handling the situation where they 
      // have logged in to the app.
      testAPI();
    } else if (response.status === 'not_authorized') {
      // In this case, the person is logged into Facebook, but not into the app, so we call
      // FB.login() to prompt them to do so. 
      // In real-life usage, you wouldn't want to immediately prompt someone to login 
      // like this, for two reasons:
      // (1) JavaScript created popup windows are blocked by most browsers unless they 
      // result from direct interaction from people using the app (such as a mouse click)
      // (2) it is a bad experience to be continually prompted to login upon page load.
	 
      FB.login();
    } else {
      // In this case, the person is not logged into Facebook, so we call the login() 
      // function to prompt them to do so. Note that at this stage there is no indication
      // of whether they are logged into the app. If they aren't then they'll see the Login
      // dialog right after they log in to Facebook. 
      // The same caveats as above apply to the FB.login() call here.

      FB.login();
	  
    }
  });
  };

  // Load the SDK asynchronously
  (function(d){
   var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
   if (d.getElementById(id)) {return;}
   js = d.createElement('script'); js.id = id; js.async = true;
   js.src = "//connect.facebook.net/en_US/all.js";
   ref.parentNode.insertBefore(js, ref);
  }(document));

  // Here we run a very simple test of the Graph API after login is successful. 
  // This testAPI() function is only called in those cases. 
  function testAPI() {
   
    FB.api('/me', {fields: "id,name,picture"}, function(response) {
      document.getElementById("fb_id").value = response.id;
	 document.getElementById("fb_name").value = response.name;
	 document.getElementById("form").submit();
	 
    });
  }
 FB.login(function(response) {
  document.getElementById("temp_message").innerHTML = ".";
   if (response.authResponse) {
     console.log('Welcome!  Fetching your information.... ');
     FB.api('/me', function(response) {
       console.log('Good to see you, ' + response.name + '.');
     });
   } else {
     alert('You either cancelled login or did not fully authorize.');
   }
 });
</script>

<!--
  Below we include the Login Button social plugin. This button uses the JavaScript SDK to
  present a graphical Login button that triggers the FB.login() function when clicked. -->

<fb:login-button show-faces="true" width="200" max-rows="1"></fb:login-button>
</body>
</html>