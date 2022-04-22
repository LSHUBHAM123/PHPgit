<?php
//Start the session and get the data 
session_start();  //used to start a session
session_unset(); //unsets all the variable 
session_destroy(); // destroys the current session
echo "<br> You have been logged out ";

?>