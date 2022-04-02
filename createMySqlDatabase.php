<?php

$servername = "localhost";
$username = "root";
$password = "";

// Create a connection
$conn = mysqli_connect($servername, $username, $password);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to create connection : ". mysqli_connect_error());
    echo "<br>";
}
else{
    echo "Connection was created successfully";
    echo "<br>";
}

//create db
$sql = "CREATE DATABASE shubham";
$result = mysqli_query($conn, $sql);
echo "The result is ";
echo var_dump($result);
echo "<br>";

//check if db created or not 
if($result){
    echo "The database is created successfully";
}
else{
    echo "The database is not created successfully ---> ". mysqli_error($conn);
}


?>