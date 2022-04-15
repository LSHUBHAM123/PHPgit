<?php 

$fptr = fopen("myfile.txt", "r");  // fptr is a file pointer it points to a file and
//fopen takes 2 argument - filename and mode to be granted  (r - read , w- write and a - append)

// echo $fptr;   //- returns file pointer resource
// echo var_dump($fptr);   //returns file pointer resource on success or false - warning in developement environment 

if(!$fptr){
    die("Unable to open file .Please enter a valid filename");
}

// $content = fread($fptr, 3);  // fread takes arg - resource handler or file pointer ,and length we want to read from file 
                             //, and returns string 

$content = fread($fptr, filesize("myfile.txt"));  //filesize to count the length of file

fclose($fptr);  //closes open file pointer and free resources fptr

echo $content;

?>