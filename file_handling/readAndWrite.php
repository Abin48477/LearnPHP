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
// Append and close
fwrite($handle, $text);
fclose($handle);
echo "File appended successfully.";
?><?php
// delete.php       
$file = "data.txt";
// Delete file
if (file_exists
($file)) {
    unlink($file);
    echo "File deleted successfully.";
} else {
    echo "File does not exist.";
}
?>

<?php
// readAndWrite.php
$file = "data.txt";
// Open file in read and write mode
$handle = fopen($file, "r+");
// Read existing content
$content = fread($handle, filesize($file));
echo "Existing content: \n" . $content;
// Move pointer to the end for appending
fseek($handle, 0, SEEK_END);
// Text to append
$text = "Adding this line in read and write mode.\n";
// Write and close
fwrite($handle, $text);
fclose($handle);
echo "File updated successfully.";
?>
<?php
// fileExists.php
$file = "data.txt";
// Check if file exists
if (file_exists($file)) {
    echo "File exists.";
} else {
    echo "File does not exist.";
}
?>

