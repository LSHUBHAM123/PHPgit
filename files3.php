<?php

// $fptr = fopen("myfile2.txt", "w");  // write mode automatically creates a file if not present snd if already present then it will truncate the file

//Writing to a file in php
/*
fwrite($fptr,"This is the best file I'm going to write.I'm going to make it look amazing and it's for sure .Let's go.\n");  //here fwrite will write in the truncated myfile2 or we can say it overwrites the file
fwrite($fptr, "This is another content and we are writing it down.\n");  //this will be next line 
fwrite($fptr, "This is another content and we are writing it down again for demonstration.\n");
fclose($fptr);
*/

//appending to a file in php
$fptr = fopen("myfile2.txt", "a");  //append will cause content to be added at the end 
fwrite($fptr, "This is being appended to the file.\n");   //added at the end of content in the file

fclose($fptr);

?>