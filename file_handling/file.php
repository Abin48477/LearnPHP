<?php
$message = "";

// ---------- CREATE & WRITE FILE ----------
if (isset($_POST['create'])) {
    $data = $_POST['text'];
    file_put_contents("myfile.txt", $data); // creates + writes
    $message = "File created & written!";
}

// ---------- APPEND FILE ----------
if (isset($_POST['append'])) {
    $data = $_POST['text'];
    file_put_contents("myfile.txt", $data . "\n", FILE_APPEND);
    $message = "Data appended!";
}

// ---------- READ FILE ----------
$content = "";
if (isset($_POST['read'])) {
    if (file_exists("myfile.txt")) {
        $content = file_get_contents("myfile.txt");
    } else {
        $content = "File not found!";
    }
}

// ---------- DELETE FILE ----------
if (isset($_POST['delete'])) {
    if (file_exists("myfile.txt")) {
        unlink("myfile.txt");
        $message = "File deleted!";
    } else {
        $message = "File does not exist!";
    }
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>⭐ PHP File Handling (ALL IN ONE)</h2>

<form method="POST">
    <textarea name="text" placeholder="Write something..." rows="4" cols="40"></textarea><br><br>
    
    <button name="create">Create & Write</button>
    <button name="append">Append</button>
    <button name="read">Read File</button>
    <button name="delete">Delete File</button>
</form>

<br>
<h3>Message:</h3>
<p><?php echo $message; ?></p>

<h3>File Content:</h3>
<pre><?php echo $content; ?></pre>

</body>
</html>
