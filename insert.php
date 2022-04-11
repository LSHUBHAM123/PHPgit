<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "shubham";

// Create a connection
$conn = mysqli_connect($servername, $username, $password,$database);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to create connection : ". mysqli_connect_error());
    echo "<br>";
}
else{
    echo "Connection was created successfully";
    echo "<br>";
}

//variables to be inserted in the table
$name = "Shubham";
$role = "Full Stack Developer";

//Inserting in a table in the db shubham
$sql = "INSERT INTO `shubham` ( `name`, `role`) VALUES ( '$name', '$role')";
$result = mysqli_query($conn, $sql);

if ($result){
    echo "The Insert is done successfully ";
    echo "<br>";
}
else{
    echo "The Insert is not done successfully ----->". mysqli_error($conn);
    echo "<br>";
}

?>