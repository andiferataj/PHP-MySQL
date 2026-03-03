<?php
// Open the file "example.txt" for reading using the fopen function
$file = fopen("example.txt", "r");

// Use a while loop to read each line of the file using fgets and print it to the screen with echo
while(!feof($file)) {
  echo fgets($file) . "<br>";
}

// Close the file using fclose
fclose($file);
?>