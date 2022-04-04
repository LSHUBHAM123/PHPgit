<?php

// Ways to connect to a MySql database
// 1.MySqli extension - can be used both in procedural way and by OOPS - only with MySql
// 2. PDO - php data objects - can work with various databases

echo "Lets learn about connection <br>";

//connecting to database
$servername = "localhost";
$username = "root";
$password = "";

// Create a connection
$conn = mysqli_connect($servername, $username, $password);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful";
}


?>