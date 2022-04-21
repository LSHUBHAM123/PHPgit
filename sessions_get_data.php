<?php
//Start the session and get the data 
session_start();  //used to start a session
if(isset($_SESSION['username'])){  //if username set then only get the data
    echo "Welcome ". $_SESSION['username'];
    echo "<br> Your favorite category is ". $_SESSION['favCat'];
    echo "<br>";
}
else {
    echo "Please login to continue";
}

?>