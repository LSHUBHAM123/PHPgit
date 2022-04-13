<?php

    // include 'db_connect.php1';     // causes the db_connect.php file to be copied and 
                                    // pasted here during compile
    //if error occurs in including (eg db_connect.php1)
    // then still the page which included it will run by showing warning(not fatal - no effect on further code)

    // require 'db_connect.php1';  // if in require fatal error occurs here,then require won't allow 
    // because it will run or require only correct db_connect ,for further code to run in which it is included 


    include 'db_connect.php';

    // require 'db_connect.php';
    // echo "this";  //will run in include but not in require 

    $sql = "SELECT * FROM `shubham` ";
    $result = mysqli_query($conn, $sql);

    //find the number of records returned
    $num = mysqli_num_rows($result);
    echo "The number of records found in the database are $num";
    echo "<br>";

    if ($num > 0){
    $sno = 1;
    //by while loop
    while ($row = mysqli_fetch_assoc($result)) { //runs untill last row then it returns NULL ,then loop ends
        // echo var_dump($row);
        echo $sno . ') Hello '. $row['name']. ', your role is '. $row['role'];
        echo "<br>"; //$row['sno'] and other will be treated as string here
        $sno++;
    }

}

?>