<?php

//what is session 
//used to store information across different pages

// verify the user login info
session_start();  //used to start a session , it should be listed at the top before everything i.e html also
$_SESSION['username'] = "Shubham";
$_SESSION['favCat'] = "Books";
echo "We have saved your session";

?>