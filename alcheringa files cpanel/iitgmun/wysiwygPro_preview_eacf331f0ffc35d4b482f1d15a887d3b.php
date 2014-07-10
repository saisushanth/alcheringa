<?php
if ($_GET['randomId'] != "HSTpyAQ4fDg4VjDajnHnMQFQm_8cKDOssdCWoznXJhsAYHSmEOVGtVKyhXLg7D3N") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
