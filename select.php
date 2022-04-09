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

$sql = "SELECT * FROM `shubham` ";
$result = mysqli_query($conn, $sql);

//find the number of records returned
$num = mysqli_num_rows($result);
echo "The number of records found in the database are $num";
echo "<br>";

if ($num > 0){
    // $row = mysqli_fetch_assoc($result);  //fetches record one by one untill data or record empty and returns associative array
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result); //assoc is associative array returns array as key => value pair and string as index
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);   //will return NULL aas no entry or record present in the databasae
    // echo "<br>";

    //We can fetch in a better way by using while or for loop
    //by for loop
//     for ($i=0; $i < $num; $i++) { 
//         $row = mysqli_fetch_assoc($result);
//         echo var_dump($row);
//         echo "<br>";
//     }

//by while loop
while ($row = mysqli_fetch_assoc($result)) { //runs untill last row then it returns NULL ,then loop ends
    // echo var_dump($row);
    echo $row['sno'] . ') Hello '. $row['name']. ', your role is '. $row['role'];
    echo "<br>"; //$row['sno'] and other will be treated as string here
}

}

?>
