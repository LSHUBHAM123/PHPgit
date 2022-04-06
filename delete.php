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

$sql = "DELETE FROM `shubham` WHERE `role` = 'Full Stack' limit 1"; //limit the number of rows to be deleted 
$result = mysqli_query($conn, $sql); //LIMIT can be used with any other operation also
// to return Number of affected rows -
$aff = mysqli_affected_rows($conn);  //rows affected after running a query
echo "Number of affected rows - $aff <br>"; // will return -1 when encountered with an error 

if ($result){
    echo "Deleted successfully <br>";
}
else{
    $err= mysqli_error($conn);
    echo "Not Deleted successfully ----> $err <br>";
}

?>