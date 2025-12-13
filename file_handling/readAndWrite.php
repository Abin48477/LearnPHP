<?php
// write.php
$file = "data.txt";

// Open file in write mode (create if not exists)
$handle = fopen($file, "w");

// Text to write
$text = "Hello, this is a test.\n";

// Write and close
fwrite($handle, $text);
fclose($handle);

echo "File written successfully.";
?>
<?php
// read.php 
$file = "data.txt";
// Open file in read mode
$handle = fopen($file, "r");
// Read content
$content = fread($handle, filesize($file));
// Close file
fclose($handle);
echo "File content: \n" . $content;
?>
<?php
// append.php


$file = "data.txt";
// Open file in append mode
$handle = fopen($file, "a");
// Text to append
$text = "Appending this line.\n";
    