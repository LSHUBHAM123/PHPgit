<?php

$fptr = fopen("myfile.txt", "r");

// echo fgets($fptr);  // it reads only first line of the file and returns file pointer to the next line 
// echo fgets($fptr); //reads the next line from the file
// echo fgets($fptr);  //and so on reading next lines
// echo fgets($fptr);

/* 
//Reading of file ,line by line
while ($a = fgets($fptr)) { // if only fgets written then it won't print the first line as it is not stored
    echo $a;   //- loops the file content
}

// for(;$a = fgets($fptr);) { 
//     echo $a;   //- loops the file content
// }

echo "<br>End of the file reached";
*/

// echo fgetc($fptr); // reads the first character 

// //Reading of file ,character by character
// while ($a = fgetc($fptr)) { //fgetc written then it print the characters
//     echo $a;   //- loops the file content character
//     //break; // breaks the loop after running for one time and return one character 
// }

//to find first w in the line and break
// while ($a = fgetc($fptr)) { //fgetc written then it print the characters
//     echo $a;   //- loops the file content character
    
//     if ($a=='w'){
//         break; 
//     }

// }
//echo "<br>End of the file reached";

//write a program which reads the content of the file untill . has been encountered 
while ($a = fgetc($fptr)) { //fgetc written then it print the characters
    echo $a;   //- loops the file content character
    
    if ($a=="."){
        break; 
    }
}

fclose($fptr);

?> 