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

//create a table in the db shubham
$sql = "CREATE TABLE`shubham` ( `sno` INT(3) NOT NULL AUTO_INCREMENT , `name` VARCHAR(11) NOT NULL , `role` VARCHAR(11) NOT NULL , `doj` DATETIME NOT NULL , PRIMARY KEY (`sno`))";
$result = mysqli_query($conn, $sql);

if ($result){
    echo "The table is created successfully ";
    echo "<br>";
}
else{
    echo "The table is not created successfully ----->". mysqli_error($conn);
    echo "<br>";
}

?>