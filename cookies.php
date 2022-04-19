<?php

echo "Welcome to the world of cookies <br>";

// cookies let websites save the regular info of user like fav category(book) and whenever user visits the website , the content is shown according to the data in the cookies
// cookies is a php script which stores user's info ,are stored in user's computer 

//cookies vs session
//cookies are user's normal data stored on local computer /browser of computer and sessions are sensitive data stored on the servers 

//syntax to set a cookie
// echo time();   // gives time in sec from year 1 jan, 1970
setcookie("category", "book", time() + 86400, "/"); // (/) allows to use cookie throughout the website - domain setting , and expires in 1 day
//will set this cookies to all header request for next 24 hrs
// setcookie("category2", "games", time() + 86400, "/");

echo "The cookie is set.";




?>