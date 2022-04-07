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

$sql = "SELECT * FROM `shubham` WHERE `role`='Full Stack' ";
$result = mysqli_query($conn, $sql);

//find the number of records returned
$num = mysqli_num_rows($result);
echo "The number of records found in the database are $num";
echo "<br>";

//usage of WHERE clause to fetch data from database
if ($num > 0){
    $no =1;
    while ($row = mysqli_fetch_assoc($result)) { //runs untill last row then it returns NULL ,then loop ends

        echo $no . ') Hello '. $row['name']. ', your role is '. $row['role'];
        echo "<br>"; //$row['sno'] and other will be treated as string here
        $no++;
    }
}

//usage of WHERE clause to update data
$sql = "UPDATE `shubham` SET `name` = 'Ultra Shubham' WHERE `role` = 'Full Stack'";
$result = mysqli_query($conn, $sql);  //returns true or false in the result 
// echo $result;
// echo var_dump($result);  //returns type and the result 

// to return Number of affected rows -
$aff = mysqli_affected_rows($conn);  //rows affected after running a query
echo "Number of affected rows - $aff <br>";

if($result){
    echo "We updated the record successfully ";
    echo "<br>";
}
else{
    echo "We couldn't update the record successfully ";
    echo "<br>";
}



?>