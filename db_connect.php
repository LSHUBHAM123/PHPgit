<?php
//connecting to database
$servername = "localhost";
$username = "root";
$password = "";
$database = "shubham";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to create connection : ". mysqli_connect_error());
    echo "<br>";
}
else{
    echo "Connection was created successfully";
    echo "<br>";
}

?>