<?php
session_start();
 require_once('php-sdk/facebook.php');

if(isset($_POST['current_pic']))
{
	$_SESSION['pic']= $_POST['current_pic'];
}
  // Remember to copy files from the SDK's src/ directory to a
  // directory in your application on the server, such as php-sdk/

  $config = array(
    'appId' => '651609994877093',
    'secret' => 'a889e6c97fe82f1af5d7cbb76884cdfa',
    'fileUpload' => true,
    'allowSignedRequest' => false // optional but should be set to false for non-canvas apps
  );

  $facebook = new Facebook($config);
  $user_id = $facebook->getUser();

  $photo = dirname(__FILE__).'/'.$_SESSION['pic']; // Path to the photo on the local filesystem
   $message = 'Visit http://www.alcheringa.in/myfeelings and tell the world what you are waiting for in Alcheringa B| Like us on facebook: https://www.facebook.com/alcheringaiitg and get to know our big reveals.';
?>
<html>
  <head>
<style type="text/css">
body{
  background: #eee;
  padding-top: 50px;
  text-align: center;
  font-family: calibri;
}
</style>
</head>
  <body>

  <?php

    if($user_id) {

      // We have a user ID, so probably a logged in user.
      // If not, we'll get an exception, which we handle below.
      try {

        // Upload to a user's profile. The photo will be in the
        // first album in the profile. You can also upload to
        // a specific album by using /ALBUM_ID as the path 
        $ret_obj = $facebook->api('/me/photos', 'POST', array(
                                         'source' => '@' . $photo,
                                         'message' => $message,
                                         )
                                      );
        echo '<pre>Photo ID: ' . $ret_obj['id'] . '</pre>';
       echo '<br />Your photo has been uploaded to facebook.<br><a href="' . $facebook->getLogoutUrl() . '">LOGOUT</a><br><br>Visit our <a href="https://www.facebook.com/alcheringaiitg">facebook page</a> and get to know all that\'s happening this Alcheringa.';
        session_destroy();
      } catch(FacebookApiException $e) {
        // If the user is logged out, you can have a 
        // user ID even though the access token is invalid.
        // In this case, we'll get an exception, so we'll
        // just ask the user to login again here.
        $login_url = $facebook->getLoginUrl( array(
                       'scope' => 'photo_upload'
                       )); 
        echo '<a href="' . $login_url . '">Facebook Login</a>';
        error_log($e->getType());
        error_log($e->getMessage());
      }   
    } else {

      // No user, print a link for the user to login
      // To upload a photo to a user's wall, we need photo_upload  permission
      // We'll use the current URL as the redirect_uri, so we don't
      // need to specify it here.
      $login_url = $facebook->getLoginUrl( array( 'scope' => 'photo_upload') );
      echo '<a href="' . $login_url . '">Facebook Login</a>';

    }

  ?>

  </body>
</html>